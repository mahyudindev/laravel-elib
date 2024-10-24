@extends('layouts.app')

@section('content')
    <div class="container">
        <h1>Detail Buku</h1>
        <div class="card mb-4">
            <div class="card-body">
                <h5 class="card-title">{{ $book->title }}</h5>
                <p class="card-text"><strong>Pengarang:</strong> {{ $book->author }}</p>
                <p class="card-text"><strong>Kategori:</strong> {{ $book->category }}</p>
            </div>
        </div>
        <a href="{{ route('books.index') }}" class="btn btn-secondary">Kembali ke Katalog</a>
    </div>
@endsection
