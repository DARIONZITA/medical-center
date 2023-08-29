  
function get_dados(n){

    let principal_blog=document.getElementById('bwe_blog')
    axios.get('https://centro-backend.onrender.com/main/?count='+n)
    .then(response=>{
        let dados=response.data
        for(let i=0; i<=5 ;i++){
            let cards=principal_blog.children[i]
            let length=dados.length
            if(i >= length){
                cards.style.visibility='hidden'      
            }
            else{
            cards.style.visibility='visible'
            cards.children[3].innerHTML=dados[i].enfase
            cards.children[2].innerHTML=dados[i].date
            cards.children[1].innerHTML=dados[i].tema
            cards.children[0].style.backgroundImage='url(https://centro-backend.onrender.com/static/'+dados[i].img+')'
            } 
           
        }
        
    })
}
function nt_get(){
    get_dados(0)
    let destaque=document.getElementById('destaque')
    let pages=document.getElementById('pages')

 

        axios.get('https://centro-backend.onrender.com/destaque')
        .then(response =>{
            let dados=response.data
            
            for(let i=0;i<=1;i++){
                let card=destaque.children[i]
                let length=dados.length
                if(i >= length){
                    card.style.visibility='hidden'      
                }
                else{
                card.style.visibility='visible'
                card.children[3].innerHTML=dados[i].enfase
                card.children[2].innerHTML=dados[i].date
                card.children[1].innerHTML=dados[i].tema 
                  card.children[0].style.backgroundImage='url(https://centro-backend.onrender.com/static/'+dados[i].img+')'
                }    
            }
        })
        axios.get('https://centro-backend.onrender.com/numb')
        .then(response=>{
            let dados=Math.ceil(response.data)
            for(n in pages.children){
                if( n > dados && n!=7){
                    pages.children[n].style.display='none'
                }
 
            }
            
        })


}
let i=0
function btn_pages(n){
    //adicionando o eventListener de clique a cada botão
    const buttons = document.querySelectorAll(".btn_n");
    if(n==-1 || n==7){
        if(n!=1){n==-1 ? i-- : i++}
        else{i=0}
    }
    else{i=n}
    //selecionando o botão clicado
    const clickedButton = buttons[i];
    //alterando a cor do botão para a cor desejada
    clickedButton.style.backgroundColor = "green";
    clickedButton.style.color= 'white'
    //iterando por cada botão para alterar o estilo para o padrão
    buttons.forEach(btn => {
        if(btn !== clickedButton){
            btn.style.backgroundColor = "#f2f2f2";
            btn.style.color= 'black'
        }
    })
    //executando a função get_dados
    get_dados(i);
}
let before=3;
let now;
let cont;
function start(){
    slide(1)
   
    axios.get('https://centro-backend.onrender.com/main/')
    .then(response=>{
        let dados=response.data
        let imgs=document.getElementsByClassName('img_noticia')
        let text_total=document.getElementsByClassName('texto_enfase')
        let artigo=document.getElementsByClassName('artigo')
        for(i in dados){
            if (artigo[i]) {
                artigo[i].style.display='grid';
                // restante do código para esse elemento
             
        imgs[i].style.backgroundImage= 'url(https://centro-backend.onrender.com/static/'+dados[i].img+')'
        text_total[i].children[0].innerHTML=dados[i].tema
        text_total[i].children[1].innerHTML=dados[i].body
        text_total[i].children[3].innerHTML=dados[i].date
    } else {
        console.log('O elemento artigo não foi encontrado.');
      }
        }
    })
    
}
const normalizeString = (inputString) => {
    const nfkdForm = inputString.normalize('NFKD');
    let onlyAscii = nfkdForm.replace(/[^\x00-\x7F]/g, "");
    onlyAscii=onlyAscii.replace(/\s/g, '-').toLowerCase();
    return onlyAscii;
}
function clica(){
    let links=document.getElementsByClassName('link_continuar')
    let tema= document.getElementsByClassName('tema')
    
    for(a in tema){
    let text=tema[a].innerHTML
    text=normalizeString(text)
    links[a].setAttribute('href', 'noticias/'+text);
    }
    }


