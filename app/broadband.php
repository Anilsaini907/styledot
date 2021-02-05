<?php

namespace App;
use Illuminate\Database\Eloquent\Model;
use DB;
class broadband extends Model
{
    public function broadband($braodband,$product)
    {
        $data= DB::table('broadband_provider')
        ->where('product','=',$product)
        ->where('provider_name','=',$braodband)
        ->get();
        return $data;
    }
    
}
