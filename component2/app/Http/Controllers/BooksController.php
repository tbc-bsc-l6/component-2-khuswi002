<?php

namespace App\Http\Controllers;

use App\Services\GoogleBooksService;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;

class BooksController extends Controller
{
    protected $googleBooksService;

    public function __construct(GoogleBooksService $googleBooksService)
    {
        $this->googleBooksService = $googleBooksService;
    }

    public function index()
    {
        return view('books.index');
    }

    public function search(Request $request)
{
    $query = $request->input('query', '');
    $url = 'https://www.googleapis.com/books/v1/volumes';

    $response = Http::get($url, [
        'q' => $query,
        'key' => config('services.google_books.api_key'),
    ]);

    if (!$response->successful()) {
        return view('books.index', [
            'books' => null,
            'error' => 'Failed to fetch data from API.',
        ]);
    }

    $books = $response->json();

    return view('books.index', [
        'books' => $books,
        'error' => null,
    ]);
}


}
