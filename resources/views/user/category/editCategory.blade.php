@extends('layouts.layout')
@section('header')
    Edit Kategori
@endSection

@section('content')
<div class="container-fluid">
    <div class="row">
        <div class="col-md-12">
        <div class="card card-primary">
              <div class="card-header">
                <h3 class="card-title">Form Edit Kategori</h3>
              </div>
              <!-- /.card-header -->
              <!-- form start -->
              <form action="{{route('update_category')}}" method="POST">
              {{ csrf_field() }}
              {{ method_field('PATCH')}}
                <input type="hidden" name="id" value="{{$kategori->id}}">
                <div class="card-body">
                  <div class="form-group">                      
                    <label for="">Nama Kategori</label>
                    <input type="text" class="form-control" placeholder="Masukkan Nama Kategori" name="nama_kategori" value="{{$kategori->nama}}">
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