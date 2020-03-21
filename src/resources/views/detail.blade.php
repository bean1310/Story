@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col story_image">
            {{-- <img src=""> --}}
            <p style="font-size:100px;">IMG</p>
        </div>
        <div class="col story_details">
            <div id="story_info">
                <p>
                    <a href="#" class="badge badge-primary story_tag">ミステリィ</a>
                    <a href="#" class="badge badge-success story_tag">理系</a>
                    <a href="#" class="badge badge-danger story_tag">密室</a>
                    <a href="#" class="badge badge-info story_tag">シリーズもの</a>
                </p>
                <h1 id="story_title">すべてがFになる</h1>
                <p id="story_authors">森博嗣</p>
                <p id="story_series">S&Mシリーズ（完結）</p>
                <p id="story_abstruct">
                    密室から飛び出した死体。究極の謎解きミステリィ。
                    コンピュータに残されたメッセージに挑む犀川助教授とお嬢様学生・萌絵。
                    孤島のハイテク研究所で、少女時代から完全に隔離された生活を送る天才工学博士・真賀田四季(まがたしき)。
                    彼女の部屋からウエディング・ドレスをまとい両手両足を切断された死体が現れた。
                    偶然、島を訪れていたN大助教授・犀川創平(さいかわそうへい)と女子学生・西之園萌絵(にしのそのもえ)が、
                    この不可思議な密室殺人に挑む。新しい形の本格ミステリィ登場。
                </p>
            </div>
        </div>
    </div>
    <div>
        <h2> メディア </h2>
    </div>
    <div class="card-deck">
        <div class="card">
            <img src="..." class="card-img-top" alt="...">
            <div class="card-body">
                <h5 class="card-title">小説</h5>
                <h6 class="story_media_title">すべてがFになる</h6>
                <p class="story_media_cast">著者：森博嗣</p>
                <button type="button" class="btn btn-primary">よんだ！</button>
            </div>
        </div>
        <div class="card">
            <img src="..." class="card-img-top" alt="...">
            <div class="card-body">
                <h5 class="card-title">アニメ</h5>
                <h6 class="story_media_title">すべてがFになる THE PERFECT INSIDER</h6>
                <p class="story_media_cast">主演： 加瀬康之，種﨑敦美，木戸衣吹</p>
                <div class="btn-group" role="group" aria-label="Button group with nested dropdown">
                    <div class="btn-group" role="group">
                        <button id="btnGroupDrop1" type="button" class="btn btn-secondary dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            リアルタイムで
                        </button>
                        <div class="dropdown-menu" aria-labelledby="btnGroupDrop1">
                            <a class="dropdown-item" href="#">リアルタイムで</a>
                            <a class="dropdown-item" href="#">配信 / 再放送で</a>
                        </div>
                    </div>
                    <button type="button" class="btn btn-primary">みた！</button>
                </div>
            </div>
        </div>
        <div class="card">
            <img src="..." class="card-img-top" alt="...">
            <div class="card-body">
                <h5 class="card-title">ドラマ</h5>
                <h6 class="story_media_title">すべてがFになる</h6>
                <p class="story_media_cast">主演：武井咲，綾野剛</p>
                <div class="btn-group" role="group" aria-label="Button group with nested dropdown">
                    <div class="btn-group" role="group">
                        <button id="btnGroupDrop1" type="button" class="btn btn-secondary dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            リアルタイムで
                        </button>
                        <div class="dropdown-menu" aria-labelledby="btnGroupDrop1">
                        <a class="dropdown-item" href="#">リアルタイムで</a>
                        <a class="dropdown-item" href="#">配信 / 再放送で</a>
                        </div>
                    </div>
                    <button type="button" class="btn btn-primary">みた！</button>
                </div>
            </div>
        </div>
        <div class="card">
            <img src="..." class="card-img-top" alt="...">
            <div class="card-body">
                <h5 class="card-title">漫画</h5>
                <h6 class="story_media_title">すべてがFになる</h6>
                <p class="story_media_cast">原作者：森博嗣</p>
                <p class="story_media_cast">作画：浅田寅ヲ</p>
                <button type="button" class="btn btn-primary">よんだ！</button>
            </div>
        </div>
        <div class="card">
            <img src="..." class="card-img-top" alt="...">
            <div class="card-body">
                <h5 class="card-title">漫画</h5>
                <h6 class="story_media_title">すべてがFになる-THE PERFECT INSIDER-</h6>
                <p class="story_media_cast">原作者：森博嗣</p>
                <p class="story_media_cast">作画：霜月かいり</p>
                <button type="button" class="btn btn-primary">よんだ！</button>
            </div>
        </div>
    </div>
</div>
@endsection