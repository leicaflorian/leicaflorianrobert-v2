let active = null

window.addEventListener('DOMContentLoaded', function () {
  const cardPopovers = document.querySelectorAll('.card-popover')
  
  cardPopovers.forEach(function (cardPopover) {
    cardPopover.id = 'card-popover-' + Math.random().toString(36).substr(2, 9)
    
    const cardImg = cardPopover.querySelector('.card-img')
    const offcanvas = cardPopover.querySelector('.card-offcanvas')
    const expandCardBtn = cardPopover.querySelector('[data-target="expand-card"]')
    let timerIn = null
    
    cardImg.addEventListener('mouseenter', function (event) {
      if (timerIn) {
        clearTimeout(timerIn)
      }
      
      timerIn = setTimeout(function () {
        offcanvas.style.display = 'flex'
        cardPopover.style.zIndex = (active ? +active.style.zIndex + 1 : 60).toString()
        
        setTimeout(function () {
          cardPopover.classList.add('opened')
        }, 50)
        
        active = cardPopover
      }, 150)
    })
    
    cardImg.addEventListener('mouseleave', function (event) {
      if (timerIn) {
        clearTimeout(timerIn)
      }
      
      cardPopover.classList.remove('opened')
    })
    
    cardPopover.addEventListener('transitionend', function (event) {
      if (cardPopover.classList.contains('opened')) return
      
      offcanvas.style.display = 'none'
      cardPopover.style.zIndex = ''
      
      if (active && active.id === cardPopover.id) {
        active = null
      }
    })
    
    if (expandCardBtn) {
      expandCardBtn.addEventListener('click', function (event) {
        event.preventDefault()
        
        cardPopover.expanded = true
      })
    }
  })
})
