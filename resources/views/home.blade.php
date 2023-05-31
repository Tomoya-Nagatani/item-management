@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">
                トップページ
                </div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                皆様、当ページをご利用いただき誠にありがとうございます。
                管理人の長谷です。<p>当サイトのご案内をさせていただきます。</p>
                [使い方]<br>
                <a href="/items/add">1. 新規登録</a><br>
                <p>→普段、年賀状を受け取っている人の情報を入力してください。</p>
                <a href="/items">2.名簿一覧</a><br>
                <p>→1で登録した人の情報を、一覧でご確認いただけます。</p>
               
                [目的]<br>
                普段から送っている人・今年は喪中の人・仕事関係の人、などジャンルに分けて、
                一覧で整理できます。<br>また、過去３年間で相手からの受信状況を登録することができるため、<br>
                届いていない人なども、簡単に仕分けれます。

                </div>
            </div>
        </div>
    </div>
</div>
@endsection