<!DOCTYPE html>
<html>
<head>
    <title>Google Books Search</title>
</head>
<body>
    <h1>Google Books Search</h1>

    <form action="{{ route('books.search') }}" method="GET">
        <input type="text" name="query" placeholder="Enter book title" value="{{ request('query') }}">
        <button type="submit">Search</button>
    </form>

    <h2>Search Results</h2>

    @if(isset($error))
        <p style="color: red;">{{ $error }}</p>
    @else
        @if(isset($books['items']) && count($books['items']))
            <ul>
                @foreach($books['items'] as $book)
                    <li>
                        <strong>{{ $book['volumeInfo']['title'] ?? 'No Title' }}</strong><br>
                        Author: {{ implode(', ', $book['volumeInfo']['authors'] ?? ['Unknown']) }}
                    </li>
                @endforeach
            </ul>
        @else
            <p>No results found.</p>
        @endif
    @endif
</body>
</html>
