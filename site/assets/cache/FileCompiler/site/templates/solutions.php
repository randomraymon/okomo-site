<?php namespace ProcessWire;
  $settings = $pages->get("id=1047");
?>

<div pw-replace="content" class="content content--solutions">

  <div class="content--solutions--landing">
    <?php foreach($page->solutions_landing as $landing) :?>
      <div class="content--solutions--landing__image content--solutions--landing__image--left">
        <img src="<?php echo $landing->image->url ?>" alt="">
        <div class="overlay"></div>
        <h2><?= $landing->headline?></h2>
      </div>
      <div class="content--solutions--landing__image--right content--solutions--landing__image">
        <img src="<?php echo $landing->image2->url ?>" alt="">
        <div class="overlay"></div>
        <h2><?= $landing->subtitle?></h2>
      </div>

    <?php endforeach; ?>
    <!-- <div class="screen--landing__scroll-arrow">
      <img src="/site/templates/assets/img/scroll-arrow.svg" alt="Hint Arrow">
    </div> -->
  </div>

  <div class="screen screen--main-question">
    <div class="screen--main-question__text">
      <h2><?= $page->headline?></h2>
      <h3><?= $page->subtitle?></h3>
      <a href="https://okomo.com/en/product/features/">
        <div class="button--learn-more">
          <?= $settings->headline ?>
        </div>
      </a>
    </div>
  </div>

  <?php foreach($page->home_landingscreen as $key => $landing) :?>
    <div class="screen screen--key-image screen--key-image--<?php echo $key + 1;?>">
      <img src="<?php echo $landing->image->url ?>" alt="">
      <div class="screen--key-image__text">
        <h2><?= $landing->headline?></h2>
        <h5><?= $landing->subtitle?></h5>
      </div>
    </div>

  <?php endforeach; ?>

  <!-- graph -->

  <div class="screen screen--graph">
    <div class="screen--graph__image">
      <img src="/site/templates/assets/img/solutions--graphic.png" alt="Graphic">
    </div>
  </div>

  <?php foreach($page->home_closingimage as $key => $closing) :?>
    <div class="screen screen--closing-image">
      <img src="<?php echo $closing->image->url ?>" alt="">
      <div class="screen--closing-image__text">
        <h1><?= $closing->headline?></h1>
        <h5><?= $closing->subtitle?></h5>
      </div>
    </div>

  <?php endforeach; ?>

  </div>


  <div class="features">
    <?php foreach($page->features_item as $feature) :?>
      <!-- <img src="<?php //echo $landing->image->url ?>" alt=""> -->
      <?php $featureClass = $feature->feature_item_status; ?>
      <div class="feature <?php echo $featureClass; ?>">
        <?php if ($featureClass == "left" || $featureClass == "top") : ?>
          <div class="feature__image">
            <img src="<?=$feature->image->url?>" alt="Hint Arrow">
          </div>
          <div class="feature__text">
            <h3><?php if ($feature->headline) {echo $feature->headline;} ?></h3>
            <h4><?php if ($feature->subtitle) {echo $feature->subtitle;} ?></h4>
            <p><?php if ($feature->textarea) {echo $feature->textarea;} ?></p>
          </div>
        <?php endif; ?>
        <?php if ($featureClass == "right" || $featureClass == "bottom") : ?>
          <div class="feature__text">
            <h3><?php if ($feature->headline) {echo $feature->headline;} ?></h3>
            <h4><?php if ($feature->subtitle) {echo $feature->subtitle;} ?></h4>
            <p><?php if ($feature->textarea) {echo $feature->textarea;} ?></p>
          </div>
          <div class="feature__image">
            <img src="<?=$feature->image->url?>" alt="Hint Arrow">
          </div>
        <?php endif; ?>
      </div>
    <?php endforeach; ?>
  </div>
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
