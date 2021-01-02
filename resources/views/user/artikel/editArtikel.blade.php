@extends('layouts.layout')
@section('header')
    Tambah Artikel
@endSection

@section('content')
<div class="container-fluid">
    <div class="row">
        <div class="col-md-12">
        <div class="card card-primary">
              <div class="card-header">
                <h3 class="card-title">Form Tambah Artikel</h3>
              </div>
              <!-- /.card-header -->
              <!-- form start -->
              <form action="{{route('update_article',$artikel->id)}}" method="POST">
              {{ csrf_field() }}
              {{method_field('PATCH')}}
                <div class="card-body">
                <div class="form-group">
                        <label>Kategori</label>
                        <select name = "kategori_id" class="form-control">
                        @foreach ($kategori as $item)
                            @if ($item->id==$artikel->kategori_id)
                                <option selected value="{{$item->id}}">{{$item->nama}}</option>
                                @continue  
                            @endif
                            <option value="{{$item->id}}">{{$item->nama}}</option>
                            
                        @endforeach
                        </select>
                      </div>
                  <div class="form-group">
                    <label for="">Judul</label>
                    <input value = "{{$artikel->judul}}"type="text" class="form-control" placeholder="Masukkan Artikel" name="judul">
                  </div>                  
                  <div class="form-group">
                    <label>Konten</label>
                    <textarea class="form-control" rows="3" placeholder="Enter ..." name="konten">{{$artikel->konten}}</textarea>
                  </div>
                </div>
                <!-- /.card-body -->
                <div class="card-footer">
                  <button type="submit" class="btn btn-primary">Submit</button>
                </div>
              </form>
            </div>
        </div>
    </div>
</div>
@endSection