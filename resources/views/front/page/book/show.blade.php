@extends('front.layouts.master')

@section('title', 'book')

@section('main')
<main>
    <div class="main">
        <h1 class="page-name">著書詳細ページです。</h1>
        <a href="{{ route('books.edit', $book->id) }}" class="btn btn-primary">編集</a>
        <h2>著書詳細</h2>
        <div class="user-card">
            <p>{{ $book->title }}</p>
            <p>著者:{{ $book->user->name }}</p>
            <p>コメント:{{ $book->comment }}</p>
        </div>
        <form class="delete" method="post" action="{{ route('books.destroy', $book->id) }}">
            @csrf
            @method('delete')
            <input type="submit" value="削除">
        </form>

    </div>
</main>
@endsection
