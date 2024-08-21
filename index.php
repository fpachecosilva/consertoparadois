<!DOCTYPE HTML>
<html>

<head>

	<?php
	include 'assets/config.php';

	$tituloPagina = '' . $empresa;
	$descricaoCompartilhamento = '';

	$urlPagina = $url;
	$imagemCompartilhamento = $images . 'compartilhamento.jpg';
	$sessao = 'home';
	$json = file_get_contents("assets/db.json");
	$data = json_decode($json);
	?>
	<title><? echo $tituloPagina ?></title>
	<?php include 'assets/head.php'; ?>

	<meta property="og:title" content="<? echo $tituloPagina ?>" />
	<meta name="description" content="<? echo $descricaoCompartilhamento ?>" /> <!-- DESCRIÇÃO SEO GOOGLE -->
	<meta property="og:description" content="<? echo $descricaoCompartilhamento ?>" /> <!-- DESCRIÇÃO FACEBOOK -->

</head>

<body class="Home">
	<!-- Google Tag Manager (noscript) -->
	<noscript><iframe src="https://www.googletagmanager.com/ns.html?id= " height="0" width="0" style="display:none;visibility:hidden"></iframe></noscript>
	<!-- End Google Tag Manager (noscript) -->

	<header class="">
		<div class="menu">
			<div class="center">
				<div></div>
			</div>
		</div>
		<article>
			<img class="logo MobileItem" src="<?php echo $images ?>logo.png">
			<div class="box-links">
				<a href="#ancora-abas">O SHOW</a>
				<a href="#valores">EXIBIÇÃO</a>
				<!-- <a href="#programa">PROGRAMA</a> -->
				<a href="#ingressos">INGRESSOS</a>
			</div>
			<div class="box-social">
				<a class="botaotopo" href="#ingressos">Comprar Ingresso</a>
				<?php include 'assets/social.php'; ?>
			</div>
		</article>
	</header>

	<section id="principal">
		<img class="bg" src="<? echo $images ?>bg-novo.png">
		<article>
			<h1>Claudia Raia, Jarbas Homem de Mello e 12 personagens em cena</h1>
		</article>

		<a class="Btn-primary" href="#ingressos">Comprar ingressos</a>

		<h2>CONSERTO PARA DOIS</h2>
		<h3 id="ancora-abas">
		Claudia Raia e Jarbas Homem de Mello retornam com a comédia ‘Conserto para Dois, O Musical’
		</h3>
		<p class="italic">Comédia musical 100% brasileira retorna aos palcos com nova turnê e temporada</p>
	</section>

	<section id="menu-abas">
		<div class="menu-links">
			<a class="megashow ativo" href="#ancora-abas">Comédia musical em turnê pelo Brasil</a>
			<a class="espetaculo" href="#ancora-abas">Bem-vindo ao Sinfonia dos Mares</a>
			<a class="exposicao" href="#ancora-abas">Dois atores, muitos personagens</a>
		</div>
		<p id="megashow">
			Claudia Raia e Jarbas Homem de Mello já têm data marcada para voltar ao teatro: dia 24 de agosto, às 20h, com a reestreia de <strong>“Conserto para Dois, O Musical”</strong>, no <strong>Teatro Guaíra</strong>, em <strong>Curitiba-PR</strong>. Depois do sucesso que foi a temporada e turnê em 2022, eles voltam em turnê e temporada com apresentações em cidades inéditas. A agenda da circulação contempla as cidades de <strong>Pirassununga</strong> e <strong>Lençóis Paulista</strong>, no interior de <strong>São Paulo</strong>, as capitais do <strong>Rio de Janeiro-RJ</strong> e <strong>Vitória-ES</strong>, e uma temporada na cidade de <strong>São Paulo</strong>, no <strong>Teatro Frei Caneca</strong>. O espetáculo é apresentado por <strong>Ministério da Cultura</strong> e <strong>Bradesco Seguros</strong>.
			<br><br>
			<em>"Sentimos que ficou um gostinho de quero mais no público. Encerramos uma temporada com casa cheia e ingressos esgotados. Percebemos que ainda tinha mais gente que gostaria de ver essa comédia que é ‘Conserto para Dois, O Musical’ e decidimos fazer mais um temporada</em>”, explica Claudia, que além de dividir o palco com Jarbas e se revezar com ele para interpretar os 12 personagens da história, ainda produz o espetáculo: “<em>Quando voltamos no ano passado, ficamos na dúvida de como seria para o público voltar ao teatro, se eles iriam novamente, como seria essa retomada… Mas o abraço tão carinhoso deles superou e muito nossa expectativa. Então, estamos de volta!</em>”.
			<br><br>
			Jarbas, por sua vez, também tem função dupla na montagem: além de estrelar <strong>“Conserto para Dois, O Musical”</strong> ao lado de Claudia, ele é o diretor do espetáculo. “<em>Foi a primeira vez que dirigi Claudia e deu tudo muito certo. Ela é uma atriz que gosta de ser dirigida, que gosta da troca que essa dinâmica entre ator e diretor propõe. Então, o trabalho sempre fluiu de uma maneira muito boa. Acho que isso se traduz no palco, no encantamento que o público sente ao assistir ao espetáculo</em>”, conta Jarbas: “<em>O teatro já é mágico por si só. E acho que nosso musical traz uma magia ainda maior porque o público mesmo não entende como só nós dois podemos interpretar todos os personagens da história. Isso, aliás, rende histórias hilárias. Minha mãe, por exemplo, não me reconheceu quando eu estava no palco caracterizado como Dona Socorro (risos)</em>”.
			<br><br>
			<strong>“Conserto para Dois, O Musical”</strong> conta a história de amor, encontros e desencontros entre o famoso escritor Ângelo Rinaldo (Jarbas) e a atriz internacional Luna de Palma (Claudia). Separados, os dois embarcam em um cruzeiro para esquecerem a desilusão amorosa. Eles só não contavam embarcar no mesmo navio, Sinfonia dos Mares, rumo à Antártida. É nesse cenário que se desenrola toda a história, criada por Anna Toledo a convite de Claudia e Jarbas.
			<br><br>
			“<em>Eu cresci assistindo à Claudia Raia fazendo ‘TV Pirata’. Eu queria explorar aquele humor absurdo. Claudia e Jarbas são minhas grandes referências no teatro musical. Acho que assisti a tudo que eles fizeram no teatro nos últimos 20 anos. Os dois têm um sólido arcabouço de recursos cênicos, corporais, vocais. Sabendo para quem eu escreveria, muito dos personagens e situações já se desenharam</em>”, afirma a roteirista.
			<br><br>
			Anna trabalhou lado a lado com o diretor musical, Tonny Lucchesi, e Thiago Gimenes para criar as músicas de <strong>“Conserto para Dois, O Musical”</strong>. Afinal, no teatro musical elas também contam a história que está se desenvolvendo, elas estão inseridas dentro da dramaturgia.
			<br><br>
			“<em>Os temas foram pensados para dar todo esse clima de comédia. Como são muitos personagens, cada um tem uma característica musical bem marcante, que pretende dialogar muito com o público. Temos o luxo de ter Kátia Barros coreografando. É muito legal ver a conversa entre música e movimento que desenvolvemos. Além disso, Claudia e Jarbas são muito criativos e trazem humor para as canções</em>”, pontua Tony.
			<br><br>
			O cenário, criado por Natália Lana, é praticamente um personagem da história. Ele vai se desdobrando para virar cenário para todos os momentos da divertida história que se desenvolve. Os figurinos são fundamentais porque eles ajudam a dar o tom da diferença entre as personas, que têm partituras corporais, timbres e trejeitos diferentes. O figurinista Bruno Oliveira ainda tinha um desafio muito importante: criar roupas que pudessem ser tiradas e colocadas entre 5 e 10 segundos.
			<br><br>
			Sim, é mais ou menos esse o tempo que Claudia e Jarbas têm para sair de um personagem e entrar em outro.
			<br><br>
			“<em>Trabalhamos muito com a Kátia Barros, nossa codiretora e coreógrafa, para criar os trejeitos e as partituras corporais de cada personagem. O figurino embala tudo isso. Já a preparação vocal ficou por conta do maestro Marconi Araújo, que é também quem assina a direção musical e vocal do disco do espetáculo, que lançamos com 10 faixas</em>”, aponta Jarbas.
			<br><br>
			<strong>Navegando por outras águas</strong>
			<br><br>
			Com <strong>“Conserto para Dois, O Musical”</strong>, Claudia e Jarbas apostaram em criar novas formas de o público se entreter com o teatro musical. A dupla lançou o disco de espetáculo, com 10 faixas. Algo ainda pouco explorado no Brasil. As gravações aconteceram em um estúdio em São Paulo. O maestro Marconi Araújo é quem assina a direção musical e vocal do álbum.
			<br><br>
			“<em>Eles já sabiam o texto e as músicas, já tinham feito o espetáculo, as concepções todas já estavam na cabeça. Eu realmente só precisei adaptar para o universo do disco. Acho que foi um processo muito tranquilo para eles. Tanto é verdade que gravamos o disco muito rápido, foi um processo que levou três dias. Eles realmente estavam muito preparados para fazer</em>”, diz o maestro Marconi Araújo, que acredita que o lançamento do disco vai abrir mais um espaço para o teatro musical brasileiro: “<em>Poucos espetáculos puderam fazer isso no Brasil. Alguns fizeram, mas, especificamente no nosso caso, tem um diferencial: no nosso caso, não é um álbum só das músicas, também há a parte de texto que une a história. Então, não é um álbum de músicas, é um álbum de dramaturgia. Isso é uma coisa diferente, acho que inédita, e pode sim abrir porta para outros espetáculos que queiram registrar o seu trabalho. Afinal de contas dá tanto trabalho e a gente acaba não ficando com registro nenhum nas plataformas digitais. Com certeza abre uma nova fronteira para o mercado de teatro musical brasileiro</em>”.
			<br><br>
			As novidades não pararam por aí. Uma das faixas, “<strong>Tô bem melhor sem você</strong>”, ganhou um clipe, lançado em dezembro do ano passado. “<em>Essa foi uma grande homenagem à comunidade LGBTQIA+, que sempre me acompanhou nesses quase 40 anos de carreira. Convidei para estarem comigo Marcia Pantera, Gysella Popovick, Catherrine Leclery, Salete Campari, Laysa Bombom, Alexia Twister, Silvetty Montilla, Allyssa Drummond, Lilian Ravani, Thália Bombinha e Rafaelly Poul. A Catherrine, por exemplo, veio da Alemanha especialmente para gravação</em>”, relembra Claudia.
			<br><br>
			Marcella Rica é quem assina a direção do clipe, que foi gravado na boate Blue Space: “<em>É sempre uma delícia e um privilégio trabalhar com a Claudia e com o Jarbas. Quando ela me ligou pedindo ajuda pra realizar essa ideia, eu não pensei duas vezes, ainda mais com a oportunidade de exaltar a arte drag e trabalhar com esse squad maravilhoso! Foi uma correria louca (risos). Realizamos tudo - da visita de locação, gravação, pré e pós produção - em uns quatro dias, se não me engano. E para isso contamos com a ajuda de uma equipe muito maravilhosa, que merece todos os aplausos! A ideia era também fazer esse paralelo com a linguagem do espetáculo, onde eles trocam de roupa com uma rapidez incrível diversas vezes durante a peça. Por isso, a ideia dos planos sequência com transições rápidas, que trazem um certo ilusionismo</em>”.
			<br><br>
			Com texto de Anna Toledo, músicas dela, Thiago Gimenes e Tony Lucchesi, que também assina a direção musical do espetáculo, <strong>“Conserto para Dois, O Musical”</strong> volta em turnê nacional, com apresentações de 24 de agosto a 15 de dezembro. O espetáculo é apresentado por <strong>Ministério da Cultura</strong> e <strong>Bradesco Seguros</strong>.
		</p>

		<p id="espetaculo">
			A ação acontece no cruzeiro de luxo Sinfonia dos Mares, onde Rinaldi embarca rumo à Antártida para uma viagem de 30 dias. Com um bloqueio criativo, ele quer esquecer o conturbado fim de seu casamento com sua musa inspiradora. Ele só não podia imaginar que daria de cara justamente com a ex. Luna embarca no mesmo navio seguindo o conselho de sua mãe, Dona Socorro (Jarbas), para fugir do marido. Nestor (Claudia), seu secretário particular, embarca junto nesta aventura.
			<br><br>
			“Eu cresci assistindo à Claudia Raia fazendo ‘TV Pirata’. Eu queria explorar aquele humor absurdo. Claudia e Jarbas são minhas grandes referências no teatro musical. Acho que assisti a tudo que eles fizeram no teatro nos últimos 20 anos. Os dois têm um sólido arcabouço de recursos cênicos, corporais, vocais. Sabendo para quem eu escreveria, muito dos personagens e situações já se desenharam”, conta Anna Toledo, autora do texto do espetáculo.
			<br><br>
			Anna assina o texto e as músicas que compõem o espetáculo. Neste quesito, foram muitas mensagens de áudio com melodia trocadas entre Anna, o diretor musical, Tony Lucchesi, e Thiago Gimenes, responsáveis pelas canções de "Conserto para Dois, O Musical". O trabalho incansável do trio foi necessário para fazer com que as músicas estivessem dentro da narrativa. Afinal, em um musical, a canção também conta a história, leva a trama a novos lugares.
			<br><br>
			“Os temas foram pensados para dar todo esse clima de comédia. Como são muitos personagens, cada um tem uma característica musical bem marcante, que pretende dialogar muito com o público. Experimentamos muitas coisas nos ensaios. E ainda temos o luxo de ter Kátia Barros coreografando. É muito legal ver a conversa entre música e movimento que desenvolvemos. Além disso, Claudia e Jarbas são muito criativos e trazem humor para as canções”, derrete-se Tony.
		</p>

		<p id="exposicao">
			O desenrolar de "Conserto para Dois, O Musical" e suas mirabolantes reviravoltas são contadas no palco por Claudia Raia e Jarbas Homem de Mello. Além de Luna de Palma e Nestor, Claudia interpreta:
			<br>- Lena de Paula, uma Drag Queen que se apresenta no Sinfonia dos Mares homenageando sua diva Luna de Palma.
			<br>- a terapeuta de Rinaldi, que atende por Skype e está tentando ajudá-lo neste momento difícil com suas consultas e alguns remedinhos;
			<br>- Jussara, a camareira de Lena e única pessoa que pode se aproximar dela;
			<br>- a sereia (um devaneio de Ângelo Rinaldi);
			<br>- e um dos marinheiros do navio, que tem sempre uma dica certeira para dar.
			<br><br>
			Jarbas, além de dar vida ao famoso escritor Ângelo Rinaldi, personifica:
			<br>- Dona Socorro, a mãe de Luna, que vive dando suas opiniões (bem bombásticas) mesmo sem ser solicitada;
			<br>- Stenio Estebán, um produtor de cinema argentino;
			<br>- Pompeu, um velho milionário que guarda um grande segredo;
			<br>- e um dos marinheiros do navio.
			<br><br>
			E para ajudar a contar a história de "Conserto para Dois, O Musical", cenário, figurino, músicas e texto precisam estar em perfeita harmonia. Com uma estrutura narrativa ágil, o espetáculo conta com um contrarregra, três maquinistas, um peruqueiro e duas camareiras que ajudam a fazer a troca rápida de figurinos e cenários. Além deles, a equipe tem dois canhoneiros, uma pessoa para o som e outra para luz.
			<br><br>
			“Eles ficam dentro do navio, que é a base do cenário. E são peças fundamentais para narrativa do espetáculo”, explica a cenógrafa, Natália Lana, que criou a caixinha de surpresas que é o cenário; afinal, a base do navio vai de desdobrando, se abrindo e se transformando nos outros ambientes da história: “Fizemos os ensaios, em 2019, já com a estrutura pronta. Isso para mim foi muito especial porque não é comum. Ensaiar com o cenário desde o começo do processo fez com que ele fosse mais bem explorado, com que os atores tivessem intimidade com cada elemento cênico, o que é muito importante. Especialmente, porque o cenário funciona como um personagem”.
			<br><br>
			O mesmo pode ser dito do figurino. O figurinista Bruno Oliveira trabalhou para criar roupas que traduzissem a essência de cada personagem. E ainda criou vestimentas que ajudassem na transformação dos atores em cena.
			<br><br>
			“Dona Socorro, por exemplo, é uma mulher com curvas acentuadas e roupas extravagantes. Foi preciso um estudo para chegarmos na transformação do corpo de Jarbas para dona Socorro. A solução que encontramos foi um vestido com enchimentos. Assim, garantimos uma troca rápida quando ele sai de um personagem para outro e conseguimos mudar totalmente a estrutura do corpo masculino para uma bela senhora ousada, cheia de curvas e nada discreta (risos)”, diverte-se Bruno.
		</p>

		<!-- <a href="<? echo $images ?>programa.pdf" class="Btn-primary programa" id="programa" download>
			<span><i class="fas fa-file-pdf"></i></span>
			Clique aqui e baixe o PDF do programa do espetáculo
		</a> -->

		<a href="https://open.spotify.com/intl-pt/album/0fCAp15Eog4ptVrxZCABMA" target="_blank" class="Btn-primary programa" id="programa" download>
			<span><i class="fas fa-play-circle"></i></span>
			Ouça o álbum Conserto para Dois
		</a>

		<p style="text-align: center">PARCEIROS</p>
		<img class="logo-parceiros" src="<? echo $images ?>logos-parceiros.png">
	</section>

	<section id="icones">
		<h1 class="">CONSERTO PARA DOIS</h1>		

		<div class="menu-locais-links">
			<?php
			foreach ($data->locais as $local) {
				$localName = str_replace(' ', '_', $local->nome);

				echo '
					<a class="'.$local->ativo.'"local="'.$localName.'">'.$local->nome.'</a>
				';
			}
			?>
		</div>

		<?php
		foreach ($data->locais as $local) {
			$localName = str_replace(' ', '_', $local->nome);

			echo '
				<div class="local '.$localName.' '.$local->ativo.'">
					<div class="wrapper-card">
						<div class="card">
							<div class="img-wrapper">
								<img src="'.$images.'icon02.png">
							</div>
							<h2>'.$local->local.'</h2>
							<p>'.$local->localend.'</p>
						</div>
						<div class="card">
							<div class="img-wrapper">
								<img src="'.$images.'icon03.png">
							</div>
							<h2>DURAÇÃO - 75min</h2>
						</div>
					</div>
				</div>		
			';				
		}
		?>
	</section>

	<section id="valores">
		<?php include 'assets/includes/tabelas.php'; ?>
	</section>

	<section id="ingressos">
		<h1 class="">INGRESSOS</h1>
		<div class="wrapper-card ">
			<?php
				foreach ($data->locais as $local) {
					if (!empty($local->link) && $local->breve == false) {
						echo '
							<div class="card">				
								<a onclick="gtag_report_conversion("'.$local->link.'")" class="Btn" href="'.$local->link.'" target="blank">
									<h2>'.$local->nome.'</h2>
								</a>
							</div>					
						';						
					} else {
						echo '
							<div class="card">				
								<a onclick="gtag_report_conversion("")" class="Btn disabled" href="'.$local->link.'">
									<h2>VENDAS ABERTAS - EM BREVE - '.$local->nome.'</h2>
								</a>
							</div>					
						';
					}
				}
			?>
		</div>


		<div class="ingressostxt">
			<p>
				<strong class="title">FICHA TÉCNICA</strong>
				<br><br>
				<strong>Texto:</strong> Anna Toledo<br>
				<strong>Músicas:</strong> Thiago Gimenes, Tony Lucchesi e Anna Toledo<br>
				<strong>Direção:</strong> Jarbas Homem de Mello<br>
				<strong>Codireção e Coreografias:</strong> Kátia Barros<br>
				<strong>Diretor Musical:</strong> Tony Lucchesi<br>
				<strong>Design de Som:</strong> Tocko Michelazzo<br>
				<strong>Design de Luz:</strong> Jarbas Homem de Mello e Jackis Roberto<br>
				<strong>Cenário:</strong> Natália Lana<br>
				<strong>Figurinos:</strong> Bruno Oliveira<br>
				<strong>Visagismo:</strong> Dicko Lorenzo<br>
				<strong>Elenco:</strong> Claudia Raia e Jarbas Homem de Mello<br>
				<strong>Participação Especial:</strong> Guilherme Terra<br>
				<strong>Diretor Musical Assistente, Arranjos e Piano:</strong> Guilherme Terra<br>
				<strong>Diretora Residente:</strong> Sabrina Mirabelli<br>				
				<strong>Produção:</strong> Amanda Leones - Versa Cultural<br>
				<strong>Produção Geral:</strong> Raia Produções<br>
				<strong>Realização:</strong> Magali Elena Produções, Ministério da Cultura e Bradesco Seguros<br>				
				<strong>Assessoria de imprensa:</strong> Motisuki PR<br><br><br>
				
				<strong style="font-size:25px">
					SOBRE O CIRCUITO CULTURAL BRADESCO SEGUROS
				</strong>
				<br><br>
				Manter uma política de incentivo à cultura faz parte do compromisso do <strong>Grupo Bradesco Seguros</strong> considerando a cultura como ativo para o desenvolvimento dos capitais do conhecimento e do convívio social. Nesse sentido, o <strong>Circuito Cultural Bradesco Seguros</strong> se orgulha de ter patrocinado e apoiado, nos últimos anos, em diversas regiões do Brasil, projetos nas áreas de música, dança, artes plásticas, teatro, literatura e exposições, além de outras manifestações artísticas. 
				<br><br>
				Dentre as atrações incentivadas destacam-se os musicais <strong>“Bibi – Uma vida em musical”</strong>, <strong>“Bem Sertanejo”</strong>, <strong>“Les Misérables”</strong>, <strong>“70 – Década do Divino Maravilhoso”</strong>, <strong>“Cinderella”</strong>, <strong>“O Fantasma da Ópera”</strong>, <strong>“A Cor Púrpura”</strong> e <strong>“Conserto para Dois”</strong>, além da <strong>“Série Dell’Arte Concertos Internacionais”</strong> e a exposição <strong>“Mickey 90 Anos”</strong>.
				<br><br>
				<strong>SERVIÇO - “CONSERTO PARA DOIS, O MUSICAL”</strong>
				<br>
				<strong>Duração:</strong> 100 minutos<br>
				<strong>Classificação indicativa:</strong> 10 anos
			</p>
		</div>

		<div class="box-social">
			<?php include 'assets/social.php'; ?>
		</div>

		<img class="logofooter" src="<? echo $images ?>logo.png">

	</section>


	<?php include 'assets/footer.php'; ?>

	<a href="https://api.whatsapp.com/send?phone=&amp;text=Oi,%20vim%20através%20do%20website" target="_blank" id="Whatsapp"><i class="fab fa-whatsapp" aria-hidden="true"></i></a>

</body>

</html>