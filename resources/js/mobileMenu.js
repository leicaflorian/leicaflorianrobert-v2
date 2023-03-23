import { PageChanger } from './modules/pageChanger'

let mobileMenuContainer
let mobileBtn
let mobileBackdrop
let mobileMenu
let mobileMenuCloseBtn

window.addEventListener(PageChanger.PAGE_CHANGING, () => {
  if (document.body.classList.contains('mobile-menu-open')) {
    closeMobileMenu()
  }
  
  mobileMenuContainer = document.getElementById('mobile-menu')
  mobileBtn = mobileMenuContainer.querySelector('.btn.btn-fab')
  mobileBackdrop = mobileMenuContainer.querySelector('.mobile-menu-backdrop')
  mobileMenu = mobileMenuContainer.querySelector('.mobile-menu-canvas')
  mobileMenuCloseBtn = mobileMenuContainer.querySelector('.close-icon')
  
  mobileBtn.addEventListener('click', openMobileMenu)
  mobileBackdrop.addEventListener('click', closeMobileMenu)
  mobileMenuCloseBtn.addEventListener('click', closeMobileMenu)
  
  mobileMenu.addEventListener('click', function (event) {
    if (event.target.tagName !== 'A') {
      return
    }
    
    closeMobileMenu()
  })
  
})

function closeMobileMenu () {
  document.body.classList.remove('mobile-menu-open')
  
  mobileBackdrop.classList.remove('show')
  
  setTimeout(function () {
    mobileBackdrop.style.display = ''
  }, 300)
}

function openMobileMenu () {
  document.body.classList.add('mobile-menu-open')
  
  mobileBackdrop.style.display = 'block'
  
  setTimeout(function () {
    mobileBackdrop.classList.add('show')
  })
}

window.addEventListener('resize', function () {
  if (window.innerWidth > 767) {
    closeMobileMenu()
  }
})
