<?php

namespace App\Http\Controllers\Api\Vendor;

use App\Models\Attachment;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Storage;

class AttachmentsController extends Controller
{
    public function create(Request $request)
    {
        $att = new Attachment();
        $uploadFolder = 'attachments';
        if($file = $request->file('file'))
        {
            $file_uploaded_path = $file->store($uploadFolder, 'public');
            $att->file =Storage::disk('public')->url($file_uploaded_path);

        }
        $att->mime_type = $request->file('file')->getMimeType();
        $att->size = $request->file('file')->getSize();
        $att->user_id =auth('vendor')->user()->id;
        $att->file_name=$request->file('file')->getClientOriginalName();
        $att->save();
        return response()->json([
            'status'=>true,
            'message'=>trans('attachment has been uploaded successfully'),
            'code'=>200,
            'data'=>$att,
        ],200);

    }
}
