<?php
global $wp;
$current_slug = add_query_arg( array(), $wp->request );
?>

<?php if ( $current_slug == 'search' ) : ?>
	<a class="cd-search__btn cd-search__btn--active" href="/search">
<?php else : ?>
	<a class="cd-search__btn" href="/search">
<?php endif ?>
		<svg width="16" height="16" aria-hidden="true" focusable="false" class="cd-icon cd-icon--search cd-search__logo">
			<use xlink:href="#cd-icon--search"></use>
		</svg>
		<span class="cd-search__btn-label">Search</span>
	</a>
