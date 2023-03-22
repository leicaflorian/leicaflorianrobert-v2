export function register (module) {
  if (!window[module.name]) {
    window[module.name] = new module()
  }
}

export function registerModules (modules) {
  modules.forEach(module => {
    register(module)
  })
}
