@extends('layouts.app')

@section('content')
    @if (Auth::check())
        <h1 class=h1-design>
            <span class="design-title">デザイン詳細</span>
        </h1>
        <div class="design-detail">
            <div class="col-sm-5 col-md-5 col-lg-5 ">
                <img src="{{ asset("images/sample1.png") }}" alt="イメージ画像" class="img-responsive">
            </div>
            <div class="col-sm-7">
                <h4>デザイン1の詳細情報</h4>
                <table class="table-detail">
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
            </div>
        </div>
        <div class="ref-image">
            <div class="col-sm-4 col-md-4 col-lg-4 image-1">
                <img src="{{ asset("images/sample1.png") }}" alt="イメージ画像" class="img-responsive">
            </div>
            <div class="col-sm-4 col-md-4 col-lg-4 image-2">
                <img src="{{ asset("images/sample1.png") }}" alt="イメージ画像" class="img-responsive">
            </div>
            <div class="col-sm-4 col-md-4 col-lg-4 image-3">
                <img src="{{ asset("images/sample1.png") }}" alt="イメージ画像" class="img-responsive">
            </div>
        </div>
        <h2><a href="/process/1">このデザインの手順</a></h2>
        <div class="flex">
            <div class="col-sm-6 point1">
                <h4>コツ・ポイント</h4>
                <p>ああああああああああああああああああああああああああああああああああああああああああああああああああああああああああああああ</p>
            </div>
            <div class="col-sm-6 commet1">
                <h4>デザイナーのコメント</h4>
                <p>ああああああああああああああああああああああああああああああああああああああああああああああああああああああああああああああ</p>
            </div>
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