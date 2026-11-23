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
</head>

<body>
    <div class="video-box">
        <div class="mask-video"></div>
    </div>

    <header class="header">
        <section>
            <a href="index.html">
                <img src="./img/logo.png" alt="coffe-logo">
            </a>

            <nav>
                <a href="index.html">Home</a>
                <a href="sobre.html">Sobre</a>
                <a href="#" onclick="openModal()">Endereço</a>
                <a href="#">Cardápio</a>
                <a href="#">Clube Coffe</a>
            </nav>

        </section>
    </header>

    <section class="main-box">
        <div>
            <h3>Relaxe com o melhor café da região</h3>
            <p>Bem vindo à nossca cafeteria, o ambiente perfeito para
                aqueles que a preciam o sabor único de qualidade do 
                café em uma atmosfera reconfortante. Aqui, cada copo é
                uma experiência cuidadosamente preparada, com grãos 
                selecionados e métodos especiais que garantem um sabor
                impecável.</p>
            <a href="" class="main-box-link">Nosso cardápio</a>
        </div>
    </section>

    <section id="about-box" class="about-box">
        <h2 class="title"><span>Sobre</span> Nós</h2>
        <div class="about-container">
            <div class="about-img">
                <img src="./img/about-img.jpeg" alt="">
            </div>

            <div class="about-text">
                <h3>O que torna nosso café especial</h3>

                <p>
                    Em nossa cafeteria, a paixão pelo café de qualidade se une a um ambiente acolhedor e descontraído. Estamos
                    comprometidos em oferecer aos nossos clientes uma experiência única, desde o grão selecionado até a xícara servida
                    com carinho. Trabalhamos com produtores locais e métodos de preparo que garantem um sabor fresco e autêntico.
                </p>

                <p>
                    Além do café, oferecemos uma seleção de iguarias para acompanhá-lo, todas preparadas com
                    ingredientes frescos e cuidadosamente selecionados. Seja para um café da manhã rápido ou para uma pausa relaxante no
                    meio do dia, nosso espaço foi projetado para que você se sinta em casa.
                </p>

                <a href="" class="main-box-link">Conheça nossa história</a>
            </div>
        </div>
    </section>

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
                <a href="sobre.html">Sobre</a>
                <a href="#" onclick="openModal()">Endereço</a>
                <a href="#">Cardápio</a>
                <a href="#">Clube Coffe</a>
            </nav>

            <a href="index.html">
                <img src="./img/logo.png" alt="coffe-logo">
            </a>
        </section>
    </footer>

    <script src="scripts.js"></script>
</body>

</html>