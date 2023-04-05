import { PageChanger } from './pageChanger'
import WDSA from 'wab-dom-scroll-animator'

export class PageHeader {
  static name = 'PageHeader'
  
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
  
  storeElements () {
    this.header = document.querySelector('header')
    
    if (!this.header) {
      return
    }
    
    this.storeInitialSizes()
    
    WDSA.register({
      container: this.header,
      elements: [
        {
          target: this.header,
          properties: {
            '--header-percentage': [0, 100],
            '--logo-size': [this.sizes.logo.size.start + 'px', this.sizes.logo.size.end + 'px'],
            '--logo-offset': [this.sizes.logo.offset.start + 'vh', this.sizes.logo.offset.end + 'vh'],
            '--logo-bg-blur': [this.sizes.logo.blur.start + 'px', this.sizes.logo.blur.end + 'px'],
            '--logo-border-color': ['#EAE3D1', '#fff'],
            '--img-scale': [this.sizes.bgImg.scale.start, this.sizes.bgImg.scale.end],
            '--page-title-translate-y': ['0', '100%'],
            '--page-title-scale': [this.sizes.pageTitle.scale.start, this.sizes.pageTitle.scale.end],
            '--logo-placeholder-size': [0, this.sizes.logo.size.end + (16 * 2) + 'px']
          },
          endAt: 20,
          debounceTime: 0
        }
      ]
    })
    
    const projectsList = document.querySelector('.projects-list')
    
    if (projectsList) {
      WDSA.register({
        container: document.querySelector('.projects-list'),
        elements: [
          {
            target: document.querySelectorAll('.projects-list .card-popover'),
            properties: {
              'opacity': [0, 1]
            },
            startAt: -70,
            endAt: 100,
            delay: function (el, i) { return i * 100 }
          }
        ]
      })
    }
    
  }
  
  storeInitialSizes () {
    this.sizes.logo.offset.start = parseInt(getComputedStyle(this.header).getPropertyValue('--logo-offset'))
  }
  
  bindEvents () {
    window.addEventListener(PageChanger.PAGE_CHANGING, () => {
      this.storeElements()
    })
  }
}
