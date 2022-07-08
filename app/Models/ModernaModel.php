<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

class ModernaModel extends Model
{
    use HasFactory;

    protected $table = "moderna";

    protected $fillable = ['label','text','clean_msg','msg_lower','token','spell','filter','msg_stemmed','msg_string','msg_n_gram','labelNB'];

    public static function getModerna(){
        return DB::table('moderna')
                ->get();
    }

    public static function checkModerna(){
        return DB::table('moderna')->exists();
    }

    public static function delModerna(){
        DB::table('moderna')->truncate();
    }
}
