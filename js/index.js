function disableScroll() {
    // Get the current page scroll position
    scrollTop = window.pageYOffset || document.documentElement.scrollTop;
    scrollLeft = window.pageXOffset || document.documentElement.scrollLeft,
  
        // if any scroll is attempted, set this to the previous value
        window.onscroll = function() {
            window.scrollTo(scrollLeft, scrollTop);
        };
}
  
function enableScroll() {
    window.onscroll = function() {};
}

const openNav = () => {
    document.getElementById('FSMenu').classList.remove('translate-x-full')
    document.getElementById('hamburger').classList.remove('block')
    document.getElementById('hamburger').classList.add('hidden')
    document.getElementById('FSMenu').classList.add('translate-x-0')
    disableScroll()
}

const closeNav = () => {
    document.getElementById('hamburger').classList.remove('hidden')
    document.getElementById('FSMenu').classList.remove('translate-x-0')
    document.getElementById('FSMenu').classList.add('translate-x-full')
    document.getElementById('hamburger').classList.add('block')
    enableScroll()
}