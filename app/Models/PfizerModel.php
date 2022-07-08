<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

class PfizerModel extends Model
{
    use HasFactory;

    protected $table = "pfizer";

    protected $fillable = ['label','text','clean_msg','msg_lower','token','spell','filter','msg_stemmed','msg_string','msg_n_gram','labelNB'];

    public static function getPfizer(){
        return DB::table('pfizer')
                ->get();
    }

    public static function checkPfizer(){
        return DB::table('pfizer')->exists();
    }

    public static function delPfizer(){
        DB::table('pfizer')->truncate();
    }
}
