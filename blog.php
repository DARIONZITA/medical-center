<!DOCTYPE html>
<html lang="pt-br">
<?php
    $titulo='Blog Med-Azes';
    include("head.php"); 
?>    
<body onload="nt_get()  ">
    <?php include("header.php"); ?>
  
    <section id="blog">
            
          <div class="header">
            <h2>Blog MED-AZES</h2>
            <div id="search">
                  <input type="search" name="search_input" id="search_input" placeholder="  Pesquisar...">
                  <button type="submit" onclick="search_noticia()"></button>
            </div>
          </div>
            
          <div id="artigos">
            <h2>Destaques</h2>
            
           <aside id='destaque' class="principal_blog">
            
            <div class="card" onclick="clicka()">

                <div class="fakeimg" style="height:200px;"></div>
                <h3 class="tema">TITLE HEADING</h3>
                <h5>Dec 7, 2017</h5>
                <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Laboriosam atque est odio dolor nihil? Molestiae nisi harum ratione et ex sed pariatur! Quibusdam velit deleniti sunt nostrum nemo molestias non.</p>
                <a class="link_continuar" ><p>continuar</p></a>
              </div>
              <div class="card" onclick="clicka()">
                <div class="fakeimg" style="height:200px;"></div>
                <h3 class="tema">TITLE HEADING</h3>
                <h5>Dec 7, 2017</h5>
                <p>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Veniam hic aperiam inventore eos laborum quis nesciunt, consequuntur error adipisci asperiores iste recusandae, aliquid nisi nihil harum corrupti reprehenderit, dolores sunt?</p>
                <a class="link_continuar" ><p>continuar</p></a>
              </div>
          </aside>
          <h1>Artigos e Notícias</h1>
        
          <aside id="bwe_blog" class="principal_blog">
              
                <div class="card" onclick="clicka()">
                  <div class="fakeimg" style="height:200px;"></div>
                  <h3 class="tema">TITLE HEADING</h3>
                  <h5>Dec 7, 2017</h5>
                  
                  <p>Some text..</p>
                  <a class="link_continuar" ><p>continuar</p></a>
                </div>
                <div class="card" onclick="clicka()">
                  <div class="fakeimg" style="height:200px;"></div>
                  <h3 class="tema">TITLE HEADING</h3>
                  <h5>Sep 2, 2017</h5>
                  
                  <p>Dario</p>
                  <a class="link_continuar" ><p>continuar</p></a>
                </div>
                <div class="card" onclick="clicka()">
                    <div class="fakeimg" style="height:200px;"></div>
                    <h3 class="tema">TITLE HEADING</h3>
                    <h5>Sep 2, 2017</h5>
                    
                    <p>Some text..</p>
                    <a class="link_continuar" ><p>continuar</p></a>
                  </div>
                  <div class="card" onclick="clicka()">
                    <div class="fakeimg" style="height:200px;"></div>
                    <h3 class="tema">TITLE HEADING</h3>
                    <h5>Sep 2, 2017</h5>
                    
                    <p>Some text..</p>
                    <a class="link_continuar" ><p>continuar</p></a>
                  </div>
                  <div class="card" onclick="clicka()">
                    <div class="fakeimg" style="height:200px;"></div>
                    <h3 class="tema">TITLE HEADING</h3>
                    <h5>Sep 2, 2017</h5>
                    
                    <p>Some text..</p>
                    <a class="link_continuar" ><p>continuar</p></a>
                  </div>
                  <div class="card" onclick="clicka()">
                    <div class="fakeimg" style="height:200px;"></div>
                    <h3 class="tema">TITLE HEADING</h3>
                    <h5>Sep 2, 2017</h5>
                    
                    <p>Some text..</p>
                    <a class="link_continuar" ><p>continuar</p></a>
                  </div>
          </aside>
           
            </div>
          <div id="pages">
            <button onclick="btn_pages(-1)">&laquo;</button>
            <button class="btn_n" id="first_btn" onclick="btn_pages(0)" >1</button>
            <button class="btn_n" onclick="btn_pages(1)">2</button>
            <button class="btn_n" onclick="btn_pages(2)">3</button>
            <button class="btn_n" onclick="btn_pages(3)">4</button>
            <button class="btn_n" onclick="btn_pages(4)">5</button>
            <button class="btn_n" onclick="btn_pages(5)">6</button>
            <button onclick="btn_pages(7)">&raquo;</button>
          </div>
          
        </section>
        
    <?php include("footer.html"); ?>
    <script>
   
    function clicka(){
      let cards=document.getElementsByClassName('cards')
      let links=document.getElementsByClassName('link_continuar')
      let tema= document.getElementsByClassName('tema')
     
      for( a in tema){
        let text=tema[a].innerHTML
        text=normalizeString(text)
        links[a].setAttribute('href', 'noticias/'+text);
      }
    }

     
    </script>

</body>
</html>