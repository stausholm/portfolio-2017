<?php include 'header.php'; ?>
<style media="screen">
  .flex-grid {
    display: flex;
    margin: 50px 0 220px 0;
    align-items: center;
  }
  .flex-grid:nth-child(odd) {
    flex-direction: row-reverse;
  }
  .flex-grid .col {
    flex: 1;
  }
  .col:first-of-type {
    padding-right: 20px;
  }
  @media screen and (max-width: 768px) {
    .flex-grid {
      display: flex; /*block*/
      flex-direction: column-reverse !important;
    }
    .flex-grid .col {
      width: 100%;
      margin: 0 0 10px 0;
    }

  }
  .col h2 {
    font-family: 'Share Tech Mono', monospace;
    color: #9284ff;
    font-size: 2.5em;
    text-align: left;
    margin: 0;
    padding-top: 0;
  }
  .col h2::after {
    content: "";
    display: none;
  }
  .col p, .content-wrapper p {
    font-size: 1.3em;
    font-weight: 300;
    line-height: 40px;
    color: #525f7f;
    margin: 40px 0; /*80px 0*/
    /*padding-right: 20px;*/
  }
  .col .a-button {
    align-self: flex-end;
  }
  .graphics-col {
    display: flex;
    flex-direction: row-reverse;
    transform: scale(.8);
  }
  .flex-grid:nth-child(odd) .graphics-col {
    flex-direction: row;
  }


  .tilt-stuff {
    width: 80%;
    height: 100%;
    min-height: 415px;
    background: #fff  url(data:image/svg+xml;base64,PD94bWwgdmVyc2lvbj0iMS4wIiBlbmNvZGluZz0iVVRGLTgiPz4KPHN2ZyB3aWR0aD0iNDQ2cHgiIGhlaWdodD0iMzE2cHgiIHZpZXdCb3g9IjAgMCA0NDYgMzE2IiB2ZXJzaW9uPSIxLjEiIHhtbG5zPSJodHRwOi8vd3d3LnczLm9yZy8yMDAwL3N2ZyIgeG1sbnM6eGxpbms9Imh0dHA6Ly93d3cudzMub3JnLzE5OTkveGxpbmsiPgogICAgPCEtLSBHZW5lcmF0b3I6IFNrZXRjaCA0NC4xICg0MTQ1NSkgLSBodHRwOi8vd3d3LmJvaGVtaWFuY29kaW5nLmNvbS9za2V0Y2ggLS0+CiAgICA8dGl0bGU+d2hpdGU8L3RpdGxlPgogICAgPGRlc2M+Q3JlYXRlZCB3aXRoIFNrZXRjaC48L2Rlc2M+CiAgICA8ZGVmcz48L2RlZnM+CiAgICA8ZyBpZD0iV2VsY29tZSIgc3Ryb2tlPSJub25lIiBzdHJva2Utd2lkdGg9IjEiIGZpbGw9Im5vbmUiIGZpbGwtcnVsZT0iZXZlbm9kZCI+CiAgICAgICAgPGcgaWQ9InByb2plY3QtYmFja2dyb3VuZHMiIHRyYW5zZm9ybT0idHJhbnNsYXRlKC0xMjg3LjAwMDAwMCwgLTc1OS4wMDAwMDApIj4KICAgICAgICAgICAgPGcgaWQ9IndoaXRlIiB0cmFuc2Zvcm09InRyYW5zbGF0ZSgxMjg3LjAwMDAwMCwgNzU5LjAwMDAwMCkiPgogICAgICAgICAgICAgICAgPHBhdGggZD0iTTI3NC41NDkwNTQsMzE2IEw0NDYsMzE2IEw0NDYsMCBMNzkuNzc4MTY5NywwIEw1MS45NjEzMTM0LDExMS4zMDcwMSBMMTAzLjA5ODEwOCwzMTYgTDI3NC41NDkwNTQsMzE2IFoiIGlkPSJDb21iaW5lZC1TaGFwZSIgZmlsbD0iI0ZGRkZGRiI+PC9wYXRoPgogICAgICAgICAgICAgICAgPHBvbHlnb24gaWQ9IlJlY3RhbmdsZS0xOSIgZmlsbD0iI0MxRERGRiIgb3BhY2l0eT0iMC41NTY4Mzg3NjgiIHBvaW50cz0iMjQuMTUxMDkyNSAxLjM2NDI0MjA1ZS0xMiA3OS44NDg5MDc1IDEuMzY0MjQyMDVlLTEyIDUxLjk2MDAyMzMgMTExLjMyMDk4NCI+PC9wb2x5Z29uPgogICAgICAgICAgICAgICAgPHBvbHlnb24gaWQ9IlJlY3RhbmdsZSIgZmlsbD0iIzkzODdFNCIgb3BhY2l0eT0iMC41MjY2MDc3OSIgcG9pbnRzPSI1MS45NjAzMTE5IDExMS4zMTgwMjQgNTEuOTYwMzExOSAxMTEuMzE4MDI0IDEwMy4xMDk1MzkgMzE2IDAuNzk3OTgxODU2IDMxNiI+PC9wb2x5Z29uPgogICAgICAgICAgICA8L2c+CiAgICAgICAgPC9nPgogICAgPC9nPgo8L3N2Zz4=);
    background-size: cover;
    background-position: -40%;
    border-radius: 4px;
    box-shadow: 0 50px 100px rgba(50,50,93,.05), 0 15px 35px rgba(50,50,93,.1), 0 5px 15px rgba(0,0,0,.1);
    transform-style: preserve-3d;
    position: relative;
  }
  .tilt-stuff img {
    transform: translateZ(20px);
    max-width: 40%;
    position: absolute;
    top: 0;
    right: 0;
    box-shadow:0 4px 6px rgba(50,50,93,.11), 0 1px 3px rgba(0,0,0,.08);
  }
  .tilt-stuff img:first-of-type {
    max-width: 45%;
    top: 40%;
    left: -10%;
    transform: translateZ(40px);
  }
  .tilt-stuff img:last-of-type {
    max-width: 71%;
    top: 20%;
    right: -10%;
    transform: translateZ(80px);
  }
  @media screen and (max-width: 768px) {
    .col:first-of-type {
      padding-right: 0;
      margin-top: 20px;
    }
    .col p, .content-wrapper p {
      font-size: 1.2em;
      line-height: 30px;
    }
    .graphics-col {
      transform: scale(1);
    }
    .tilt-stuff {
      width: 100%;
      pointer-events: none;
    }
    .tilt-stuff img {
      width: 100% !important;
      padding: 10px;
      transform: translateZ(0) !important;
      max-width: none !important;
      position: static;
    }
  }
