@extends('layouts.app')

@section('content')
    @if (Auth::check())
        <h1>デザイン手順</h1>
        <div class="process-1">
            <figure class="image-1">
                <img src="{{ asset("images/sample1.png") }}" alt="イメージ画像">
            </figure>
            <h4>材料</h4>
            <table class="table-1">
                <tbody>
                    <tr>
                        <th>エタノール</th>
                        <td>あああああああ</td>
                    </tr>
                    <tr>
                        <th>ジェル</th>
                        <td>いいいいいいい</td>
                    </tr>
                    <tr>
                        <th>リムーバー</th>
                        <td>ううううううう</td>
                    </tr>
                    <tr>
                        <th>アクセサリ</th>
                        <td>えええええええ</td>
                    </tr>
                </tbody>
            </table>
            <figure class="p1-image1">
                <img src="{{ asset("images/sample2.png") }}" alt="イメージ画像">
            </figure>
            <div class="p-content1">
                <h4>手順1の解説</a></h2>
                <p>ああああああああああああああああああああああああああああああああああああああああああああああああああああああああああああああ</p>
            </div>
    @else

    @endif
@endsection