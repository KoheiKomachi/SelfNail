@extends('layouts.app')

@section('content')
    @if (Auth::check())
        <h1>デザイン一覧</h1>
        <!--    <?php $user = Auth::user(); ?>
                {{ $user->name }} -->
        <div class="design1">
            <figure class="image1">
                <img src="{{ asset("images/sample1.png") }}" alt="イメージ画像">
            </figure>
            <div class="content1">
                <h2><a href="/designs/1">デザイン1タイトル</a></h2>
                <p>デザインの説明</p>
                <p>ああああああああああああああああああああああああああああああああああああああああああああああああああああああああああああああ</p>
            </div>
        </div>
        <div class="design2">
            <figure class="image2">
                <img src="{{ asset("images/sample2.png") }}" alt="イメージ画像">
            </figure>
            <div class="content2">
                <h2><a href="/">デザイン2タイトル</a></h2>
                <p>デザインの説明</p>
                <p>いいいいいいいいいいいいいいいいいいいいいいいいいいいいいいいいいいいいいいいいいいいいいいいいいいいいいいいいいいいいいい</p>
            </div>
        </div>
    @else
        <div class="center jumbotron">
            <div class="text-center">
                <h1>Welcome to the Self-Nail</h1>
                {!! link_to_route('signup.get', 'Sign up now!', null, ['class' => 'btn btn-lg btn-primary']) !!}
            </div>
        </div>
        <div class="image">
            <img src="{{ asset("images/sample3.png") }}" alt="イメージ画像">
        </div>
        <div class="messages">
            <h1></h1>
            <h1>ユーザーへのメッセージ</h1>
            <p>
                ああああああああああああああああああああああああああああああああああああああああああああ
                いいいいいいいいいいいいいいいいいいいいいいいいいいいいいいいいいいいいいいいいいいいい
                うううううううううううううううううううううううううううううううううううううううううううう
                ええええええええええええええええええええええええええええええええええええええええええええ
                おおおおおおおおおおおおおおおおおおおおおおおおおおおおおおおおおおおおおおおおおおおお
                ああああああああああああああああああああああああああああああああああああああああああああ
                いいいいいいいいいいいいいいいいいいいいいいいいいいいいいいいいいいいいいいいいいいいい
                うううううううううううううううううううううううううううううううううううううううううううう
                ええええええええええええええええええええええええええええええええええええええええええええ
                おおおおおおおおおおおおおおおおおおおおおおおおおおおおおおおおおおおおおおおおおおおお
            </p>
        </div>
    @endif
@endsection
<!--
    <div class="container">
        <h1>ユーザーへのメッセージ</h1>
        <p>
            ああああああああああああああああああああああああああああああああああああああああああああ
            いいいいいいいいいいいいいいいいいいいいいいいいいいいいいいいいいいいいいいいいいいいい
            うううううううううううううううううううううううううううううううううううううううううううう
            ええええええええええええええええええええええええええええええええええええええええええええ
            大おお大オオ大オオ大おお大おおおおおおおおおおおおおおおおおおおおおおおおおおおおおおお
        </p>
    </div>
-->
<!--
<!DOCTYPE html>
<html>
    <head>
        <title>Laravel</title>

        <link href="https://fonts.googleapis.com/css?family=Lato:100" rel="stylesheet" type="text/css">

        <style>
            html, body {
                height: 100%;
            }

            body {
                margin: 0;
                padding: 0;
                width: 100%;
                display: table;
                font-weight: 100;
                font-family: 'Lato';
            }

            .container {
                text-align: center;
                display: table-cell;
                vertical-align: middle;
            }

            .content {
                text-align: center;
                display: inline-block;
            }

            .title {
                font-size: 96px;
            }
        </style>
    </head>
    <body>
        <div class="container">
            <div class="content">
                <div class="title">Laravel 5</div>
            </div>
        </div>
    </body>
</html>
-->