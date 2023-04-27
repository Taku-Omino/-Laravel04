@extends('front.layouts.master')

@section('title', 'book')

@section('main')
<h1>著書登録</h1>

{!! Form::open(['route' => 'books.store']) !!}
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

    {!! Form::submit('投稿', ['class' => 'btn btn-primary']) !!}
    {!! Form::button('キャンセル', ['class' => 'btn btn-secondary', 'onClick' => 'location.href="'.route('books.index').'"']) !!}


{!! Form::close() !!}

@endsection
