<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Artikel extends Model
{
    protected $table = 'artikel';
    protected $fillable = ['user_id', 'kategori_id', 'judul', 'konten'];

    public function Kategori()
    {
        return $this->belongsTo('App\Kategori');
    }

    public function User()
    {
        return $this->belongsTo('App\User');
    }

    public function Gambar()
    {
        return $this->hasMany(Gambar::class, 'artikel_id');
    }
}
