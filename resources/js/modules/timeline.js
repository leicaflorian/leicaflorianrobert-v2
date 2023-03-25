window.addEventListener('pageChanged', function () {

})

export class Timeline {
  static name = 'Timeline'
  
  /**
   * @type {HTMLElement}
   */
  timelineContainer
  
  constructor () {
    this.timelineContainer = document.querySelector('.timeline-container')
    
    if (!this.timelineContainer) {
      return
    }
    
    window.addEventListener('pageChanged', () => {
      if (this.timelineContainer.timelineBound) {
        return
      }
      
      this.bindEvents()
      
      this.timelineContainer.scrollTo({
        left: this.timelineContainer.scrollWidth,
        behavior: 'smooth'
      })
      
      this.timelineContainer.timelineBound = true
    })
  }
  
  bindEvents () {
    const events = document.querySelectorAll('.timeline-event')
    
    events.forEach((event) => {
      // const eventCard = event.querySelector('.timeline-event-card')
      
      event.addEventListener('mouseenter', this.onMouseEnter.bind(this))
    })
  }
  
  onMouseEnter (event) {
    const containerRect = this.timelineContainer.getBoundingClientRect()
    const elRect = event.currentTarget.getBoundingClientRect()
    const elPosition = {
      left: elRect.left - containerRect.left,
      right: containerRect.width - elRect.right + containerRect.left
    }
  
    let center = 0
  
    if (window.Responsive.mediaBreakpointDown('md')) {
      const halfWidth = elRect.width / 2
      const halfContainerWidth = containerRect.width / 2
      // center = halfContainerWidth - halfWidth
    }
  
    if (elPosition.left < 0) {
      this.timelineContainer.scrollTo({
        left: this.timelineContainer.scrollLeft + elPosition.left - center,
        behavior: 'smooth'
      })
    } else if (elPosition.right < 0) {
      this.timelineContainer.scrollTo({
        left: this.timelineContainer.scrollLeft - elPosition.right + center,
        behavior: 'smooth'
      })
    }
  
  }
}
