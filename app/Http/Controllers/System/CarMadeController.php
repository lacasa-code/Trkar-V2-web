<?php

namespace App\Http\Controllers\System;

use App\Http\Controllers\Controller;
use App\Models\CarMade;
use Illuminate\Http\Request;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\DB;
use phpDocumentor\Reflection\Types\Null_;
use App;
use App\Http\Requests\CarMadeFormRequest;
use App\Support\Collection;
use Illuminate\Validation\Rule;

class CarMadeController extends SystemController
{
    public function index(CarMadeFormRequest $request)
    {
        if ($request->isTablePagination) {
            $eloquentData =  CarMade::select([
                'id',
                'parent_id',
                'name_' . App::getLocale() . ' as name',
                'slug',
                'status',
                'created_at'
            ]);
            if ($request->created_at1 && $request->created_at2) {
                $eloquentData->whereBetween('created_at', [
                    $request->created_at1 . ' 00:00:00',
                    $request->created_at2 . ' 23:59:59'
                ]);
            }

            if ($request->slug) {
                $eloquentData->where('slug', $request->slug);
            }
            if ($request->name) {
                $eloquentData->where(function ($query) use ($request) {
                    $query->where('name_ar', 'LIKE', '%' . $request->name . '%')
                        ->orWhere('name_en', 'LIKE', '%' . $request->name . '%');
                });
            }

            return App\Helpers\Helper::tablePagination()
                ->eloquent($eloquentData)
                ->setHeadColumns([
                    __('ID'),
                    __('Name'),
                    __('Slug'),
                    __('Created By'),
                    __('Action')

                ])
                ->addColumn('id')
                ->addColumn('name')
             
                ->addColumn('slug')
                ->addColumn('created_at')


                ->addColumn('action', function ($data) {

                    return '
                     <a href="' . route('system.category.edit', $data->id) . '" class="action-icon"> <i class="mdi mdi-square-edit-outline"></i></a>
                     <a href="' . route('system.category.show', $data->id) . '" class="action-icon"> <i class="mdi mdi-file-tree"></i></a>
                     <a href="javascript:void(0);" onclick="deleteRecord(\'' . route('system.category.destroy', $data->id) . '\');" data-token="' . csrf_token() . '" class="action-icon"> <i class="mdi mdi-delete"></i></a>
                                            ';
                })
                ->render($request->items_per_page);
        } else {
            // View Data
            $this->viewData['breadcrumb'][] = [
                'text' => __(' CarMades')
            ];

            $this->viewData['pageTitle'] = __('CarMades');

            return $this->view('category.index', $this->viewData);
        }
    }

    public function create()
    {
        // $data = Category::with('childrenRecursive')->where('id','<',10)->get();
        // dd(App\Helpers\Helper::createMenuTree($data));
        // Main View Vars
        $this->viewData['breadcrumb'][] = [
            'text' => __('CarMade'),
            'url' => route('system.CarMade.index')
        ];

        $this->viewData['breadcrumb'][] = [
            'text' => __('Create CarMade'),
        ];

        $this->viewData['pageTitle'] = __('Create CarMade');

        return $this->view('category.create', $this->viewData);
    }

    public function store(CarMadeFormRequest $request)
    {
        $nameCheckAr = CarMade::where('name_ar', 'LIKE', '%' . $request->name_ar . '%')
            ->where('parent_id', $request->parent_id)->first();
        $nameCheckEn = CarMade::where('name_en', 'LIKE', '%' . $request->name_en . '%')
        ->where('parent_id', $request->parent_id)->first();
        if ($nameCheckAr || $nameCheckEn) {
            return $this->response(
                false,
                11001,
                __('Sorry, the system is unable to add data name is aleady found')
            );
        }
        $requestData = $request->all();
        if ($request->file('image')) {
            $requestData['image'] =  Storage::disk('public')->put("categories/' . date('Y/m/d')",  $request->file('image'));
        }
        $requestData['status'] = 1;
        $requestData['slug'] = Str::slug($request->get('name_en'));

        $insertData = CarMade::create($requestData);

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
    public function edit(CarMade $carMade)
    {

        // Main View Vars
        $this->viewData['breadcrumb'][] = [
            'text' => __('Category'),
            'url' => route('system.category.index')
        ];

        $this->viewData['breadcrumb'][] = [
            'text' => __('Edit (:name)', ['name' => $carMade->{'name_' . App::getLocale()}]),
        ];

        $this->viewData['pageTitle'] = __('Edit Car Made');
        $this->viewData['result'] = $carMade;

        return $this->view('category.create', $this->viewData);
    }


    public function update(CarMadeFormRequest $request, CarMade $carMade)
    {
        
        $requestData = $request->all();
        if ($request->file('image')) {
            $requestData['image'] =  Storage::disk('public')->put("categories/' . date('Y/m/d')",  $request->file('image'));

            // $requestData['image'] = Storage::disk('local')->put('categories', file_get_contents($request->file('image')));;
        }
        $updateData = $carMade->update($requestData);
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

    public function show(Category $category)
    {
        // Main View Vars
        $this->viewData['breadcrumb'][] = [
            'text' => __('Category'),
            'url' => route('system.category.index')
        ];

        $this->viewData['breadcrumb'][] = [
            'text' => $category->id,
        ];

        $this->viewData['pageTitle'] = __('Category');
        $this->viewData['result'] = $category;

        return $this->view('category.show', $this->viewData);
    }
    public function destroy(Category $category)
    {
        $category->delete();
        return $this->response(
            true,
            200,
            __('Data has been deleted successfully'),
            [
                'url' => route('system.category.index')
            ]
        );
    }
    public function getChilds($id)
    {
        $getParents = Category::where('parent_id', $id)->orderBy('order', 'DESC')->get(['id', 'name_ar']);
        $itemsArrays = [];
        foreach ($getParents as $item) {
            $itemArray = [];
            $itemArray['id'] = $item->id;
            $itemArray['name_ar'] = $item->name_ar;
            $getParent = Category::where('parent_id', $item->id)->first(['id']);
            if ($getParent) {
                $itemArray['parent'] = 1;
            } else {
                $itemArray['parent'] = 0;
            }
            $itemsArrays[] = $itemArray;
        }
        return $this->response(
            true,
            200,
            __('Data has been deleted successfully'),
            $itemsArrays
        );
    }
}
