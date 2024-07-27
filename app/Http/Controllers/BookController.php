<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Book;

class BookController extends Controller
{
    public function generateBooks(){
        Book::factory()->count(20)->create();
        return '20 books created';
    }
}
