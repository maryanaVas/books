<?php

namespace App\Http\Controllers;

use App\Models\Book;
use Illuminate\Http\Request;
use Illuminate\View\View;

class BookController extends Controller
{
    public function show(Book $book) : View {
        return view('book', [
            'book' => $book
        ]);
    }

    public function delete(Book $book) : View {

        $book->delete();

        $books = Book::paginate(10);

        return view('books', compact('books'));
    }

    public function add(Request $request): \Illuminate\Http\RedirectResponse
    {
        $book = Book::create(
            [
                'title' => $request->title,
                'author' => $request->author,
                'publication_year' => $request->publication_year,
                'publisher' => $request->publisher,
                'isbn' => $request->isbn,
            ]
        );

        return redirect()->back()->with('success', 'Приемлемо');
    }

    public function showAll() : View {

        $books = Book::paginate(10);

        return view('books', compact('books'));
    }
}
