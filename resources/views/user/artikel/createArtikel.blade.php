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
              <form action="{{route('store_category')}}" method="POST">
              {{ csrf_field() }}
                <div class="card-body">
                <div class="form-group">
                        <label>Kategori</label>
                        <select name = "kategori_id" class="form-control">
                        @foreach ($category as $item)
                            <option value="{{$item->id}}">{{$item->nama}}</option>
                            
                        @endforeach
                        </select>
                      </div>
                  <div class="form-group">
                    <label for="">Judul</label>
                    <input type="text" class="form-control" placeholder="Masukkan Artikel" name="judul">
                  </div>                  
                  <div class="form-group">
                    <label>Konten</label>
                    <textarea class="form-control" rows="3" placeholder="Enter ..."></textarea>
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