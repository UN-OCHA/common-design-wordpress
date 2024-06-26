<?php
/**
 * @file
 * OCHA Services menu
 */
?>

<nav aria-label="OCHA Services" id="cd-ocha-services" class="cd-ocha-services cd-footer__section cd-footer__section--ocha-services">
  <h2 id="cd-ocha-services-title">OCHA Services</h2>

  <div class="cd-ocha-services__content">
    <div class="cd-ocha-services__inner">
      <div class="cd-ocha-services__section">
        <?php get_template_part( 'resources/templates/parts/parts', 'related-platforms' ); ?>
      </div>
      <div class="cd-ocha-services__section">
        <p class="cd-ocha-services__heading">Other OCHA Services</p>
        <ul class="cd-ocha-services__list">
          <li class="cd-ocha-services__link"><a href="https://fts.unocha.org/">Financial Tracking Service</a></li>
          <li class="cd-ocha-services__link"><a href="https://data.humdata.org/">Humanitarian Data Exchange</a></li>
          <li class="cd-ocha-services__link"><a href="https://humanitarian.id/">Humanitarian ID</a></li>
          <li class="cd-ocha-services__link"><a href="https://response.reliefweb.int/">ReliefWeb Response</a></li>
        </ul>
      </div>
      <div class="cd-ocha-services__section">
        <p class="cd-ocha-services__heading" aria-hidden="true">&nbsp;</p>
        <ul class="cd-ocha-services__list">
          <li class="cd-ocha-services__link"><a href="https://interagencystandingcommittee.org">Inter-Agency Standing Committee</a></li>
          <li class="cd-ocha-services__link"><a href="https://unocha.org/">OCHA website</a></li>
          <li class="cd-ocha-services__link"><a href="https://reliefweb.int/">ReliefWeb</a></li>
          <li class="cd-ocha-services__link"><a href="https://vosocc.unocha.org/">Virtual OSOCC</a></li>
        </ul>
      </div>
      <div class="cd-ocha-services__section">
        <p class="cd-ocha-services__heading" aria-hidden="true">&nbsp;</p>
        <ul class="cd-ocha-services__list">
          <li class="cd-ocha-services__link">
            <a class="cd-ocha-services__see-all" href="https://www.unocha.org/ocha-digital-services" target="_blank" rel="noopener">
              More OCHA Services
              <span class="visually-hidden">Opens in a new window</span>
              <svg class="cd-icon cd-icon--external-link" width="16" height="16" aria-hidden="true" focusable="false">
                <use xlink:href="#cd-icon--external-link"></use>
              </svg>
            </a>
          </li>
        </ul>
      </div>
    </div>
  </div>
</nav>
