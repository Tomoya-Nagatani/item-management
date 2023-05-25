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
    <div class="row mb-3">
        <div class="col-md-3">
            <label for="name1" class="form-label">名前</label>
            <input type="text" class="form-control" id="name" name="name">
        </div>
    </div>

    <div class="row mb-3">
        <div class="col-md-2">
            <label for="zipcode" class="form-label">郵便番号</label>
            <input type="text" name="zipcode" class="form-control" placeholder="〒000-0000" onKeyUp="AjaxZip3.zip2addr(this, '', 'address', 'address');">
        </div>
        <div class="col-md-4">
            <label for="address" class="form-label">住所</label>
            <input type="text" name="address" class="form-control">
        </div>
    </div>

    <div class="row mb-3">
        <div class="col-md-2">
            <label class="my-1 mr-2" for="content">2021年</label>
                <select class="custom-select my-1 mr-sm-2" id="content" name="content2021">
                    <option selected></option>
                    <option value="✅">✅</option>
                    <option value="喪中">喪中</option>
                    <option value="❌">❌</option>
                </select>
        </div>
         <div class="col-md-2">
            <label class="my-1 mr-2" for="content">2022年</label>
                <select class="custom-select my-1 mr-sm-2" id="content" name="content2022">
                    <option selected></option>
                    <option value="✅">✅</option>
                    <option value="喪中">喪中</option>
                    <option value="❌">❌</option>
                </select>
        </div>   
        <div class="col-md-2">
            <label class="my-1 mr-2" for="content">2023年</label>
                <select class="custom-select my-1 mr-sm-2" id="content" name="content">
                    <option selected></option>
                    <option value="✅">✅</option>
                    <option value="喪中">喪中</option>
                    <option value="❌">❌</option>
                </select>
        </div>
    </div>

  
    <div class="col-md-2">
            <label class="my-1 mr-2" for="category">カテゴリー</label>
                <select class="custom-select my-1 mr-sm-2" id="category" name="category">
                    <option selected></option>
                    <option value="仕事">仕事</option>
                    <option value="プライベート">プライベート</option>
                    <option value="その他">その他</option>
                </select>
        </div>

    <div class="row mb-3">
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
