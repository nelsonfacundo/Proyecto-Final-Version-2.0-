const botonComenzar = document.getElementById('start-btn')
const botonSiguiente = document.getElementById('next-btn')
const contenedorPreguntas = document.getElementById('contenedor-preguntas')
const questionElement = document.getElementById('pregunta')
const botonRespuesta = document.getElementById('boton-respuesta')

let mezclarPreguntas, preguntaActual

botonComenzar.addEventListener('click', comenzarJuego)
botonSiguiente.addEventListener('click', () => {
  preguntaActual++
  siguientePregunta()
})

function comenzarJuego() {
  botonComenzar.classList.add('esconder')
  mezclarPreguntas = pre.sort(() => Math.random() - .5)
  preguntaActual = 0
  contenedorPreguntas.classList.remove('esconder')
  siguientePregunta()
}

function siguientePregunta() {
  resetearTodo()
  mostrarPregunta(mezclarPreguntas[preguntaActual])
}

function mostrarPregunta(pregunta) {
  questionElement.innerText = pregunta.pregunta
  pregunta.respuesta.forEach(answer => {
    const boton = document.createElement('boton')
    boton.innerText = answer.text
    boton.classList.add('btn')
    if (answer.correct) {
      boton.dataset.correct = answer.correct
    }
    boton.addEventListener('click', selectAnswer)
    botonRespuesta.appendChild(boton)
  })
}

function resetearTodo() {
  limpiarClase(document.body)
  botonSiguiente.classList.add('esconder')
  while (botonRespuesta.firstChild) {
    botonRespuesta.removeChild(botonRespuesta.firstChild)
  }
}

function selectAnswer(e) {
  const botonSeleccionado = e.target
  const correct = botonSeleccionado.dataset.correct
  seleccionarEstado(document.body, correct)
  Array.from(botonRespuesta.children).forEach(boton => {
    seleccionarEstado(boton, boton.dataset.correct)
  })
  if (mezclarPreguntas.length > preguntaActual + 1) {
    botonSiguiente.classList.remove('esconder')
  } else {
    botonComenzar.innerText = 'Comenzar de nuevo'
    botonComenzar.classList.remove('esconder')
  }
}

function seleccionarEstado(element, correct) {
  limpiarClase(element)
  if (correct) {
    element.classList.add('correct')
  } else {
    element.classList.add('wrong')
  }
}

function limpiarClase(element) {
  element.classList.remove('correct')
  element.classList.remove('wrong')
}

const pre = [
  {
    pregunta: '  Bokita campeon?',
    respuesta: [
      { text: 'Si', correct: true },
      { text: 'No', correct: false }
    ]
  },
  {
    pregunta: ' Donde juega lebrom james?',
    respuesta: [
      { text: 'Golden states', correct: false },
      { text: 'Rockets', correct: false },
      { text: 'LA Clippers', correct: false },
      { text: 'Lakers', correct: true }
    ]
  },
  {
    pregunta: 'El faq de esta pagina es horrible?',
    respuesta: [
      { text: 'Si', correct: true },
      { text: 'Si', correct: true },
      { text: 'Si', correct: true },
      { text: 'Si', correct: true }
    ]
  },
  {
    pregunta: 'Cuando nacio Albert Einstein?',
    respuesta: [
      { text: '14 de marzo de 1879', correct: true },
      { text: '4 de marzo de 1879', correct: false },
      { text: '12 de marzo de 1573', correct: false },
      { text: '13 de marzo de 1999', correct: false }
    ]
  }
]