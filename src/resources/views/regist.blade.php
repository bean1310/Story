@extends('layouts.app')

@section('page-css')
    <link href="{{ asset('css/registerStory.css') }}" rel="stylesheet">
@endsection

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <form action="/registerStory" method="POST">
                @csrf
                <div class="form-group">
                    <div class="input-group mb-3">
                        <div class="input-group-prepend">
                            <span class="input-group-text" id="story-original-title">タイトル</span>
                        </div>
                        <input type="text" class="form-control" aria-label="Sizing example input" aria-describedby="story-original-title" name="story-original-title">
                    </div>
                </div>
                <div class="form-group">
                    <div class="input-group mb-3">
                        <div class="input-group-prepend">
                            <span class="input-group-text" id="story-original-author">原作者名</span>
                        </div>
                        <input type="text" class="form-control" aria-label="Sizing example input" aria-describedby="story-original-author" name="story-original-author">
                    </div>
                </div>
                <div class="form-group">
                    <div class="input-group mb-3">
                        <div class="input-group-prepend">
                            <span class="input-group-text" id="story-original-series">シリーズ名</span>
                        </div>
                        <input type="text" class="form-control" aria-label="Sizing example input" aria-describedby="story-original-series" name="story-original-series">
                    </div>
                </div>
                <div class="form-group register-form-for-novel register-form-for-comic">
                    <div class="input-group mb-3">
                        <div class="input-group-prepend">
                            <label class="input-group-text" for="story-is-ending">完結済み？</label>
                        </div>
                        <select class="form-control is-ending-select" id="story-is-ending" name="story-is-ending">
                            <option selected value="0">いいえ</option>
                            <option value="1">はい</option>
                            <option value="2">未完で終了</option>
                        </select>
                    </div>
                </div>
                <div>
                @include('bookParts')
                </div>
                <button type="submit" class="btn btn-primary">Submit</button>
            </form>
        </div>
    </div>
</div>
@endsection
