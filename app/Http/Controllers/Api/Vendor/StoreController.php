<?php

namespace App\Http\Controllers\Api\Vendor;

use App\Models\Store;
use App\Models\Vendor;
use App\Helpers\Helper;
use App\Models\StoreBranch;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\VendorUuid;
use Illuminate\Support\Str;

use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\Validator;

class StoreController extends Controller
{
    public function create(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'name_ar' => 'required|string|between:2,100|unique:stores',
            'name_en' => 'required|string|between:2,100|unique:stores',
            'email' => 'required|string|email|max:100|unique:stores',
            'phone' =>'required|integer|digits_between:9,9|unique:stores',
            'store_type_id' =>'required',
            'country_id'=>'required',
            'city_id'=>'required',
            'area_id'=>'required',
            'bank_account'=>'required|integer',
            'commercial_number'=>'required|integer',
            'tax_card_number'=>'required|integer',
            'address'=>'required|string',
            'description_ar'=>'required|string',
            'description_en'=>'required|string',

            'longitude'=>'required|integer',
            'latitude'=>'required|integer',
            
        ]);

        if ($validator->fails()) 
        {
            return response()->json(['status'=>false,
                                    'message'=>$validator->errors(),
                                    'code'=>400],400);
        }

        $store= new Store();
        $store->name_ar=$request->name_ar;
        $store->name_en=$request->name_en;
        $store->uuid=Helper::IDGenerator(new Store(), 'uuid', 4, 'S');
        $store->vendor_id=auth('vendor')->user()->id;
        $store->store_type_id=$request->store_type_id;
        $store->description_ar=$request->description_ar;
        $store->description_en=$request->description_en;
        $uploadFolder = 'stores';
        if($image = $request->file('image'))
        {
            $image_uploaded_path = $image->store($uploadFolder, 'public');
            $store->image =Storage::disk('public')->url($image_uploaded_path);
        }
        if($banner = $request->file('banner'))
        {
            $image_uploaded_path = $banner->store($uploadFolder, 'public');
            $store->banner =Storage::disk('public')->url($image_uploaded_path);
        }
        $store->phone=$request->phone;
        $store->email=$request->email;
        $store->status=0;
        $store->address = $request->address;
        $store->longitude = $request->longitude;
        $store->latitude = $request->latitude;
        $store->save();

        $uuid = new VendorUuid();

        if($store->store_type_id == 1)
        {
            $uuid->retail = Helper::IDGenerator(new VendorUuid(), 'uuid', 4, 'VR');

        }
        if($store->store_type_id == 2)
        {
            $uuid->wholesale = Helper::IDGenerator(new VendorUuid(), 'uuid', 4, 'VW');

        }
        if($store->store_type_id == 3)
        {
            $uuid->retail = Helper::IDGenerator(new VendorUuid(), 'uuid', 4, 'VR');
            $uuid->wholesale = Helper::IDGenerator(new VendorUuid(), 'uuid', 4, 'VW');

        }

        $uuid->save();
        $vendor=Vendor::find(auth('vendor')->id());
        $vendor->uuid = $uuid->id;
        $vendor->country_id= $request->input('country_id');
        $vendor->area_id= $request->input('area_id');
        $vendor->city_id= $request->input('city_id');
        $vendor->bank_account= $request->input('bank_account');
        $vendor->commercial_number= $request->input('commercial_number');
        $vendor->tax_card_number= $request->input('tax_card_number');
        $vendor->save();
       
        return response()->json([
            'status'=>true,
            'message'=>trans('app.store_create'),
            'code'=>200,
            'data'=>$store
        ],200);

    }

    public function create_branch(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'name' => 'required|string|between:2,100|unique:store_branches',           
        ]);

        if ($validator->fails()) 
        {
            return response()->json(['status'=>false,
                                    'message'=>$validator->errors(),
                                    'code'=>400],400);
        }

        $branch= new StoreBranch();
        $branch->name=$request->name;
        $branch->slug=Str::slug($request->get('name'));
        $branch->status=0;
        $branch->store_id =$request->store_id; 

        $branch->save();
        return response()->json([
            'status'=>true,
            'message'=>trans('app.store_create'),
            'code'=>200,
            'data'=>$branch
        ],200);
    }

    public function generate_url($name)
    {
        $store = Store::where('name_en',$name)->first();
        $url=url("/store/{$store->name_en}");
        return response()->json([
            'status'=>true,
            'message'=>trans('url created successfully'),
            'code'=>200,
            'data'=>$url,
        ],200);

    }
}
