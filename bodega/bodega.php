<!DOCTYPE html>
<html lang="ca">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Botiga de Vi</title>
</head>
<body>
  <h1>Benvingut a la nostra botiga de vins</h1>
  <form id="userForm">
    <p>Ets major d'edat?</p>
    <input type="radio" name="age" value="si" required> Sí
    <input type="radio" name="age" value="no"> No
    
    <p>Selecciona l'idioma:</p>
    <select id="language" required>
      <option value="ca">Català</option>
      <option value="es">Espanyol</option>
      <option value="en">Anglès</option>
    </select>

    <p>Selecciona la moneda:</p>
    <select id="currency" required>
      <option value="eur">Euros</option>
      <option value="gbp">Lliures</option>
      <option value="usd">Dòlars</option>
    </select>

    <button type="submit">Enviar</button>
  </form>

  <script>
    document.getElementById('userForm').addEventListener('submit', function(event) {
      event.preventDefault();

      // Recollir les dades seleccionades
      const age = document.querySelector('input[name="age"]:checked').value;
      const language = document.getElementById('language').value;
      const currency = document.getElementById('currency').value;

      // Guardar les dades en cookies amb 7 dies de durada
      document.cookie = `majoredat=${age}; path=/; max-age=${7 * 24 * 60 * 60}`;
      document.cookie = `idioma=${language}; path=/; max-age=${7 * 24 * 60 * 60}`;
      document.cookie = `moneda=${currency}; path=/; max-age=${7 * 24 * 60 * 60}`;

      // Redirigir a la pàgina d'informació
      window.location.href = 'informacio.html';
    });
  </script>
</body>
</html>

