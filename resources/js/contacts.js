import axios from 'axios'

window.addEventListener('pageChanged', function () {
  const form = document.querySelector('#contact-form')
  
  if (!form) {
    return
  }
  
  form.addEventListener('submit', async function (event) {
    event.preventDefault()
    
    await onSubmit(form)
  })
})

async function onSubmit (form) {
  const formData = new FormData(form)
  const url = form.getAttribute('action')
  
  toggleLoading(form, true)
  
  try {
    const res = await axios.post(url, formData)
    
    onSubmitSuccess(res, form)
  } catch (e) {
    handleError(e, form)
    toggleLoading(form, false)
  }
}

function handleError (error, form) {
  if (!error.response) {
    console.log(error)
    return
  }
  
  // validation error
  if (error.response.status === 422) {
    const errors = error.response.data.errors
    
    const fields = form.querySelectorAll('[name]')
    
    fields.forEach((field) => {
      toggleInputError(field, errors[field.name]?.at(0))
    })
  }
}

function toggleInputError (field, message) {
  if (!message) {
    if (field.errorEl) {
      field.classList.remove('is-invalid')
      field.errorEl.remove()
      field.errorEl = null
    }
    
    return
  }
  
  if (!field.errorEl) {
    const errorEl = document.createElement('div')
    errorEl.classList.add('invalid-feedback')
    errorEl.innerText = message
    
    field.parentNode.appendChild(errorEl)
    field.errorEl = errorEl
  } else {
    field.errorEl.innerText = message
  }
  
  field.classList.add('is-invalid')
}

function onSubmitSuccess (res, form) {
  // when the form is submitted successfully, we want to show a success message
  // and clear the form
  const successMessage = document.createElement('div')
  successMessage.classList.add('alert', 'alert-success', 'px-2')
  successMessage.innerHTML = `<div class="lead">Grazie per avermi contattato! Farò del mio meglio per risponderti il prima possibile!</div>`
  
  form.parentNode.insertBefore(successMessage, form)
  form.disabled = true
  
  const fields = [...form.elements]
  
  fields.forEach((field) => {
    field.disabled = true
  })
}

function toggleLoading (form, status) {
  const submitBtn = form.querySelector('[type="submit"]')
  const resetBtn = form.querySelector('[type="reset"]')
  
  submitBtn.disabled = status
  resetBtn.disabled = status
}
