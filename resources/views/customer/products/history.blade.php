@extends('layouts.base')

@section('content')
    <div class="container">
        <h1 class="h1 mb-3">購入履歴</h1>
        <div>
            <table class="table table-striped">
                <tr>
                    <th>商品名</th>
                    <th>価格</th>
                    <th>個数</th>
                    <th>金額</th>
                    <th>購入日</th>
                    <th>詳細</th>
                </tr>
                <tr>
                    <td>タウリン</td>
                    <td>¥100</td>
                    <td>100個</td>
                    <td>¥10000</td>
                    <td>YYYY/MM/DD</td>
                    <td>
                        <a href="" class="btn btn-primary">詳細</a>
                    </td>
                </tr>
                <tr>
                    <td>タウリン</td>
                    <td>¥100</td>
                    <td>100個</td>
                    <td>¥10000</td>
                    <td>YYYY/MM/DD</td>
                    <td>
                        <a href="" class="btn btn-primary">詳細</a>
                    </td>
                </tr>
                <tr>
                    <td>タウリン</td>
                    <td>¥100</td>
                    <td>100個</td>
                    <td>¥10000</td>
                    <td>YYYY/MM/DD</td>
                    <td>
                        <a href="" class="btn btn-primary">詳細</a>
                    </td>
                </tr>
            </table>
        </div>
    </div>
@endsection