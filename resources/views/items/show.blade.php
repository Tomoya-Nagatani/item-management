@extends('layouts.app')
@section('content')
<div class="container">
    <!-- タイトル -->
    <div class="col-12 mt-1">
        <h4 class="text-secondary">{{$item->name}}</h4>
    </div>
    <!-- 入力内容を返す -->
    <div class="card card-purple">
        <div class="card-body">
            <div class="form-group">
                <div class="control-group">
                         <!-- 名前 -->
                        <div class="mb-4">
                        <label for="name" class="form-label">商品名</label><br>
                        {{$item->name}}
                        </div>
                        <!-- 商品名 -->
                        <div class="mb-4">
                        <label for="price" class="form-label">価格</label><br>
                        {{ '¥'.$item->price }}
                        </div>
                        <!-- 在庫 -->
                        <div class="mb-4">
                        <label for="stocks" class="form-label">在庫数</label><br>
                        {{$item->stocks}}
                        </div>
                        <!-- 詳細 -->
                        <div class="mb-4">
                        <label for="detail" class="form-label">詳細</label><br>
                        {{$item->detail}}
                        </div>   
                        <!-- 商品画像 -->
                        <div class="mb-4">
                        <label for="image" class="form-label">商品画像</label><br>
                        {{$item->image}}
                        </div>   
                </div>
            </div>
        </div>
    </div>

    <!-- 変更するボタン・削除するボタンの設置    -->
<div class="col-4">
    <form action="{{ route('items.edit', $item->id) }}" method="post">
        @csrf
        @method('put')
        <input type="hidden" name="id" id="item-id" class="form-control" value="{{$item->id}}">
</div>
    <div class="card-footer text-center clearfix ">
        <a href="{{ route('items.edit',$item->id)}}"><button type="button" class="btn btn-primary">変更する</button></a>    
        <a href="{{ route('items.destroy', $item->id) }}" onclick="return confirm('削除してもよろしいですか？')"><button type="button" class="btn btn-outline-danger">削除する</button></a>
    </form>
    </div>


@endsection
