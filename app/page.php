<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class page extends Model
{
   protected $table = 'pages';
    protected $timestamp = false;


   public static function addPage($title,$text)
   {
       page::insert([
           'title' => $title,
           'description' => $text
       ]);
   }

    public static function getPage($id)
    {
        return page::where('id', '=', $id)
            ->first();
    }


    public static function getPages()
    {
        return page::all();
    }

}
