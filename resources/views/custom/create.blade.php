@extends('layouts.app')

@section('content')

<div class="container mt-4">
    <div class="border p-2">
        <h1 class="h5 mb-5">新規投稿する</h1>

        <form action="{{ route('custom.store') }}" method="post" enctype="multipart/form-data">
            @csrf
            {{ csrf_field() }}
            <fieldset>
                <div class="form-group">
                    <label for="title">タイトル</label>
                    <input type="text" name="title" id="title" class="form-control {{ $errors->has('title') ? 'is-invalid' : '' }}" value="{{old('title')}}">
                    @if ($errors->has('title'))
                    <p class="invalid-feedback">必須入力です。</p>
                    @endif
                </div>
                <div>
                    <select-bike></select-bike>
                </div>
                <div class="form-group">
                    <label for="custom">カスタム内容</label>
                    <textarea name="customs" id="customs" cols="" rows="6" class="form-control"></textarea>
                </div>
                <div class="form-group">
                    <label for="file">ファイルを選択する</label>
                    <input type="file" name="file" id="file" class="form-control">
                </div>

                <div class="mt-5">
                    <a href="{{ route('home') }}" class="btn btn-secondary">キャンセル</a>
                    <button type="submit" class="btn btn-primary">投稿する</button>
                </div>
            </fieldset>
        </form>
        
    </div>
</div>

@endsection