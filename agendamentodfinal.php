<!DOCTYPE html>
<html lang="pt-br">
<head>
	<title>Agende seu Pedido</title>
	<meta charset="utf-8">
	<link rel="stylesheet" type="text/css" href="css/bootstrap.css">
	<link rel="stylesheet" type="text/css" href="css/meumodelo.css">
	<script src="https://code.jquery.com/jquery-3.4.1.js" integrity="sha256-WpOohJOqMqqyKL9FccASB9O0KwACQJpFTUBLTYOVvVU=" crossorigin="anonymous"></script>
	<script src="js/bootstrap.js"></script>
</head>
<body>
	<div class="cabecalio">
		<nav class="navbar navbar-expand-lg navbar-light bg-light cabecalio">
  			<a class="navbar-brand" href="#"><img src="img/logo.png" height="40px" width="auto"></a>
 			<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
   				 <span class="navbar-toggler-icon"></span>
 			</button>
  			<div class="collapse navbar-collapse justify-content-end" id="navbarNav">
    			<ul class="navbar-nav">
      				<li class="nav-item ">
        				<a class="nav-link" href="index.html">Principal </a>
     			 	</li>
      				<li class="nav-item">
      					<a class="nav-link" href="sobrenos.html">Sobre Nós</a>
     			 	</li>
      				<li class="nav-item active">
       				 	<a class="nav-link" href="agendamento1.html">Agendamento <span class="sr-only">(current)</span></a>
     		 		</li>
    			</ul>
  			</div>
		</nav>
	</div>






	<div class="formulario">
    <form>
      <div class="form-group row">
        <label for="inputEmail3" class="col-sm-2 col-form-label">Tema</label>
        <div class="col-sm-10">
          <div class="col-auto my-1">
            <select class="custom-select mr-sm-2" id="inlineFormCustomSelect">
              <option selected>Choose...</option>
              <option value="1">One</option>
              <option value="2">Two</option>
              <option value="3">Three</option>
            </select>
          </div>
        </div>
      </div>
      <div class="form-group row">
        <label for="inputPassword3" class="col-sm-2 col-form-label">Recheio</label>
        <div class="col-sm-10">
          <div class="col-auto my-1">
            <select class="custom-select mr-sm-2" id="inlineFormCustomSelect">
              <option selected>Choose...</option>
              <option value="1">One</option>
              <option value="2">Two</option>
              <option value="3">Three</option>
            </select>
          </div>
        </div>
      </div>
      <fieldset class="form-group">
        <div class="row">
          <legend class="col-form-label col-sm-2 pt-0">Observações</legend>
          <div class="col-sm-10">
           <div class="col-sm-10">
            <input type="observacoes" class="form-control" id="inputPassword3" placeholder="Observações a cerca do seu kit">
          </div>
          </div>
        </div>
      </fieldset>
      <div class="form-group row">
        <div class="col-sm-10">
          <button type="submit" class="btn btn-primary">Enviar</button>
    </div>
  </div>
</form>
		
	</div>

	<div class="rodape2">
		<ul class="nav  nav-fill rodape">
        <li class="nav-item">
          <p> <A href="https://api.whatsapp.com/send?phone=62985847950&text=Ol%C3%A1%20Sou%20" target="_blank">Whatsapp</A> </p>
      </li>
        <li class="nav-item">
          <p> <a href="https://www.instagram.com/@cakesdecorgyn" target="_blank">Instagram</a> </p>
        </li>
        <li class="nav-item">
          <p> Endereço: Av. Sorocaba Qd.32 Lt.4 N°26 Jardim Novo Mundo CEP: 74.715-490 </p>
        </li>
        <li class="nav-item">
          <p>E-mail: Cakesdecorgyn@gmail.com </p>
        </li>
    </ul>
	</div>

</body>
</html>