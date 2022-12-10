const leftBtn = document.querySelector('.slider-btn_left')
const rightBtn = document.querySelector('.slider-btn_right')

let count = 0
let width = 0
const slider = document.querySelector('.slider')
const sliderLine = document.querySelector('.slider-line')

const clickLeft = () => {
    count ++
    if(count >= sliderLine.childElementCount)
        count = 0
    sliderScroll(1)
}

const clickRight = () => {
    count --
    if(count < 0)
    count = sliderLine.childElementCount - 1
    sliderScroll(1)
}

const resize = () => {
    width = slider.offsetWidth
    Array.from(sliderLine.children).forEach(img => img.style.width = width + 'px')
    sliderScroll(0)
}

const sliderScroll = (sec) => {
    sliderLine.style.transition = sec + 's'
    sliderLine.style.transform = 'translate( -' + count * width + 'px)'
}

leftBtn.addEventListener('click', clickRight)
rightBtn.addEventListener('click', clickLeft)
window.addEventListener('resize', resize)
resize()