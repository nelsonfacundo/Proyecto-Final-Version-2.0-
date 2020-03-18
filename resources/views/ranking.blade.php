@extends('layout.rankPlantilla')

@section('title', 'Ranking')

<head>
    <link rel="stylesheet" href="{{ asset('css/styleRanking.css')}} ">
</head>

<body>
  <div class="contenido">
    <span class="text1"> RANKINGS</span>
    <span class="text2" >TOP 50 CUENTAS</span>
    <table style="width:100%; text-align : center;"cellspacing="0" cellpadding="0">
      <thead>
        <tr>
          <th style="padding:10px;border:1px solid #a9a87f">Posición</th>
          <th style="padding:10px;border:1px solid #a9a87f">Usuario</th>
          <th style="padding:10px;border:1px solid #a9a87f">Nivel</th>
          <th style="padding:10px;border:1px solid #a9a87f">País</th>
        </tr>
      </thead>
      <tbody>
        <tr>
          <td style="padding:10px;border:1px solid #a9a87f">1</td>
          <td style="padding:10px;border:1px solid #a9a87f">Messi</td>
          <td style="padding:10px;border:1px solid #a9a87f">31</td>
          <td style="padding:10px;border:1px solid #a9a87f">Argentina</td>
        </tr>
        <tr>
          <td style="padding:10px;border:1px solid #a9a87f">2</td>
          <td style="padding:10px;border:1px solid #a9a87f">GabiGool</td>
          <td style="padding:10px;border:1px solid #a9a87f">31</td>
          <td style="padding:10px;border:1px solid #a9a87f">Argentina</td>
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
