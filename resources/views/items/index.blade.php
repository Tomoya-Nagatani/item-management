@extends('adminlte::page')
@section('title', 'タイトル')
@section('content_header')
    <h1>名簿一覧</h1>
    <div class="input-group mt-3 justify-content-end">
        <a href="{{ url('items/add') }}" class="btn btn-primary">新規登録</a>
    </div>
    @stop



<!-- 編集・削除時のフラッシュメッセージ -->
@if(session('message'))
<div class="alert alert-success">{{session('message')}}</div>
@endif

<!-- 検索フォームのタイトル -->
@section('content')
<div class="card">
    <div class="card-header bg-info">
        <h3 class="card-title">検索条件</h3>
    </div>
    <!-- 検索フォーム -->
    <div class="card-header">
        <div class="form-group">
        <form method="get" action="{{ route('search')}}" class="form-inline">
            <div class="col-sm-4">
                <input type="text" name="keyword" class="form-control" size="30" maxlength="100" placeholder="名前・内容で検索">
            </div>
                <div class="text-center">
                    <button type="submit" class="btn btn-primary">検索</button>
                    <button type="submit" class="btn btn-secondary">
                        <a href="{{ route('index') }}" class="text-white text-decoration-none">クリア</a></button>
                </div>
        </div>

            </form>
        </div>
    </div>
</div>

<!-- 検索結果 -->
<div class="card-header bg-info">
    <h3 class="card-title">検索結果</h3>
        <!-- CSV出力 -->
        <form action="{{ route('exportexcel') }}" method="GET">
	    @csrf
        <div class="d-grid gap-2 d-md-flex justify-content-md-end">
		        <button class="btn btn-light btn-sm">CSV出力</button>
</div>
	      
        </form>
</div>
<!-- 検索結果一覧 -->
<div class="card-body table-responsive p-0">
     <table class="table table-hover text-nowrap">
        <thead>
            <tr>
                <th>@sortablelink('id', 'ID')</th>
                <th>@sortablelink('name', '名前')</th>
                <th>@sortablelink('zipcode', '郵便番号')</th>
                <th>@sortablelink('address', '住所')</th>
                <th>@sortablelink('content', '内容')</th>
                <th>@sortablelink('memo', 'メモ')</th>
                <th>編集</th>
                                
            </tr>
        </thead>
    <tbody>
        @foreach ($items as $item)
                                    <td>{{ $item->id }}</td>
                                    <td>{{ $item->name }}</td>
                                    <td>{{ $item->zipcode }}</td>
                                    <td>{{ $item->address }}</td>
                                    <td>{{ $item->content }}</td>
                                    <td>{{ $item->memo }}</td>
                                    <td><a href="{{ route('items.show',$item->id)}}"><button type="button" class="btn btn-outline-info">詳細</button></a></td>                                   
                            </tr>
                            @endforeach
                        </tbody>
                    </table>
                    {{$items->links()}}
                </div>
            </div>
        </div>
    </div>

 
   
    
@stop

@section('css')
@stop

@section('js')
@stop
