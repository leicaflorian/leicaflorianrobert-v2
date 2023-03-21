window.Icons = {}

window.addEventListener('load', function () {
  const iconsTemplate = document.querySelector('template#icons')
  
  if (!iconsTemplate) return
  
  const icons = iconsTemplate.content.cloneNode(true).querySelectorAll('.icon')
  
  icons.forEach(function (icon) {
    Icons[icon.dataset.icon] = icon
  })
})
