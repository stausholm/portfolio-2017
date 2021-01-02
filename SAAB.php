<?php include 'header.php'; ?>
<link rel="stylesheet" href="/CSS/projects.css" type="text/css">
<div class="content-wrapper">
  <div class="hero-container">
    <h1>SAAB Sign-In</h1>
    <p>When guests visit the SAAB Denmark main office, they must register as guests
      as a security measure. SAAB Denmark were looking for a fluent digital solution to
      replace their current paper and pen system. SAAB Denmark reached out, and a solution
      was designed, tested, and developed.</p>
    <div class="project-tags">
      <span>HTML5</span>
      <span>CSS3</span>
      <span>jQuery</span>
      <span>Adobe Creative Suite CC</span>
      <span>PHP</span>
      <span>MySQL</span>
      <span>UI/UX</span>
      <span>Animation</span>
    </div>
    <!-- <a href="/404.php" class="a-button">Explore demo</a> -->
  </div>
  <img src="/IMG/saab/saabLogin1-min.jpg" alt="Login interface">
  <p class="img-text">The initial screen that new visitors arrive at.</p>
  <img src="/IMG/saab/saabLogin2-min.jpg" alt="Login interface">
  <p class="img-text">Explanatory safety instructions video showed to first time visitors.</p>
  <img src="/IMG/saab/saabLogin3-min.jpg" alt="Login interface">
  <p class="img-text">Visitors are prompted to login with their registered phone number</p>
  <img src="/IMG/saab/saabLogin3a-min.jpg" alt="Login interface">
  <p class="img-text">Visitors must confirm their data</p>
  <img src="/IMG/saab/saabLogin4-min.jpg" alt="Login interface">
  <p class="img-text">Visitor cards are printed and their host is contacted to let them inside the building.</p>
  <p class="description-text" style="margin-bottom:0;">The system includes:</p>
  <style media="screen">
    ul {
      font-size: 1.2em;
      font-weight: 300;
      line-height: 40px;
      color: #525f7f;
      margin-bottom: 80px;
      padding-left: inherit;
    }
    li {
      margin-bottom: 1em;
    }
    @media screen and (max-width:768px) {
      .content-wrapper p:not(.img-text), .content-wrapper ul {
        font-size: 1.2em !important;
        line-height: 30px !important;
      }
    }
  </style>
  <ul>
    <li>A welcoming and friendly design that follows SAAB Denmark’s current visual design guidelines.</li>
    <li>A user interface tested to guide the user with visuals and a hierarchy to improve the end experience.</li>
    <li>An introductory safety instructions animation video.</li>
    <li>Guest information stored in a database, making it clear who’s in the building and who’s not.</li>
    <li>Signage to guide the visitor to sign in.</li>
    <li>An interface for employees to create new visitors, check evacuation lists, troubleshoot signouts and add new employees.</li>
  </ul>
  <img src="/IMG/saab/saabEmployee1-min.jpg" alt="Employee interface">
  <p class="img-text">Adding the employee is easy, and makes them easy to assign to visitors.</p>
  <img src="/IMG/saab/saabEmployee2-min.jpg" alt="Employee interface">
  <p class="img-text">It's easy to troubleshoot and sign out visitors through the employee panel.</p>
  <img src="/IMG/saab/saabEmployee3-min.jpg" alt="Employee interface">
  <p class="img-text">Creating the visitor requires only a few simple fields.</p>
  <img src="/IMG/saab/saabEmployee4-min.jpg" alt="Employee interface">
  <p class="img-text">The employee panel includes an easy to check evacuation list over every guest currently signed in.</p>
  <p class="description-text">The introductory safety instructions animation was a required part of the sign-in process for first time visitors.</p>
  <video src="/IMG/saab/saabAnimation.mp4" controls muted poster="/IMG/saab/saabVideoThumbnail.jpg" style="background:#F5F4F5;"></video>
  <h2>Recent Projects</h2>
  <div class="flex-grid">
    <a href="/greenwater.php" class="col">
      <h3>Green Water</h3>
      <p>Web-, print-design, and illustrations</p>
    </a>
    <a href="/DXTR.php" class="col">
      <h3>DXTR</h3>
      <p>App interface design, data visualization</p>
    </a>
    <a href="/crewnet.php" class="col">
      <h3>CrewNET</h3>
      <p>Visual identity, website design</p>
    </a>
  </div>

</div> <!-- conter-wrapper end -->
<?php include 'footer.php'; ?>
