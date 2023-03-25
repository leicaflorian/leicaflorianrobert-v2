export class PageLoader extends EventTarget {
  static name = 'PageLoader'
  
  loader = null
  
  pendingAction
  
  animating = false
  
  currentEvent = null
  
  shown
  hidden
  
  constructor () {
    super()
  
    this.loader = document.querySelector('#loader')
  
    if (!this.loader) {
      return
    }
  
    this.addEventListeners()
  }
  
  async show () {
    if (this.shown) {
      return
    }
    
    this.shown = new Deferred()
    this.hidden = null
    
    this.currentEvent = 'show'
    this.loader.style.display = ''
    
    return new Promise(resolve => {
      setTimeout(async () => {
        // reset animation to default
        this.loader.classList.replace("animate-out", 'animate-in')
        
        document.body.classList.add('loading')
  
        await this.shown.promise
        this.onShowComplete()
  
        resolve()
      }, 300)
    })
  }
  
  async hide () {
    // console.log('hidden existing', this.hidden)
    
    if (this.hidden) {
      return
    }
    
    this.currentEvent = 'hide'
    this.hidden = new Deferred()
    this.shown = null
    
    return new Promise(async resolve => {
      this.loader.classList.replace("animate-in", 'animate-out')
  
      setTimeout(() => {
        document.body.classList.remove('loading')
      }, 300)
  
      await this.hidden.promise
      this.onHideComplete()
  
      resolve()
    }, 300)
    
  }
  
  onShowComplete () {
    this.shown = null
  }
  
  onHideComplete () {
    this.hidden = null
    this.loader.style.display = 'none'
  }
  
  addEventListeners () {
    this.loader.addEventListener('transitionend', () => {
      // console.log('transitionend', this.currentEvent)
      
      if (this.currentEvent === 'show') {
        this.shown?.resolve()
      } else if (this.currentEvent === 'hide') {
        this.hidden?.resolve()
      } else {
        if (document.body.classList.contains('loading')) {
          // this.onShowComplete()
        } else {
          // this.onHideComplete()
        }
      }
      
      this.dispatchEvent(new CustomEvent('padeLoader' + (this.active ? 'Shown' : 'Hidden')))
    })
  }
}

/*window.addEventListener('DOMContentLoaded', () => {
  window.pageLoader = new PageLoader(document.querySelector('.loader'))
  
  setTimeout(function () {
    pageLoader.hide()
  }, 1000)
})*/

class Deferred {
  constructor () {
    this.promise = new Promise((resolve, reject) => {
      this.reject = reject
      this.resolve = resolve
    })
  }
}
