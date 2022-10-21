function disableScroll() {
    scrollTop = window.pageYOffset || document.documentElement.scrollTop;
    scrollLeft = window.pageXOffset || document.documentElement.scrollLeft,
        window.onscroll = function() {
            window.scrollTo(scrollLeft, scrollTop);
        };
}
function enableScroll() {
    window.onscroll = function() {};
}

const openElement = (e) => {
    document.getElementById(e).classList.remove('hidden')
    document.getElementById(e).classList.add('block')
    disableScroll()
}
const closeElement = (e) => {
    document.getElementById(e).classList.remove('block')
    document.getElementById(e).classList.add('hidden')
    enableScroll()
}