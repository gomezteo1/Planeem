var sobremi1 = document.getElementById("hover1");
var afectado1 = document.getElementById("afectado1");

var sobremi2 = document.getElementById("hover2");
var afectado2 = document.getElementById("afectado2");

var sobremi3 = document.getElementById("hover3");
var afectado3 = document.getElementById("afectado3");

var sobremi4 = document.getElementById("hover4");
var afectado4 = document.getElementById("afectado4");

sobremi1.addEventListener("mouseover", () => {
  afectado1.className = "static";
}, false)
sobremi1.addEventListener("mouseout", () => {
  afectado1.className = "";
}, false)

sobremi2.addEventListener("mouseover", () => {
  afectado2.className = "static";
}, false)
sobremi2.addEventListener("mouseout", () => {
  afectado2.className = "";
}, false)

sobremi3.addEventListener("mouseover", () => {
  afectado3.className = "static";
}, false)
sobremi3.addEventListener("mouseout", () => {
  afectado3.className = "";
}, false)

sobremi4.addEventListener("mouseover", () => {
  afectado4.className = "static";
}, false)
sobremi4.addEventListener("mouseout", () => {
  afectado4.className = "";
}, false)