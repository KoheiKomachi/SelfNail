@extends('layouts.app')

@section('content')
    @if (Auth::check())
        <h1>メッセージ新規作成ページ</h1>

        {!! Form::model($design, ['route' => 'designlist.store']) !!}

            {!! Form::label('name', 'デザイン名:') !!}
            {!! Form::text('name') !!}
            
            {!! Form::label('description', 'デザインの説明:') !!}
            {!! Form::text('description') !!}
            
            {!! Form::label('image', '完成イメージ:') !!}
            {!! Form::text('image') !!}

            {!! Form::submit('投稿') !!}

        {!! Form::close() !!}
    
    @endif
    
@endsection