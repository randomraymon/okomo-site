<?php namespace ProcessWire; ?>

<div pw-replace="content" class="content--trial">

  <div class="screen screen--landing">
    <img src="<?=$page->image->url?>" alt="Hint Arrow">
    <div class="screen--landing__scroll-arrow">
      <img src="/site/templates/assets/img/scroll-arrow.svg" alt="Hint Arrow">
    </div>
  </div>

  <form class="trial" action="index.html" method="post">
    <input type="email" name="" value="E-Mail*" required>
    <input type="text" name="" value="Firstname">
    <input type="text" name="" value="Surname">
    <input type="text" name="" value="Company*" required>
    <textarea name="name" rows="8" cols="80">Your Message</textarea>
    <input type="submit" name="" value="Enter">
  </form>

</div>

<div pw-replace="okomo-button" class="okomo-button" id="showButton" onclick="showIframe()">
  <div class="okomo-button__label" >
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
