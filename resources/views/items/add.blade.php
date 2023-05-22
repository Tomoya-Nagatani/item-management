@extends('adminlte::page')

@section('title', '商品登録')

@section('content_header')
    <h1>新規登録</h1>
@stop

@section('content')
    <div class="row">
        <div class="col-md-10">
            @if ($errors->any())
                <div class="alert alert-danger">
                    <ul>
                       @foreach ($errors->all() as $error)
                          <li>{{ $error }}</li>
                       @endforeach
                    </ul>
                </div>
            @endif

            <div class="card card-primary">
                <form method="POST" enctype="multipart/form-data">
                    @csrf
                    <div class="card-body">
                        <div class="form-group">
                            <label for="name">名前</label>
                            <input type="text" class="form-control" id="name" name="name" placeholder="名前">
                        </div>

                        <div class="form-group">
                            <label for="company">会社名</label>
                            <input type="text" class="form-control" id="company" name="company" placeholder="会社名">
                        </div>

                        <div class="form-group">
                            <label for="phone">電話番号</label>
                            <input type="text" class="form-control" id="phone" name="phone" placeholder="電話番号">
                        </div>

                        <div class="form-group">
                            <label for="address">住所</label>
                            <input type="text" class="form-control" id="address" name="address" placeholder="住所">
                        </div>

                        <div class="form-group">
                            <label for="product">ギフト</label>
                                <select id="product" name="product">
                                    <option value="ビール">ビール</option>
                                    <option value="ジュース">ジュース</option>
                                    <option value="ゼリー">ゼリー</option>
                                    <option value="その他">その他</option>
                                </select>
                        </div>

                        <div class="form-group">
                            <label for="detail">詳細</label>
                            <input type="text" class="form-control" id="detail" name="detail" placeholder="ギフトがその他/ 喪中の場合、ここに記載">
                        </div>


                    <div class="card-footer">
                        <button type="submit" class="btn btn-primary">登録</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
@stop

@section('css')
@stop

@section('js')
@stop
