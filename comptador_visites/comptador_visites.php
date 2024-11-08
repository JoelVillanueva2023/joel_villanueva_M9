<!DOCTYPE html>
<html lang="ca">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Comptador de Visites i Descomptes</title>
  <style>
    body {
      font-family: Arial, sans-serif;
      text-align: center;
      margin-top: 50px;
    }
    .container {
      max-width: 400px;
      margin: 0 auto;
    }
    .input-container, .discount-message {
      margin: 15px 0;
    }
    #buyButton {
      padding: 10px 20px;
      background-color: #4CAF50;
      color: white;
      border: none;
      cursor: pointer;
    }
    #buyButton:hover {
      background-color: #45a049;
    }
  </style>
</head>
<body>
  <div class="container">
    <h1>Botiga en Línia</h1>
    <p id="visitCounter">Visites a la pàgina: 0</p>
    <div id="discountMessage" class="discount-message"></div>
    <div class="input-container">
      <input type="text" id="discountInput" placeholder="Introdueix el codi de descompte">
    </div>
    <button id="buyButton">Comprar</button>
  </div>

  <script>
    // Inicialitza el comptador de visites
    let visitCount = localStorage.getItem('visitCount') ? parseInt(localStorage.getItem('visitCount')) : 0;
    let discountApplied = localStorage.getItem('discountApplied') || "no";
    
    function updateVisitCount() {
      visitCount += 1;
      localStorage.setItem('visitCount', visitCount);
      document.getElementById('visitCounter').innerText = `Visites a la pàgina: ${visitCount}`;
      
      // Comprova si ha d'aplicar-se un descompte
      let discountMessage = document.getElementById('discountMessage');
      if (visitCount >= 10 && discountApplied === "no") {
        discountMessage.innerText = "Oferta exclusiva sols per a tu! Utilitza el codi BOTIGA50 per obtenir un 50% de descompte en les teves primeres compres a la botiga";
      } else if (visitCount >= 5 && discountApplied === "no") {
        discountMessage.innerText = "Oferta exclusiva! Utilitza el codi BOTIGA20 per obtenir un 20% de descompte en les teves primeres compres a la botiga";
      } else {
        discountMessage.innerText = "";
      }
    }

    // Actualitza el comptador de visites en carregar la pàgina
    updateVisitCount();

    // Event del botó de compra
    document.getElementById('buyButton').addEventListener('click', function() {
      let discountCode = document.getElementById('discountInput').value.trim();
      
      // Verifica el codi de descompte i mostra el resultat
      if ((discountCode === "BOTIGA20" && visitCount >= 5) || (discountCode === "BOTIGA50" && visitCount >= 10)) {
        alert("Compra realitzada amb descompte del " + (discountCode === "BOTIGA20" ? "20%" : "50%") + "!");
        localStorage.setItem('discountApplied', "si");
        discountMessage.innerText = ""; // Elimina el missatge de descompte després de la compra
      } else {
        alert("Codi de descompte invàlid o no aplicable.");
      }
    });
  </script>
</body>
</html>

