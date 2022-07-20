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
            ]);
     
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
                ->addColumn('slug')
                ->addColumn('created_at')


                ->addColumn('action',function($data){

                    return '<div class="dropdown">
                      <button class="btn btn-secondary dropdown-toggle" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        <i class="mdi mdi-settings"></i>
                      </button>
                      <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                        <a class="dropdown-item" href="'.route('system.category.edit',$data->id).'">'.__('Edit').'</a>
                      </div>
                    </div>';
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
        
        $insertData = Category::create($requestData);

        if ($insertData) {
            return $this->response(
                true,
                200,
                __('Data has been added successfully'),
                [
                    'url' => route('system.category.index')
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

    public function delete($id)
    {
        $cat= Category::where('id', $id)->firstorfail()->delete();
        return response()->json([
            'status'=>true,
            'message'=>trans('app.cat_delete'),
            'code'=>200,
        ],200);
    }
}
