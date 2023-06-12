@extends('adminlte::page')

@section('title', '新規登録')

@section('content_header')

@stop

@section('content')
<script src="https://ajaxzip3.github.io/ajaxzip3.js"></script>
<script src="{{ asset('public/js/app.js') }}"></script>

<div class="container">
    <div class="card">
        <div class="card-header">
            <h3>新規登録</h3>
        </div>

        <div class="card-body">   
            <form method="POST" enctype="multipart/form-data">
            @csrf
            <div class="form-group">
                <div class="control-group">
                    <!-- 名前 -->
                    <div class="mb-4">
                        <label for="name" class="form-label">名前</label>
                        <input type="text" name="name" class="form-control" id="name" required>
                    </div>
                    <!-- 郵便番号 -->
                    <div class="mb-4">
                        <label for="zipcode" class="form-label">郵便番号</label>
                        <input type="text" name="zipcode" class="form-control" placeholder="〒000-0000" required onKeyUp="AjaxZip3.zip2addr(this, '', 'address', 'address');">
                    </div>
                    <!-- 住所 -->
                    <div class="mb-4">
                        <label for="address" class="form-label">住所</label>
                        <input type="text" name="address" class="form-control" id="address" required>
                    </div>
                    <!-- 2021年～2023年 -->
                    <div class="mb-4">
                        <label for="history" class="form-label">受信履歴</label>
                    <div class="row mb-4">
                        <div class="col-md-2">
                            <label class="my-1 mr-2" for="content">2021年</label>
                                <select class="custom-select my-1 mr-sm-2" id="content" name="content2021" required>
                                    <option selected></option>
                                    <option value="✅">✅</option>
                                    <option value="喪中">喪中</option>
                                    <option value="❌">❌</option>
                                </select>
                        </div>
                        <div class="col-md-2">
                            <label class="my-1 mr-2" for="content">2022年</label>
                                <select class="custom-select my-1 mr-sm-2" id="content" name="content2022" required>
                                    <option selected></option>
                                    <option value="✅">✅</option>
                                    <option value="喪中">喪中</option>
                                    <option value="❌">❌</option>
                                </select>
                        </div>   
                        <div class="col-md-2">
                            <label class="my-1 mr-2" for="content">2023年</label>
                                <select class="custom-select my-1 mr-sm-2" id="content" name="content" required>
                                    <option selected></option>
                                    <option value="✅">✅</option>
                                    <option value="喪中">喪中</option>
                                    <option value="❌">❌</option>
                                </select>
                        </div>
                    </div>
                    <!-- 分類 -->
                    <div class="col-mb-4">
                            <label class="my-1 mr-2" for="category">分類</label>
                                <select class="custom-select my-1 mr-sm-2" id="category" name="category" required>
                                    <option selected></option>
                                    <option value="仕事">仕事</option>
                                    <option value="プライベート">プライベート</option>
                                    <option value="その他">その他</option>
                                </select>
                    </div>
                    <!-- メモ -->
                    <div class="col-mb-4">
                            <label for="memo" class="form-label">メモ</label>
                            <input type="text" name="memo" class="form-control" id="memo" >
                    </div>   
                </div>
            </div>
        </div>
            <div class="card-footer">
                <button type="submit" class="btn btn-primary">登録</button>
        </form>
            </div>
    </div>
</div>
@stop

@section('css')

@stop

@section('js')

@stop
