<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use DB;
use App\Eneryprovider;
class energyController extends Controller
{
    public function getEnergyPrice($energyprovidername, $product,$variant)
    {
       $energyprovider = new Eneryprovider();
       $data2= $energyprovider->energyprovider($energyprovidername, $product,$variant);
       return response()->json( $data2[0]->price);

    }

    public function updateprice(Request $req)
    {

        $energyprovider = new Eneryprovider();
        $data=$energyprovider->updateprice( $req);
        return "price updated successfully";
    }

}
