<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\AttributeTyre;
use App\Models\Attribute;

class AttributeTyreController extends Controller
{
    public function create(Request $request)
    {
        $att= AttributeTyre::create([
            'season_id'=>$request->get('season_id'),
            'attribute_id'=>$request->get('attribute_id'),
            'value'=>$request->get('value'),
            'parent_id'=>$request->get('parent_id'),

        ]);
        $att->save();
        return response()->json([
            'status'=>true,
            'message'=>trans('app.atts_create'),
            'code'=>200,
            'data'=>$att,
        ],200);
    }
    
    public function get_by_parent($id)
    {
        $att = AttributeTyre::where('parent_id',$id)->get();
        if($att->count() > 0)
        {
            return response()->json([
                'status'=>true,
                'message'=>trans('app.att'),
                'code'=>200,
                'data'=>$att,
            ],200);
        }
        else
        {
            return response()->json(
                ['status'=>false,
                'message'=>trans('id does not exist'),
                'code'=>404,
            ],404);
        } 
    }

    public function get_by_parent_attribute($id_att,$id)
    {
        $att = AttributeTyre::where('parent_id',$id)->where('attribute_id',$id_att)->get();
        if($att->count() > 0)
        {
            return response()->json([
                'status'=>true,
                'message'=>trans('app.att'),
                'code'=>200,
                'data'=>$att,
            ],200);
        }
        else
        {
            return response()->json(
                ['status'=>false,
                'message'=>trans('id does not exist'),
                'code'=>404,
            ],404);
        } 
    }

    public function get_width_by_season($id)
    {
        $att = AttributeTyre::where('season_id',$id)->where('attribute_id',1)->get();
        if($att->count() > 0)
        {
            return response()->json([
                'status'=>true,
                'message'=>trans('app.att'),
                'code'=>200,
                'data'=>$att,
            ],200);
        }
        else
        {
            return response()->json(
                ['status'=>false,
                'message'=>trans('Season id does not exist'),
                'code'=>404,
            ],404);
        } 
    }

    public function get_hight_by_width($id)
    {
        $att = AttributeTyre::where('parent_id',$id)->where('attribute_id',2)->get();
        if($att->count() > 0)
        {
            return response()->json([
                'status'=>true,
                'message'=>trans('app.att'),
                'code'=>200,
                'data'=>$att,
            ],200);
        }
        else
        {
            return response()->json(
                ['status'=>false,
                'message'=>trans('Width id does not exist'),
                'code'=>404,
            ],404);
        } 
    }

    public function get_diameter_by_hight($id)
    {
        $att = AttributeTyre::where('parent_id',$id)->where('attribute_id',3)->get();
        if($att->count() > 0)
        {
            return response()->json([
                'status'=>true,
                'message'=>trans('app.att'),
                'code'=>200,
                'data'=>$att,
            ],200);
        }
        else
        {
            return response()->json(
                ['status'=>false,
                'message'=>trans('height id does not exist'),
                'code'=>404,
            ],404);
        } 
    }

    public function get_manufactuere_by_width($id)
    {
        $att = AttributeTyre::where('parent_id',$id)->where('attribute_id',7)->get();
        if($att->count() > 0)
        {
            return response()->json([
                'status'=>true,
                'message'=>trans('app.att'),
                'code'=>200,
                'data'=>$att,
            ],200);
        }
        else
        {
            return response()->json(
                ['status'=>false,
                'message'=>trans('width id does not exist'),
                'code'=>404,
            ],404);
        } 
    }

    public function get_load_by_width($id)
    {
        $att = AttributeTyre::where('parent_id',$id)->where('attribute_id',5)->get();
        if($att->count() > 0)
        {
            return response()->json([
                'status'=>true,
                'message'=>trans('app.att'),
                'code'=>200,
                'data'=>$att,
            ],200);
        }
        else
        {
            return response()->json(
                ['status'=>false,
                'message'=>trans('width id does not exist'),
                'code'=>404,
            ],404);
        } 
    }

    public function get_speed_by_width($id)
    {
        $att = AttributeTyre::where('parent_id',$id)->where('attribute_id',4)->get();
        if($att->count() > 0)
        {
            return response()->json([
                'status'=>true,
                'message'=>trans('app.att'),
                'code'=>200,
                'data'=>$att,
            ],200);
        }
        else
        {
            return response()->json(
                ['status'=>false,
                'message'=>trans('width id does not exist'),
                'code'=>404,
            ],404);
        } 
    }

    public function get_axle_by_width($id)
    {
        $att = AttributeTyre::where('parent_id',$id)->where('attribute_id',6)->get();
        if($att->count() > 0)
        {
            return response()->json([
                'status'=>true,
                'message'=>trans('app.att'),
                'code'=>200,
                'data'=>$att,
            ],200);
        }
        else
        {
            return response()->json(
                ['status'=>false,
                'message'=>trans('width id does not exist'),
                'code'=>404,
            ],404);
        } 
    }

    

    public function all_att()
    {
        $att= Attribute::get();
        return response()->json([
            'status'=>true,
            'message'=>trans('app.att'),
            'code'=>200,
            'data'=>$att,
        ],200);
    }

    public function update(Request $request,$id)
    {
        $att= AttributeTyre::where('id',$id)->first();
        $att->season_id=$request->input('season_id');
        $att->value=$request->input('value');
        $att->parent_id=$request->input('parent_id');
        $att->attribute_id=$request->input('attribute_id');

        $att->save();

        return response()->json([
            'status'=>true,
            'message'=>trans('Attribute tyre have been updated successfully'),
            'code'=>200,
            'data'=>$att,
        ],200);
    }

    public function delete($id)
    {
        $att= AttributeTyre::where('id', $id)->firstorfail()->delete();
        return response()->json([
            'status'=>true,
            'message'=>trans('Attribute tyre have been deleted successfully'),
            'code'=>200,
        ],200);
    }
}
