window.addEventListener('load', function () {
  const dialogTriggers = document.querySelectorAll('[data-action="dialog"]')
  
  dialogTriggers.forEach(function (dialogTrigger) {
    dialogTrigger.addEventListener('click', function (event) {
      event.preventDefault()
      
      const dialogId = dialogTrigger.dataset.actionTarget
      const dialog = document.getElementById(dialogId)
      
      if (!dialog) return
      
      addNewDialog(dialog)
    })
  })
})

function removeDialog (dialog) {
  dialog.addEventListener('transitionend', function () {
    dialog.remove()
  })
  
  dialog.classList.remove('opened')
}

function addNewDialog (dialog) {
  const templates = dialog.querySelectorAll('template')
  const newNode = createDialog(templates)
  
  newNode.addEventListener('click', function (event) {
    if (event.target === newNode) {
      removeDialog(newNode)
    }
  })
  
  newNode.querySelector('.close-icon')?.addEventListener('click', function () {
    removeDialog(newNode)
  })
  
  setTimeout(function () {
    newNode.classList.add('opened')
  })
  
}

/**
 *
 * @param {HTMLTemplateElement[]} templates
 * @return {HTMLDivElement}
 */
function createDialog (templates) {
  const dialogContainer = document.createElement('div')
  dialogContainer.classList.add('dialog-container')
  dialogContainer.style.display = 'block'
  
  const dialog = document.createElement('div')
  dialog.classList.add('dialog')
  
  const title = document.createElement('div')
  title.classList.add('dialog-title')
  
  const closeIcon = Icons['icons/mdi-close'].cloneNode(true)
  closeIcon.classList.add('close-icon')
  
  title.appendChild(closeIcon)
  dialog.appendChild(title)
  
  templates.forEach(function (template) {
    const name = template.id
    const html = template.innerHTML
    
    if (name === 'title') {
      title.innerHTML = html + title.innerHTML
      
      return
    }
    
    const el = document.createElement('div')
    el.classList.add('dialog-' + name)
    el.innerHTML = html
    
    dialog.appendChild(el)
  })
  
  dialogContainer.appendChild(dialog)
  
  // dialog.innerHTML = template.innerHTML
  document.body.appendChild(dialogContainer)
  
  return dialogContainer
}
