@extends('partials.layout')
@section('content')

<div class="container mx-auto mt-4">
    <div class="shadow-md rounded-lg overflow-hidden">
        <table class="min-w-full 
        bg-gradient-to-b from-sky-700 via-cyan-700 to-blue-700">
            <thead class="bg-gray-800 text-white ">
                <tr>
                    <th class="w-1/7 py-3 px-4 uppercase font-semibold text-base">ID</th>
                    <th class="w-1/6 py-3 px-4 uppercase font-semibold text-base">ISBN</th>
                    <th class="w-1/6 py-3 px-4 uppercase font-semibold text-base">Title</th>
                    <th class="w-1/6 py-3 px-4 uppercase font-semibold text-base">Author</th>
                    <th class="w-1/3 py-3 px-4 uppercase font-semibold text-base">Description</th>
                    <th class="w-1/6 py-3 px-4 uppercase font-semibold text-base">Date Published</th>
                </tr>
            </thead>
            <tbody class="text-white ">
                @foreach($books as $book)
                    <tr class="border-b-2">
                        <td class="w-1/6 py-3 px-4">{{ $book->id }}</td>
                        <td class="w-1/6 py-3 px-4">{{ $book->isbn }}</td>
                        <td class="w-1/6 py-3 px-4">{{ $book->title }}</td>
                        <td class="w-1/6 py-3 px-4">{{ $book->author }}</td>
                        <td class="w-1/6 py-3 px-4">{{ $book->description }}</td>
                        <td class="w-1/6 py-3 px-4">{{ $book->date_published }}</td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
</div>
@endsection