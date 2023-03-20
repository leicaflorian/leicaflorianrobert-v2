window.addEventListener('load', function () {
  const dialogTriggers = document.querySelectorAll('[data-action="dialog"]')
  const dialogs = document.querySelectorAll('.dialog-container')
  
  dialogTriggers.forEach(function (dialogTrigger) {
    dialogTrigger.addEventListener('click', function (event) {
      event.preventDefault()
      
      const dialogId = dialogTrigger.dataset.actionTarget
      const dialog = [...dialogs].find(function (dialog) {
        return dialog.id === dialogId
      })
      
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
  const newNode = dialog.cloneNode(true)
  newNode.style.display = 'block'
  
  newNode.addEventListener('click', function (event) {
    if (event.target === newNode) {
      removeDialog(newNode)
    }
  })
  
  newNode.querySelector('.close-icon')?.addEventListener('click', function () {
    removeDialog(newNode)
  })
  
  document.body.appendChild(newNode)
  
  setTimeout(function () {
    
    newNode.classList.add('opened')
  })
  
}
