<?php namespace ProcessWire; ?>

<div pw-replace="content" class="content--career content">

  <div class="screen screen--landing">
    <img src="<?=$page->image->url?>" alt="Hint Arrow">
    <div class="screen--landing__scroll-arrow">
      <img src="/site/templates/assets/img/scroll-arrow.svg" alt="Hint Arrow">
    </div>
  </div>

  <?php foreach($page->standard_element as $element) :?>
    <!-- <img src="<?php //echo $landing->image->url ?>" alt=""> -->
    <div class="basic--element">
      <h1><?php if ($element->headline) {echo $element->headline;} ?></h1>
      <h2><?php if ($element->subtitle) {echo $element->subtitle;} ?></h2>
      <p><?php if ($element->textarea) {echo $element->textarea;} ?></p>

    </div>

  <?php endforeach; ?>
</div>

<!-- <div pw-replace="okomo-button" class="okomo-button" id="showButton" onclick="showIframe()">
  <div class="okomo-button__label">
    Okomo
  </div>
  <div class="okomo-button__animation__container">
    <div class="okomo-button__animation okomo-button__animation--1"></div>
    <div class="okomo-button__animation okomo-button__animation--2"></div>
  </div>
  <div class="okomo-button__handler">
    <img class="okomo-button--1" src="/site/templates/assets/img/logo--1--.2.png" alt="Logo Eyes 1">
    <img class="okomo-button--2" src="/site/templates/assets/img/logo--2--.2.png" alt="Logo Eyes 2">
    <img class="okomo-button--3" src="/site/templates/assets/img/logo--3--.2.png" alt="Logo Eyes 3">
  </div>
</div> -->