</style>
<div class="content-wrapper">
  <div class="hero-container">
    <h1>I shot the sheriff..*</h1>
    <!-- <p>*(..but i did not shoot the deputy) I did however create this page to show of some of
    the things I've made.</p> -->
  </div>
  <div class="flex-grid">
    <div class="col">
      <h2>Illustrations</h2>
      <p>Designing graphics and interface elements for a diverse range of
        products including apps, infographics, webdesign, illustrations etc.
        Some personal projects, some commissioned.
      </p>
      <!-- <a href="https://www.behance.net/Stausholm" class="a-button" target="_blank">View more on Behance</a> -->
      <a href="/illustrations.php" class="a-button" title="Illustrations">View more assorted illustrations</a>
    </div>
    <div class="col graphics-col">
      <div class="tilt-stuff" data-tilt data-tilt-glare data-tilt-max-glare="0.8" data-tilt-scale="1.1">
        <img src="/IMG/isometric-hotel-min.jpg" alt="Isometric Hotel illustration">
        <img src="/IMG/astronaut-illustration-min.jpg" alt="Astronaut 404 illustration">
      </div>
    </div>
  </div>
  <div class="flex-grid">
    <div class="col">
      <h2>Code Snippets</h2>
      <p>Coding all sorts of different things and sharing some of them on my Codepen.
        I like to experiment with many different things, some become a success - others,
        a valuable learning experience.
      </p>
      <a href="https://codepen.io/Stausholm/" class="a-button" target="_blank">View more snippets on Codepen</a>
    </div>
    <div class="col graphics-col">
      <div class="tilt-stuff" data-tilt data-tilt-glare data-tilt-max-glare="0.8" data-tilt-scale="1.1">
        <img src="/IMG/text-field.gif" alt="Search field illustration">
        <img src="/IMG/settings-min.gif" alt="some settings illustration">
      </div>
    </div>

  </div>
  <div class="flex-grid">
    <div class="col">
      <h2>Print Design</h2>
      <p>Getting all nerdy about typography and layout + illustrations; paying
        attention to personality, contrast, size, spacing, length, readability,
        legibility, highlighting, linebreaks, orphans, and the message. Whew..
        <!-- Choosing the right fonts and themes can truly make or break the design. -->
      </p>
      <!-- <a href="https://www.behance.net/Stausholm" class="a-button" target="_blank">View more projects on Behance</a> -->
      <a href="/prints.php" class="a-button">View more assorted prints</a>
    </div>
    <div class="col graphics-col">
      <div class="tilt-stuff" data-tilt data-tilt-glare data-tilt-max-glare="0.8" data-tilt-scale="1.1">
        <img src="/IMG/magazine-square-min.jpg" alt="Square magazine mockup">
        <img src="/IMG/magazine-min.jpg" alt="Magazine mockup">
      </div>
    </div>
  </div>
  <div class="flex-grid">
    <div class="col">
      <h2>Videos</h2>
      <p>While not my speciality, I'm not afraid to delve into the world
        of video creation, with the underlying animations, transitions, audio and
        visual effects, sound control, and storyboarding.
      </p>
      <a href="https://www.youtube.com/channel/UC2WaNCbeO73-XAJy1Hr17EA" class="a-button" target="_blank">View more videos on Youtube</a>
    </div>
    <div class="col graphics-col">
      <div class="tilt-stuff" data-tilt data-tilt-glare data-tilt-max-glare="0.8" data-tilt-scale="1.1">
        <img src="/IMG/youtube-img-square-min.jpg" alt="Youtube thumbnail">
        <img src="/IMG/youtube-img-min.jpg" alt="Youtube thumbnail">
      </div>
    </div>
  </div>
<p>*(..but i did not shoot the deputy)</p>
</div>
<script type="text/javascript" src="/JS/vanilla-tilt.min.js"></script>
<script type="text/javascript">
  // let destroyBox = document.querySelector(".tilt-stuff");
  // VanillaTilt.init(destroyBox);
  // while (window.innerWidth <= 800) {
  //   destroyBox.vanillaTilt.destroy();
  // }
</script>
<?php include 'footer.php'; ?>
