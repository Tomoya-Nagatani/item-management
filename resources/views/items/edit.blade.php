@extends('layouts.app')
@section('content')
<div class="container">
    <!-- タイトル -->
    <div class="col-12 mt-1">
        <h4 class="text-secondary">編集</h4>
    </div>

    <form action="{{ route('items.update', $item->id) }}" method="post">
        @csrf
        @method('put')

        <div class="card card-purple">
            <div class="card-body">
                <div class="form-group">
                    <div class="control-group">
                    <!-- 名前 -->
                        <div class="mb-4">
                            <label for="name" class="form-label">商品名</label>
                            <input type="text" name="name" class="form-control" id="user-name" value="{{$item->name}}">
                        </div>
                    <!-- 商品名 -->
                        <div class="mb-4">
                            <label for="price" class="form-label">価格</label>
                            <input type="text" name="price" class="form-control" id="price" value="{{$item->price}}">
                        </div>
                    <!-- 在庫 -->
                        <div class="mb-4">
                            <label for="stocks" class="form-label">在庫数</label>
                            <input type="text" name="stocks" class="form-control" id="stocks" value="{{$item->stocks}}">
                        </div>
                    <!-- 詳細 -->
                        <div class="mb-4">
                            <label for="detail" class="form-label">詳細</label>
                            <input type="text" name="detail" class="form-control" id="detail" value="{{$item->detail}}">
                        </div>   
                    <!-- 商品画像
                        <div class="mb-4">
                            <label for="image" class="form-label">商品画像</label>
                            <input type="file" name="image" class="form-control" id="image" value="{{$item->image}}">
                        </div>  -->
                    </div> 
                </div>
            </div>
        </div>

            <input type="hidden" name="id" id="item-id" class="form-control" value="{{$item->id}}">
            <div class="card-footer">
                <button type="submit" class="btn btn-primary">登録する</button>
            </div>
    </form>
</div>


@endsection

           