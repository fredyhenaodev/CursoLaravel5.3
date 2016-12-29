<?php

namespace Cinema;

use Illuminate\Database\Eloquent\Model;
use Carbon\Carbon;
use DB;

class Movie extends Model
{
    protected $table = 'tb_movie';
    protected $fillable = ['name','path','cast','direction','duration','genero_id'];

    public function setPathAttribute($path)
    {
        $name = Carbon::now()->second.$path->getClientOriginalName();
        $this->attributes['path'] = $name;
        \Storage::disk('local')->put($name, \File::get($path));
    }

    public static function Movies()
    {
        return DB::table('tb_movie')
            ->join('tb_genero', 'tb_genero.id', '=', 'tb_movie.genero_id')
            ->select('tb_movie.*', 'tb_genero.genero')
            ->get();
    }
}
