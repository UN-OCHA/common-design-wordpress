<?php
/**
 * Search in header.
 */
?>

<div class="cd-search">
  <div class="cd-search__form" aria-labelledby="cd-search-form" data-cd-toggable="Search" data-cd-component="cd-search" data-cd-logo="search" data-cd-focus-target="cd-search" id="block-searchform" role="search">
    <h2 id="cd-search-form" class="visually-hidden">Search form</h2>
    <form action="/search" method="get" accept-charset="UTF-8">
      <div class="form--inline clearfix">
        <div class="js-form-item form-item js-form-type-textfield form-type-textfield js-form-item-keys form-item-keys">
          <label for="cd-search">Search</label>
          <input placeholder="What are you looking for?" class="cd-search__input form-text" type="text" id="cd-search" name="q" value="" size="30" maxlength="128" autocomplete="off">
        </div>
        <div class="form-actions js-form-wrapper form-wrapper">
          <button data-twig-suggestion="search_submit" class="cd-search__submit button js-form-submit form-submit" value="Search" type="submit">
            <svg class="cd-icon cd-icon--search" width="16" height="16" aria-hidden="true" focusable="false">
              <use xlink:href="#cd-icon--search"></use>
            </svg>
            <span class="visually-hidden">Search</span>
          </button>
        </div>
      </div>
    </form>
  </div>
</div>
