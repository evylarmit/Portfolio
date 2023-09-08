window.addEventListener("resize", getTemplate);


function getTemplate() {
    if (screen.width >= 767) {
        return window.location.replace("index.php");
    }

    if (screen.width < 767) {
        return window.location.replace("index-mobile.php");
    }
}
