<div class="catalog__nav">
    <div class="catalog__select-wrap">
        <select class="catalog__select" name="genres">
            <option value="All genres">تمام موضوعات</option>
            @foreach(getCategories(10) as $category)
                <option value="{{$category->id}}">{{$category->title}}</option>
            @endforeach


        </select>

        <select class="catalog__select" name="years">
            @foreach(getAuthors(10) as $author)
                <option value="{{$author->id}}">{{$author->name}}</option>
            @endforeach
        </select>
    </div>

    <div class="slider-radio">
        <input type="radio" name="grade" id="featured" checked="checked"><label for="featured">جدیدترین</label>
        <input type="radio" name="grade" id="popular"><label for="popular">پرفروش ها</label>
        <input type="radio" name="grade" id="newest"><label for="newest">پر بازدید‌ترین</label>
    </div>
</div>
