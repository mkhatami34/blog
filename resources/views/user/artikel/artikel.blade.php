@extends('layouts.layout')
@section('header')
    Artikel
@endsection
@section('content')
<div class="container-fluid">
<div class="row">
          <div class="col-12">
            <div class="card">
              <div class="card-header">
                <h3 class="card-title">Fixed Header Table</h3>
                <div class="card-tools">                                               
                  <div class="input-group input-group-sm" style="width: 300px;">                                                        
                    <div class="col-2">
                        <a href="{{route('create_article')}}" class="btn btn-success">Tambah</a>                        
                    </div>                    
                    <div class="col-3"></div>
                        <input type="text" name="table_search" class="form-control float-right" placeholder="Search">
                        <div class="input-group-append">
                        <button type="submit" class="btn btn-default">
                            <i class="fas fa-search"></i>
                        </button>
                        </div>                  
                  </div>
                </div>
              </div>
              <!-- /.card-header -->
              <div class="card-body table-responsive p-0" style="height: 300px;">
                <table class="table table-head-fixed text-nowrap">
                  <thead>
                    <tr>
                      <th width=10%>No</th>
                      <th>Nama Kategori</th> 
                      <th>Judul</th>
                      <th>Konten</th>                     
                      <th width=20%>Aksi</th>                      
                    </tr>
                  </thead>
                  <tbody>
                    @php
                      $no = 1;  
                    @endphp
                    @foreach ($artikel as $item)
                        <tr>
                          <td>{{$no}}</td>
                          <td>{{$item->kategori->nama}}</td>
                          <td>{{$item->judul}}</td>
                          <td>{{substr($item->konten,0,50).'...'}}</td>
                          <td>
                          <form action="{{route('delete_article', $item->id)}}" method="POST">       
                            {{ csrf_field() }}
                            {{ method_field('DELETE')}}                     
                              <a href="{{route('edit_article', $item->id)}}" class="btn btn-warning">Edit</a>
                              <button type="submit" class="btn btn-danger">Delete</button>
                          </form>                         
                          </td>
                        </tr>
                        @php
                            $no++;
                        @endphp
                    @endforeach                    
                  </tbody>
                </table>
              </div>
              <!-- /.card-body -->
            </div>
            <!-- /.card -->
          </div>
        </div>
</div>
@endsection