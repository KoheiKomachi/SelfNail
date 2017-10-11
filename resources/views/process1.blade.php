@extends('layouts.app')

@section('content')
    @if (Auth::check())
        <h1 class=h1-design>
            <span class="design-title">デザイン手順</span>
        </h1>
        <div class="process">
            <div class="col-sm-5 col-md-5 col-lg-5 image-1">
                <img src="{{ asset("images/sample1.png") }}" alt="イメージ画像" class="img-responsive">
            </div>
            <div class="col-sm-7 col-md-7 col-lg-7">
                <h4>材料</h4>
                <table class="table-detail">
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
            </div>
        </div>
        <div class="process">
            <h3 style="font-size:24px; font-weight:700; color:#A0A0FF;">1</h3>
            <div class="p1-image">
                <img src="{{ asset("images/sample2.png") }}" alt="イメージ画像" class="img-responsive col-sm-4">
            </div>
            <div class="col-sm-8 p1-content">
                <h4>手順1の解説</h4>
                <p>ああああああああああああああああああああああああああああああああああああああああああああああああああああああああああああああ</p>
                <h4>手順1のポイント</h4>
                <p>ああああああああああああああああああああああああああああああああああああああああああああああああああああああああああああああ</p>
            </div>
        </div>
        <div class="process">
            <div>
                <h3 style="font-size:24px; font-weight:700; color:#A0A0FF;">2</h3>
            </div>
            <div class="p1-image">
                <img src="{{ asset("images/sample2.png") }}" alt="イメージ画像" class="img-responsive col-sm-4">
            </div>
            <div class="col-sm-8 p1-content">
                <h4>手順1の解説</h4>
                <p>ああああああああああああああああああああああああああああああああああああああああああああああああああああああああああああああ</p>
                <h4>手順1のポイント</h4>
                <p>ああああああああああああああああああああああああああああああああああああああああああああああああああああああああああああああ</p>
            </div>
        </div>
        <div class="post">
            <h4>コメントを記入する（感想や評価など）</h4>
            <aside class="col-sm-10 col-md-8">
                {!! Form::open(['route' => 'comments.store']) !!}
                    <div class="form-group">
                        {!! Form::textarea('content', old('content'), ['class' => 'form-control', 'rows' => '5']) !!}
                    </div>
                    {!! Form::submit('投稿', ['class' => 'btn btn-primary btn-block']) !!}
                {!! Form::close() !!}
            </aside>
            </div>
        </div>
        
    @else

    @endif
@endsection