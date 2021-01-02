<?php include 'header.php'; ?>
<style media="screen">
  .banana-wrapper {
    display: flex;
    justify-content: space-between;
    align-items: flex-start;
    margin-bottom: 20vh;
  }
  .banana-img-container {
    width: 50%;
    position: relative;
  }
  .banana-img-container img {
    width: 99%; /*99 instead of 100 fixes weird black bar in firefox*/
    animation: imageSlideUp 2s forwards;
    animation-delay: .5s;
    opacity: 0;
  }
  @keyframes imageSlideUp {
    0% {
      transform: translateY(50px);
      opacity: 0;
    }
    100% {
      transform: translateY(0);
      opacity: 1;
    }
  }
  .banana-circle {
    background-color: rgba(92,92,92,.5);
    background-image: url("banana/touch-icon.png");
    background-size: cover;
    border-radius: 50%;
    position: absolute;
    transition: background-color .2s;
    transform: scale(0);
    animation: circles 1s forwards;
    box-shadow: 3px 3px 20px rgba(0, 0, 0, 0.5);
  }
  .banana-circle:hover {
    background-color: rgba(92, 92, 92, 0.75);
    cursor: pointer;
  }
  .c3 {
    width: 11%;
    height: 14%;
    top: 9%;
    left: 16%;
    animation-delay: 1.7s;
  }
  .c1 {
    width: 7%;
    height: 9%;
    top: 50%;
    left: 85%;
    animation-delay: 1.9s;
  }
  .c2 {
    width: 32%;
    height: 42%;
    top: 43%;
    left: 22%;
    animation-delay: 2.1s;
  }
  @keyframes circles {
    0% {
      transform: scale(0);
    }
    60% {
      transform: scale(1.2);
    }
    100% {
      transform: scale(1);
    }
  }
  .banana-text-container {
    width: 41%;
  }
  .banana-text-container * {
    opacity: 0;
    animation: textContainerOpacity 1.4s forwards;
    animation-delay: 1.7s;
  }
  .banana-text-container h1 {
    animation-delay: 1.2s;
    margin-bottom: .5em;
    line-height: 1em;
  }
  .banana-text-container p {
    font-size: 1.3em;
    font-weight: 300;
    line-height: 36px;
    color: #525f7f;
  }
  .banana-text-container p a {
    animation-delay: 2.2s;
    text-decoration: none;
    color: #2087b0;
    display: flex;
    align-items: center;
    line-height: 24px;
  }
  .banana-text-container p a:hover i{
    transform: translateX(10px);
  }
  .banana-text-container p a i {
    transform: translateX(0);
    transition: transform .4s;
    animation: none;
    opacity: 1;
    display: flex;
    align-items: center;
  }
  @keyframes textContainerOpacity {
    0% {
      opacity: 0;
      transform: translateY(20px);
    }
    100% {
      opacity: 1;
      transform: translateY(0);
    }
  }
  .t1, .t2, .t3, .text-0-remove {
    display: none;
  }
  .text-active {
    display: block;
    animation-delay: .2s !important;
  }
  .text-active a, .text-active a * {
    animation-delay: .4s !important;
  }
  .hero-container {
    margin-top: 15vh;
  }
  @media screen and (max-width: 1060px) {
    .banana-wrapper {
      align-items: center;
      flex-direction: column;
    }
    .banana-img-container, .banana-text-container {
      width: 92%;
    }
    .banana-text-container h1 {
      /*text-align: center;*/
    }
    .banana-text-container p a {
      /*justify-content: center;*/
    }
  }
  @media screen and (max-width: 695px) {
    .banana-text-container h1 {
      font-size: 3em;
    }
    .banana-text-container p a {
      font-size: .8em;
    }
  }
</style>

