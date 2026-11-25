<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" type="image/svg+xml" href="./img/logo.png" />
    <link rel="stylesheet" href="css/styles.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link
        href="https://fonts.googleapis.com/css2?family=Montserrat:ital,wght@0,100..900;1,100..900&family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&family=Roboto:ital,wght@0,100;0,300;0,400;0,500;0,700;0,900;1,100;1,300;1,400;1,500;1,700;1,900&display=swap"
        rel="stylesheet">
    <title>Code Coffe</title>

    <style>
        body {
            display: flex;
            flex-direction: column;
            justify-content: center;
            align-items: center;
            background: linear-gradient(90deg,#303030 0%,#0A0C10 100%);
        }

         .main-box div {
            max-width: 80rem;
        }

        .main-box {
            min-height: 45vh;
            display: flex;
            align-items: center;
        }

        .menu {
            display: flex;
            flex-direction: row;
            width: 100%;
            justify-content: space-around;
            margin-bottom: 100px;
        }

        .item {
            display: flex;
            flex-direction: column;
            gap: 25px;
            font-size: 1.5rem;
            text-align: center;
            width: 238px;
            height: 276px;
            background-color: black;
            color: white;
            border-radius: 10px;
            border-left: 12px solid #D3AD7F;
        }

        .item img {
            width: 100%;
            height: 117px;
        }

        .form-box {
            width: 714px;
            height: 773px;
            background-color: black;
            border: 2px solid #D3AD7F;
            border-bottom: solid #000000;
        }

        .form {
            display: flex;
            flex-direction: column;
            align-items: center;
            color: white;
            padding: 50px;
            gap: 80px;
        }

        .form div {
            display: flex;
            flex-direction: column;
            width: 100%;
        }

        .form label {
            font-size: 28px;
            font-weight: bold;
        }

        .form input{
            width: 568px;
            height: 40px;
            background-color: black;
            border: solid #D3AD7F;
            border-radius: 10px;
        }
    </style>
</head>

<body>
    <header class="header">
        <section>
            <a href="#">
                <img src="./img/logo.png" alt="coffe-logo">
            </a>

            <nav>
                <a href="index.html">Home</a>
                <a href="sobre.html">Sobre</a>
                <a href="#" onclick="openModal()">Endereço</a>
                <a href="cardapio.html">Cardápio</a>
                <a href="cadastro.php">Clube Coffe</a>
            </nav>

        </section>
    </header>

    <section class="main-box">
        <div>
            <h3>Faça parte do clube</h3>
        </div>
    </section>

    <div class="form-box">
        <form action="" class="form">
            <div>
                <label for="nome">Nome</label>
                <input type="text" name="nome" id="">
            </div>

            <div>
                <label for="email">E-mail</label>
                <input type="email" name="email" id="">
            </div>

            <div>
                <label for="data_nasc">Data de nascimento</label>
                <input type="date" name="data_nasc" id="">
            </div>

            <button type="submit" class="main-box-link">Cadastrar</button>
        </form>
    </div>

    

    <div class="modal">
        <h3 class="title"><span>Nosso</span> Endereço</h3>

        <iframe
            src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d14817.298231647992!2d-49.61973215051674!3d-21.806387430712434!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x94be467589002709%3A0x54c03e662abc324e!2sCafel%C3%A2ndia%2C%20SP%2C%2016500-000!5e0!3m2!1spt-BR!2sbr!4v1735561630791!5m2!1spt-BR!2sbr"
            width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy"
            referrerpolicy="no-referrer-when-downgrade"></iframe>
    </div>

    <div class="mask-modal" onclick="closeModal()"></div>

    <footer id="footer" class="footer">
        <section>
            <nav>
                <a href="index.html">Home</a>
                <a href="#about-box">Sobre</a>
                <a href="#" onclick="openModal()">Endereço</a>
                <a href="cardapio.html">Cardápio</a>
                <a href="cadastro.php">Clube Coffe</a>
            </nav>

            <a href="#">
                <img src="./img/logo.png" alt="coffe-logo">
            </a>
        </section>
    </footer>

    <script src="scripts.js"></script>
</body>

</html>