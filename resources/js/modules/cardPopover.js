let active = null

export class CardPopover {
  static name = 'CardPopover'
  timers = {}
  
  constructor () {
    window.addEventListener('pageChanged', () => {
      this.bindAllCards()
    })
  }
  
  bindAllCards () {
    const cardPopovers = document.querySelectorAll('.card-popover')
  
    cardPopovers.forEach((cardPopover) => {
      if (cardPopover.cardPopoverBound) {
        return
      }
      
      this.bindCard(cardPopover)
      
      cardPopover.cardPopoverBound = true
    })
  }
  
  bindCard (cardPopover) {
    cardPopover.id = 'card-popover-' + Math.random().toString(36).slice(2, 9)
  
    const cardImg = cardPopover.querySelector('.card-img')
    const offcanvas = cardPopover.querySelector('.card-offcanvas')
    const expandCardBtn = cardPopover.querySelector('[data-target="expand-card"]')
  
    this.timers[cardPopover.id] = null
  
    cardImg.addEventListener('mouseenter', (e) => this.onCardMouseEnter(e, cardPopover, offcanvas))
    cardImg.addEventListener('mouseleave', (e) => this.onCardMouseLeave(e, cardPopover, offcanvas))
    cardPopover.addEventListener('transitionend', (e) => this.onCardTransitionEnd(e, cardPopover, offcanvas))
  
    this.addTouchEvent(cardImg, (e) => {
      if (window.Responsive.mediaBreakpointDown('sm')) {
        e.preventDefault()
        e.stopPropagation()
      
        this.openCardDialog(cardPopover)
      
      }
    })
  
    if (expandCardBtn) {
      expandCardBtn.addEventListener('click', function (event) {
        event.preventDefault()
      
        cardPopover.expanded = true
      })
    }
  }
  
  onCardMouseEnter (event, cardPopover, offcanvas) {
    const cardId = cardPopover.id
    
    if (this.timers[cardId]) {
      clearTimeout(this.timers[cardId])
    }
    
    this.calcPopoverPosition(cardPopover)
    
    this.timers[cardId] = setTimeout(function () {
      offcanvas.style.display = 'flex'
      cardPopover.style.zIndex = (active ? +active.style.zIndex + 1 : 60).toString()
      
      setTimeout(function () {
        cardPopover.classList.add('opened')
      }, 50)
      
      active = cardPopover
    }, 150)
  }
  
  onCardMouseLeave (event, cardPopover, offcanvas) {
    const cardId = cardPopover.id
    
    if (this.timers[cardId]) {
      clearTimeout(this.timers[cardId])
    }
    
    cardPopover.classList.remove('opened')
  }
  
  onCardTransitionEnd (event, cardPopover, offcanvas) {
    if (cardPopover.classList.contains('opened')) return
    
    offcanvas.style.display = 'none'
    cardPopover.style.zIndex = ''
    
    if (active && active.id === cardPopover.id) {
      active = null
    }
  }
  
  calcPopoverPosition (cardPopover) {
    const parent = cardPopover.closest('[data-popover-parent]')
    
    if (!parent) return
    
    const containerRect = parent.getBoundingClientRect()
    const elRect = cardPopover.getBoundingClientRect()
    const elPosition = {
      left: elRect.left - containerRect.left,
      right: containerRect.width - elRect.right + containerRect.left
    }
  
    if (elPosition.right < 420 && elPosition.left < 420) {
      cardPopover.dataset.popoverDirection = 'bottom'
    } else if (elPosition.right < 300) {
      cardPopover.dataset.popoverDirection = 'left'
    } else if (elPosition.left < 300) {
      cardPopover.dataset.popoverDirection = ''
    }
  }
  
  openCardDialog (cardPopover) {
    const innerLink = cardPopover.querySelector('a[data-action="dialog"]')
    
    if (innerLink) {
      innerLink.click()
      
      return
    }
    
    // show a new dialog based on the card content
    const cardContent = cardPopover.querySelector('.card-offcanvas')
    const dialogHeader = document.createElement('template')
    const dialogBody = document.createElement('template')
    
    dialogHeader.id = 'title'
    dialogBody.id = 'body'
    
    dialogHeader.innerHTML = cardPopover.querySelector('.card-text')?.innerHTML
    dialogBody.innerHTML = cardContent.innerHTML
    
    window.Dialogs.createDialog([
      dialogHeader,
      dialogBody
    ])
  }
  
  addTouchEvent (target, callback) {
    let started = false
    let moved = false
    
    target.addEventListener('touchstart', (e) => {
      e.stopPropagation()
      
      started = true
    })
    
    target.addEventListener('touchmove', () => {
      moved = true
    })
    
    target.addEventListener('touchend', (e) => {
      e.stopPropagation()
      
      if (started && !moved) {
        callback(e)
      }
      
      started = false
      moved = false
    })
    
  }
}
