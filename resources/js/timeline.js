/**
 * @type {HTMLElement}
 */
let timelineContainer

window.addEventListener('load', function () {
  timelineContainer = document.querySelector('.timeline-container')
  
  if (!timelineContainer) {
    return
  }
  
  console.log(timelineContainer)
  
  const events = document.querySelectorAll('.timeline-event')
  
  events.forEach(function (event) {
    const eventCard = event.querySelector('.timeline-event-card')
    
    event.addEventListener('mouseenter', function (event) {
      const containerRect = timelineContainer.getBoundingClientRect()
      const elRect = event.currentTarget.getBoundingClientRect()
      const elPosition = {
        left: elRect.left - containerRect.left,
        right: containerRect.width - elRect.right + containerRect.left
      }
      
      if (elPosition.left < 0) {
        timelineContainer.scrollTo({
          left: timelineContainer.scrollLeft + elPosition.left,
          behavior: 'smooth'
        })
      } else if (elPosition.right < 0) {
        timelineContainer.scrollTo({
          left: timelineContainer.scrollLeft - elPosition.right,
          behavior: 'smooth'
        })
      }
      
      if (elPosition.right < 300) {
        eventCard.dataset.popoverDirection = 'left'
      } else if (elPosition.left < 300) {
        eventCard.dataset.popoverDirection = ''
      }
    })
  })
})
