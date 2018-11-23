@extends('layouts.base')

@section('content')
    <div class="container">
        <h1 class="h1 mb-3">ユーザ情報</h1>
        <div>
            <div class="mb-2">
                <img src="http://placehold.it/200x200&text=icon" alt="">
            </div>
            <table class="table">
                <tr>
                    <th>ユーザID</th>
                    <td>mijumaru</td>
                </tr>
                <tr>
                    <th>ユーザ名</th>
                    <td>ミジュマル</td>
                </tr>
                <tr>
                    <th>性別</th>
                    <td>男</td>
                </tr>
                <tr>
                    <th>住所</th>
                    <td>hogehogeunko</td>
                </tr>
                <tr>
                    <th>年齢</th>
                    <td>6</td>
                </tr>
                <tr>
                    <th>メールアドレス</th>
                    <td>hoge&#64;hoge.com</td>
                </tr>
                <tr>
                    <th>チャージ残高</th>
                    <td>¥100</td>
                </tr>
                <tr>
                    <th>登録日</th>
                    <td>YYYY/MM/DD</td>
                </tr>
            </table>
            <div>
                <a href="{{ url('/customer/user/edit') }}">ユーザ情報編集</a>
            </div>
        </div>
    </div>
@endsection