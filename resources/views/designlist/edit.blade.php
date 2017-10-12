@extends('layouts.app')

@section('content')
    @if (Auth::check())
        <h1>id: {{ $design->id }} のデザイン編集ページ</h1>

        {!! Form::model($design, ['route' => ['designlist.update', $design->id], 'method' => 'put']) !!}

            {!! Form::label('name', 'デザイン名:') !!}
            {!! Form::text('name') !!}
            
            {!! Form::label('description', 'デザインの説明:') !!}
            {!! Form::text('description') !!}
            
            {!! Form::label('image', '完成イメージ:') !!}
            {!! Form::text('image') !!}

            {!! Form::submit('更新') !!}

        {!! Form::close() !!}

    @endif        

@endsection