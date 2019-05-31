const actualizarButton = document.querySelector('form button:last-child')
actualizarButton.classList.add('link')
actualizarButton.classList.add('link-edit')

console.log(actualizarButton.classList)
// Div contenedor necesario para poder agrupar los botones, ya que
// el segundo boton es un formulario
const div = document.createElement('div')
const deleteForm = document.getElementsByTagName('form')[1]
console.log(deleteForm)
div.appendChild(actualizarButton)
div.appendChild(deleteForm)
document.getElementsByTagName('form')[0].appendChild(div)