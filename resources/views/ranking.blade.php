@extends('layout.rankPlantilla')

@section('title', 'Ranking')

<head>
    <link rel="stylesheet" href="{{ asset('css/styleRanking.css')}} ">
</head>

<body>
  <div class="contenido">
    <span class="text1"> RANKING</span>
    <span class="text2" >TOP CUENTAS</span>
    <table style="width:100%; text-align : center;"cellspacing="0" cellpadding="0">
      <thead>
        <tr>
          <th style="padding:10px;border:1px solid #a9a87f">Posición</th>
          <th style="padding:10px;border:1px solid #a9a87f">Usuario</th>
          <th style="padding:10px;border:1px solid #a9a87f">Puntaje</th>
          <th style="padding:10px;border:1px solid #a9a87f">País</th>
        </tr>
      </thead>
      <tbody>
        <tr>
          <td style="padding:10px;border:1px solid #a9a87f">1</td>
          <td style="padding:10px;border:1px solid #a9a87f">Messi</td>
          <td style="padding:10px;border:1px solid #a9a87f">100</td>
          <td style="padding:10px;border:1px solid #a9a87f">Argentina</td>
        </tr>
        <tr>
          <td style="padding:10px;border:1px solid #a9a87f">2</td>
          <td style="padding:10px;border:1px solid #a9a87f">Faker</td>
          <td style="padding:10px;border:1px solid #a9a87f">98</td>
          <td style="padding:10px;border:1px solid #a9a87f">Corea del Sur</td>
        </tr>
        <tr>
          <td style="padding:10px;border:1px solid #a9a87f">3</td>
          <td style="padding:10px;border:1px solid #a9a87f">Lucas</td>
          <td style="padding:10px;border:1px solid #a9a87f">95</td>
          <td style="padding:10px;border:1px solid #a9a87f">Argentina</td>
        </tr>
        <tr>
          <td style="padding:10px;border:1px solid #a9a87f">4</td>
          <td style="padding:10px;border:1px solid #a9a87f">Maradona</td>
          <td style="padding:10px;border:1px solid #a9a87f">92</td>
          <td style="padding:10px;border:1px solid #a9a87f">Argentina</td>
        </tr>
        <tr>
          <td style="padding:10px;border:1px solid #a9a87f">5</td>
          <td style="padding:10px;border:1px solid #a9a87f">Riquelme</td>
          <td style="padding:10px;border:1px solid #a9a87f">90</td>
          <td style="padding:10px;border:1px solid #a9a87f">Argentina</td>
        </tr>
        <tr>
          <td style="padding:10px;border:1px solid #a9a87f">6</td>
          <td style="padding:10px;border:1px solid #a9a87f">Ronaldinho</td>
          <td style="padding:10px;border:1px solid #a9a87f">89</td>
          <td style="padding:10px;border:1px solid #a9a87f">Brazil</td>
        </tr>
        <tr>
          <td style="padding:10px;border:1px solid #a9a87f">7</td>
          <td style="padding:10px;border:1px solid #a9a87f">Cristiano Ronaldo</td>
          <td style="padding:10px;border:1px solid #a9a87f">88</td>
          <td style="padding:10px;border:1px solid #a9a87f">Portugal</td>
        </tr>
        <tr>
          <td style="padding:10px;border:1px solid #a9a87f">8</td>
          <td style="padding:10px;border:1px solid #a9a87f">Higuaín</td>
          <td style="padding:10px;border:1px solid #a9a87f">87</td>
          <td style="padding:10px;border:1px solid #a9a87f">Argentina</td>
        </tr>
        <tr>
          <td style="padding:10px;border:1px solid #a9a87f">9</td>
          <td style="padding:10px;border:1px solid #a9a87f">Covid-19</td>
          <td style="padding:10px;border:1px solid #a9a87f">86</td>
          <td style="padding:10px;border:1px solid #a9a87f">Mundial</td>
        </tr>
        <tr>
          <td style="padding:10px;border:1px solid #a9a87f">10</td>
          <td style="padding:10px;border:1px solid #a9a87f">GabiGool</td>
          <td style="padding:10px;border:1px solid #a9a87f">84</td>
          <td style="padding:10px;border:1px solid #a9a87f">Argentina</td>
        </tr>
        <tr>
          <td style="padding:10px;border:1px solid #a9a87f">11</td>
          <td style="padding:10px;border:1px solid #a9a87f">Ronaldo</td>
          <td style="padding:10px;border:1px solid #a9a87f">83</td>
          <td style="padding:10px;border:1px solid #a9a87f">Brazil</td>
        </tr>
        <tr>
          <td style="padding:10px;border:1px solid #a9a87f">12</td>
          <td style="padding:10px;border:1px solid #a9a87f">Mbappé</td>
          <td style="padding:10px;border:1px solid #a9a87f">79</td>
          <td style="padding:10px;border:1px solid #a9a87f">Francia</td>
        </tr>
        <tr>
          <td style="padding:10px;border:1px solid #a9a87f">13</td>
          <td style="padding:10px;border:1px solid #a9a87f">Zidane</td>
          <td style="padding:10px;border:1px solid #a9a87f">78</td>
          <td style="padding:10px;border:1px solid #a9a87f">Francia</td>
        </tr>
      </tbody>
    </table>
  </div>

  <ul class = "box-area">
    <li></li>
    <li></li>
    <li></li>
    <li></li>
    <li></li>
    <li></li>
  </ul>
</body>
