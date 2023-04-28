@extends('front.layouts.master')

@section('title', 'book')

@section('main')
<h1 class="page-name">著書編集ページです。</h1>
<h1>著書編集</h1>

<div class="form-container">
    {!! Form::model($book, ['route' => ['books.update', $book->id], 'method' => 'PUT']) !!}
        <div class="form-group">
            {!! Form::label('title', 'タイトル:', ['class' => 'label']) !!}
            {!! Form::text('title', null, ['class' => 'input']) !!}
        </div>

        <div class="form-group">
            {!! Form::label('author_id', '著者名:', ['class' => 'label']) !!}
            {!! Form::select('author_id', $authors, null, ['class' => 'select']) !!}
        </div>

        <div class="form-group">
            {!! Form::label('comment', 'コメント:', ['class' => 'label']) !!}
            {!! Form::textarea('comment', null, ['class' => 'textarea']) !!}
        </div>

        <div class="button-group">
            {!! Form::submit('修正する', ['class' => 'button button-primary']) !!}
            {!! Form::button('キャンセル', ['class' => 'button button-secondary', 'onClick' => 'location.href="'.route('books.show', $book->id).'"']) !!}
        </div>
    {!! Form::close() !!}
</div>

@endsection
