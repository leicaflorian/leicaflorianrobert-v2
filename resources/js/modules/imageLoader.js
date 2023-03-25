import { PageChanger } from './pageChanger'
import { Dialogs } from './dialogs'

export class ImageLoader {
  static name = 'ImageLoader'
  
  constructor () {
    window.addEventListener('DOMContentLoaded', () => {
      this.bindImages()
    })
    
    window.addEventListener(PageChanger.PAGE_CHANGING, () => {
      this.bindImages()
    })
    
    window.addEventListener(Dialogs.DIALOG_OPENED, (e) => {
      this.bindImages(e.detail)
    })
  }
  
  bindImages (target = null) {
    const parent = target ?? document
    const images = parent.querySelectorAll('img')
    
    images.forEach(image => {
      image.addEventListener('error', () => {
        const defaultImg = '/img/placeholder.png'
        
        if (image.errorHandled) {
          return
        }
        
        image.src = defaultImg
        image.errorHandled = true
      })
    })
  }
}
