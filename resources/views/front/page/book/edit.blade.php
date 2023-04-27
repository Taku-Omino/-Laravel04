@extends('front.layouts.master')

@section('title', 'book')

@section('main')
<h1>著書編集</h1>

{!! Form::model($book, ['route' => ['books.update', $book->id], 'method' => 'PUT']) !!}
    <div class="form-group">
        {!! Form::label('title', 'タイトル:') !!}
        {!! Form::text('title', null, ['class' => 'form-control']) !!}
    </div>

    <div class="form-group">
        {!! Form::label('author_id', '著者名:') !!}
        {!! Form::select('author_id', $authors, null, ['class' => 'form-control']) !!}
    </div>

    <div class="form-group">
        {!! Form::label('comment', 'コメント:') !!}
        {!! Form::textarea('comment', null, ['class' => 'form-control']) !!}
    </div>

    {!! Form::submit('修正する', ['class' => 'btn btn-primary']) !!}
    {!! Form::button('キャンセル', ['class' => 'btn btn-secondary', 'onClick' => 'location.href="'.route('books.show', $book->id).'"']) !!}
{!! Form::close() !!}

@endsection
