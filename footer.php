<!-- Footer starts here -->
<footer>
  <div class="footer-nav">
    <a href="/index.php">Morten Stausholm</a>
    <div class="footer-nav-links">
      <a href="/index.php">Home</a>
      <a href="/banana.php">Projects</a>
      <a href="/shots.php">Shots</a>
      <a href="/me.php">About + Contact</a>
    </div>
    <div class="footer-nav-buttons">
      <a href="https://www.facebook.com/morten.s.simonsen.7" title="Morten on Facebook" target="_blank"><img src="/IMG/facebook.svg" alt="Facebook"></a>
      <a href="https://www.linkedin.com/in/morten-stausholm-simonsen-75a300140/" title="Morten on LinkedIn" target="_blank"><img src="/IMG/linkedin.svg" alt="LinkedIn"></a>
      <a href="/MortenStausholm-resume.pdf" title="Download my Resume">Resume</a>
    </div>
  </div>
  <div class="credits">
    <br>
    Designed and developed with <span style="color:#c04242">&hearts;</span> by Morten Stausholm &copy; 2017
  </div>
</footer>
<p style="text-align:right; padding:10px; font-family: serif; color:#8898aa;" onclick="theNet(event);" title="Anyone heard of the Net?">&Pi;</p>

<script src="/JS/scripts.js" type="text/javascript"></script>
<script src="/JS/dont-go.js" type="text/javascript"></script>
<script type="text/javascript">
dontGo({
title: 'Are bananas truly yellow?',
faviconSrc: '/banana/favicon.ico',
timeout: 500
});

function theNet(event) {
  if (event.ctrlKey & event.shiftKey) {
    console.log('get schwifty');
    window.location = "http://test.mortenstausholm.dk";
  }
}
</script>
</body>
</html>
