<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="{{ asset('/assets/css/style.css') }}">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js" integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous"></script>
    <title>Sofdcaixa</title>
</head>
<body>
    
  
<div class="flex-painel">
  <img src="{{ asset('/assets/imge/SoftDev-Incorporated-logo.png') }}" class="img-fluid img-logo" alt="Sofdcaixa">
</div>

<div class="flex-painel-abertura-caixa">
  <div class="flex-caixa-aberto f1">

  </div>
  <div class="flex-caixa-aberto f2">
    CAIXA ABERTO 
    </div>
</div>

<div class="flex-container">
<div class="flex-item f-1"> 
  <img src="{{ asset('/assets/imge/cart-logo-2.jpeg') }}" class="img-thumbnail img-foto-prod">
</div>
<div class="flex-item f-2">
  <div class="flex-elementos e-1">
    <div class="titulo"> CÓDIGO DE BARRA </div>
    <div class="num-cod-barra">2547310200 5244121 0000 887008 254000000</div>
  </div> 

  <div class="flex-elementos e-1">
    <div class="titulo">VALOR UNITÁRIO </div>
    <div class="infor-dados">R$ 71,35</div>
  </div> 
  
  <div class="flex-elementos e-1">
    <div class="titulo"> TOTAL DO ITEM </div>
    <div class="infor-dados">R$ 487,28</div>
  </div> 
</div>
<div class="flex-elementos-list e-1">
    <div class="titulo-lista"> LISTA DA COMPRA </div>
    <div class="div-list">
    <div class="infor-lista">
      <table class="table">
      <thead>
        <tr>
          <th scope="col">Nº Item</th>
          <th scope="col">Discrição</th>
          <th scope="col">Qtd</th>
          <th scope="col">Vlr. Unit.</th>
          <th scope="col">Total</th>
        </tr>
      </thead>
      <tbody>
        <tr>
          <th scope="row">1</th>
          <td>Café Marata</td>
          <td>001</td>
          <td>7,53</td>
          <td>7,53</td>
          <td>
        </tr>
        <tr>
          <th scope="row">2</th>
          <td>Açucar Demerara União</td>
          <td>003</td>
          <td>8,22</td>
          <td>24,66</td>
          
        </tr>
        <tr>
          <th scope="row">2</th>
          <td>Carne Alcatra</td>
          <td>001</td>
          <td>38,00</td>
          <td>38,00</td>
        </tr>
      </tbody>
    </table></div>
    </div>
  </div> 
</div>

</body>
</html>