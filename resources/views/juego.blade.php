<head>
  <link href="{{  asset('css/juego.css')}}" rel="stylesheet">
  <title>Trivia</title>
</head>
<body>
<div id="header">
            <div class="main-header">
                <img src="img/logo.jpg" alt="logo">
                <input type="checkbox" id="menu-bar">
                 <label class="fas fa-bars" for="menu-bar"></label>
                 <nav class="menu">
                    <ul>
                        <li><a href="/index">inicio</a></li>
                        <li><a href="/ranking">ranking</a></li>
                        <li><a href="/perfil">perfil</a></li>
                        <li><a href="/faq">Faq</a></li>
                        <li><a href="/juego">juego</a></li>
                        <li><a href="/contacto">CONTACTO</a></li>
                        @guest
                        <li class="nav-item">
                            <a class="nav-link" href="{{ route('login') }}">{{ __('Login') }}</a>
                        </li>
                       <li> @if (Route::has('register'))
                            <li class="nav-item">
                                <a class="nav-link" href="{{ route('register') }}">{{ __('Register') }}</a>
                            </li>
                        @endif
                    @else
                                <li><a class="dropdown-item" href="{{ route('logout') }}"
                                   onclick="event.preventDefault();
                                                 document.getElementById('logout-form').submit();">
                                    {{ __('Logout') }}
                                </a>
                            </li>
                                <li><form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                    @csrf
                                </form>
                            </li>

                    @endguest
                </ul>
            </li>
            </div>
        </div>
    </nav>

                    </ul>
                 </nav>
            </div>
        </div>
  <div class="container">
    <div id="contenedor-preguntas" class="esconder">
      <div id="pregunta">Pregunta</div>
      <div id="boton-respuesta" class="btn-grid">
        <button class="btn">Respuesta 1</button>
        <button class="btn">Respuesta 2</button>
        <button class="btn">Respuesta 3</button>
        <button class="btn">Respuesta 4</button>
      </div>
    </div>
    <div class="controles">
      <button id="start-btn" class="start-btn btn">Comenzar</button>
      <button id="next-btn" class="next-btn btn esconder">Siguiente</button>
    </div>
  </div>
  <script> const botonComenzar = document.getElementById('start-btn')
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
      { text: '4 de marzo de 1879', correct: false }
      { text: '12 de marzo de 1573', correct: false }
      { text: '13 de marzo de 1999', correct: false }
    ]
  }
]</script>
</body>
