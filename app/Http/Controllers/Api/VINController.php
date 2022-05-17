<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class VINController extends Controller
{
    public function vin($vin)
    {
        //$vin = '1GKDS13SX72119238'; //1GKDS13SX72119200 - 1GKDS13SX72119238 --  YV2AS02A1D0914807

        if ($vin) 
            {
                    $postdata = http_build_query([
                                    'format' => 'json',
                                    'data' => $vin
                                ]);
            
                    $opts = [
                        
                        'http' => [
                                'method' => 'POST',
                                'header' => "Content-Type: application/x-www-form-urlencoded\r\n".
                                "Content-Length: ".strlen($postdata)."\r\n",
                                'content' => $postdata
                            ]
                    ];

                    $apiURL = "https://vpic.nhtsa.dot.gov/api/vehicles/DecodeVINValuesBatch/";
                    $context = stream_context_create($opts);
                    $fp = fopen($apiURL, 'rb', false, $context);

                    $line_of_text = fgets($fp);
                    $json = json_decode($line_of_text, true);

                    fclose($fp);

                    $html = '';
                    
                    foreach ($json['Results'][0] as $k => $v) 
                        {
                            if($k == "Make" && $v != NULL)
                                {
                                    $html = $k . " = " . $v;
                                    return response()->json([
                                                    'status'=>true,
                                                    'code'=>200,
                                                    'data'=> $html,
                                            ],200);
                                }
                        }
                    
                    return response()->json([
                                'status'=>false,
                                'message'=>trans('Wrong Vin number'),
                                'code'=>200,
                            ],200);
            } 
        
        else 
            {
                return response()->json([
                            'status'=>false,
                            'message'=>trans('No Vin Inputted'),
                            'code'=>200,
                        ],200);
        
            }
    }
}

