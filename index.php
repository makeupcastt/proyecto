<!DOCTYPE html>
<html lang="es">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Contáctanos</title>
  <link rel="stylesheet" href="styles1.css">
  <link rel="stylesheet" href="styles.css">
</head>
<body>

  <div class="form-container">
    <h2>Contáctanos</h2>
    <p>Contáctanos y envíanos tu opinión</p>

    <form method="post" autocomplete="off">
      <div class="form-group">

        <div class="form-content">
          <label for="name">Nombre</label>
          <input type="text" id="name" name="name" placeholder="Tu nombre">
        </div>

        <div class="form-content">
          <label for="email">Correo</label>
          <input type="email" id="email" name="email" placeholder="Tu correo">
        </div>

        <div class="form-content">
          <label for="direction">Dirección</label>
          <input type="text" id="direction" name="direction" placeholder="Tu dirección">
        </div>

        <div class="form-content">
          <label for="phone">Teléfono</label>
          <input type="text" id="phone" name="phone" placeholder="Tu teléfono">
        </div>
      </div>

      <label for="message">Mensaje o comentario</label>
      <textarea name="message" id="message" cols="30" rows="10" placeholder="Escribe tu mensaje o comentario aquí"></textarea>
      
      <input type="submit" name="contact" value="Enviar">
    </form>
  </div>

  <?php
    if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST["contact"])) {
        if (!empty($_POST['name']) && !empty($_POST['email']) && !empty($_POST['direction']) &&
            !empty($_POST['phone']) && !empty($_POST['message'])) {

            $name = trim($_POST['name']);
            $email = trim($_POST['email']);
            $direction = trim($_POST['direction']);
            $phone = trim($_POST['phone']);
            $message = trim($_POST['message']);

            $to = "melanycastt1234brr@gmail.com"; // ← CORRECCIÓN AQUÍ
            $subject = "Nuevo mensaje de contacto";
            $body = "Nombre: $name\nCorreo: $email\nDirección: $direction\nTeléfono: $phone\nMensaje:\n$message";
            
            // Ensure proper headers
            $headers = "From: $email\r\n";
            $headers .= "Reply-To: $email\r\n";
            $headers .= "Content-Type: text/plain; charset=UTF-8\r\n";

            // Attempt to send email
            if (mail($to, $subject, $body, $headers)) {
                echo '<p class="success">✔ Tu mensaje ha sido enviado correctamente. Muchas gracias.</p>';
            } else {
                echo '<p class="error">⚠ Hubo un error al enviar tu mensaje. Intenta nuevamente más tarde.</p>';
            }
        } else {
            echo '<p class="error">⚠ Por favor, llena todos los campos.</p>';
        }
    }
  ?>

</body>
</html>
