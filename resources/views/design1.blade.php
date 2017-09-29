@extends('layouts.app')

@section('content')
    @if (Auth::check())
        <h1>デザイン詳細</h1>
        <div class="design-1">
            <figure class="image-1">
                <img src="{{ asset("images/sample1.png") }}" alt="イメージ画像">
            </figure>
            <h4>デザイン1の詳細情報</h4>
            <table class="table-1">
                <tbody>
                    <tr>
                        <th>カラー</th>
                        <td>レッド</td>
                    </tr>
                    <tr>
                        <th>カラー</th>
                        <td>ピンク ・ ホワイト ・ シルバー</td>
                    </tr>
                    <tr>
                        <th>ジャンル</th>
                        <td>ジェルネイル</td>
                    </tr>
                    <tr>
                        <th>利用シーン</th>
                        <td>オールシーズン ・ ブライダル ・ デート ・ 旅行</td>
                    </tr>
                    <tr>
                        <th>価格</th>
                        <td>2500円</td>
                    </tr>
                    <tr>
                        <th>所要時間</th>
                        <td>30分</td>
                    </tr>
                </tbody>
            </table>
            <figure class="image-1-1">
                <img src="{{ asset("images/sample1.png") }}" alt="イメージ画像">
            </figure>
            <figure class="image-1-2">
                <img src="{{ asset("images/sample1.png") }}" alt="イメージ画像">
            </figure>
            <figure class="image-1-3">
                <img src="{{ asset("images/sample1.png") }}" alt="イメージ画像">
            </figure>
        </div>
        <h2><a href="/process/1">このデザインの手順</a></h2>
        <div class=point1>
            <h4>コツ・ポイント</h4>
            <p>ああああああああああああああああああああああああああああああああああああああああああああああああああああああああああああああ</p>
        </div>
        <div class=commet1>
            <h4>デザイナーのコメント</h4>
            <p>ああああああああああああああああああああああああああああああああああああああああああああああああああああああああああああああ</p>
        </div>
        
        
        
<!--            <div class="content-1">
                <h2>デザイン1の詳細情報</h2>
                <p>デザインの説明</p>
                <p>ああああああああああああああああああああああああああああああああああああああああああああああああああああああああああああああ</p>
            </div>
        </div>
-->
    @else

    @endif
@endsection