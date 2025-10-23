// app/Http/Controllers/GenreController.php (Contoh)

use App\Models\Genre;

public function index()
{
    // 1. Ambil semua data dari Model Genre
    $genres = Genre::all(); 
    
    // 2. Kembalikan respons JSON dengan status 200 OK
    return response()->json($genres, 200);
}