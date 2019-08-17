<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use DB;

class Character extends Model
{
    public function race()
    {
        return $this->belongsTo(\App\Race::class);
    }

    public function class()
    {
        return $this->belongsTo(\App\Classe::class);
    }

    public function spec()
    {
        return $this->belongsTo(\App\Spec::class);
    }

    public function professions()
    {
        return $this->belongsToMany(\App\Profession::class)->withTimestamps();
    }

    public static function getProfessions()
    {
        $results = DB::select(DB::raw('SELECT p.avatar, cp.profession_id, count(cp.*) as total FROM character_profession as cp, professions p WHERE cp.profession_id = p.id GROUP BY p.avatar, cp.profession_id ORDER BY 3 DESC'));

        return $results;
    }


}
