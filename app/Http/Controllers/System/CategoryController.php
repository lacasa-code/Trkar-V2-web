<?php

namespace App\Http\Controllers\System;

use App\Http\Controllers\Controller;
use App\Models\Category;
use Illuminate\Http\Request;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\DB;
use phpDocumentor\Reflection\Types\Null_;
use App;
use App\Http\Requests\CategoryFormRequest;
use App\Support\Collection;

class CategoryController extends SystemController
{
    public function index( categoryFormRequest $request){
        if($request->isTablePagination){
            $eloquentData =  Category::select([
                'id',
                'parent_id',
                'name_'.App::getLocale().' as name',
                'slug',
                'status',
                'created_at'
            ])->where('id','>',20);
            if($request->created_at1 && $request->created_at2){
                $eloquentData->whereBetween('created_at',[
                    $request->created_at1.' 00:00:00',
                    $request->created_at2.' 23:59:59'
                ]);
            }

            if($request->id){
                $eloquentData->where('id',$request->id);
            }
            if($request->name){
                $eloquentData->where(function($query) use ($request) {
                   $query->where('name_ar','LIKE','%'.$request->name.'%')
                       ->orWhere('name_en','LIKE','%'.$request->name.'%');
                });
            }
            
            return App\Helpers\Helper::tablePagination()
                ->eloquent($eloquentData)
                ->setHeadColumns([
                    __('ID'),
                    __('Name'),
                    __('Parent Id'),
                    __('Slug'),
                    __('Created By'),
                    __('Action')

                ])
                ->addColumn('id')
                ->addColumn('name')
                ->addColumn('parent_id')
                ->addColumn('parent_id', function ($data) {
                    $dataList=[];
                    if($data->parent_id != null){
                        // foreach ($data->managedIDs() as $categoryID){
                        //     if($data->parent_id != $categoryID){
                        //         $array = [];
                        //         $array[] = $categoryID;
                        //             $dataList[] = $array;
                        //     }
                           
                        // }
                        // return json_encode($dataList);
                        return json_encode($data->managedIDs());
                    }
                })
                ->addColumn('slug')
                ->addColumn('created_at')


                ->addColumn('action',function($data){

                    return '
                     <a href="'.route('system.category.edit',$data->id).'" class="action-icon"> <i class="mdi mdi-square-edit-outline"></i></a>
                     <a href="javascript:void(0);" onclick="deleteRecord(\'' . route('system.category.destroy', $data->id) . '\');" data-token="'. csrf_token() .'" class="action-icon"> <i class="mdi mdi-delete"></i></a>
                                            ';
                })
                ->render($request->items_per_page);
        }else{
            // View Data
            $this->viewData['breadcrumb'][] = [
                'text'=> __(' categorys')
            ];

            $this->viewData['pageTitle'] = __('categorys');

            return $this->view('category.index',$this->viewData);
        }
    }
    
public function create(){
     // Main View Vars
     $this->viewData['breadcrumb'][] = [
        'text'=> __('Category'),
        'url'=> route('system.category.index')
    ];

    $this->viewData['breadcrumb'][] = [
        'text'=> __('Create Category'),
    ];

    $this->viewData['pageTitle'] = __('Create Category');

    return $this->view('category.create',$this->viewData);
}
    public function store(CategoryFormRequest $request)
    {
        $requestData = $request->all();
        if ($request->file('image')) {
            $requestData['image'] = $request->file('image')->store('categories/' . date('Y/m/d'));
        }
        $requestData['status'] = 1;
        $requestData['slug'] = Str::slug($request->get('name_en'));
        
        $insertData = Category::create($requestData);

        if ($insertData) {
            return $this->response(
                true,
                200,
                __('Data has been added successfully'),
                [
                    'url' => route('system.category.create')
                ]
            );
        } else {
            return $this->response(
                false,
                11001,
                __('Sorry, the system is unable to add data')
            );
        }
    }
    public function edit(Category $category)
    {

        // Main View Vars
        $this->viewData['breadcrumb'][] = [
            'text' => __('Category'),
            'url' => route('system.category.index')
        ];

        $this->viewData['breadcrumb'][] = [
            'text'=> __('Edit (:name)',['name'=> $category->{'name_'.App::getLocale()}]),
        ];

        $this->viewData['pageTitle'] = __('Edit Category');
        $this->viewData['result'] = $category;

        return $this->view('category.create', $this->viewData);
    }


    public function update(CategoryFormRequest $request, Category $category)
    {
        $requestData = $request->all();
        if ($request->file('image')) {
            $requestData['image'] = $request->file('image')->store('categories/' . date('Y/m/d'));
        }
        $updateData = $category->update($requestData);
        if ($updateData) {
            return $this->response(
                true,
                200,
                __('Data has been modified successfully'),
                [
                    'url' => route('system.category.index')
                ]
            );
        } else {
            return $this->response(
                false,
                11001,
                __('Sorry, the system is unable to modify the data')
            );
        }
    }

    public function destroy(Category $category)
    {
        // $category->delete();
        return $this->response(
            true,
            200,
            __('Data has been deleted successfully'),
             [
                    'url' => route('system.category.index')
             ]
        );
    }
}
