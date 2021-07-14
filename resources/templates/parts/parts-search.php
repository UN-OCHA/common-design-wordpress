<?php
/**
 * Search in header.
 */
?>

<div class="cd-search">
    <div class="search-block-form cd-search__form block block-search" aria-labelledby="cd-search-form" data-cd-toggable="Search" data-cd-component="cd-search" data-cd-logo="search" data-cd-focus-target="cd-search" id="block-searchform" role="search">
        <h2 class="visually-hidden" id="cd-search-form">Search form</h2>
        <form action="/search" method="get" id="search-block-form" accept-charset="UTF-8" class="cd-flow">
            <div class="cd-form__item">
                <label class="visually-hidden">Search</label>
                <input title="Enter the terms you wish to search for." placeholder="What are you looking for?" class="cd-search__input form-search" id="cd-search" autocomplete="off" type="search" name="q" value="" size="15" maxlength="128">
            </div>
            <div class="form-actions js-form-wrapper form-wrapper" id="edit-actions">
                <button class="cd-search__submit button js-form-submit form-submit" value="Search" type="submit">
                    <svg class="cd-icon cd-icon--search" width="16" height="16">
                        <use xlink:href="#cd-icon--search"></use>
                    </svg>
                    <span class="visually-hidden">Search</span>
                </button>
            </div>
        </form>
    </div>
</div>
