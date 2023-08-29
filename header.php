<header>
    <section>
    <a  id="icon_header" href="index.php#main"><img src="img/logo_1.png" alt=""></a>
    <p>|</p>
    <nav class="bye">
            <a href="index.php#main">Início</a>
    
            <a href="index.php#servicos">Serviços</a>

            <a href="corpo_clinico.php" >Corpo clinico</a>
            <a href="instit.php">Instituição</a>
        
            <a href="index.php#sobre_nos">Quem nós somos</a>
        
    </nav>
    
    </section>

<section class="bye">
        <a id="nav_blog" href="blog.php" style="padding: 16px;">Artigos</a>
        <button id="consultar" onclick="close_consulta(0)">Marcar Consulta</button>
</section>
<section class="mostra dropdown">
    <button id="btn_menu" class="dropbtn" onclick="menu()"></button>
    <nav id="myDropdown" class="dropdown-content" >
        <div>
                <h2>Menu</h2>
                <a href="index.php#main">Início</a>
                <a href="index.php#servicos">Serviços</a>
                <a href="corpo_clinico.php" >Corpo clinico</a>
                <a href="instit.php">Instituição</a>
                <a href="index.php#sobre_nos">Quem nós somos</a>
                <a href="blog.php" style="padding: 16px;">Artigos</a>
              <button id="consultar" onclick="close_consulta(0)">Marcar Consulta</button>
        </div>
        </nav>
</section>
<div id="consulta_container">
        <article id="box_consulta">
            <button id="close_consulta" onclick="close_consulta(1)"></button>
            <h2>Marcar Consulta</h2>
            <aside id="dados_consulta">
            <form id='form_consulta' onsubmit="enviar_consulta(event)">

		<input type="text" id="nome" name="nome" placeholder="Nome Completo">
		
		<label for="idade">Idade:<input type="number" min=0 max=120 id="idade" name="idade"></label>
		
                <select id="tipo-consulta" name="tipo-consulta">
                <option value="">Tipo de consulta</option>
                <option value="clinica-geral">Clínica geral</option>
                <option value="ginecologia">Ginecologia</option>
                <option value="obstetricia">Obstetrícia</option>
                <option value="pediatria">Pediatria</option>
                <option value="cardiologia">Cardiologia</option>
                </select>
		<label for="email">Email:</label>
		<input type="email" id="email" name="email" placeholder="johnDoe@gmail.com">
		<label for="telefone">Telefone (9 dígitos):</label>
		<input type="tel" id="telefone" name="telefone" placeholder="992 345 543">
		
                <input type="submit" value="Enviar"  id='btn-main'>
               
            </form>
        
           
            </aside>
        </article>
</div>
</header>