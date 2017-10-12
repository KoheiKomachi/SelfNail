@extends('layouts.app')

@section('content')
    @if (Auth::check())
        <h1>id = {{ $design->id }} のメッセージ詳細ページ</h1>
        <p>{{ $design->name }}</p>
        <p>{{ $design->description }}</p>
        
        {!! link_to_route('designlist.edit', 'このデザイン編集', ['id' => $design->id]) !!}

        {!! Form::model($design, ['route' => ['designlist.destroy', $design->id], 'method' => 'delete']) !!}
            {!! Form::submit('削除') !!}
        {!! Form::close() !!}
    @endif        

@endsection