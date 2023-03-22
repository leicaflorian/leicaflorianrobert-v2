import axios from 'axios'

export class PageChanger {
  // after loader is hidden
  static PAGE_CHANGED = 'pageChanged'
  
  // after content is loaded but before loader is hidden
  static PAGE_CHANGING = 'pageChanging'
  
  initialLoaderDelay = 500
  links = []
  
  constructor () {
    window.addEventListener('DOMContentLoaded', () => {
      this.bindLinks()
    })
    
    window.addEventListener('popstate', async (e) => {
      const newLocation = e.target.location.href
      
    })
    
    window.addEventListener('load', () => {
      this.dispatchEvent(PageChanger.PAGE_CHANGING)
      setTimeout(async () => {
        await this.dispatchPageChanged(true)
      }, this.initialLoaderDelay)
    })
  }
  
  bindLinks (selector = 'header') {
    const headerLinks = document.querySelectorAll(selector + ' .route-link')
    
    this.addLinksEvent(headerLinks)
    
    // store links
    this.links.push(...headerLinks)
  }
  
  addLinksEvent (links) {
    links.forEach(link => {
      link.addEventListener('click', async (e) => {
        e.preventDefault()
        
        await this.navigateToPage(e.target.href)
      })
    })
  }
  
  async navigateToPage (href) {
    if (!href) {
      return
    }
    
    const newUrl = new URL(href)
    
    if (newUrl.pathname === window.location.pathname) {
      if (newUrl.hash) {
        window.scroll({
          top: document.querySelector(newUrl.hash).offsetTop - 60,
          behavior: 'smooth'
        })
      }
      
      return
    }
    
    // console.log('loading new Content')
    
    await this.toggleLoader(true)
    
    const pageContent = await this.getNewPageContent(href)
    
    if (!pageContent) {
      // console.log('No content found')
      
      await this.toggleLoader(false)
      
      return
    }
    
    // console.log('showing new Content')
    this.showNewContent(pageContent)
    this.updateHistory(href)
    
    this.dispatchEvent(PageChanger.PAGE_CHANGING)
    
    //  must reconnect the header events
    this.bindLinks('header')
    
    await this.toggleLoader(false)
    
    await this.dispatchPageChanged()
    
    // console.log('content showed')
  }
  
  /**
   *
   * @param href
   * @return {Promise<*>}
   */
  async getNewPageContent (href) {
    let url = href + '?fragment'
    
    try {
      const response = await axios({
        method: 'GET',
        url: url
      })
      
      return response.data
    } catch (e) {
      console.error(e)
      
      window.location.href = href
    }
  }
  
  /**
   *
   * @param {{pageTitle: string, header: string, main:string}} content
   */
  showNewContent (content) {
    document.body.querySelector('main').outerHTML = content.main ?? ''
    document.body.querySelector('header').outerHTML = content.header ?? ''
    
    window.scrollTo({ top: 0 })
    
    document.title = content.pageTitle ?? 'Leica Florian Robert'
    
    // this.pageTitleEl.innerHTML = pageTitle ?? 'Leica Florian Robert'
    // this.pageTitleEl.parentNode.classList.toggle('d-none', !pageTitle)
  }
  
  async dispatchPageChanged (toggleLoader = false) {
    if (toggleLoader) {
      await this.toggleLoader(false)
    }
    
    this.dispatchEvent(PageChanger.PAGE_CHANGED)
  }
  
  dispatchEvent (eventName) {
    window.dispatchEvent(new CustomEvent(eventName))
  }
  
  async toggleLoader (newState) {
    return new Promise(async (resolve) => {
      if (window.PageLoader) {
        await window.PageLoader[newState ? 'show' : 'hide']()
        resolve()
      } else {
        resolve()
      }
    })
  }
  
  updateHistory (url) {
    window.history.pushState({}, '', url)
  }
}
