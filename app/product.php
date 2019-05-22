<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

class product extends Model
{
   protected $table = 'qb_products';

    public static function getProducts()
    {
        return product::all();
    }

    public static function getProduct($id)
    {
        $qurey['product'] =  product::
            where('id','=',$id)
            ->first();

        $qurey['comment'] = DB::table('qb_comment')
            ->where('qb_comment.product_id','=',$id)
            ->join('qb_users', 'qb_users.id','=', 'qb_comment.user_id' )
            ->select('qb_comment.comment as comment', 'qb_users.name as name')
            ->get();

        return $qurey;
    }
}
