@extends('layouts.app')
@section('title', '編集画面')
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
                            <input type="text" name="name" class="form-control" id="user-name" value="{{$item->name}}" required>
                        </div>
                    <!-- 郵便番号 -->
                        <div class="mb-4">
                            <label for="zipcode" class="form-label">郵便番号</label>
                            <input type="text" name="zipcode" class="form-control" id="zipcode" value="{{$item->zipcode}}" required>
                        </div>
                    <!-- 住所 -->
                    <div class="mb-4">
                    <label for="address" class="form-label">住所</label>
                    <input type="text" name="address" class="form-control" id="address" value="{{$item->address}}" required>
                    </div>
                    <!-- 2021年～2023年 -->
                    <div class="row mb-4">
                        <div class="col-md-2">
                            <label class="my-1 mr-2" for="content">2021年</label>
                                <select class="custom-select my-1 mr-sm-2" id="content2021" name="content2021" value="{{$item->content2021}}" required>
                                  
                                    <option value="✅" @if($item->content2021 == '✅') selected @endif>✅</option>
                                    <option value="喪中" @if($item->content2021 == '喪中') selected @endif>喪中</option>
                                    <option value="❌" @if($item->content2021 == '❌') selected @endif>❌</option>
                                </select>
                        </div>
                        <div class="col-md-2">
                            <label class="my-1 mr-2" for="content">2022年</label>
                                <select class="custom-select my-1 mr-sm-2" id="content" name="content2022" required>
                                 
                                    <option value="✅" @if($item->content2022 == '✅') selected @endif>✅</option>
                                    <option value="喪中" @if($item->content2022 == '喪中') selected @endif>喪中</option>
                                    <option value="❌" @if($item->content2022 == '❌') selected @endif>❌</option>
                                </select>
                        </div>   
                        <div class="col-md-2">
                            <label class="my-1 mr-2" for="content">2023年</label>
                                <select class="custom-select my-1 mr-sm-2" id="content" name="content" required>
                                  
                                    <option value="✅" @if($item->content == '✅') selected @endif>✅</option>
                                    <option value="喪中" @if($item->content == '喪中') selected @endif>喪中</option>
                                    <option value="❌" @if($item->content == '❌') selected @endif>❌</option>
                                </select>
                        </div>
                    </div>
                    <div class="col-mb-4">
                            <label class="my-1 mr-2" for="category">分類</label>
                                <select class="custom-select my-1 mr-sm-2" id="category" name="category" value="{{$item->category}}" required>                                  
                                    <option value="仕事" @if($item->category == '仕事') selected @endif >仕事</option>
                                    <option value="プライベート" @if($item->category == 'プライベート') selected @endif >プライベート</option>
                                    <option value="その他" @if($item->category == 'その他') selected @endif>その他</option>
                                </select>
                        </div>
                    <!-- メモ -->
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

           