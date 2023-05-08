<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
	<title>REGISTRO DESAPARECIMENTO — PD</title>
	<link rel="stylesheet" href="css/style.css">
	<script src="sweetalert2/dist/sweetalert2.min.js"></script>
    <link rel="stylesheet" href="sweetalert2/dist/sweetalert2.min.css">
	<script src="https://kit.fontawesome.com/8dc1a62042.js"></script>
</head>
<body>
	<img class="logo" src="img/logo.png">
	<div class="wrapper">
		<div class="navbar">
			<ul>
				<li><a href="index.html" class="a_parent">
					<div class="wrap">
						<span class="icon">
							<i class="fas fa-home" aria-hidden="true"></i>
						</span>
						<span class="text">Home</span>
					</div>
				</a></li>
				<li><a href="#" class="a_parent">
					<div class="wrap">
						<span class="icon-d">
							<i class="fa-solid fa-person-circle-question" aria-hidden="true"></i>
						</span>
						<span class="text">Desaparecidos</span>
					</div>
					</a>
					<div class="dd_menu">
						<ul>
							<li>
								<a href="rdesaparecimento.php" class="dd_menu_a">
									<div class="wrap">
										<span class="icon">
										<i class="fa-solid fa-address-card" aria-hidden="true"></i>
										</span>
										<span class="text">
										Registre um Desaparecimento
										</span>
									</div>
								</a>
							</li>
							<li>
								<a href="listadesaparecidos.html"  class="dd_menu_a">
									<div class="wrap">
										<span class="icon">
										<i class="fa-solid fa-people-group" aria-hidden="true"></i>
										</span>
										<span class="text">Lista de Desaparecidos</span>
									</div>
								</a>
							</li>
						</ul>
					</div>
				</li>
				<li><a href="#" class="a_parent">
					<div class="wrap">
						<span class="icon">
						<i class="fa-solid fa-pen" aria-hidden="true"></i>
						</span>
						<span class="text">Conteúdo</span>
					</div>
					</a>
					<div class="dd_menu">
						<ul>
							<li>
								<a href="relatos.html" class="dd_menu_a">
									<div class="wrap">
										<span class="icon">
										<i class="fa-solid fa-book-open" aria-hidden="true"></i>
										</span>
										<span class="text">
										Relatos
										</span>
									</div>
								</a>
							</li>
							<li>
								<a href="envierelato.html" class="dd_menu_a">
									<div class="wrap">
										<span class="icon">
										<i class="fa-solid fa-share-from-square" aria-hidden="true"></i>
										</span>
										<span class="text">Envie seu Relato</span>
									</div>
								</a>
							</li>
							<li>
								<a href="noticias.html" class="dd_menu_a">
									<div class="wrap">
									<span class="icon">
									<i class="fa-regular fa-newspaper" aria-hidden="true"></i>
									</span>
									<span class="text">Notícias</span>
									</div>
								</a>
							</li>
							<li>
								<a href="termos.html" class="dd_menu_a">
									<div class="wrap">
										<span class="icon">
										<i class="fa-solid fa-file-shield" aria-hidden="true"></i>
										</span>
										<span class="text">
										Política de Privacidade
										</span>
									</div>
								</a>
							</li>
					</div>
				</li>
				<li><a href="sobrenos.html" class="a_parent">
					<div class="wrap">
						<span class="icon">
						<i class="fa-regular fa-face-smile" aria-hidden="true"></i>
						</span>
						<span class="text">Sobre Nós</span>
					</div>
				</a></li>
				<li><a href="contate-nos.html" class="a_parent">
					<div class="wrap">
						<span class="icon">
						<i class="fa-solid fa-message" aria-hidden="true"></i>
						</span>
						<span class="text">Contato</span>
					</div>
				</a></li>
				<li><a href="login.html" class="a_parent">
					<div class="wrap">
						<span class="icon-d">
						<i class="fa-solid fa-user-gear" aria-hidden="true"></i>
						</span>
						<span class="text">Acesso Restrito</span>
					</div>
				</a>
			</li>
		</div>
	</div>
</br> 
<div class="titulo-registro">
<h2 class="titulo-lista">
	Registre um Desaparecimento
