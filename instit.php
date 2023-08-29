<!DOCTYPE html>
<html lang="pt-br">
<?php
    $titulo='Instituição do Med-Azes';
    include("head.php"); 
?>    
<body>
    <?php include("header.php"); ?>
    <section id="instituto">
        <aside id="photos">
            <img id="first_img" class="slide_img" src="img/imagens/img3.png" alt="imagem imagem dos serviçosdo centro">
            <img class="slide_img" src="img/imagens/img4.png" alt="imagem do centro">
            <img class="slide_img" src="img/imagens/img5.png" alt="imagem do centro">
            <img class="slide_img" src="img/imagens/img3.png" alt="imagem do centro">
            <img class="slide_img" src="img/imagens/img4.png" alt="imagem do centro">
            <button onclick="slide_2(-1)" id="tras">&lt</button>
            <button onclick="slide_2(1)" id="frente">&gt</button>
        </aside>
        <aside id="localidade">
            <h1>Localização</h1>
            <iframe src="https://www.google.com/maps/embed?pb=!1m14!1m12!1m3!1d11476.231078751976!2d13.490256214053126!3d-8.884016479067737!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!5e0!3m2!1spt-PT!2sao!4v1671300904364!5m2!1spt-PT!2sao" width="95%" height="80%" style="border:0;border-radius: 16px;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"> <p>O seu browser não suporta o mapa, por isso a imagem é estática</p><img src="" alt=""></iframe>
        </aside>
    </section>
    <?php include("footer.html"); ?>
</body>
</html>