<?php include 'header.php'; ?>
<div class="content-wrapper">
  <div class="hero-container">
    <h1>Morten Stausholm</h1>
    <!--<p>Hi, I’m Morten - a Danish multimediadesign graduate studying web development in Aarhus,
      specializing in front end design/development + graphics. My goal is to produce simple
      and beautiful user experiences.  I previously interned as a UX/UI and
      graphics designer at PlayDXTR and CrewNET.</p>-->
    <p>Hi, I’m Morten - a Danish frontend web developer in Aarhus,
      specializing in front end development at Kruso.agency. My goal is to produce simple
      and beautiful user experiences. I enjoy playing around with graphics/design on hobby projects, 
      comitting my experimentation on <a href="https://github.com/stausholm">GitHub</a>.
      NB: all content on this site is from 2017, and is not kept up to date
    </p>
  </div>
  <div class="terminal-container">
    <div class="terminal-header">
      <div></div>
      <div></div>
      <div></div>
    </div>
    <div class="terminal-window">
      <div class="terminal-left">
        <div class="command" onmouseover="changeText();" onmouseout="changeTextNormal();">
          <p>> Current location</p>
          <p>"Aarhus, DK"</p>
        </div>
        <div class="command" onmouseover="changeText2();" onmouseout="changeTextNormal();">
          <p>> Contact Info</p>
          <p>["<a href="mailto:morten@mortenstausholm.dk?Subject=Hello%20there">morten@mortenstausholm.dk</a>", "<a href="https://www.facebook.com/morten.s.simonsen.7">Facebook</a>", "<a href="https://github.com/stausholm">GitHub</a>"]</p>
        </div>
        <div class="command" onmouseover="changeText3();" onmouseout="changeTextNormal();">
          <p>> (not so) Current Resume</p>
          <p>"<a href="/MortenStausholm-resume.pdf">mortenResume.pdf</a>"</p>
        </div>
        <div class="command" onmouseover="changeText4();" onmouseout="changeTextNormal();">
          <p>> Education</p>
          <p>["Multimediadesign AP, EASV Sønderborg", "Web Development PBA, EAAA Aarhus"]</p>
        </div>
        <div class="command" onmouseover="changeText5();" onmouseout="changeTextNormal();">
          <p>> Skills</p>
          <p>["HTML5/CSS3", "Adobe Creative Suite CC", "Silent Farts", "JavaScript", "Version Control (git)", "ASP.NET MVC", "Umbraco", "Node.js", "MSSQL", "MongoDb", "Vue.js", "React.js"]</p>  <!-- "JavaScript", -->
        </div>
        <div class="command">
          <p style="color: #f7f7f7">> <span contenteditable="true" class="blink"> </span></p>
        </div>
      </div>
      <div class="terminal-right" id="ascii-person">
       .-"```'.
      /   \    \
     /   / `\__/
     | .'  _  _|
     \(\   6  6
      | \   _\ |     hi  
      |\ `~`= `/    _/
      | '.___.'
  .'` \     |_
 /      '-__ / `-
      </div>
    </div>
  </div>
  <h2>(not so) Recent Projects</h2>
  <div class="project-container">
    <div class="project-screenshot" style="background: url('/IMG/GreenWaterBG.jpg') 0% 0% / cover no-repeat;"><div class="project-background2"></div></div>
    <div class="project-background"></div>
      <div class="project-content">
        <h3>Green Water</h3>
        <p>Green Water is a sustainable energy project, utilizing ocean water for the heating
          and cooling of buildings. Green Water was in the need for new <a href="http://wearegreenwater.com/" target="_blank" title="Green Water website">visuals and website</a>.
          A request from their side was the creation of vectorized isometric illustrations of
          the system in use.</p>
        <div class="project-tags">
          <span>HTML5</span>
          <span>CSS3</span>
          <span>Illustration</span>
          <span>Adobe Creative Suite CC</span>
          <span>MySQL</span>
          <span>Wordpress</span>
          <span>Wireframing</span>
        </div>
        <div class="project-buttons">
          <a href="/greenwater.php" class="a-button">Read more</a>
          <!-- <a href="/404.php" class="a-button">Explore demo</a> -->
        </div>
      </div>
  </div>
  <div class="project-container">
    <div class="project-screenshot" style="background: url('/IMG/DxtrBG.jpg') 0% 0% / cover no-repeat;"><div class="project-background2"></div></div>
    <div class="project-background"></div>
      <div class="project-content">
        <h3>PlayDXTR App</h3>
        <p>DXTR Tactile are developing the <a href="https://www.playdxtr.com/" target="_blank" title="DXTR website">PlayDXTR</a> building cube toys and app to understand
          and enhance kids’ individual strengths. DXTR requested mockups for everything
          related to the parent part of the app, and help in how to properly display negative
          data about a child to their parents.</p>
        <div class="project-tags">
          <span>Wireframing</span>
          <span>Rapid prototyping</span>
          <span>Scrum</span>
          <span>UI/UX</span>
          <span>Design guidelines</span>
          <span>Adobe Creative Suite CC</span>
          <span>Illustration</span>
        </div>
        <div class="project-buttons">
          <a href="/DXTR.php" class="a-button">Read more</a>
          <!-- <a href="/404.php" class="a-button">Explore demo</a> -->
        </div>
      </div>
  </div>
  <div class="project-container">
    <div class="project-screenshot" style="background: url('/IMG/CrewnetBG.jpg') 0% 0% / cover no-repeat;"><div class="project-background2"></div></div>
    <div class="project-background"></div>
      <div class="project-content">
        <h3>CrewNET Identity</h3>
        <p><a href="http://crewnet.dk/" target="_blank" title="Crewnet website">Crewnet</a> is developing and maintaining an event administration platform to
          manage volunteers and work tasks for major events. Crewnet requested a pair of
          professional eyes, to go through their visual identity and create strict design
          guidelines and a new visual identity for them to follow.</p>
        <div class="project-tags">
          <span>HTML5</span>
          <span>CSS3</span>
          <span>Design guidelines</span>
          <span>Adobe Creative Suite CC</span>
          <span>UI/UX</span>
          <span>Illustration</span>
        </div>
        <div class="project-buttons">
          <a href="/crewnet.php" class="a-button">Read more</a>
          <!-- <a href="/404.php" class="a-button">Explore demo</a> -->
        </div>
      </div>
  </div>
  <div class="project-container">
    <div class="project-screenshot" style="background: url('/IMG/SaabBG.jpg') 0% 0% / cover no-repeat;"><div class="project-background2"></div></div>
    <div class="project-background"></div>
      <div class="project-content">
        <h3>SAAB Guest sign-in</h3>
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
        <div class="project-buttons">
          <a href="/SAAB.php" class="a-button">Read more</a>
          <!-- <a href="/404.php" class="a-button">Explore demo</a> -->
        </div>
      </div>
  </div>
  <div class="contact-CTA">
    <div>
      <p>Like what you see?</p>
      <p>Get in touch or read on n stuff</p>
    </div>
    <div>
      <a href="/me.php" class="a-button" title="Contact me">Contact me</a>
      <a href="/me.php" class="a-button" title="About me">Read more about me</a>
    </div>
  </div>
</div> <!-- conter-wrapper end -->
<?php include 'footer.php'; ?>
