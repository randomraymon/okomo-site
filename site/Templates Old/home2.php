<?php namespace ProcessWire;

$settings = $pages->get("id=1047");
?>

<div pw-replace="content" class="content content--okomo">
  <style media="screen">
  body {
    font-family: 'Lato', sans-serif;
    color: white;
    width: 100vw;
    height: 100vh;

    background-image: url("landing-image--1.5.png");
    background-position: center;
    background-size: cover;

    text-align: center;
  }

  .text {
    position: absolute;
    top: 50%;
    left: 50%;
    transform: translate(-50%, -50%);
  }
  </style>
  <div class="text">
    <h1>Hi there, this site is currently under construction</h1>
    <h2>You will soon reach us here, until then, stay put</h2>
    <h1>Why don't you say hi on info@okomo.com </h1>
  </div>
</div>

<menu pw-replace="menu" class="okomo-button"></menu>
<div pw-replace="okomo-button" class="okomo-button">
<footer pw-replace="menu" class="okomo-button"></footer>

</div>
