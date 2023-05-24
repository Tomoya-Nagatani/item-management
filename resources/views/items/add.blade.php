@extends('adminlte::page')

@section('title', '商品登録')

@section('content_header')
    <h1>新規登録</h1>
@stop

@section('content')
<script src="https://ajaxzip3.github.io/ajaxzip3.js"></script>
<script src="{{ asset('public/js/app.js') }}"></script>


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

    <div class="card card-primary">  
        <form method="POST" enctype="multipart/form-data">
             @csrf
                <div class="card-body">
                    <div class="col col-lg-7">
                        <div class="row mb-3">
                            <label for="name"><span class="text-danger">*</span>名前</label>
                            <input type="text" class="form-control" id="name" name="name" >
                        </div>
                           
                        <div class="row mb-3">
                            <label for="company"><span class="text-danger">*</span>会社名</label>
                            <input type="text" class="form-control" id="company" name="company" >
                        </div>

                        <div class="row mb-3">
                            <label for="phone"><span class="text-danger">*</span>電話番号</label>
                            <input type="text" class="form-control" id="phone" name="phone">
                        </div>

                        
                       
                        <label for="zipcode"><span class="text-danger">*</span>郵便番号</label>

                        <div>郵便番号：
                            <input type="text"  name="zip21" maxlength="3" size="4">-
                            <input type="text" id="zipcode" name="zip22" maxlength="4" size="5" onkeyup="AjaxZip3.zip2addr('zip21', 'zip22', 'pref21', 'addr21', 'strt21');">
                        </div>

                        <div>都道府県：
                            <input type="text" name="pref21" size="30"  id="address" name="address" >
                        </div>

                        <div>市区町村：
                            <input type="text" name="addr21" size="30" id="address" name="address">
                        </div>

                        <div>町名番地：
                            <input type="text" name="strt21" size="30" id="address" name="address">
                        </div>

                        <div class="row mb-3">
                            <label class="my-1 mr-2" for="product"><span class="text-danger">*</span>内容</label>
                                <select class="custom-select my-1 mr-sm-2" id="product" name="product">
                                    <option selected></option>
                                    <option value="年賀">年賀</option>
                                    <option value="喪中">喪中</option>
                                    <option value="寒中">寒中</option>
                                    <option value="なし">なし</option>
                                </select>
                        </div>

                        <div class="row mb-3">
                            <label for="detail">メモ</label>
                            <input type="text" class="form-control" id="detail" name="detail">
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
