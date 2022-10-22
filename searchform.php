<div for="" class="p-search-form">
    <form  method="get" action="<?php echo home_url('/'); ?>" name="検索フォーム">
        <label class="p-search-box p-search-form__textForm">
            <i class="fa-solid fa-magnifying-glass size"></i>
            <input class="c-text-box p-search-form__textBox" type="search" name="s" id="s" placeholder="検索" value="<?php echo get_search_query(); ?>">
        </label>
        <button class="c-button--search p-search-form__button" type="submit">検索</button>
    </form>
</div>