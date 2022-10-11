const openNav = () => {
    document.getElementById('FSMenu').classList.remove('translate-x-full')
    document.getElementById('hamburger').classList.remove('block')
    document.getElementById('hamburger').classList.add('hidden')
    document.getElementById('FSMenu').classList.add('translate-x-0')
}
const closeNav = () => {
    document.getElementById('hamburger').classList.remove('hidden')
    document.getElementById('FSMenu').classList.remove('translate-x-0')
    document.getElementById('FSMenu').classList.add('translate-x-full')
    document.getElementById('hamburger').classList.add('block')
}