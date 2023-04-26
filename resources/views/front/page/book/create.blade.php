@extends('layouts.app')

@section('content')
<h1>著書登録</h1>

{!! Form::open(['route' => 'books.store']) !!}
    <div class="form-group">
        {!! Form::label('title', 'タイトル:') !!}
        {!! Form::text('title', null, ['class' => 'form-control']) !!}
    </div>

    <div class="form-group">
        {!! Form::label('author', '著者名:') !!}
        {!! Form::text('author', null, ['class' => 'form-control']) !!}
    </div>

    <div class="form-group">
        {!! Form::label('comment', 'コメント:') !!}
        {!! Form::textarea('comment', null, ['class' => 'form-control']) !!}
    </div>

    {!! Form::submit('投稿', ['class' => 'btn btn-primary']) !!}
{!! Form::close() !!}

@endsection
