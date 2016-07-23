<!DOCTYPE html>
<html lang="pt-BR">
<head>
	<title></title>
	<meta charset="utf-8">
    <meta name="author" content="Júlio Vilar Melo">
    <meta name="keywords" content="">
    <meta name="description" content="">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.5.0/css/font-awesome.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.2/jquery.min.js"></script>
    <script type="text/javascript" src="js/jquery.cycle.js"></script>
    <script type="text/javascript" src="js/main.js"></script>
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" href="css/reset.css">
	<link rel="stylesheet" href="css/main.css">

    <!--[if lt IE 9]>
    <script src="../advogacia/js/html5shiv.js"></script>
    <![endif]-->
</head>
<body>
    <div class="btn-logar">
        <a href="login.html">Logar</a>
    </div>
    <?php
        include 'header.html'
    ?>

    <main>
        <section class="banner">
            <div class="content">
							<img src="assets/imagem1-large.jpeg" srcset="assets/imagem1-small.jpeg 400w, assets/imagem1-md.jpeg 665w, assets/imagem1-large.jpeg 950w" alt="">
							<img src="assets/imagem2-large.jpeg" srcset="assets/imagem2-small.jpeg 400w, assets/imagem2-md.jpeg 665w, assets/imagem2-large.jpeg 950w"alt="">
							<img src="assets/imagem3-large.jpeg" srcset="assets/imagem3-small.jpeg 400w, assets/imagem3-md.jpeg 665w, assets/imagem3-large.jpeg 950w" alt="">
            </div>
        </section>
        <article class="conteudo equipe">
            <div class="content">
                <h2>Nossa equipe</h2>
                <p>Sou um parágrafo. Clique aqui para me editar e adicionar seu texto. É fácil! Basta clicar em "Editar Texto" ou clicar duas vezes sobre mim e você poderá adicionar seu conteúdo e trocar fontes.Este é um ótimo espaço para escrever um texto mais longo sobre sua empresa e seus serviços. Você pode usar este espaço para contar mais detalhes sobre sua empresa.</p>
                <a href="equipe.php"><button type="button">Mais</button></a>
            </div>
        </article>
        <article class="conteudo servicos">
            <div class="content">
                <h2>Serviços</h2>
                <p>Sou um parágrafo. Clique aqui para me editar e adicionar seu texto. É fácil! Basta clicar em "Editar Texto" ou clicar duas vezes sobre mim e você poderá adicionar seu conteúdo e trocar fontes.Este é um ótimo espaço para escrever um texto mais longo sobre sua empresa e seus serviços. Você pode usar este espaço para contar mais detalhes sobre sua empresa.</p>

            </div>
        </article>
				<div class="clear"></div>
        <article class="conteudo">
            <div class="content atuacao">
                <h2 id="atuacao">Áreas de atuação</h2>
										<div class="civil area content">
					              <h4><i class="fa fa-balance-scale"></i>Direito Civíl <i class="fa fa-plus"></i></h4>
												<div class="desc-civil">
														<p>ou um parágrafo. Clique aqui para me editar e adicionar seu texto. É fácil! Basta clicar em "Editar Texto ou um parágrafo. Clique aqui para me editar e adicionar seu texto. É fácil! Basta clicar em "Editar Texto"</p>
												</div>
										</div>
										<div class="tributario area content">
				                <h4><i class="fa fa-balance-scale"></i>Direito Tributário<i class="fa fa-plus"></i></h4>
												<div class="desc-tributario">
														<p>ou um parágrafo. Clique aqui para me editar e adicionar seu texto. É fácil! Basta clicar em "Editar Texto ou um parágrafo. Clique aqui para me editar e adicionar seu texto. É fácil! Basta clicar em "Editar Texto"</p>
												</div>
										</div>
										<div class="eleitoral area content">
												<h4><i class="fa fa-balance-scale"></i>Direito Eleitoral<i class="fa fa-plus"></i></h4>
												<div class="desc-eleitoral">
														<p>ou um parágrafo. Clique aqui para me editar e adicionar seu texto. É fácil! Basta clicar em "Editar Texto ou um parágrafo. Clique aqui para me editar e adicionar seu texto. É fácil! Basta clicar em "Editar Texto"</p>
												</div>
										</div>
										<div class="admnistrativo area content">
				                <h4><i class="fa fa-balance-scale"> </i>Direito Administrativo<i class="fa fa-plus"></i></h4>
												<div class="desc-admnistrativo">
														<p>ou um parágrafo. Clique aqui para me editar e adicionar seu texto. É fácil! Basta clicar em "Editar Texto ou um parágrafo. Clique aqui para me editar e adicionar seu texto. É fácil! Basta clicar em "Editar Texto"</p>
												</div>
										</div>
										<div class="empresarial area content">
				                <h4><i class="fa fa-balance-scale"></i>Direito Empresarial<i class="fa fa-plus"></i></h4>
												<div class="desc-empresarial">
														<p>ou um parágrafo. Clique aqui para me editar e adicionar seu texto. É fácil! Basta clicar em "Editar Texto ou um parágrafo. Clique aqui para me editar e adicionar seu texto. É fácil! Basta clicar em "Editar Texto"</p>
												</div>
										</div>
            </div>
        </article>
			</main>
        <section class="informacoes clear">
            <article class="contato">
                <div class="content">
                    <h2 id="contato">Contato</h2>
                        <span class="number-phone"><i class="fa fa-phone"></i>(83)9 9999-9999</span>
                        <span class="number-phone"><i class="fa fa-whatsapp"></i>(83)9 9999-9999</span>
                        <div class="social-icons"><i class="fa fa-facebook"></i><i class="fa fa-twitter"></i><i class="fa fa-instagram"></i></div>
                </div>
            </article>
            <article class="orcamento">
                <div class="content">
                    <h2>Email</h2>
                    <p>converse com um advogado</p>
                    <form action="" id="form-email">
												<span class="campo-email">
												<label for="email">Email</label>
                        <input type="email" id="email">
												</span>
												<span class="campo-nome">
                        <label for="nome">Nome</label>
                        <input type="text" id="nome">
												</span>
												<span class="campo-assunto">
                        <label for="assunto">Assunto</label>
                        <input type="text" id="assunto">
												</span>
												<span class="campo-message">
                        <label for="message">Mensagem</label>
                        <textarea id="message" form="form-email" rows="7"></textarea>
												</span>
                        <label>Anexo</label>
                        <input type="file">
                        <input type="submit" value="Enviar">
                    </form>
                </div>
            </article>
        </section>

    <?php
        include 'footer.html';
    ?>

    </body>
</html>
