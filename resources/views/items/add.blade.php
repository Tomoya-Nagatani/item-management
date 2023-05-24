@extends('adminlte::page')

@section('title', '商品登録')

@section('content_header')
    <h1>新規登録</h1>
@stop

@section('content')
<script src="https://ajaxzip3.github.io/ajaxzip3.js"></script>
<script src="{{ asset('public/js/app.js') }}"></script>

<!-- 注意文の表示 -->
<div class="row">
    <div class="col-md-12">
        @if ($errors->any())
            <div class="alert alert-danger">
                <ul>
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        @endif

<form method="POST" enctype="multipart/form-data">
@csrf
    <div class="row">
        <div class="col-md-3">
            <label for="name1" class="form-label">名前</label>
            <input type="text" class="form-control" id="name" name="name">
        </div>
    </div>

    <div class="row">
        <div class="col-md-2">
            <label for="zipcode" class="form-label">郵便番号</label>
            <input type="text" name="zipcode" class="form-control" placeholder="〒000-0000" onKeyUp="AjaxZip3.zip2addr(this, '', 'address', 'address');">
        </div>
        <div class="col-md-4">
            <label for="address" class="form-label">住所</label>
            <input type="text" name="address" class="form-control">
        </div>
    </div>

    <div class="row">
        <div class="col-md-2">
            <label class="my-1 mr-2" for="content">内容</label>
                <select class="custom-select my-1 mr-sm-2" id="content" name="content">
                    <option selected></option>
                    <option value="年賀">年賀</option>
                    <option value="喪中">喪中</option>
                    <option value="寒中">寒中</option>
                    <option value="なし">なし</option>
                </select>
        </div>
    </div>
    
    <div class="row">
        <div class="col-md-6">
            <label for="memo">メモ</label>
            <input type="text" class="form-control" id="memo" name="memo">
        </div>
    </div>
    
   
        <button type="submit" class="btn btn-primary">登録</button>
    
</form>





   


@stop

@section('css')
@stop

@section('js')
@stop
