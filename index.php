<!DOCTYPE html>
<html lang="pt-br">
<?php
    $titulo='Centro Med-Azes';
    include("head.php"); 
?>    
<body onload="start()">
<?php include("header.php"); ?>
    <main>
            <div id="main">
                <div id="container">
                    <section id="text-main-1">
                        <h1>Saúde e Bem-Estar Acessíveis</h1>
                        <p>Descubra como nosso centro pode transformar a sua saúde - confie em nós para cuidar do seu bem-estar desde o primeiro clique!</p>
                    </section>
                    <section id="text-main-2">
                        <h2>Empoderamento do Paciente e Confiança no centro</h2>
                        <p>Agende sua consulta online com segurança e comodidade na nosso centro de confiança - onde cuidamos da sua saúde com excelência!</p>
                    </section>
                    <section id="text-main-3">
                        <h2>Qualidade no atendimento e competência da equipe</h2>
                        <p>Nossa equipe de profissionais altamente capacitados está pronta para atender você, sempre visando o seu bem-estar e conforto durante todo o processo de cuidado à saúde.</p>
                    </section>
                    <section id="text-main-4">
                        <h2>Qualidade das instalações e tecnologia avançada</h2>
                        <p>Nosso espaço foi projetado para oferecer um ambiente agradável e seguro, com instalações modernas e equipamentos de última geração.</p>
                    </section>
                    <section id="nav-main">
                        <button onclick="slide(1)" id="mm1"></button>
                        <button onclick="slide(2)" id="mm2"></button>
                        <button onclick="slide(3)" id="mm3"></button>
                        <button onclick="slide(4)" id="mm4"></button>
                    </section>
                
                </div>
            </div>
            <section id="caixas">
                    <aside id="ben1" class="bens">

                        <h2>Horário de funcionamento</h2>
                        <p>Estamos disponíveis todos os dias da semana, em horários flexíveis para atender as necessidades de cada paciente.</p>
                     <p>Para maior comodidade e acessibilidade dos nossos pacientes, o centro está aberta das 7 horas às 23 horas</p>
                        <p>7h/23h</p>
                    </aside>    
                    <aside id="ben2" class="bens">
                        <h2>Fale connosco</h2>
                        <p>+244 929-167-827</p>
                        <p>Estamos sempre à disposição para atender nossos pacientes da melhor forma possível. Acreditamos que o diálogo e a comunicação são fundamentais para oferecer um atendimento de qualidade e garantir a satisfação de nossos pacientes.</p>
                       
                        
                    </aside>
                    <aside id="ben3" class="bens">
                        <h2>Atendimento</h2>
                        <p>
                        Nosso atendimento é sempre personalizado e humanizado, com profissionais capacitados e atenciosos que visam garantir a sua segurança, bem-estar e tranquilidade durante todo o processo de cuidado à saúde.
                        </p>
                    </aside>
                </section>
        </main>
               
    <section id="servicos">
        <h2>Serviços</h2>
        
        <div id="cont-serv">
            <aside><img src="img/icon/estetoscopio.svg" alt="imagem dos serviços"><p>Clínica Geral</p></aside>
            <aside><img src="img/icon/ginecologita.svg" alt="imagem dos serviços"><p>Genicologia</p></aside>
            <aside><img src="img/icon/gravida.svg" alt="imagem dos serviços"><p>Obstetrícia</p></aside>
            <aside><img src="img/icon/pediatria.svg" alt="imagem dos serviços"><p>Pediatria</p></aside>
            <aside><img src="img/icon/frequencia-cardiaca.svg" alt="imagem dos serviços"><p>Cardiologia</p></aside>

        </div>
    </section>
    <section id="sobre_nos">
        <img src="img/about.svg" alt="Imagem ilustrativa">
        <aside id="text_about">
            <h2>Quem somos nós</h2>
            <p>
                Nosso centro é uma referência em cuidados com a saúde, com uma equipe de profissionais altamente qualificados e dedicados em oferecer um atendimento personalizado e de qualidade. Oferecemos diversos serviços na área da saúde, desde consultas médicas, exames diagnósticos, tratamentos e procedimentos, todos realizados com a mais alta tecnologia e excelência.
            </p>
            <p>
                Nosso compromisso é com a saúde e o bem-estar dos nossos pacientes, buscando sempre as melhores práticas médicas e os mais avançados equipamentos, para oferecer um tratamento efetivo e personalizado para cada caso. Prezamos pela ética, transparência e respeito aos nossos pacientes, buscando sempre a melhoria contínua de nossos serviços.
            </p>

            <p>Nossas instalações são modernas, confortáveis e projetadas para oferecer o máximo de conforto e segurança para nossos pacientes, em um ambiente acolhedor e agradável. Acreditamos que o bem-estar do paciente é fundamental para o processo de tratamento, por isso investimos em equipamentos de última geração e tecnologias avançadas, para oferecer um atendimento completo e efetivo.</p>

            <p>Nossa equipe é formada por médicos, enfermeiros, técnicos e outros profissionais da área da saúde, altamente capacitados e comprometidos em oferecer o melhor atendimento e cuidado aos nossos pacientes. Todos são treinados e atualizados constantemente, para oferecer um serviço de qualidade, ético e personalizado.</p>

            <p>Estamos sempre em busca da excelência em nossos serviços, trabalhando com transparência e dedicação para conquistar a confiança e a satisfação de nossos pacientes. Seja para uma consulta de rotina ou um tratamento mais complexo, conte com nosso centro para cuidar da sua saúde com todo o carinho e profissionalismo que você merece.</p>
        </aside>
    </section>
    <section id="noticia">
        <div id="color_noticia">
        <aside id="scroll_noticias">
            <section id="n_enfase">
                <h2 style="margin-left:24px;">Notícias/Artigos</h2>
                <aside class="artigo" onclick="clica()">
                    <div class="img_noticia"></div>
                    <div class="texto_enfase">
                        <h3 class='tema'>Titulo !Importante</h3>
                        <p></p>
                        <hr>
                        <time>Dezembro de 2023</time>
                        
                    </div>
                    <a class="link_continuar"></a>
                </aside>
            </section>
            <section id="n_recente">
                <aside class="artigo" onclick="clica()">
                    <div class="img_noticia"></div>
                    <div class="texto_enfase">
                    <h3 class='tema'>primeiro_Lorem ipsum</h3>
                        <p></p>
                         <hr>
                         <time>Dezembro de 2023</time>
                         <a class="link_continuar"></a>
                        </div>
               
    
                         
                </aside>
                <aside class="artigo" onclick="clica()">
                    <div class="img_noticia"></div>
                    <div class="texto_enfase">
                    <h3 class='tema'>Lorem ipsum dolor sit amet </h3>
                        <p></p>
                        <hr>
                        <time>Dezembro de 2023</time>
                        <a class="link_continuar"></a>
                    </div>
                    
                </aside>
                <aside class="artigo" onclick="clica()">
                    <div class="img_noticia"></div>
                    <div class="texto_enfase">
                    <h3 class='tema'>Lorem ipsum dolor sit amet consectetur adipis</h3>
                        <p></p>
                        <hr>
                        <time>Dezembro de 2023</time>
                        <a class="link_continuar"></a>
                    </div>
                    
                </aside>
                <a href="blog.php" id="ver_mais_noticias">ver mais</a>
    
            </section>
        </aside>
        </div>
        
    </section>
    <?php include("footer.html"); ?>
   </body>
</html>