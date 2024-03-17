<?php

namespace App\Http\Controllers;

//import Model "Post
use App\Models\Kategori;

//return type View
use Illuminate\View\View;

//return type redirectResponse
use Illuminate\Http\RedirectResponse;

use Illuminate\Http\Request;

class KategoriController extends Controller
{
    /**
     * index
     *
     * @return View
     */
    public function index(): View
    {
        //get posts
        $Kategori = Kategori::latest()->paginate(5);

        //render view with posts
        return view('Kategori.index', compact('Kategori'));
    }

    /**
     * create
     *
     * @return View
     */
    public function create(): View
    {
        return view('kategori.create');
    }

    /**
     * store
     *
     * @param  mixed $request
     * @return RedirectResponse
     */
    public function store(Request $request): RedirectResponse
    {
       

      
        //create post
        Post::create([
            
            'title'     => $request->title,
            'content'   => $request->content
        ]);

        //redirect to index
        return redirect()->route('kategori.index')->with(['success' => 'Data Berhasil Disimpan!']);
    }
}
