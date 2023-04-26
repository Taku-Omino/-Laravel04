@extends('front.layouts.master')

@section('title', 'about')

@section('main')
<main>
    <div class="main">
        <h1 class="page-name">ユーザー詳細ページです。</h1>
        <h2>ユーザー詳細</h2>
        <div class="user-card">
          <p>{{ $user->name }}</p>
          <p>所属企業：{{ $user->company->name }}</p>
          <form class="delete" method="post" action="{{ route('users.destroy', $user->id) }}">
              @csrf
              @method('delete')
              <input type="submit" value="削除">
          </form>
        </div>

        <h2>著書一覧</h2>
        @if (count($user->books) === 0)
        <p>著書はありません</p>
        @else
            @foreach($user->books as $book)
            <div class="card">
                <a href="{{ route('books.show',$book->id)}}"><p>{{ $book->title }}</p></a>
                <p>コメント:{{ $book->comment }}</p>
            </div>
            @endforeach
        @endif

    </div>
</main>
@endsection
