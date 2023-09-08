var width = ((typeof screen !== 'undefined') ? screen.width : null)
  || window.innerWidth
  || document.documentElement.clientWidth
  || document.body.clientWidth;
if (width <= 800) {
    window.location = "index-mobile.php";
} else if (width >= 800) {
    window.location = "index.php";
}