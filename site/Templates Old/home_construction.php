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
    background-color: black;

    text-align: center;
  }

  h1, h2, h3 {
    margin-bottom: 20px;
  }

  .content {
    height: 100vh;
    width: 100vw;
  }

  .text {
    position: absolute;
    top: 50%;
    left: 50%;
    transform: translate(-50%, -50%);
  }

  menu {
    display: none;
  }

  footer {
    display: none;
  }
  </style>
  <div class="text">
    <h1>Hi there, this site is currently under construction</h1>
    <h2>You will soon reach us here, until then, stay put</h2>
    <h1>Why don't you say hi on info@okomo.com </h1>
  </div>
</div>

<menu pw-replace="menu"></menu>
<div pw-replace="okomo-button"></div>
<div pw-replace="menu-bar"></div>
<footer pw-replace="footer"></footer>

</div>
