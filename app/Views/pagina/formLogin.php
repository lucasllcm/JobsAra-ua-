<!DOCTYPE html>
<html lang="pt-br">
<head>
<title>divulgar-se </title>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Lato">
<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Montserrat">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css" rel="stylesheet">
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/js/bootstrap.bundle.min.js"></script>
<style>
body,h1,h2,h3,h4,h5,h6 {font-family: "Lato", sans-serif}
.w3-bar,h1,button {font-family: "Montserrat", sans-serif}
.fa-anchor,.fa-coffee {font-size:200px}
</style>
</head>
<body>

<!-- Navbar -->
<div class="w3-top">
  <div class="w3-bar w3-red w3-card w3-left-align w3-large">
    <a class="w3-bar-item w3-button w3-hide-medium w3-hide-large w3-right w3-padding-large w3-hover-white w3-large w3-red" href="javascript:void(0);" onclick="myFunction()" title="Toggle Navigation Menu"><i class="fa fa-bars"></i></a>
    <a href="#" class="w3-bar-item w3-button w3-padding-large w3-white">Inicio</a>
    <a href="#" class="w3-bar-item w3-button w3-hide-small w3-padding-large w3-hover-white">Curriculos</a>
    <a href="#" class="w3-bar-item w3-button w3-hide-small w3-padding-large w3-hover-white">Vagas De Emprego</a>
    <a href="#" class="w3-bar-item w3-button w3-hide-small w3-padding-large w3-hover-white">Mais Dicas para Montar um currículo</a>

  </div>

  <!-- Navbar on small screens -->
  <div id="navDemo" class="w3-bar-block w3-white w3-hide w3-hide-large w3-hide-medium w3-large">
    <a href="#" class="w3-bar-item w3-button w3-padding-large">Curriculos</a>
    <a href="#" class="w3-bar-item w3-button w3-padding-large">Vagas De Emprego</a>
    <a href="#" class="w3-bar-item w3-button w3-padding-large">Mais Dicas para Montar um currículo</a>

  </div>
</div>

<!-- Header -->
<header class="w3-container w3-white w3-center" style="padding:50px 16px">

  <div class="container mt-3">
    <form method="post" action="<?=base_url('login')?>">
    
      <h2>Bem Vindo!</h2></br>
        <div class="mb-3 mt-3">
        <label for="email">Email:</label>
        <input type="email" class="form-control" id="email" placeholder="digite o e-mail" name="email">
      </div>
      <div class="mb-3">
        <label for="pwd">Senha:</label>
        <input type="password" class="form-control" id="pwd" placeholder="digite a senha" name="senha">
      </div>
      <div class="form-check mb-3">
        <label class="form-check-label">
          <input class="form-check-input" type="checkbox" name="remember"> Manter conectado
        </label>
      </div>
      <button type="submit" class="btn btn-primary">Entrar</button>
      <a href="<?=base_url('pagina/cadastro')?>">Cadastrar-se </a>
</form>
  </div>
  
</header>


<!-- First Grid -->
<div class="w3-row-padding w3-padding-64 w3-container w3-red">
  <div class="w3-content">
    <div class="w3-twothird">
      <h1>A importancia de um bom Curriculo</h1>
      <h5 class="w3-padding-32">O currículo serve como cartão postal para as empresas te conhecerem. É o primeiro contato que o recrutador tem com o candidato. Ainda que o documento seja recebido online, ou até mesmo, pessoalmente. O currículo costuma conter dados de contato, a formação escolar, suas experiências profissionais e cursos extracurriculares.</h5>
      <h5 class="w3-padding-32">Em síntese, é a partir dele que o empregador vai se interessar por você, desejando descobrir mais ao seu respeito e, posteriormente, agendando uma entrevista. </h5>
      <h5 class="w3-padding-32">Por isso é sempre importante mantê-lo atualizado para atrair a atenção dos seus futuros entrevistadores, e quem sabe, chefes! </h5>
	  
    </div>

    <div class="w3-third w3-center">
     
    </div>
  </div>
</div>

<!-- Second Grid -->
<div class="w3-row-padding w3-light-grey w3-padding-64 w3-container">
  <div class="w3-content">
    <div class="w3-third w3-center">
      <i class="fa fa-coffee w3-padding-64 w3-text-red w3-margin-right"></i>
    </div>

    <div class="w3-twothird">
      <h1>DICAS IMPORTANTES</h1>
      <h5 class="w3-padding-32">1. Não peque pelo excesso (nem pela falta)
Um dos grandes problemas na hora de fazer um currículo é saber o que colocar nele: qual nível de escolaridade deve constar? O que inserir nas informações pessoais? Será que vale a pena citar todas as experiências profissionais? Caso você já tenha se perguntado alguma dessas coisas, chegou o momento de descobrir o que fazer.

A verdade é que o seu currículo precisa dizer exatamente o que você tem a oferecer à empresa. Portanto, é importante citar formação, conhecimentos complementares e experiência de trabalho, mas você não precisa exagerar nas informações. Admita: se você fosse um recrutador, não teria interesse em saber onde um candidato cursou o ensino primário, não é mesmo?</h5>
      <h5 class="w3-padding-32">2. Tenha objetivos específicos
Saber qual vaga você quer conquistar e conhecer o perfil da empresa onde pretende trabalhar são atitudes essenciais para elaborar seu currículo, pois essas informações ajudam na hora de especificar quais são seus objetivos profissionais. Por isso, não coloque um objetivo muito clichê: pense nas habilidades que você tem e como elas podem gerar benefícios na rotina de trabalho. Isso demonstra o quanto você se importa com o crescimento da organização.</H5>
     <h5 class="w3-padding-32">3. Não use informações falsas
Mentir no currículo é um erro que muitas pessoas cometem e, geralmente, é algo que só traz consequências ruins. Mesmo que você nunca tenha trabalhado, não vale a pena colocar experiências falsas ou habilidades que não tem. Afinal, um processo seletivo costuma ter várias etapas. Em algum momento, a mentira será descoberta. Já parou para pensar que uma informação irreal pode ser contestada na entrevista de emprego?

Cá entre nós, isso é algo que você com certeza não quer que aconteça, não é mesmo? Sendo assim, vale mais a pena se esforçar para conseguir enriquecer o seu currículo do que inventar coisas .</H5>

     
    </div>
  </div>
</div>



<!-- Footer -->
<footer class="w3-container w3-padding-64 w3-center w3-opacity">  
  <div class="w3-xlarge w3-padding-32">
    <i class="fa fa-facebook-official w3-hover-opacity"></i>
    <i class="fa fa-instagram w3-hover-opacity"></i>
    <i class="fa fa-snapchat w3-hover-opacity"></i>
    <i class="fa fa-pinterest-p w3-hover-opacity"></i>
    <i class="fa fa-twitter w3-hover-opacity"></i>
    <i class="fa fa-linkedin w3-hover-opacity"></i>
 </div>
 
</footer>

<script>
// Used to toggle the menu on small screens when clicking on the menu button
function myFunction() {
  var x = document.getElementById("navDemo");
  if (x.className.indexOf("w3-show") == -1) {
    x.className += " w3-show";
  } else { 
    x.className = x.className.replace(" w3-show", "");
  }
}
</script>

</body>
</html>
