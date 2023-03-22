import { PageChanger } from './pageChanger'

export class PageTitle {
  titles
  pageTitle
  activeElement
  
  constructor () {
    window.addEventListener(PageChanger.PAGE_CHANGING, () => {
      this.pageTitle = document.querySelector('header .page-title > *')
      this.titles = [...document.querySelectorAll('.section-title')]
      
      if (!this.pageTitle) {
        this.titles.forEach(title => title.classList.add('not-stick'))
      } else {
        this.onPageScroll()
      }
    })
    
    window.addEventListener('scroll', this.onPageScroll.bind(this))
  }
  
  onPageScroll () {
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
      } else {
        nearestTitle.classList.remove('sticked')
        nearestTitle.style.opacity = 0
      }
    } else {
      if (this.activeElement) {
        this.activeElement.classList.remove('sticked')
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
