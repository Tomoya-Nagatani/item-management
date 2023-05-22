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
                            <label for="name" class="form-label">名前</label>
                            <input type="text" name="name" class="form-control" id="user-name" value="{{$item->name}}">
                        </div>
                    <!-- 会社名 -->
                        <div class="mb-4">
                            <label for="company" class="form-label">会社名</label>
                            <input type="text" name="company" class="form-control" id="company" value="{{$item->company}}">
                        </div>
                    <!-- 電話番号 -->
                        <div class="mb-4">
                            <label for="phone" class="form-label">電話番号</label>
                            <input type="text" name="phone" class="form-control" id="phone" value="{{$item->phone}}">
                        </div>
                    <!-- 住所 -->
                    <div class="mb-4">
                    <label for="address" class="form-label">住所</label>
                    <input type="text" name="address" class="form-control" id="address" value="{{$item->address}}">
                    </div>
                    <!-- ギフト -->
                    <div class="mb-4">
                    <label for="product" class="form-label">ギフト</label>
                    <input type="text" name="product" class="form-control" id="product" value="{{$item->product}}">
                    </div>
                    <!-- 詳細 -->
                        <div class="mb-4">
                            <label for="detail" class="form-label">詳細</label>
                            <input type="text" name="detail" class="form-control" id="detail" value="{{$item->detail}}">
                        </div>   
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

           