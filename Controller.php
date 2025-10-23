<?php

namespace App\Http\Controllers; // Ini harus sesuai dengan lokasi file

use App\Models\Book; // Import Model Book
use Illuminate\Http\Request;
use App\Http\Controllers\Controller; // Pastikan ini juga ada

class BookController extends Controller
{
    /**
     * Menampilkan daftar semua buku dengan informasi penulis.
     * Metode ini dipanggil oleh Route::get('/books', ...)
     */
    public function index()
    {
        // 1. Mengambil data semua buku. 
        //    'with('author')' memastikan data penulis ikut diambil (Eager Loading).
        $books = Book::with('author')->get(); 

        // 2. Mengirim data ($books) ke view 'books.index'.
        //    View ini berada di resources/views/books/index.blade.php
        return view('books.index', compact('books'));
    }
}