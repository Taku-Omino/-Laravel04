@extends('front.layouts.master')

@section('title', 'about')

@section('main')
<main>
    <div class="main">
        <h1 class="page-name">ユーザー一覧ページです。</h1>
        <h2>ユーザー一覧</h2>
        @foreach($users as $user)
        <div class="user-card">
            <a href="{{ route('users.show',$user->id)}}"><p>{{$user->name}}</p></a>
            <p>所属企業：{{ $user->company->name }}</p>
            <p>著書数：{{ count($user->books) }}</p>
        </div>
        @endforeach
    </div>
</main>
@endsection
