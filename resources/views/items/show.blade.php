@extends('layouts.app')
@section('content')
<div class="container">
    <!-- 入力内容を返す -->
    <div class="card card-purple">
        <div class="card-body">
            <div class="form-group">
                <div class="control-group">
                         <!-- 名前 -->
                        <div class="mb-4">
                        <label for="name" class="form-label">名前</label><br>
                        <span class="border-bottom">{{$item->name}}</span>
                        </div>
                        <!-- 郵便番号 -->
                        <div class="mb-4">
                        <label for="zipcode" class="form-label">郵便番号</label><br>
                        <span class="border-bottom">{{$item->zipcode}}</span>
                        </div>
                        <!-- 住所 -->
                        <div class="mb-4">
                        <label for="address" class="form-label">住所</label><br>
                        <span class="border-bottom"> {{$item->address}}</span>
                        </div>
                        <!-- ギフト -->
                        <div class="mb-4">
                        <label for="content" class="form-label">内容</label><br>
                        <span class="border-bottom"> {{$item->content}}</span>
                        </div>
                        <!-- 詳細 -->
                        <div class="mb-4">
                        <label for="memo" class="form-label">メモ</label><br>
                        <span class="border-bottom"> {{$item->memo}}</span>
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
        <a href="{{ route('items.destroy', $item->id) }}"  onclick="return confirm('削除してもよろしいですか？')">
        <button type="button" class="btn btn-outline-danger">削除する</button></a>
    </form>
    </div>


@endsection
