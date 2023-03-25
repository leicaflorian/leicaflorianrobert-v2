import { PageChanger } from './pageChanger'
import { Responsive } from './responsive'

export class PageTitle {
  titles
  header
  mainTitle
  mainTitleContainer
  debounceTimers = {}
  
  ignoringTitles = false
  
  settings = {
    // in ms
    debounce: 5,
    // in px
    scrollThreshold: 10
  }
  
  constructor () {
    window.addEventListener(PageChanger.PAGE_CHANGING, () => {
      this.header = document.querySelector('header')
      this.mainTitleContainer = document.querySelector('header .page-title')
      this.mainTitle = this.mainTitleContainer?.querySelector(':first-child')
      this.titles = [...document.querySelectorAll('.section-title')]
      
      if (!this.mainTitleContainer) {
        this.ignoreTitles()
      } else {
        this.ignoringTitles = false
      }
  
      this.debounce('scroll', this.settings.debounce, this.onPageScroll.bind(this))
    })
    
    window.addEventListener('scroll', () => this.debounce('scroll', this.settings.debounce, this.onPageScroll.bind(this)))
    window.addEventListener('resize', () => this.debounce('resize', this.settings.debounce, this.onPageScroll.bind(this)))
  }
  
  get mainTitleContainerScaleFactor () {
    const scaleFactor = this.header?.style.getPropertyValue('--page-title-scale')
    
    return parseFloat(scaleFactor) ?? 1
  }
  
  /**
   * @return {DOMRect|{}}
   */
  get mainTitleBounds () {
    return this.mainTitleContainer?.getBoundingClientRect() ?? {}
  }
  
  get mainTitleWidth () {
    if (!this.mainTitle) {
      return 0
    }
    
    return (this.mainTitle.offsetWidth) + (this.mainTitlePadding * 2)
  }
  
  get mainTitlePadding () {
    if (!this.mainTitleContainer) {
      return 0
    }
    
    return parseInt(getComputedStyle(this.mainTitleContainer).paddingLeft) || 0
  }
  
  get sectionsPosition () {
    return this.titles?.map((title) => {
      return title.getBoundingClientRect().top
    })
  }
  
  get activeTitle () {
    return this.titles?.find((title) => {
      return title.classList.contains('stick')
    })
  }
  
  get nearestTitle () {
    const sectionsPosition = this.sectionsPosition
    
    return this.titles?.find((title, index) => {
      const minTop = this.mainTitleBounds.top - this.settings.scrollThreshold
      const maxBottom = (this.mainTitleBounds.bottom - this.settings.scrollThreshold)
      
      return sectionsPosition[index] <= maxBottom && sectionsPosition[index] >= minTop
    })
  }
  
  onPageScroll () {
    // must handle cases where the main title is not present
    if (this.ignoringTitles) {
      return
    }
    
    // update the main title position
    this.setStickyTitlePosition()
    this.setMainTitleContainerWidth()
    
    // if there is a title nearby, hide the main title
    this.toggleMainTitle(!this.nearestTitle)
    
    // if there is a title nearby, make it sticky
    if (this.nearestTitle) {
      this.activeTitle?.classList.remove('stick')
      this.nearestTitle.classList.add('stick')
    } else {
      this.activeTitle?.classList.remove('stick')
    }
  }
  
  setStickyTitlePosition () {
    if (!this.mainTitleBounds) {
      return
    }
    
    let topValue = (this.mainTitleBounds?.top ?? 0)
    
    if (this.nearestTitle) {
      const titleHeight = this.nearestTitle.offsetHeight
      
      // calculate the top value based on the nearest title height to center it in the title container
      topValue += (this.mainTitleBounds.height - titleHeight) / 2
    }
    
    document.body.style.setProperty('--section-title-sticky-top', topValue + 'px')
  }
  
  setMainTitleContainerWidth () {
    if (!this.mainTitleContainer) {
      return
    }
    
    let width = this.mainTitleWidth
    
    if (this.activeTitle) {
      width = (this.activeTitle.offsetWidth / this.mainTitleContainerScaleFactor) + (this.mainTitlePadding * 2)
    }
    
    // must add scale factor to the width
    
    this.mainTitleContainer.style.width = width + 'px'
  }
  
  toggleMainTitle (newState) {
    this.mainTitle?.classList.toggle('hidden', !newState)
  }
  
  ignoreTitles () {
    this.titles?.forEach((title) => {
      title.classList.add('ignore')
    })
    
    this.ignoringTitles = true
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
  
  debounce (key, delay, fn) {
    if (this.debounceTimers[key]) {
      clearTimeout(this.debounceTimers[key])
    }
    
    this.debounceTimers[key] = setTimeout(() => {
      fn()
    }, delay)
  }
}
