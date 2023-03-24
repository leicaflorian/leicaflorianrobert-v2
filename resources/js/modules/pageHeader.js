import { PageChanger } from './pageChanger'

export class PageHeader {
  
  header
  headerBgImg
  
  navbar
  
  mainLogo
  pageTitle
  
  sizes = {
    logo: {
      size: {
        start: 100,
        end: 60
      },
      offset: {
        start: 0,
        end: 0
      },
      blur: {
        start: 10,
        end: 0
      }
    },
    bgImg: {
      scale: {
        start: 1,
        end: 1.5
      }
    },
    pageTitle: {
      scale: {
        start: 1,
        end: 0.7
      }
    },
    navbarLogoPlaceholder: {
      size: {
        start: 0,
        end: 0
      }
    }
  }
  
  constructor () {
    this.bindEvents()
  }
  
  get navbarHeight () {
    if (!this.navbar) {
      return 0
    }
    
    // return parseInt(window.getComputedStyle(this.header).getPropertyValue('--navbar-height'))
    const value = parseInt(this.navbar.offsetHeight)
    
    if (value > 100) {
      return 100
    }
    
    return value
  }
  
  get viewportHeight () {
    if (!this.header) {
      return 0
    }
    
    return this.header.offsetHeight - this.navbarHeight
  }
  
  /**
   * Scroll percentage referring to the header
   * 100% means the header is fully scrolled out of view
   */
  get scrollPercent () {
    const value = (window.scrollY / this.viewportHeight) * 100
    
    if (value > 100) {
      return 100
    }
    
    return value
  }
  
  storeElements () {
    this.header = document.querySelector('header')
    
    if (!this.header) {
      return
    }
    
    this.headerBgImg = this.header.querySelector('.bg-img')
    this.navbar = this.header.querySelector('.navbar')
    this.mainLogo = this.header.querySelector('.logo-container')
    this.pageTitle = this.header.querySelector('.page-title')
    
    this.storeInitialSizes()
  }
  
  storeInitialSizes () {
    // this.sizes.logo.size.start = 100
    this.sizes.logo.offset.start = parseInt(getComputedStyle(this.header).getPropertyValue('--logo-offset'))
    
    if (window.Responsive.mediaBreakpointDown('md')) {
      // this.sizes.logo.offset.end = 0.8
    } else {
      // this.sizes.logo.offset.end = 0
    }
  }
  
  bindEvents () {
    window.addEventListener(PageChanger.PAGE_CHANGING, () => {
      this.storeElements()
      this.refreshUi()
    })
    
    window.addEventListener('scroll', () => {
      this.refreshUi()
    })
    
    window.addEventListener('resize', () => {
      this.storeInitialSizes()
      this.refreshUi()
    })
  }
  
  refreshUi () {
    this.updateHeader()
    this.updateLogo()
    this.updateBgImg()
    this.updatePageTitle()
    this.updateNavbar()
  }
  
  updateHeader () {
    if (!this.header) {
      return
    }
    
    this.header.style.setProperty('--header-percentage', `${this.scrollPercent}`)
  }
  
  updateLogo () {
    if (!this.header) {
      return
    }
    
    let newSize = this.sizes.logo.size.start - (this.scrollPercent * (this.sizes.logo.size.start - this.sizes.logo.size.end) / 100)
    let newOffset = this.sizes.logo.offset.start - (this.scrollPercent * (this.sizes.logo.offset.start - this.sizes.logo.offset.end) / 100)
    let newBlur = this.sizes.logo.blur.start - (this.scrollPercent * (this.sizes.logo.blur.start - this.sizes.logo.blur.end) / 100)
    let newBorderColor = 'var(--color-light)'
    
    if (this.scrollPercent > 100) {
      newSize = this.sizes.logo.size.end
      newOffset = this.sizes.logo.offset.end
      newBlur = this.sizes.logo.blur.end
    }
    
    if (window.scrollY > (this.viewportHeight - this.navbarHeight)) {
      newBorderColor = 'white'
    }
    
    this.sizes.logo.size.current = newSize
    
    this.header.style.setProperty('--logo-size', `${newSize}px`)
    this.header.style.setProperty('--logo-offset', `${newOffset}vh`)
    this.header.style.setProperty('--logo-border-color', `${newBorderColor}`)
    this.header.style.setProperty('--logo-bg-blur', `${newBlur}px`)
  }
  
  updateBgImg () {
    if (!this.header) {
      return
    }
    
    let newScale = this.sizes.bgImg.scale.start - (this.scrollPercent * (this.sizes.bgImg.scale.start - this.sizes.bgImg.scale.end) / 100)
    
    if (this.scrollPercent > 100) {
      newScale = this.sizes.bgImg.scale.end
    }
    
    this.header.style.setProperty('--img-scale', `${newScale}`)
  }
  
  updatePageTitle () {
    if (!this.header) {
      return
    }
    
    let newPageTitleScale = this.sizes.pageTitle.scale.start - (this.scrollPercent * (this.sizes.pageTitle.scale.start - this.sizes.pageTitle.scale.end) / 100)
    
    if (this.scrollPercent > 100) {
      newPageTitleScale = this.sizes.pageTitle.scale.end
    }
    
    this.header.style.setProperty('--page-title-translate-y', `${this.scrollPercent}%`)
    this.header.style.setProperty('--page-title-scale', `${newPageTitleScale}`)
  }
  
  updateNavbar () {
    if (!this.header) {
      return
    }
    
    let endSize = this.sizes.logo.size.current + (16 * 2)
    let newSize = this.sizes.navbarLogoPlaceholder.size.start - (this.scrollPercent * (this.sizes.navbarLogoPlaceholder.size.start - endSize) / 100)
    
    // if (this.scrollPercent > 100) {
    //   newSize = this.sizes.navbarLogoPlaceholder.size.end
    // }
    
    this.header.style.setProperty('--logo-placeholder-size', `${newSize}px`)
  }
}
