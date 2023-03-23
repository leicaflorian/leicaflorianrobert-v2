import { PageChanger } from './pageChanger'
import { Responsive } from './responsive'

export class PageTitle {
  titles
  pageTitle
  activeElement
  initialWidth
  
  lastScrollTimer
  
  constructor () {
    window.addEventListener(PageChanger.PAGE_CHANGING, () => {
      this.pageTitle = document.querySelector('header .page-title > *')
      this.titles = [...document.querySelectorAll('.section-title')]
  
      this.initialWidth = this.pageTitle.offsetWidth + (this.pageTitle.offsetLeft * 2)
      
      if (!this.pageTitle) {
        this.titles.forEach(title => title.classList.add('not-stick'))
      } else {
        this.onPageScroll()
      }
    })
    
    window.addEventListener('scroll', this.onPageScroll.bind(this))
    window.addEventListener('resize', this.onPageScroll.bind(this))
    window.addEventListener('resize', () => {
      this.initialWidth = this.pageTitle.offsetWidth + (this.pageTitle.offsetLeft * 2)
    })
  }
  
  onPageScroll () {
    if (this.lastScrollTimer && Date.now() - this.lastScrollTimer < 100) {
      // just a bit of throttling
      return
    }
    
    this.lastScrollTimer = Date.now()
  
    if (window.Responsive.mediaBreakpointDown('md')) {
      const mustHide = window.headerScrollPercent >= 90
    
      this.pageTitle.style.opacity = (mustHide ? 0 : 1).toString()
      this.pageTitle.parentNode.style.width = this.initialWidth + 'px'
      
      return
    }
  
    if (!this.titles || !this.pageTitle) {
      return
    }
  
    const nearestTitle = this.titles.find(title => {
      const rect = title.getBoundingClientRect()
    
      return rect.top >= 0 && rect.top < 130
    })
  
    if (nearestTitle) {
      if (nearestTitle.getBoundingClientRect().top >= 50) {
        this.activeElement = nearestTitle
        nearestTitle.classList.add('sticked')
        nearestTitle.style.opacity = 1
        this.pageTitle.style.opacity = 0
        this.pageTitle.parentNode.style.width = nearestTitle.offsetWidth + 'px'
      } else {
        nearestTitle.classList.remove('sticked')
        nearestTitle.style.opacity = 0
        this.pageTitle.parentNode.style.width = this.initialWidth + 'px'
      }
    } else {
      if (this.activeElement) {
        this.activeElement.classList.remove('sticked')
        this.pageTitle.parentNode.style.width = this.initialWidth + 'px'
      }
    
      this.activeElement = null
      this.pageTitle.style.opacity = 1
    }
  
    // console.log(nearestTitle)
  }
  
  isInViewport (el) {
    const rect = el.getBoundingClientRect()
    return (
      rect.top >= 0 &&
      rect.left >= 0 &&
      rect.bottom <= (window.innerHeight || document.documentElement.clientHeight) &&
      rect.right <= (window.innerWidth || document.documentElement.clientWidth)
    )
  }
}
