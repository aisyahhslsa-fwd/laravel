<?php

namespace App\Http\Controllers;

use App\Models\Book; // Import Model Book
use Illuminate\Http\Request;

class BookController extends Controller
{
    /**
     * Menampilkan daftar semua buku dengan informasi penulis.
     */
    public function index()
    {
        // 1. Mengambil data semua buku dari database.
        //    'with('author')' digunakan untuk Eager Loading,
        //    yang mengambil data Author terkait dalam satu query tambahan,
        //    sehingga menghindari N+1 problem.
        $books = Book::with('author')->get(); 

        // 2. Mengirim data buku ke View.
        //    'books.index' merujuk ke file: resources/views/books/index.blade.php
        return view('books.index', compact('books'));
    }
}