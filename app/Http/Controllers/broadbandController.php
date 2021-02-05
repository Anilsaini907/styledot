<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Broadband;
class broadbandController extends Controller
{
    function getBroadband($braodband, $product)
    {
       $broadband = new Broadband();
       $data2= $broadband->broadband($braodband, $product);
            $result=response()->json($data2[0]->price);
        if($result)
        {
            return $result;
        }
        else
        {
          return "request failed please try with another input";
        }
    }
}
