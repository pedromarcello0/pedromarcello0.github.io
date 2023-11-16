<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="contato.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Roboto+Condensed:wght@300&family=Skranji&display=swap"
     rel="stylesheet">
    <title>Sobre</title>
</head>

<body>

  <!-- HOME -->

    <header>
        <a href="index.html" class="logo">
          <img class="LOGO_IMG" src="img/PIRATE_BURGUER-removebg-preview.png">
        </a>

    <!----MENU HAMBURGUER---->
        <div class="menu-hamburguer" id="menu-hamburguer">
            <div class="bar"></div>
            <div class="bar"></div>
             <div class="bar"></div>
        </div>

<!-----NAVBAR---->
        <ul class="navbar">
            <li><a href="Index.html">Home</a></li>
            <li><a href="Sobre.html">Sobre</a></li>
            <li><a href="#" class="active">Cardapio</a></li>
            <li><a href="contato.php">Contato</a></li>
            <li><a href="pecaJa.html">Pedido</a></li>
        </ul>
    </header>

    <!-----FORMULARIO-------->

<form class="formulario" action="enviar_email.php" method="post">
<h2>Entre em Contato</h2>
    <label for="nome">Nome:</label>
    <input type="text" id="nome" name="nome" required>

    <label for="email">E-mail:</label>
    <input type="email" id="email" name="email" required>

    <label for="mensagem">Mensagem:</label>
    <textarea id="mensagem" name="mensagem" required></textarea>

    <button type="submit">Enviar</button>
    
</form>

<!---FIM FORMULARIO------>

      <!-- FOOTER -->
    <footer>
        <p>&copy; 2023 PIRATE BURGUER. Todos os direitos reservados.</p>
    </footer>


    <!-- JAVASCRIPT -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
</body>
</html>






