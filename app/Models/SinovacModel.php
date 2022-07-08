<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;


class SinovacModel extends Model
{
    use HasFactory;

    protected $table = "sinovac";

    protected $fillable = ['label','text','clean_msg','msg_lower','token','spell','filter','msg_stemmed','msg_string','msg_n_gram','labelNB'];

    public static function getSinovac(){
        return DB::table('sinovac')
                ->get();
    }

    public static function checkSinovac(){
        return DB::table('sinovac')->exists();
    }

    public static function delSinovac(){
        DB::table('sinovac')->truncate();
    }
}
