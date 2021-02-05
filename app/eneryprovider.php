<?php

namespace App;
use Illuminate\Database\Eloquent\Model;
use DB;
class eneryprovider extends Model
{
    public function energyprovider($energyprovidername, $product,$variant)
    {

        $data= DB::table('energy_provider')
        ->where('provider_name','=',$energyprovidername)
        ->where('product','=',$product)
        ->where('product_variantion','=',$variant)
        ->get();
        return $data;
    }

    public function updateprice( $req )
    {

        $sample = DB::table('energy_provider')
        ->where('id','=',$req->input('id'))
        ->update(['price' => $req->input('price')]);
        return $sample;
        
    }
}
