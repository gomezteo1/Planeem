// const form = document.getElementById('form')
// const button = document.getElementById('submitButton')


// const pesoPonderado = document.getElementsByClassName('pesoPonderado')
// const calificacion = document.getElementsByClassName('calificacion')
// const pesoRelativo = document.getElementsByClassName('pesoRelativo')

// const formIsValid = {
//     pesoPonderado: false,
//     pesoRelativo: false,
//     calificacion: false
// }

// form.addEventListener('submit', (e) => {
//     e.preventDefault()
//     validateForm()
// })


// pesoPonderado.addEventListener('change', (e) => {
//     if(e.target.value.trim().length != null) formIsValid.pesoPonderado = true
// })

// pesoRelativo.addEventListener('change', (e) => {
//     if(e.target.value.trim().length != null) formIsValid.pesoRelativo = true
// })

// calificacion.addEventListener('change', (e) => {
//     if(e.target.value.trim().length != null) formIsValid.calificacion = true
// })

// const validateForm = () => {
//     const formValues = Object.values(formIsValid)
//     const valid = formValues.findIndex(value => value == false)
//     if(valid == null) form.submit()
//     else toastr.error('Los sentimos, uno de los campos no esta lleno. Por favor revisa que todos los campos estén llenos ', '!Hola')
// }


