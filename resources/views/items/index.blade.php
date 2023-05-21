@extends('adminlte::page')
@section('title', '商品一覧')
@section('content_header')
    <h1>商品一覧</h1>
    <div class="input-group mt-3 justify-content-end">
        <a href="{{ url('items/add') }}" class="btn btn-primary">商品登録</a>
    </div>
    @stop



<!-- 編集・削除時のフラッシュメッセージ -->
@if(session('message'))
<div class="alert alert-success">{{session('message')}}</div>
@endif

<!-- 検索フォーム -->
@section('content')
<div class="card">
    <div class="card-header bg-info">
        <h3 class="card-title">検索条件</h3>
    </div>
    <div class="card-header">
        <div class="form-group">
             <div class="control-group" id="stockName">
                <label class="col-sm-2 control-label"></label>
                    <form method="get" action="{{ route('search')}}" class="form-inline">
                        <div class="col-sm-4">
                            <input type="text" name="keyword" class="form-control" size="30" maxlength="100" placeholder="名前・詳細で検索">
                        </div>
            </div>
        </div>
    </div>
        <div class="card-footer text-center">
            <button type="submit" class="btn btn-secondary">検索</button>
        </div>
                    </form>
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
                <th>@sortablelink('price', '価格')</th>
                <th>@sortablelink('stocks', '在庫数')</th>
                <th>@sortablelink('detail', '詳細')</th>
                <th>編集</th>
                                
            </tr>
        </thead>
    <tbody>
        @foreach ($items as $item)
                                    <td>{{ $item->id }}</td>
                                    <td>{{ $item->name }}</td>
                                    <td>{{ '¥'.$item->price }}</td>
                                    <td>{{ $item->stocks }}</td>
                                    <td>{{ $item->detail }}</td>
                                    <td><a href="{{ route('items.show',$item->id)}}"><button type="button" class="btn btn-outline-info">編集</button></a></td>                                   
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
