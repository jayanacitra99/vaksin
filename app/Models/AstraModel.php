<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

class AstraModel extends Model
{
    use HasFactory;

    protected $table = "astra";

    protected $fillable = ['label','text','clean_msg','msg_lower','token','spell','filter','msg_stemmed','msg_string','msg_n_gram','labelNB'];

    public static function getAstra(){
        return DB::table('astra')
                ->get();
    }

    public static function checkAstra(){
        return DB::table('astra')->exists();
    }

    public static function delAstra(){
        DB::table('astra')->truncate();
    }
}
