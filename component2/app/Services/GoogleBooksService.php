<?php

namespace App\Services;

use Illuminate\Support\Facades\Http;

class GoogleBooksService
{
    protected $apiKey;
    protected $baseUrl;

    public function __construct()
    {
        $this->apiKey = config('services.google_books.api_key');
        $this->baseUrl = 'https://www.googleapis.com/books/v1/volumes';
    }

    public function searchBooks($query)
    {
        $response = Http::get($this->baseUrl, [
            'q' => $query,
            'key' => $this->apiKey,
        ]);

        if (!$response->successful()) {
            return null; // or handle the error as required
        }

        return $response->json();
    }
}