<div class="content-wrapper">
  <div class="hero-container"></div>
  <div class="banana-wrapper">
    <div class="banana-img-container">
      <img src="banana/banana-min.jpg" alt="banana">
      <div class="banana-circle c1"></div>
      <div class="banana-circle c2"></div>
      <div class="banana-circle c3"></div>
    </div>
    <div class="banana-text-container">
      <h1>Bananas are great!</h1>
      <p class="banana-text t0">
        That’s right! I haven't put anything here at the moment!
        Come back later and... It’ll most likely still be nothing. But i sell bananas?
        15€ each, if you are interested contact me.
        <br>
        <br>
        <a href="/shots.php">View some of my shots
          <i>
            <svg fill="#2087b0" height="24" viewBox="0 0 24 24" width="24" xmlns="http://www.w3.org/2000/svg">
                <path d="M8.6,16.3l4.6-4.6L8.6,7.2L10,5.8l6,6l-6,6L8.6,16.3z"/>
            </svg>
          </i>
        </a>
      </p>
      <p class="banana-text t1">
        Banana fact 3: Despite frequently being portrayed in a sexual way, the
        most common strain of bananas are completely sterile.
        <br>
        <br>
        <a href="https://www.buzzfeed.com/allisonwild/b-a-n-a-n-a-s">Read more about banana facts <!-- https://www.buzzfeed.com/allisonwild/b-a-n-a-n-a-s -->
          <i>
            <svg fill="#2087b0" height="24" viewBox="0 0 24 24" width="24" xmlns="http://www.w3.org/2000/svg">
                <path d="M8.6,16.3l4.6-4.6L8.6,7.2L10,5.8l6,6l-6,6L8.6,16.3z"/>
            </svg>
          </i>
        </a>
      </p>
      <p class="banana-text t2">
        Banana fact 2: A thief in Mumbai was forced to eat 48 bananas so that the
        gold chain he had swallowed when he was arrested would leave his body.
        <br>
        <br>
        <a href="https://www.buzzfeed.com/allisonwild/b-a-n-a-n-a-s">Read more about banana facts
          <i>
            <svg fill="#2087b0" height="24" viewBox="0 0 24 24" width="24" xmlns="http://www.w3.org/2000/svg">
                <path d="M8.6,16.3l4.6-4.6L8.6,7.2L10,5.8l6,6l-6,6L8.6,16.3z"/>
            </svg>
          </i>
        </a>
      </p>
      <p class="banana-text t3">
        Banana fact 1: Slipping on banana peels became a comedic staple after
        banana peels were deemed a threat to public safety in the late 1800s.
        <br>
        <br>
        <a href="https://www.buzzfeed.com/allisonwild/b-a-n-a-n-a-s">Read more about banana facts
          <i>
            <svg fill="#2087b0" height="24" viewBox="0 0 24 24" width="24" xmlns="http://www.w3.org/2000/svg">
                <path d="M8.6,16.3l4.6-4.6L8.6,7.2L10,5.8l6,6l-6,6L8.6,16.3z"/>
            </svg>
          </i>
        </a>
      </p>
    </div>
  </div>
  <style media="screen">
  .flex-grid {
      display: flex;
      /*margin: 0 0 20px 0;*/
  }

  .flex-grid .col {
      flex: 1;
      margin: 5px;
      background: #fff;
      border-radius: 4px;
      text-align: center;
      min-height: 150px;
      box-shadow:0 4px 6px rgba(50,50,93,.11), 0 1px 3px rgba(0,0,0,.08);
      transition: transform .2s;
      box-shadow: 0 15px 35px rgba(50,50,93,.1), 0 5px 15px rgba(0,0,0,.07);
      background: url(data:image/svg+xml;base64,PD94bWwgdmVyc2lvbj0iMS4wIiBlbmNvZGluZz0iVVRGLTgiPz4KPHN2ZyB3aWR0aD0iNDQ2cHgiIGhlaWdodD0iMzE2cHgiIHZpZXdCb3g9IjAgMCA0NDYgMzE2IiB2ZXJzaW9uPSIxLjEiIHhtbG5zPSJodHRwOi8vd3d3LnczLm9yZy8yMDAwL3N2ZyIgeG1sbnM6eGxpbms9Imh0dHA6Ly93d3cudzMub3JnLzE5OTkveGxpbmsiPgogICAgPCEtLSBHZW5lcmF0b3I6IFNrZXRjaCA0NC4xICg0MTQ1NSkgLSBodHRwOi8vd3d3LmJvaGVtaWFuY29kaW5nLmNvbS9za2V0Y2ggLS0+CiAgICA8dGl0bGU+d2hpdGU8L3RpdGxlPgogICAgPGRlc2M+Q3JlYXRlZCB3aXRoIFNrZXRjaC48L2Rlc2M+CiAgICA8ZGVmcz48L2RlZnM+CiAgICA8ZyBpZD0iV2VsY29tZSIgc3Ryb2tlPSJub25lIiBzdHJva2Utd2lkdGg9IjEiIGZpbGw9Im5vbmUiIGZpbGwtcnVsZT0iZXZlbm9kZCI+CiAgICAgICAgPGcgaWQ9InByb2plY3QtYmFja2dyb3VuZHMiIHRyYW5zZm9ybT0idHJhbnNsYXRlKC0xMjg3LjAwMDAwMCwgLTc1OS4wMDAwMDApIj4KICAgICAgICAgICAgPGcgaWQ9IndoaXRlIiB0cmFuc2Zvcm09InRyYW5zbGF0ZSgxMjg3LjAwMDAwMCwgNzU5LjAwMDAwMCkiPgogICAgICAgICAgICAgICAgPHBhdGggZD0iTTI3NC41NDkwNTQsMzE2IEw0NDYsMzE2IEw0NDYsMCBMNzkuNzc4MTY5NywwIEw1MS45NjEzMTM0LDExMS4zMDcwMSBMMTAzLjA5ODEwOCwzMTYgTDI3NC41NDkwNTQsMzE2IFoiIGlkPSJDb21iaW5lZC1TaGFwZSIgZmlsbD0iI0ZGRkZGRiI+PC9wYXRoPgogICAgICAgICAgICAgICAgPHBvbHlnb24gaWQ9IlJlY3RhbmdsZS0xOSIgZmlsbD0iI0MxRERGRiIgb3BhY2l0eT0iMC41NTY4Mzg3NjgiIHBvaW50cz0iMjQuMTUxMDkyNSAxLjM2NDI0MjA1ZS0xMiA3OS44NDg5MDc1IDEuMzY0MjQyMDVlLTEyIDUxLjk2MDAyMzMgMTExLjMyMDk4NCI+PC9wb2x5Z29uPgogICAgICAgICAgICAgICAgPHBvbHlnb24gaWQ9IlJlY3RhbmdsZSIgZmlsbD0iIzkzODdFNCIgb3BhY2l0eT0iMC41MjY2MDc3OSIgcG9pbnRzPSI1MS45NjAzMTE5IDExMS4zMTgwMjQgNTEuOTYwMzExOSAxMTEuMzE4MDI0IDEwMy4xMDk1MzkgMzE2IDAuNzk3OTgxODU2IDMxNiI+PC9wb2x5Z29uPgogICAgICAgICAgICA8L2c+CiAgICAgICAgPC9nPgogICAgPC9nPgo8L3N2Zz4=);
      background-size: cover;
      display: flex;
      justify-content: center;
      flex-direction: column;
      text-decoration: none;
  }
  .flex-grid .col:hover {
    box-shadow: 0 18px 35px rgba(50,50,93,.1), 0 8px 15px rgba(0,0,0,.07);
    transform: translateY(-2px);
    opacity: .8;
  }
  .flex-grid .col h3 {

  }
  .flex-grid .col p {
    color: #5f5f7f;
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
  <h2>(not so) Recent Projects</h2>
  <div class="flex-grid">
    <a href="/greenwater.php" class="col">
      <h3>Green Water</h3>
      <p>Web-, print-design, and illustrations</p>
    </a>
    <a href="/crewnet.php" class="col">
      <h3>CrewNET</h3>
      <p>Visual identity, website design</p>
    </a>
    <a href="/SAAB.php" class="col">
      <h3>SAAB</h3>
      <p>User login and safety instructions</p>
    </a>
  </div>
</div>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.7.1/jquery.min.js" type="text/javascript"></script>
<script type="text/javascript">
$(document).ready(function () {
          $(".c1").click(function () {
              $(".t1").addClass("text-active");
              $(".t2").removeClass("text-active");
              $(".t3").removeClass("text-active");
              $(".t0").addClass("text-0-remove");
          });
          $(".c2").click(function () {
              $(".t2").addClass("text-active");
              $(".t1").removeClass("text-active");
              $(".t3").removeClass("text-active");
              $(".t0").addClass("text-0-remove");
          });
          $(".c3").click(function () {
              $(".t3").addClass("text-active");
              $(".t1").removeClass("text-active");
              $(".t2").removeClass("text-active");
              $(".t0").addClass("text-0-remove");
          });
  });
</script>
<?php include 'footer.php'; ?>
