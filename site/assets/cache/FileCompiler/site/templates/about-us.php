<?php namespace ProcessWire;

$settings = $pages->get("id=1047");
?>

<div pw-replace="content" class="content content--about-us">


  <!-- Landing Screen -->
  <div class="screen screen--landing">
    <?php foreach($page->home_landingscreen as $landing) :?>
      <img src="<?php echo $landing->image->url ?>" alt="">
      <div class="screen--landing__text">
        <h1><?= $landing->headline?></h1>
        <h2><?= $landing->subtitle?></h2>
      </div>

    <?php endforeach; ?>
    <div class="screen--landing__scroll-arrow">
      <img src="/site/templates/assets/img/scroll-arrow.svg" alt="Hint Arrow">
    </div>
  </div>
  <div class="about-us__intro-text">
    <h2><?php echo $page->headline; ?></h2>
    <h3><?php echo $page->subtitle; ?></h3>
  </div>

  <div class="team">
    <?php foreach($page->team as $member) :?>
      <div class="team__member">
        <a href="<?php echo $member->scf_name ?>">
          <div class="team__member__image">
            <img src="<?php echo $member->image->url ?>" alt="">
          </div>
          <h4><?php if ($member->headline) {echo $member->headline;} ?></h4>
          <h5><?php  if ($member->subtitle) {echo $member->subtitle;} ?></h5>
          <p><?php  if ($member->textarea) {echo $member->textarea;} ?></p>
        </a>
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
