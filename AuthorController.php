use App\Models\Author;
use Illuminate\Http\Request;

public function store(Request $request)
{
    // 1. Validasi Data
    $validatedData = $request->validate([
        'name' => 'required|string|max:255|unique:authors,name',
        // Tambahkan atribut lain jika ada
    ]);

    // 2. Membuat data baru dan menyimpannya ke database
    $author = Author::create($validatedData);

    // 3. Kembalikan respons JSON data yang baru dibuat dengan status 201 Created
    return response()->json($author, 201);
}