</h2></div>	
<section class="form-section">
  <div class="form-wrapper">
	  <form action="processa.php" method="POST" enctype="multipart/form-data">
		</br></br>
		  <div class="input-block">
			  <label for="dados" class="Tdados">Dados Pessoais</label>  <br/>  <br/>
			  <label for="nome">Nome</label>
			  <input required type="nome" name="nome" />
			  <span class="error"></span>

		  </div>
		  <div class="input-block">
			  <label for="cpf">CPF</label>
			  <input required type="number" name="cpf" min="0" maxlength="14"/>
			  <span class="error"></span>
		  </div>
		  <div class="input-block">
			  <label for="tel">Telefone </label>
			  <input required type="tel" name="tel" />
			  <span class="error"></span>
		  </div>
		  <div class="input-block">
			  <label for="email">Email</label>
			  <input required type="email" name="email" />
			  <span class="error"></span>

		  </div>
		  <div class="input-block">
			  <label for="data_nasc">Data de Nascimento</label>
			  <input required type="date" name="data_nasc" />
			  <span class="error"></span>
		  </div>
		  <div class="input-block">
			  <label for="estado">Estado</label>
			  <br/>
			  <br/>
			  <select name="estado">
				  <option value="ac">Acre</option> 
				  <option value="al">Alagoas</option> 
				  <option value="am">Amazonas</option> 
				  <option value="ap">Amapá</option> 
				  <option value="ba">Bahia</option> 
				  <option value="ce">Ceará</option> 
				  <option value="df">Distrito Federal</option> 
				  <option value="es">Espírito Santo</option> 
				  <option value="go">Goiás</option> 
				  <option value="ma">Maranhão</option> 
				  <option value="mt">Mato Grosso</option> 
				  <option value="ms">Mato Grosso do Sul</option> 
				  <option value="mg">Minas Gerais</option> 
				  <option value="pa">Pará</option> 
				  <option value="pb">Paraíba</option> 
				  <option value="pr">Paraná</option> 
				  <option value="pe">Pernambuco</option> 
				  <option value="pi">Piauí</option> 
				  <option value="rj">Rio de Janeiro</option> 
				  <option value="rn">Rio Grande do Norte</option> 
				  <option value="ro">Rondônia</option> 
				  <option value="rs">Rio Grande do Sul</option> 
				  <option value="rr">Roraima</option> 
				  <option value="sc">Santa Catarina</option> 
				  <option value="se">Sergipe</option> 
				  <option value="sp">São Paulo</option> 
				  <option value="to">Tocantins</option> 
			  </select>
		  </div>
		  <div class="input-block">
			  <label for="cidade">Cidade</label>
			  <input required type="text" name="cidade" />
			  <span class="error"></span>
		  
		  </div>
<br/>
<div class="input-block">
  <label for="dados" class="Tdados">Dados do Desaparecido</label>  <br/>  <br/>
  <label for="nome_desap">Nome do Desaparecido</label>
  <input required type="text" name="nome_desap" />
  <span class="error"></span>

</div>
<div class="input-block">
  <label for="nome_mae">Nome da Mãe</label>
  <input required type="text" name="nome_mae" />
  <span class="error"></span>
</div>
<div class="input-block">
  <label for="nome_pai">Nome do Pai</label>
  <input type="text" name="nome_pai" />
  <span class="error"></span>
</div>

<div class="input-block">
  <label for="sexo">Sexo</label>
	  <br/>
	  <select name="sexo">
		  <option value="S">Selecione</option> 
		  <option value="F">Feminino</option> 
		  <option value="M">Masculino</option> 
		  <option value="O">Outro</option> 
  <span class="error"></span>
	  </select>
</div>
<div class="input-block">
  <label for="carac-fis">Características: Físicas</label>
  <input required type="text" name="carac_fis" id="carac-fis" placeholder="ex: cor da pele, olhos, cabelo.."/>
  <span class="error"></span>
</div>
<div class="input-block">
  <label for="carac-vest">Características: Vestimentas</label>
  <input required type="text" name="carac_vest" id="carac-vest" placeholder="ex: camiseta branca, calça preta..." />
  <span class="error"></span>
