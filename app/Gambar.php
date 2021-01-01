<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Gambar extends Model
{
    protected $table = 'gambar';
    protected $fillable = ['artikel_id', 'gambar'];

    public function Artikel()
    {
        return $this->belongsTo('App\Artikel');
    }
}
