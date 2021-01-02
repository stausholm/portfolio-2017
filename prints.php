<?php include 'header.php'; ?>
<style media="screen">
  /*.col {
    background: none;
    padding: 10px 10px 0 0;
    opacity: 1;
    transition: opacity .3s;
  }
  .col:hover {
    opacity: .7;
  }
  .flex-grid {
    flex-wrap: wrap;
    display: flex;
    margin: 0 0 20px 0;
  }
  .flex-grid .col {
    flex: 1 1 33%;
    height: 375px;
    /*overflow: hidden;
  }
  .col img {
    display: block;
    margin: 0 auto;
    height: 100%;
    width: 100%;
    overflow: hidden;
    box-shadow:0 4px 6px rgba(50,50,93,.11), 0 1px 3px rgba(0,0,0,.08);
  }
  .col a {
    /*overflow: hidden;
    width: 100%;
  }
  @media screen and (max-width: 768px) {
    .flex-grid {
        display: block;
    }
    .flex-grid .col {
        width: 100%;
        margin: 0 0 10px 0;
    }

  }*/
  .flex-grid {
    display: flex;
    margin: 0 0 20px 0;
}

.flex-grid .col {
    flex: 1;
}
.col img {
  width: 100%;
  padding: 0 2px;
  transition: transform .2s, opacity .2s, box-shadow .3s;
  box-shadow: 0 0 0 rgba(50,50,93,.05), 0 0 0 rgba(50,50,93,.1), 0 0 0 rgba(0,0,0,.1);
  box-shadow:0 4px 6px rgba(50,50,93,.11), 0 1px 3px rgba(0,0,0,.08);
}
.col img:hover {
  opacity: .7;
  transform: scale(1.05);
  box-shadow: 0 50px 100px rgba(50,50,93,.05), 0 15px 35px rgba(50,50,93,.1), 0 5px 15px rgba(0,0,0,.1);
}
.col a {
  font-size: 0;
  /*display: block;*/
  /*min-height: 150px;*/
}

@media screen and (max-width: 768px) {
    .flex-grid {
        display: block;
    }
    .flex-grid .col {
        width: 100%;
        margin: 0 0 10px 0;
    }
}

</style>
<div class="content-wrapper">
  <div class="hero-container">
    <h1>Print Design</h1>
    <p>Illustrations are all in random order. If it looks fancier than others,
      it's probably a newer print job.
    </p>
  </div>
  <div class="flex-grid">
    <div class="col">
      <?php
        $directory1 = "IMG/illustrations/prints/";
        $images = glob($directory1."*.jpg");
        foreach ($images as $image) {
            echo '<a href="'.$image.'" data-lightbox="portfolio-slide" data-title=""><img class="lazy" data-original="'.$image.'" alt="Illustration by Morten Stausholm Simonsen"></a>';
        }
      ?>
    </div>
  </div>
</div>
<script src="//ajax.googleapis.com/ajax/libs/jquery/1.7.2/jquery.min.js" type="text/javascript"></script>
<link rel="stylesheet" href="/JS/Lightbox/lightbox.css" type="text/css">
<script src="/JS/Lightbox/lightbox.js" type="text/javascript"></script>
<script>
    lightbox.option({
        'resizeDuration': 0,
        'wrapAround': true,
        'fadeDuration': 300,
        'imageFadeDuration': 300
    });
    // http://lokeshdhakar.com/projects/lightbox2/
</script>
<script src="/JS/jquery.lazyload.js" type="text/javascript"></script>
<script>
    $(function () {
        $("img.lazy").lazyload({
            effect: "fadeIn"
        });
    });
    // http://www.appelsiini.net/projects/lazyload
</script>
<?php include 'footer.php'; ?>
