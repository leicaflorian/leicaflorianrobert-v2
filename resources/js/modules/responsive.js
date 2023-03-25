export class Responsive {
  static name = 'Responsive'
  
  _breakpoints = {
    'xs': 0,
    'sm': 576,
    'md': 768,
    'lg': 992,
    'xl': 1200,
    'xxl': 1400
  }
  
  _currentResolution = {
    width: 0,
    height: 0
  }
  
  constructor () {
    window.addEventListener('DOMContentLoaded', () => this.storeCurrentResolution())
    window.addEventListener('resize', () => this.storeCurrentResolution())
  }
  
  storeCurrentResolution () {
    this._currentResolution = {
      width: window.innerWidth,
      height: window.innerHeight
    }
  }
  
  mediaBreakpointDown (breakpoint) {
    const breakpointWidth = this._breakpoints[breakpoint]
    
    return this._currentResolution.width < breakpointWidth
  }
  
  mediaBreakpointUp (breakpoint) {
    const breakpointWidth = this._breakpoints[breakpoint]
    
    return this._currentResolution.width >= breakpointWidth
  }
}
