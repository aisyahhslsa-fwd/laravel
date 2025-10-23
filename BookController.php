// app/Http/Controllers/BookController.php

use App\Models\Book;
use Illuminate\Http\Request;

class BookController extends Controller
{
    // Mengambil semua data
    public function index()
    {
        $books = Book::all(); // Ambil semua data dari model
        // Kunci: Kembalikan respons JSON
        return response()->json($books, 200); 
    }

    // Mengambil data tunggal
    public function show(Book $book)
    {
        // Kunci: Kembalikan respons JSON
        return response()->json($book, 200);
    }
    
    // ... metode store, update, destroy lainnya
}