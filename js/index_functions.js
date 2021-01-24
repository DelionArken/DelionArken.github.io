mybutton = document.getElementById("ScrollBtn");
sidepanel = document.getElementById("sidepanel");

var CurrentContainer = 0;
document.getElementById("start").addEventListener("click", startFunction.bind(null));
document.getElementById("ScrollBtn").addEventListener("click", doScrolling.bind(null, "#cont0", 600));
document.getElementById("side-toggle").addEventListener("click", sidepanel_toggle.bind(null));
document.getElementById("sidepanel-container").addEventListener("mouseleave", sidepanel_toggle.bind(null));
window.onscroll = function () { scrollFunction() };