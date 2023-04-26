@extends('front.layouts.master')

@section('title', 'top')

@section('main')
    <main>
        <div class="main">
            <h1 class="page-name">トップページです。</h1>
            <h2>一覧ページ</h2>
            <div class="card">
                <a href="{{ route('users.index') }}">ユーザー</a>
            </div>
            <div class="card">
                <a href="{{ route('books.index') }}">著書</a>
            </div>
        </div>
    </main>
@endsection


