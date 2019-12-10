@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
        <a href="{{ route('custom.create') }}" class="btn btn-primary">新規投稿する</a>
            <div class="card">
                <div class="card-header">Dashboard</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    ログインしました！
                    <p>ようこそ！{{ Auth::user()->name }}さん！</p>
                    
                    {{ Auth::id() }}
                    <p>あなたの投稿は以下の通りです。</p>
                    
                    @foreach ($custom as $manu)
                        <div class="card mb-3" style="width:30rem">
                            <img class="card-img-top" src="{{ asset('/storage/img/'.$manu->img) }}">
                            <div class="card-body">
                                <h5 class="card-title">{{ $manu->title }}</h5>
                                <p class="card-text">
                                    {!! nl2br(e($manu->customs)) !!}
                                </p>
                                <a href="#" class="btn btn-primary">投稿を編集する</a>
                            </div>
                        </div>
                    @endforeach
                    
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
