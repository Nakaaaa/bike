@extends('layouts.app')

@section('content')
<div class="container">
    <!-- ここは編集画面です。
    <p class="h1">{{ $custom->title }}</p>
    <p class="h2">{!! nl2br(e($custom->customs)) !!}</p>
    <img class="" src="{{ asset('/storage/img/'.$custom->img) }}" height="100"> -->
    <div class="border p-2">
        <h1 class="h5 mb-5">投稿を修正する</h1>

        <form action="{{ route('custom.update', ['custom'=> $custom]) }}" method="post" enctype="multipart/form-data">
            @csrf
            @method('PUT')
            {{ csrf_field() }}
            <fieldset>
                <div class="form-group">
                    <label for="title">タイトル</label>
                    <input type="text" name="title" id="title" class="form-control {{ $errors->has('title') ? 'is-invalid' : '' }}" value="{{old('title') ?: $custom->title}}">
                    @if ($errors->has('title'))
                    <p class="invalid-feedback">必須入力です。</p>
                    @endif
                </div>
                <div>
                    <select-bike></select-bike>
                </div>
                <div class="form-group">
                    <label for="custom">カスタム内容</label>
                    <textarea name="customs" id="customs" cols="" rows="6" class="form-control">{{ old('customs') ?: $custom->customs }}</textarea>
                </div>
                <div class="form-group">
                    <label for="file">ファイルを選択する</label>
                    <input type="file" name="file" id="file" class="form-control"　value="{{ $custom->img }}">
                </div>
                <img src="{{ empty($custom->img) ? asset('/storage/img/null/Noimage_image.png') : asset('/storage/img/'.$custom->img) }}" height="100" alt="" class="">

                <div class="mt-5">
                    <a href="{{ route('home') }}" class="btn btn-secondary">キャンセル</a>
                    <button type="submit" class="btn btn-primary">修正する</button>
                </div>
            </fieldset>
        </form>
        
    </div>
</div>
@endsection


