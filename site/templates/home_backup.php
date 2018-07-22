<?php namespace ProcessWire;

$settings = $pages->get("id=1047");
?>

<div pw-replace="content" class="content content--okomo">


  <!-- Landing Screen -->
  <div class="screen screen--okomo screen--landing">
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

  <!-- Key Images -->
  <?php foreach($page->home_keyimage as $key => $keyimage) :?>
    <div class="screen screen--key-image screen--key-image--<?= $key + 1 ?>">
      <img src="<?php echo $keyimage->image->url ?>" alt="">
      <div class="screen--key-image__text screen--key-image__text--<?= $key + 1 ?>">
        <h1><?= $keyimage->headline?></h1>
        <h2><?= $keyimage->textarea?></h2>
        <div class="button--learn-more">
          Learn more
        </div>
      </div>
    </div>
  <?php endforeach; ?>

  <!-- Statement -->
  <?php foreach($page->home_keystatement as $key => $keystatement) :?>
    <div class="screen screen--key-statement screen--key-statement--<?= $key + 1 ?>">
      <div class="screen--key-statement__content">
        <div class="screen--key-statement__content__text">
          <h4><?= $keystatement->headline?></h4>
          <h5><?= $keystatement->subtitle?></h5>
        </div>
        <div class="screen--key-statement__content__key-point__container">
          <?php foreach($keystatement->home_keypoints as $key => $keypoint) :?>
            <div class="screen--key-statement__content__key-point--<?= $key + 1 ?>">
                <h4><?= $keypoint->headline?></h4>
                <h5><?= $keypoint->subtitle?></h5>
            </div>
          <?php endforeach; ?>
        </div>
        <div class="button--learn-more">
          Learn more
        </div>
      </div>

    </div>
  <?php endforeach; ?>


  <!-- Quote -->
  <?php foreach($page->home_quote as $key => $quote) :?>
    <div class="screen screen--quote screen--quote--<?= $key + 1 ?>">
        <div class="screen--quote__content">
          <h4><?= $quote->textarea?></h4>
          <div class="screen--quote__image">
            <img src="<?php echo $quote->image->url ?>" alt="">
          </div>
          <h6><?= $quote->subtitle?></h6>
        </div>
    </div>
  <?php endforeach; ?>



  <!-- Closing Image -->
  <?php foreach($page->home_closingimage as $key => $closingimage) :?>
    <div class="screen screen--closing-image screen--closing-image--<?= $key + 1 ?>">
      <img src="<?php echo $closingimage->image->url ?>" alt="">
        <div class="screen--closing-image__text">
          <h3>Okomo</h3>
          <h2><?= $closingimage->subtitle?></h2>
        </div>
    </div>
  <?php endforeach; ?>

</div>

<!-- <div pw-replace="okomo-button" class="okomo-button">
  <div class="okomo-button__hint">
    right here
    <img src="/site/templates/assets/img/okomo-button__hint__arrow.png" alt="Hint Arrow">
  </div>
  <div class="okomo-button__label">
    Okomo
  </div>
  <div class="okomo-button__animation__container">
    <div class="okomo-button__animation okomo-button__animation--1"></div>
    <div class="okomo-button__animation okomo-button__animation--2"></div>
  </div>
  <div class="okomo-button__handler" onclick="openIframe()">
    <img class="okomo-button--1" src="/site/templates/assets/img/logo--1--.2.png" alt="Logo Eyes 1">
    <img class="okomo-button--2" src="/site/templates/assets/img/logo--2--.2.png" alt="Logo Eyes 2">
    <img class="okomo-button--3" src="/site/templates/assets/img/logo--3--.2.png" alt="Logo Eyes 3">
  </div>
</div> -->

<script>
    /*let eventMethod = window.addEventListener ? 'addEventListener' : 'attachEvent'
    let eventer = window[eventMethod]
    let messageEvent = eventMethod == 'attachEvent' ? 'onmessage' : 'message'

    eventer(messageEvent, (event) => {
        if (event.origin.indexOf('https://okomo-user.azurewebsites.net') > -1) {
            let key = event.message ? 'message' : 'data'
            let data = event[key]
            
            if (data === 'close_okomo') {
                let iframe = document.getElementById('container')
                iframe.parentNode.removeChild(iframe)
            } else if (data === 'maximize_okomo_window') {
                let iframe = document.getElementById('container')
                iframe.style.width = '1126px'
            } else if (data === 'minimize_okomo_window') {
                let iframe = document.getElementById('container')
                iframe.style.width = '375px'
            }
        }
    }, false)

    function openIframe() {
        let iframe = document.createElement('iframe')
        
        iframe.style.position = 'fixed'
        iframe.style.left = '0'
        iframe.style.right = '0'
        iframe.style.marginLeft = 'auto'
        iframe.style.marginRight = 'auto'
        iframe.style.top = '50px'
        iframe.style.width = '375px'
        iframe.style.height = '667px'
        iframe.style.backgroundColor = 'white'

        iframe.src = 'https://okomo-user.azurewebsites.net'
        iframe.setAttribute('allow', 'microphone; camera;')
        iframe.setAttribute('frameborder', '0')
        iframe.setAttribute('id', 'container')
        iframe.id = 'container'

        document.body.appendChild(iframe)*/
    }
</script>