function slide(n){
    começar_auto()
    let text1 = document.getElementById('text-main-1')
    let main = document.getElementById('main')
    let text2 = document.getElementById('text-main-2')
    let text3 = document.getElementById('text-main-3')
    let text4 = document.getElementById('text-main-4')
    let buttom = document.getElementById(`mm${n}`)
    let buttombf = document.getElementById(`mm${before}`)
    let list=[text1,text2,text3,text4]
    for(let i in list){
        list[i].style.display='none'
    }
    buttombf.style.backgroundColor='white'
    buttom.style.backgroundColor='#96F2A6'
    before=n
    switch(n){
        case 1:
            main.style.backgroundImage ="url(./img/m1.jpg)"
            text1.style.display='inline'
           
            break
        case 2:
            main.style.backgroundImage ="url(./img/m3.jpg)";
            text2.style.display='inline'
           break
        case 3:
            main.style.backgroundImage ="url(./img/m5.jpg)"
            text3.style.display='inline'
           break
        case 4:
            main.style.backgroundImage ="url(./img/m2.jpg)"
            main.style.backgroundPosition='50% 50%'
            text4.style.display='inline'
           break
        default:
           
    }

 
}
function começar_auto(){
     clearInterval(cont)
     cont = setInterval(()=>{
    before==4 ?now=1 :now=before+1
        slide(now)
    },15000)
}
let now_slide_2=0
function slide_2(n){
    let imgs = document.querySelectorAll('.slide_img')
    imgs[now_slide_2].style.opacity='50%'
    imgs[now_slide_2].style.width='0'
 
    now_slide_2==4?now_slide_2=0:now_slide_2+=n;
    now_slide_2==-1?now_slide_2=3:false;
    imgs[now_slide_2].style.opacity='100%'
    imgs[now_slide_2].style.width='100%'

}
let i_btn=1;
function menu() {
    document.getElementById("myDropdown").classList.toggle("show");
  }
  
  // Close the dropdown menu if the user clicks outside of it
  window.onclick = function(event) {
    if (!event.target.matches('.dropbtn')) {
      let dropdowns = document.getElementsByClassName("dropdown-content");
      let i;
      for (i = 0; i < dropdowns.length; i++) {
        let openDropdown = dropdowns[i];
        if (openDropdown.classList.contains('show')) {
          openDropdown.classList.remove('show');
        }
      }
    }
  }
  function search_noticia() {
    let input = document.getElementById('search_input').value
    input=input.toLowerCase();
    let x = document.getElementsByClassName('card');
    let principal_blog=document.getElementById('bwe_blog')
    let destaque=document.getElementById('destaque')
    axios.get(`https://centro-backend.onrender.com/search/${input}`)
        .then((response)=>{
            let dados=response.data.results
            destaque.style.display='none'
            for(let i=0; i<=5 ;i++){
                let cards=principal_blog.children[i]
                let length=dados.length
                if(i >= length){
                    cards.style.visibility='hidden'      
                }
                else{
                cards.style.visibility='visible'
                cards.children[3].innerHTML=dados[i].enfase
                cards.children[2].innerHTML=dados[i].date
                cards.children[1].innerHTML=dados[i].tema
                } 
            }
        }
        )

    }

function close_consulta(n){
    let box_consulta=document.getElementById('consulta_container')
    n==0? box_consulta.style.display='flex': box_consulta.style.display='none'
}


//consulta

function validarFormulario() {
    // Obter os elementos do formulário
    var nome = document.getElementById("nome").value;
    var idade = document.getElementById("idade").value;
    var email = document.getElementById("email").value;
    var telefone = document.getElementById("telefone").value;
    var tipoConsulta = document.getElementById("tipo-consulta").value;

    // Validar o nome
    if (nome == "") {
      alert("Por favor, digite seu nome.");
      return false;
    }

    // Validar a idade
    if (idade == "" || isNaN(idade)) {
      alert("Por favor, digite sua idade corretamente.");
      return false;
    }

    // Validar o email
    if (email == "" || email.indexOf("@") == -1 || email.indexOf(".") == -1) {
      alert("Por favor, digite um email válido.");
      return false;
    }
    telefone=telefone.replace(' ','')
    // Validar o telefone
    if (telefone == "" || isNaN(telefone) || telefone.length != 9) {
      alert("Por favor, digite um número de telefone angolano válido.");
      return false;
    }

    // Validar o tipo de consulta
    if (tipoConsulta == "") {
        alert("Por favor, selecione o tipo de consulta.");
        return false;
      }
    return true

}
function enviar_consulta(event) {
    event.preventDefault();
  // Restante do código de submissão do formulário aqui
    // Validar o formulário antes de enviar
    if (validarFormulario()) {
      // Obter os dados do formulário
      var nome = document.getElementById("nome").value;
      var idade = document.getElementById("idade").value;
      var email = document.getElementById("email").value;
      var telefone = document.getElementById("telefone").value;
      var tipoConsulta = document.getElementById("tipo-consulta").value;
      var thisbtn = document.getElementById("btn-main");

  
      // Criar um objeto com os dados do formulário
      var dados = {
        nome: nome,
        idade: idade,
        email: email,
        telefone: telefone,
        tipoConsulta: tipoConsulta
      };
      thisbtn.disabled = true;
      // Enviar os dados com uma requisição axios
      thisbtn.value='a enviar...'
      axios.post("https://centro-backend.onrender.com/enviar-email", dados)
            .then(function (response) {
                try {
                // código que pode gerar um erro
                alert("Seus dados foram enviados com sucesso, espere pelo nosso feedback. Obrigado!");
               
               ;
                } catch (error) {
                // captura o erro gerado pelo código dentro do bloco try
                console.log(error);
                alert('Ocorreu um erro no envio, tente novamente')
                } finally { 
                thisbtn.disabled = false;
                // código que sempre será executado
                console.log("Operação concluída")
                window.location.reload();
                }
            });
    }

};