let mainLogo
let header
let niLogoPlaceholder
let bgImg
let pageTitle

const startSize = 120
const endSize = 60

const startBlur = 10
const endBlur = 0

let startLogoOffset = 0
let endLogoOffset = 0

let startNiLogoPlaceholder = 0
let endNiLogoPlaceholder = 0

let startImgScale = 1
let endImgScale = 1.5

let pageTitleStart = 0
let pageTitleEnd = 100

let pageTitleScaleStart = 1
let pageTitleScaleEnd = 0.7

window.addEventListener('DOMContentLoaded', function () {
  header = document.querySelector('header')
  mainLogo = document.querySelector('.logo-container')
  niLogoPlaceholder = document.querySelector('.navbar-item-logo-placeholder')
  bgImg = header.querySelector('.bg-img')
  pageTitle = header.querySelector('.page-title')
  
  startLogoOffset = parseInt(getComputedStyle(header).getPropertyValue('--logo-offset'))
  endNiLogoPlaceholder = niLogoPlaceholder.offsetWidth
  
  updateLogoSize()
})

window.addEventListener('scroll', function (e) {
  updateLogoSize()
})

window.addEventListener('resize', function (e) {
  updateLogoSize()
})

function updateLogoSize () {
  const navbarSize = parseInt(getComputedStyle(header).getPropertyValue('--navbar-height'))
  const vh = header.offsetHeight - navbarSize
  
  const vhPercent = (window.scrollY / vh) * 100
  const blurPercent = (window.scrollY / vh) * 100
  
  const newSize = startSize - (vhPercent * (startSize - endSize) / 100)
  const newBlur = Math.round(startBlur - (blurPercent * (startBlur - endBlur) / 100))
  const newLogoOffset = startLogoOffset - (vhPercent * (startLogoOffset - endLogoOffset) / 100)
  const newNiLogoPlaceholder = startNiLogoPlaceholder - (vhPercent * (startNiLogoPlaceholder - endNiLogoPlaceholder) / 100)
  const newImgScale = startImgScale - (vhPercent * (startImgScale - endImgScale) / 100)
  const newPageTitleScale = pageTitleScaleStart - (vhPercent * (pageTitleScaleStart - pageTitleScaleEnd) / 100)
  
  if (vhPercent < 100) {
    header.style.setProperty('--logo-size', `${newSize}px`)
    header.style.setProperty('--logo-bg-blur', `${newBlur}px`)
    header.style.setProperty('--logo-offset', `${newLogoOffset}rem`)
    header.style.setProperty('--img-scale', `${newImgScale}`)
    header.style.setProperty('--page-title-translate-y', `${vhPercent}%`)
    header.style.setProperty('--page-title-scale', `${newPageTitleScale}`)
    niLogoPlaceholder.style.maxWidth = `${newNiLogoPlaceholder}px`
  } else {
    header.style.setProperty('--logo-size', `${endSize}px`)
    header.style.setProperty('--logo-bg-blur', `${endBlur}px`)
    header.style.setProperty('--logo-offset', `${endLogoOffset}rem`)
    header.style.setProperty('--img-scale', `${endImgScale}`)
    header.style.setProperty('--page-title-translate-y', `${pageTitleEnd}%`)
    header.style.setProperty('--page-title-scale', `${pageTitleScaleEnd}`)
    niLogoPlaceholder.style.maxWidth = `${endNiLogoPlaceholder}px`
  }
}
