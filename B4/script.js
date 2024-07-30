let isShow = false;
function display() {
    if (!isShow) {
        document.getElementById("nav").classList.add("show");
    }else {
        document.getElementById("nav").classList.remove("show");
    }
    isShow = !isShow;
}