<!DOCTYPE html>
<html lang="es">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-compatible" content="IE=edge">
  <meta name ="viewport"content="width-device-width, initial-scale=0.1">
  <link rel="stylesheet" href="styles1.css">
   <link rel="stylesheet" href="styles.css">
</head>
<body>
    <div class="form-container">
      <h2>contactanos</h2>
      <p>
        contactanos para comprar tu maquillaje preferido
</p>
<form method="post" autocomplete="off">
  <div class="form-group">

    <div class="form content">
      <label for="name">nombre</label>
      <input type="text"id="name"placeholder="nombre">
</div>
<div class="form content">
      <label for="email">correo</label>
      <input type="email"id="email"placeholder="correo">
</div>

<div class="form content">
      <label for="direction">direccion</label>
      <input type="direction"id="direction"placeholder="direccion">
</div>

<div class="form content">
      <label for="phone">telefono</label>
      <input type="phone"id="phone"placeholder="telefono">
</div>
</div>
<label form="message"> mensaje</label>
<textarea name="message" id="message" cols="30"rows="10" placeholder="message"></textarea>
<input type="submit"name="contact" value="enviar mensaje">


</form>
</div>
<?php
    include("contacto.php")
?>
</body>
</html>
