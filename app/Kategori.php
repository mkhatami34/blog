<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Kategori extends Model
{
    protected $table = 'kategori';
    protected $fillable = ['nama'];

    public function Artikel()
    {
        return $this->hasMany(Artikel::class, 'kategori_id');
    }
}