<div>
    <hr>
    <div class="input-group mb-3">
        <div class="input-group-prepend">
            <label class="input-group-text" for="media-type_1">メディア</label>
        </div>
        <select class="form-control media-select" id="media-type_1">
            <option selected value="novel">小説</option>
            <option value="comic">コミック</option>
            <option value="anime">アニメ</option>
            <option value="drama">ドラマ</option>
        </select>
    </div>
    <div class="form-group register-form-for-novel register-form-for-comic">
        <div class="input-group mb-3">
            <div class="input-group-prepend">
                <span class="input-group-text" id="book-isbn_1">ISBN</span>
            </div>
            <input type="text" class="form-control" aria-label="ISBN input" aria-describedby="book-isbn_1" name="book-isbn[]">
        </div>
    </div>
    <div class="form-group">
        <div class="input-group mb-3">
            <div class="input-group-prepend">
                <span class="input-group-text" id="media-title_1">タイトル</span>
            </div>
            <input type="text" class="form-control" aria-label="Media title input" aria-describedby="media-title_1" name="media-title[]">
        </div>
    </div>
    <div class="form-group register-form-for-anime register-form-for-drama">
        <div class="input-group mb-3">
            <div class="input-group-prepend">
                <span class="input-group-text" id="tv-term_1">何期目</span>
            </div>
            <input type="number" min="1" class="form-control" aria-describedby="tv-term_1" name="tv_term[]">
        </div>
    </div>
    <div class="form-group register-form-for-anime register-form-for-drama">
        <div class="input-group mb-3">
            <div class="input-group-prepend">
                <span class="input-group-text" id="tv-year_1">放送年</span>
            </div>
        <input type="number" min="1990" max="{{ date('Y') }}" class="form-control" aria-label="broadcast year input" aria-describedby="tv-year_1" name="tv-year[]">
        </div>
    </div>
    <div class="form-group register-form-for-anime register-form-for-drama">
        <div class="input-group mb-3">
            <div class="input-group-prepend">
                <span class="input-group-text" id="tv-season_1">季節</span>
            </div>
            <select class="form-control tv-season" id="inputGroupSelect01" aria-describedby="tv-season_1" name="tv-season[]">
                <option selected value="spring">春</option>
                <option value="summer">夏</option>
                <option value="autumn">秋</option>
                <option value="winter">冬</option>
            </select>
        </div>
    </div>
    <div class="form-group register-form-for-novel register-form-for-comic">
        <div class="input-group mb-3">
            <div class="input-group-prepend">
                <span class="input-group-text" id="media-author_1">著者</span>
            </div>
            <input type="text" class="form-control" aria-label="Media author input" aria-describedby="media-author_1" name="media-author[]">
        </div>
    </div>
    <div class="form-group register-form-for-novel register-form-for-comic">
        <div class="input-group mb-3">
            <div class="input-group-prepend">
                <span class="input-group-text" id="media-series_1">シリーズ名</span>
            </div>
            <input type="text" class="form-control" aria-label="Series name input" aria-describedby="media-series_1" name="media-series[]">
        </div>
    </div>
    <div class="form-group register-form-for-novel register-form-for-comic">
        <div class="input-group mb-3">
            <div class="input-group-prepend">
                <span class="input-group-text" id="media-series-number_1">シリーズ第何巻？</span>
            </div>
            <input type="number" min="1" class="form-control" aria-describedby="media-series-number_1" name="media-series-number[]">
        </div>
    </div>
    <div class="form-group register-form-for-novel register-form-for-comic">
        <div class="input-group mb-3">
            <div class="input-group-prepend">
                <label class="input-group-text" for="media-is-ending_1">完結済み？</label>
            </div>
            <select class="form-control is-ending-select" id="media-is-ending_1" name="media-is-ending[]">
                <option selected value="0">いいえ</option>
                <option value="1">はい</option>
                <option value="2">未完で終了</option>
            </select>
        </div>
    </div>
    <div class="media-form-add-and-del-button">
        <i class="fas fa-plus-circle media-form-add-button"></i>
        <i class="fas fa-minus-circle media-form-del-button"></i>
    </div>
</div>