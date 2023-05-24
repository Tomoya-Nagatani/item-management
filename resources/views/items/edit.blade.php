@extends('layouts.app')
@section('content')
<div class="container">
    <!-- タイトル -->
    <h3>編集画面</h3>

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
                    <!-- 郵便番号 -->
                        <div class="mb-4">
                            <label for="zipcode" class="form-label">郵便番号</label>
                            <input type="text" name="zipcode" class="form-control" id="zipcode" value="{{$item->zipcode}}">
                        </div>
                    <!-- 住所 -->
                    <div class="mb-4">
                    <label for="address" class="form-label">住所</label>
                    <input type="text" name="address" class="form-control" id="address" value="{{$item->address}}">
                    </div>
                    <!-- ギフト -->
                    <div class="mb-4">
                    <label for="content" class="form-label">内容</label>
                                <select class="custom-select my-1 mr-sm-2" id="content" name="content">
                                    <option selected></option>
                                    <option value="年賀">年賀</option>
                                    <option value="喪中">喪中</option>
                                    <option value="寒中">寒中</option>
                                    <option value="なし">なし</option>
                                </select>
                        </div>
                    <!-- 詳細 -->
                        <div class="mb-4">
                            <label for="memo" class="form-label">メモ</label>
                            <input type="text" name="memo" class="form-control" id="memo" value="{{$item->memo}}">
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

           