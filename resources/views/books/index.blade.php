@extends('layouts.app')

@section('content')
<div class="container">
    <h1>Katalog Buku</h1>
    <div class="row">
        @foreach($books as $book)
            <div class="col-md-4">
                <div class="card mb-4">
                    <div class="card-body">
                        <h5 class="card-title">{{ $book->title }}</h5>
                        <p class="card-text">{{ $book->author }}</p>
                        <p class="card-text">Kategori: {{ $book->category }}</p>
                        <a href="{{ route('books.show', $book->id) }}" class="btn btn-primary">Lihat Detail</a>
                    </div>
                </div>
            </div>
        @endforeach
    </div>
</div>
@endsection
