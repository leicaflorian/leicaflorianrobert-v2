export class Dialogs {
  static name = 'Dialogs'
  static DIALOG_OPENED = 'dialogOpened'
  
  constructor () {
    window.addEventListener('pageChanged', () => {
      this.bindDialogs()
    })
  }
  
  bindDialogs () {
    const dialogTriggers = document.querySelectorAll('[data-action="dialog"]')
    
    dialogTriggers.forEach((dialogTrigger) => {
        if (dialogTrigger.dialogBound) {
          return
        }
        
        dialogTrigger.addEventListener('click', (event) => {
          event.preventDefault()
          
          const dialogId = dialogTrigger.dataset.actionTarget
          const dialog = document.getElementById(dialogId)
          
          if (!dialog) return
          
          this.addNewDialog(dialog)
        })
        
        dialogTrigger.dialogBound = true
      }
    )
  }
  
  removeDialog (dialog) {
    dialog.addEventListener('transitionend', () => {
      dialog.remove()
    })
    
    dialog.classList.remove('opened')
  }
  
  addNewDialog (dialog) {
    const templates = dialog.querySelectorAll('template')
    
    // Case when the dialog is already written in the HTML
    if (!templates.length) {
      this.showDialog(dialog)
      
      return
    }
    
    this.createDialog(templates)
  }
  
  showDialog (dialog) {
    dialog.style.display = 'block'
    
    setTimeout(function () {
      dialog.classList.add('opened')
      
      window.dispatchEvent(new CustomEvent(Dialogs.DIALOG_OPENED, {
        detail: dialog
      }))
    })
    
    if (!dialog.eventsBinded) {
      dialog.eventsBinded = true
      
      dialog.addEventListener('transitionend', function () {
        if (!dialog.classList.contains('opened')) {
          dialog.style.display = 'none'
        }
      })
      
      dialog.addEventListener('click', function (event) {
        if (event.target.classList.contains('dialog-container')) {
          dialog.classList.remove('opened')
        }
      })
      
      dialog.querySelector('.close-icon')?.addEventListener('click', function () {
        dialog.classList.remove('opened')
      })
      
      dialog.querySelector('.close-btn')?.addEventListener('click', function () {
        dialog.classList.remove('opened')
      })
    }
  }
  
  createDialog (templates) {
    const newNode = this.createDialogEl(templates)
    
    newNode.addEventListener('click', (event) => {
      if (event.target === newNode) {
        this.removeDialog(newNode)
      }
    })
    
    newNode.querySelector('.close-icon')?.addEventListener('click', () => {
      this.removeDialog(newNode)
    })
    
    newNode.querySelector('.close-btn')?.addEventListener('click', () => {
      this.removeDialog(newNode)
    })
    
    setTimeout(function () {
      newNode.classList.add('opened')
      
      window.dispatchEvent(new CustomEvent(Dialogs.DIALOG_OPENED, {
        detail: newNode
      }))
    }, 50)
  }
  
  /**
   *
   * @param {HTMLTemplateElement[]} templates
   * @return {HTMLDivElement}
   */
  createDialogEl (templates) {
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
}