</div>
  <div class="input-block">
	  <label for="grau">Grau de Parentesco com o Desaparecido</label>
	  <input required type="text" name="grau" />
	  <span class="error"></span>
  </div>

  <div class="input-block">
	  <label for="nasc_desap">Data de Nascimento</label>
	  <input required type="date" name="nasc_desap" />
	  <span class="error"></span>
  </div>

<div class="input-block">
  <label for="data_desap">Data do Desaparecimento</label>
  <input required type="date" name="data_desap" />
  <span class="error"></span>
</div>
<div class="input-block">
<label for="msg">Detalhes do Desaparecimento</label>
<br/>
<br/>
  <textarea id="msg" name="msg" rows="6" cols="50"></textarea>
  <span class="error"></span>
</div>
  <div class="input-block">
	  <label for="img-desap">Imagem do Desaparecido</label>
	  <input required type="file" name="img-desap" accept=".jpg,.jpeg,.png,.doc"/>
	  <span class="error"></span>
  </div>
  <br/>
  
  <input required type="button" id="termos" value="Termos e Condições">
  <script src="https://cdn.jsdelivr.net/npm/sweetalert2@10"></script>

  <script>document.getElementById ("termos").addEventListener("click", exibeMensagem);
  function exibeMensagem() {
	  const { value: accept } =  Swal.fire({
		  title: 'Termos e Condições',
		  font: 'Poppins, sans-serif',
		  html: '</br> Você pode acessar os Termos e Condições ' + '<a href="termos.html">aqui</a></br> ',
		  input: 'checkbox',
		  inputValue: 1,
		  inputPlaceholder:
		  'Eu li e concordo com os Termos e Condições',
		  confirmButtonText:
		  'Continue <i class="fa fa-arrow-right"></i>',
		  inputValidator: (result) => {
		  return !result && 'Você precisa aceitar os Termos'
	  }
  })

  if (accept) {
	  Swal.fire('Você concordou com os termos :)')}   
  };</script>

  <span class="error"></span>
  </br>
</br>
  <button type="submit" class="btn-login" >Registrar</button>
	  </form>
  </div>
  <br/>
  
</section>
</br>
</br>
</br>
</br>
<script src="script.js"></script>
</body>
<!-- FOOTER  -->
<div class="footer">
    <div class="contain">
    <div class="col">
      <h1 class="foot">Parente Desaparecido</h1>
      <ul class="lrod">
        <li class="rod"><a class="rodape2" href="index.html">Home</a></li>
      </ul>
    </div>
    <div class="col">
      <h1 class="foot">Desaparecidos</h1>
      <ul class="lrod">
        <li class="rod"><a class="rodape" href="rdesaparecimento.html">Registre um Desaparecimento</a></li>
        <li class="rod"><a class="rodape" href="listadesaparecidos.html">Lista de Desaparecidos</a></li>
    </ul>
    </div>
    <div class="col">
      <h1 class="foot">Conteúdo</h1>
      <ul class="lrod">
        <li class="rod"><a class="rodape" href="relatos.html">Relatos</a></li>
        <li class="rod"><a class="rodape" href="envierelato.html">Envie Seu Relato</a></li>
        <li class="rod"><a class="rodape" href="noticias.html">Notícias</a></li>
		<li class="rod"><a class="rodape" href="termos.html">Política de Privacidade</a></li>

    </ul>
    </div>
    <div class="col">
        <h1 class="foot">Nós</h1>
        <ul class="lrod">
            <li class="rod"><a class="rodape" href="sobrenos.html">Sobre Nós</a></li>
            <li class="rod"><a class="rodape" href="contate-nos.html">Contato</a></li>
        </ul>
      </div>
    <div class="col">
      <h1 class="foot">Acesso Restrito</h1>
      <ul class="lrod">
        <li class="rod"><a class="rodape" href="login.html">Login</a>
            <li class="rod"><a class="rodape" href="cadastro.html">Cadastro</a></li>
        </ul>
    </div>
    <div class="col social">
      <h1 class="foot">Social</h1>
      <ul class="lrod">
        <li class="img-f"><span class="icone-foot"><i class="fa-brands fa-github" style="width: 32px;" aria-hidden="true"></i></span></li>
      </ul>
    </div>
  <div class="clearfix"></div>
  </div>
  </div>
  <!-- FIM DO FOOTER -->
</html>