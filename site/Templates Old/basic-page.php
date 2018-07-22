<?php namespace ProcessWire; ?>

<div pw-replace="content" class="content content--basic">

  <?php foreach($page->home_landingscreen as $element) :?>
    <?php if ($element->image) : ?>
      <div class="screen screen--landing">
        <?php if ($element->image) : ?>
          <img src="<?=$element->image->url?>" alt="Hint Arrow">
        <?php endif; ?>
        <div class="screen--landing__scroll-arrow">
          <img src="/site/templates/assets/img/scroll-arrow.svg" alt="Hint Arrow">
        </div>
        <h1><?= $element->headline?></h1>
        <h2><?= $element->subtitle?></h2>
      </div>

    <?php else : ?>
      <h1><?= $page->headline?></h1>
      <h2><?= $page->subtitle?></h2>
    <?php endif; ?>
  <?php endforeach; ?>

  <div class="basic--elements">
    <?php foreach($page->standard_element as $element) :?>
      <!-- <img src="<?php //echo $landing->image->url ?>" alt=""> -->
      <div class="basic--element">
        <h1><?php if ($element->headline) {echo $element->headline;} ?></h1>
        <h2><?php if ($element->subtitle) {echo $element->subtitle;} ?></h2>
        <p><?php if ($element->textarea) {echo $element->textarea;} ?></p>

      </div>

    <?php endforeach; ?>
  </div>

</div>

<div pw-replace="okomo-button" class="okomo-button" id="showButton" onclick="showIframe()">
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
</div>
