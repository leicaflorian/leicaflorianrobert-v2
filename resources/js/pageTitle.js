let titles
let pageTitle
let activeElement

window.addEventListener('DOMContentLoaded', function () {
  pageTitle = document.querySelector('header .page-title > *')
  titles = [...document.querySelectorAll('.section-title')]
  
  if (!pageTitle) {
    titles.forEach(title => title.classList.add('not-stick'))
    
    return
  }
  
  
  window.addEventListener('scroll', function () {
    const nearestTitle = titles.find(title => {
      const rect = title.getBoundingClientRect()
      
      return rect.top >= 0 && rect.top < 130
    })
    
    if (nearestTitle) {
      if (nearestTitle.getBoundingClientRect().top >= 50) {
        activeElement = nearestTitle
        nearestTitle.classList.add('sticked')
        nearestTitle.style.opacity = 1
        pageTitle.style.opacity = 0
      } else {
        nearestTitle.classList.remove('sticked')
        nearestTitle.style.opacity = 0
      }
    } else {
      if (activeElement) {
        activeElement.classList.remove('sticked')
      }
      
      activeElement = null
      pageTitle.style.opacity = 1
    }
    
    // console.log(nearestTitle)
  })
})

const isInViewport = function (el) {
  const rect = el.getBoundingClientRect()
  return (
    rect.top >= 0 &&
    rect.left >= 0 &&
    rect.bottom <= (window.innerHeight || document.documentElement.clientHeight) &&
    rect.right <= (window.innerWidth || document.documentElement.clientWidth)
  )
}
