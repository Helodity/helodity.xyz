var root = document.querySelector(':root');

//Store scroll indicator for parralax effects
window.addEventListener("scroll", (event) => {
  root.style.setProperty('--scroll_amount', window.scrollY + "px");
});
