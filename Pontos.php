<?php include_once './conexão.php';
?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="CSS/styles.css">
    <link rel="icon" href="IMG/icone-aba.png">
    <title>Jornada Inclusiva</title>
</head>
<body>
    <header >
        <div class="container">
            <nav>
                <a href="index.html"><img src="IMG/logoteste.jpg" alt="logo" class="logo"></a>
                
           <ul class="ul">
            
            <a href="">Acessibilidade</a>
            <a href="">Comunidade</a>
            <a href="mapa.html">Mapa</a>
            <a href="">Login</a>
            
        <div class="close-icon" onclick="closeMenu()">
            <img src="IMG-SITE/close.png" alt="X">
        </div>
        </ul>
        <div class="menu-icon" onclick="openMenu()">
            <img src="IMG/logoteste.jpg" alt="menu">

        </div>
        
            </nav>
    <section style="background-image: url(IMG/fundo-home.jpg);" class="headerPontos">
    <div class="barra-pesquisa">
        <div class="titulo-mapa">
				<h1 >PESQUISE A CIDADE DO DESTINO</h1>
		</div>
            <div class="search-box">
                <input type="text" class="search-text" placeholder="digite um municipio">
                <a href="" class="search-btn">
                    <img src="IMG/lupa-azul" alt="lupa preta" class="loupe">
                </a>
            </div> 
        
    </div>
    <div class="barra-select">
                 <div class="titulo-mapa">
				<h1 >SELECIONE O ESTABELECIMENTO OU ATRAÇÃO</h1>
			     </div>
    <div class="select">
         <div id="category-select">
            <label for="options-view-button">Categoria</label>
            <input type="checkbox" id="options-view-button">

                <div id="select-button">
                <div id="selected-value">Selecione a categoria</div>


                <div id="chevrons">
                <i data-lucide="chevron-down"></i>
                <i data-lucide="chevron-up"></i>
                </div>
            </div>
        </div>
    </div>
        <section>
        
        </section>
    </section>
    
    
    
    
    
</body>

</html>