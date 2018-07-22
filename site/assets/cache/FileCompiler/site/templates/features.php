<?php namespace ProcessWire; ?>

<div pw-replace="content" class="content--features content">

  <div class="screen screen--landing">
    <?php foreach($page->home_landingscreen as $landing) :?>
      <img src="<?php echo $landing->image->url ?>" alt="">
      <div class="screen--landing__text">
        <h3><?= $landing->headline?></h3>
        <h4><?= $landing->subtitle?></h4>
      </div>

    <?php endforeach; ?>
    <div class="screen--landing__scroll-arrow" id="showArrow">
      <img src="/site/templates/assets/img/scroll-arrow.svg" alt="Hint Arrow">
    </div>
  </div>

  <div class="feature__overview__container">
    <div class="feature__overview__text">
      <h3><?= $page->headline?></h3>
      <h4><?= $page->subtitle?></h4>
    </div>
    <div class="feature__overview__feature__container">
      <?php foreach($page->standard_element as $element) :?>
        <!-- <img src="<?php //echo $landing->image->url ?>" alt=""> -->
        <a href="#<?php echo $element->scf_name ?>">
          <div class="feature__overview">
            <div class="feature__overview__icon">
              <img src="<?php echo $element->image->url ?>" alt="icon">
            </div>
            <h5><?php if ($element->headline) {echo $element->headline;} ?></h5>
          </div>
        </a>
      <?php endforeach; ?>
    </div>

  </div>


  <div class="features">
    <h3>Features</h3>
    <?php foreach($page->features_item as $feature) :?>
      <!-- <img src="<?php //echo $landing->image->url ?>" alt=""> -->
      <?php $featureClass = $feature->feature_item_status; ?>
      <div class="feature <?php echo $featureClass; ?>" id="<?php echo $feature->scf_name ?>">
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
