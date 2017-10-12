@extends('layouts.app')

@section('content')
    @if (Auth::check())
        <h1>デザイン一覧</h1>

        @if (count($designlist) > 0)
            <ul>
                @foreach ($designlist as $design)
                    <li>{!! link_to_route('designlist.show', $design->id, ['id' => $design->id]) !!} : {{ $design->name }}</li>
                    <li>{{ $design->description }}</li>
                    <li>{{ $design->image }}</li>
                @endforeach
            </ul>
        @endif
        
        {!! link_to_route('designlist.create', 'デザイン新規作成') !!}
    
    @endif
    
@endsection