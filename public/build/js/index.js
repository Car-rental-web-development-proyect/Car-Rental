let list = document.querySelector('.slider .list')
let items = document.querySelectorAll('.slider .list .item')
let dots = document.querySelectorAll('.slider .dots li')
let prev = document.getElementById('prev')
let next = document.getElementById('next')

let barra = document.querySelector('.nav')
let form_fijo = document.querySelector('.section')

window.addEventListener('scroll', () => {
    barra.classList.toggle('nav-fijo', window.scrollY>0)
    form_fijo.classList.toggle('form-fijo', window.scrollY>0)
})

let active = 0
let lenghtItems = items.length - 1

window.onresize = resizeItems
document.addEventListener('DOMContentLoaded', () => {
    resizeItems()
    reloadSlider()
})
function resizeItems () {
    items[0].style.width = window.innerWidth + 'px'
    items[1].style.width = window.innerWidth + 'px'
    items[2].style.width = window.innerWidth + 'px'
    items[3].style.width = window.innerWidth + 'px'
}

// ------------------- SLIDER ------------------------

next.addEventListener('click', function() {
    if (active + 1 > lenghtItems) {
        active = 0
    } else {
        active += 1
    }
    reloadSlider()
})

prev.addEventListener('click', function() {
    if (active - 1 < 0) {
        active = lenghtItems
    } else {
        active -= 1
    }
    reloadSlider()
})

function reloadSlider() {
    let checkLeft = items[active].offsetLeft
    list.style.left = -checkLeft + 'px'

    let ultimoDotActivo = document.querySelector('.slider .dots li.active')
    ultimoDotActivo.classList.remove('active')

    dots[active].classList.add('active')
}

dots.forEach((li, key) => {
    li.addEventListener('click', function() {
        active = key
        reloadSlider()
    })
})

let cambiarAutoSlider = setInterval(() => {next.click()}, 4000)