var menuToggle = document.getElementById("menu-toggle");
var menuMobile = document.getElementById("menu-mobile");
var overlay = document.getElementById("overlay");
var hamburger = document.getElementById("hamburger");
var body = document.getElementById("body");

menuToggle.addEventListener("click", activateMenu);
overlay.addEventListener("click", removeMenu);

function activateMenu() {
  menuMobile.classList.toggle("active");
  hamburger.classList.toggle("hamburger-active");
  console.log("clicked");
  overlay.style.pointerEvents = "auto";
  // body.style.overflow = "hidden";
  body.style.position = "fixed";
}
function removeMenu() {
  menuMobile.classList.remove("active");
  hamburger.classList.remove("hamburger-active");
  console.log("click");
  overlay.style.pointerEvents = "none";
  // body.style.overflow = "visible";
  body.style.position = "static";
}




var asciiPerson = document.getElementById("ascii-person");

function changeTextNormal() {
  var newText = [
    "       .-&quot;```'.<br>",
    "      &#47;   &#92;    &#92;<br>",
    "     /   / `&#92;__/<br>",
    "     | .'  _  _|<br>",
    "     &#92;(&#92;   6  6<br>",
    "      | &#92;   _&#92; |     Hi! <br>",
    "      |&#92; `~`= `/    _/<br>",
    "      | '.___.'<br>",
    "  .'` &#92;     |_<br>",
    " /      '-__ / `-"
  ];
  asciiPerson.innerHTML = newText.join("");
}

function changeText() {
  var newText = [
    "       .-&quot;```'.<br>",
    "      &#47;   &#92;    &#92;<br>",
    "     /   / `&#92;__/<br>",
    "     | .'  -  -|<br>",
    "     &#92;(&#92;   O  O<br>",
    "      | &#92;   _&#92; |    Home!<br>",
    "      |&#92; `~`0 `/    _/<br>",
    "      | '.___.'<br>",
    "  .'` &#92;     |_<br>",
    " /      '-__ / `-"
  ];
  asciiPerson.innerHTML = newText.join("");
}
function changeText2() {
  var newText = [
    "       .-&quot;```'.<br>",
    "      &#47;   &#92;    &#92;<br>",
    "     /   / `&#92;__/<br>",
    "     | .'  -  -|<br>",
    "     &#92;(&#92;   6  6<br>",
    "      | &#92;   _&#92; |  Contact<br>",
    "      |&#92; `~`0 `/    _/<br>",
    "      | '.___.'<br>",
    "  .'` &#92;     |_<br>",
    " /      '-__ / `-"
  ];
  asciiPerson.innerHTML = newText.join("");
}
function changeText3() {
  var newText = [
    "       .-&quot;```'.<br>",
    "      &#47;   &#92;    &#92;<br>",
    "     /   / `&#92;__/<br>",
    "     | .'  -  -|<br>",
    "     &#92;(&#92;   6  6<br>",
    "      | &#92;   _&#92; |  me.pdf!<br>",
    "      |&#92; `~`0 `/    _/<br>",
    "      | '.___.'<br>",
    "  .'` &#92;     |_<br>",
    " /      '-__ / `-"
  ];
  asciiPerson.innerHTML = newText.join("");
}
function changeText4() {
  var newText = [
    "       .-&quot;```'.<br>",
    "      &#47;   &#92;    &#92;<br>",
    "     /   / `&#92;__/<br>",
    "     | .'  -  _|<br>",
    "     &#92;(&#92;   6  6<br>",
    "      | &#92;   _&#92; |  School!<br>",
    "      |&#92; `~`0 `/    _/<br>",
    "      | '.___.'<br>",
    "  .'` &#92;     |_<br>",
    " /      '-__ / `-"
  ];
  asciiPerson.innerHTML = newText.join("");
}
function changeText5() {
  var newText = [
    "       .-&quot;```'.<br>",
    "      &#47;   &#92;    &#92;<br>",
    "     /   / `&#92;__/<br>",
    "     | .'  _  -|<br>",
    "     &#92;(&#92;   6  6<br>",
    "      | &#92;   _&#92; |  Skills!<br>",
    "      |&#92; `~`0 `/    _/<br>",
    "      | '.___.'<br>",
    "  .'` &#92;     |_<br>",
    " /      '-__ / `-"
  ];
  asciiPerson.innerHTML = newText.join("");
}
