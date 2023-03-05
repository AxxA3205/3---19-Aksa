<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Books;
use Illuminate\Support\Facades\Storage;

class BookController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $books =  Books::paginate(5);
      return view('admin.books.data_books', compact('books'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view ('admin.books.create_books');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $this->validate($request, [
            'judul_buku' => 'required',
            'kategori' => 'required',
            'pengarang' => 'required',
            'penerbit' => 'required',
            'tahun_terbit' => 'required',
            'file_path' => 'required',
        ]);

        if (!empty($request->file('file_path'))) {
            $books = $request->all();
            $books['file_path'] = $request->file('file_path')->store('books');

            Books::create($books);

            return redirect()->route('books.index');
        } else{
            $books = $request->all();
            Books::create($books);

            return redirect()->route('books.index');
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $books = Books::findOrFail($id);
        return view('admin/books/edit_books', compact('books'));
        
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
       if (empty($request->file('file_path'))) {
        $books->update([
            'judul_buku' => $request->judul_buku,
            'kategori' => $request->kategori,
            'pengarang' => $request->pengarang,
            'tahun_terbit' => $request->tahun_terbit,
            'penerbit' => $request->penerbit
        ]);
        return redirect()->route('books.index');
       } else{
        $books = Books::find($id);
        storage::delete($books->file_path);
        $books->update([
            'judul_buku' => $request->judul_buku,
            'kategori' => $request->kategori,
            'pengarang' => $request->pengarang,
            'tahun_terbit' => $request->tahun_terbit,
            'penerbit' => $request->penerbit,
            'file_path' => $request->file('file_path')->store('books'),
        ]);
        return redirect()->route('books.index');
       }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $books = Books:: findOrFail($id);
       $books->delete();

       return redirect()->route('books.index');
    }
}
