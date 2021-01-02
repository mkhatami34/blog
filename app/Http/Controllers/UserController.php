<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Kategori;
use App\Artikel;
use Auth;

class UserController extends Controller
{
    function categori(){
        $category = Kategori::all();
        return view('user.category.category', compact('category'));
    }

    function createCategory(){
        return view('user.category.createCategory');
    }    

    function storeCategory(Request $request){
        Kategori::create([
            'nama' => $request->nama_kategori
        ]);
        return redirect()->route('category');
    }

    function EditCategory(Request $request, $id){
        $kategori = Kategori::findOrFail($id);
        return view('user.category.editCategory', compact('kategori'));
    }

    function UpdateCategory(Request $request){
        $kategori = Kategori::findOrFail($request->id);
        $kategori->nama = $request->nama_kategori;
        $kategori->save();
        return redirect()->route('category');
    }

    function DeleteCategory($id){
        Kategori::findOrFail($id)->delete();
        return redirect()->back();
    }

    function article(){
        $artikel = Artikel::all();
        return view('user.artikel.artikel', compact('artikel'));
    }

    function createArticle(){
        $category = Kategori::all();
        return view('user.artikel.createArtikel', compact('category'));
    }

    function storeArticle(Request $request){
        Artikel::create([
            'user_id' => Auth::id(),
            'kategori_id' => $request->kategori_id,
            'judul' => $request->judul,
            'konten' => $request->konten
        ]);
        return redirect()->route('article');
    }

    function editArticle($id){
        $artikel = Artikel::findOrFail($id);
        $kategori = Kategori::all();
        return view('user.artikel.editArtikel', compact('kategori','artikel'));
    }

    function updateArticle(Request $request, $id){
        $artikel = Artikel::findOrFail($id);
        $artikel->judul = $request->judul;
        $artikel->kategori_id = $request->kategori_id;
        $artikel->konten = $request->konten;
        $artikel->save();
        return redirect()->route('article');
    }

    function deleteArticle($id){
        Artikel::findOrFail($id)->delete();
        return redirect()->back();
    }
}
