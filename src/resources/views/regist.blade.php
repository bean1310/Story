@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <form>
                @csrf
                <div class="form-group">
                    <label for="storyName">原作名</label>
                    <input type="text" class="form-control" id="storyName">
                </div>
                <div class="form-group">
                    <label for="authorName">原作者名</label>
                    <input type="text" class="form-control" id="authorName">
                </div>
                <div class="form-group">
                    <label for="seriesName">シリーズ名</label>
                    <input type="text" class="form-control" id="seriesName">
                </div>
                <div class="form-group form-check">
                    <input type="checkbox" class="form-check-input" id="isEnded">
                    <label class="form-check-label" for="isEnded">完結済み？</label>
                </div>
                <p class="accordion" style="cursor:pointer;">Accordion</p>
                <div id="slideBox" style="display:none;">
                    hogehoge
                </div>
                <button type="submit" class="btn btn-primary">Submit</button>
            </form>
        </div>
    </div>
</div>
@endsection
