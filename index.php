<!-- INDEX.PHP - VIVA A COPA 2026 -->
<!DOCTYPE html>
<html lang="pt-br">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">

<title>VIVA A COPA 2026</title>

<!-- GOOGLE FONTS -->
<link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700;800&display=swap" rel="stylesheet">

<!-- FONT AWESOME -->
<link rel="stylesheet"
href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css"/>

<style>

*{
    margin:0;
    padding:0;
    box-sizing:border-box;
    font-family:'Poppins', sans-serif;
}

body{
    background:#f4f6f9;
    overflow-x:hidden;
}

/* HEADER */

header{
    width:100%;
    position:fixed;
    top:0;
    left:0;
    z-index:999;
    padding:22px 7%;
    background:rgba(0,0,0,0.55);
    backdrop-filter:blur(10px);
}

.navbar{
    display:flex;
    justify-content:space-between;
    align-items:center;
}

.logo{
    color:white;
    font-size:42px;
    line-height:38px;
    font-weight:800;
}

.logo span{
    color:#4ade80;
}

.menu{
    display:flex;
    gap:40px;
}

.menu a{
    color:white;
    text-decoration:none;
    font-weight:500;
    transition:0.3s;
}

.menu a:hover{
    color:#4ade80;
}

.btn-login{
    background:#16a34a;
    color:white;
    padding:14px 30px;
    border-radius:12px;
    text-decoration:none;
    font-weight:700;
    transition:0.3s;
}

.btn-login:hover{
    transform:translateY(-3px);
}

/* HERO */

.hero{
    width:100%;
    min-height:100vh;
    background:
    linear-gradient(rgba(0,0,0,0.65), rgba(0,0,0,0.75)),
    url('https://images.unsplash.com/photo-1574629810360-7efbbe195018?q=80&w=2070&auto=format&fit=crop');
    background-size:cover;
    background-position:center;
    display:flex;
    align-items:center;
    padding:120px 7% 60px;
    position:relative;
}

.hero-content{
    width:55%;
    color:white;
    z-index:2;
}

.hero-content h1{
    font-size:95px;
    line-height:100px;
    margin-bottom:30px;
    font-weight:800;
}

.hero-content h1 span{
    color:#4ade80;
}

.hero-content p{
    font-size:24px;
    line-height:42px;
    color:#ddd;
    margin-bottom:45px;
    max-width:750px;
}

.hero-buttons{
    display:flex;
    gap:20px;
}

.btn-primary{
    background:#16a34a;
    color:white;
    padding:18px 35px;
    border-radius:14px;
    text-decoration:none;
    font-weight:700;
    transition:0.3s;
    display:flex;
    align-items:center;
    gap:10px;
}

.btn-primary:hover{
    transform:translateY(-5px);
}

.btn-secondary{
    border:2px solid white;
    color:white;
    padding:18px 35px;
    border-radius:14px;
    text-decoration:none;
    font-weight:700;
    transition:0.3s;
    display:flex;
    align-items:center;
    gap:10px;
}

.btn-secondary:hover{
    background:white;
    color:#021126;
}

/* TROPHY */

.trophy{
    position:absolute;
    right:6%;
    bottom:0;
}

.trophy img{
    width:420px;
    filter:drop-shadow(0 10px 30px rgba(0,0,0,0.6));
}

/* SEARCH BOX */

.search-container{
    width:100%;
    display:flex;
    justify-content:center;
    margin-top:-70px;
    position:relative;
    z-index:10;
}

.search-box{
    width:86%;
    background:white;
    padding:30px;
    border-radius:25px;
    box-shadow:0 15px 40px rgba(0,0,0,0.12);

    display:grid;
    grid-template-columns:2fr 1fr 1fr 1fr 1fr;
    gap:20px;
}

.search-item label{
    display:block;
    margin-bottom:10px;
    font-weight:600;
}

.search-item input,
.search-item select{
    width:100%;
    height:58px;
    border:1px solid #ddd;
    border-radius:12px;
    padding:0 15px;
    outline:none;
    font-size:15px;
}

.search-btn{
    background:#16a34a;
    color:white;
    border:none;
    border-radius:14px;
    font-size:18px;
    font-weight:700;
    cursor:pointer;
    transition:0.3s;
}

.search-btn:hover{
    background:#15803d;
}

/* SECTION */

.section{
    padding:110px 7%;
}

.section-title{
    text-align:center;
    margin-bottom:70px;
}

.section-title h2{
    font-size:58px;
    margin-bottom:15px;
    color:#021126;
}

.section-title span{
    color:#16a34a;
}

.section-title p{
    color:#666;
    font-size:20px;
}

/* FEATURES */

.features{
    display:grid;
    grid-template-columns:repeat(auto-fit, minmax(280px,1fr));
    gap:30px;
}

.feature-card{
    background:white;
    padding:45px 35px;
    border-radius:25px;
    text-align:center;
    transition:0.3s;
    box-shadow:0 10px 30px rgba(0,0,0,0.05);
}

.feature-card:hover{
    transform:translateY(-10px);
}

.feature-icon{
    width:90px;
    height:90px;
    background:#16a34a;
    color:white;
    margin:0 auto 25px;
    border-radius:50%;
    display:flex;
    align-items:center;
    justify-content:center;
    font-size:35px;
}

.feature-card h3{
    font-size:28px;
    margin-bottom:15px;
}

.feature-card p{
    color:#666;
    line-height:32px;
    font-size:17px;
}

/* DESTINOS */

.destinos{
    background:#eef2f7;
}

.destinos-grid{
    display:grid;
    grid-template-columns:repeat(auto-fit, minmax(340px,1fr));
    gap:35px;
}

.destino-card{
    background:white;
    border-radius:25px;
    overflow:hidden;
    transition:0.3s;
    box-shadow:0 10px 30px rgba(0,0,0,0.08);
}

.destino-card:hover{
    transform:translateY(-10px);
}

.destino-card img{
    width:100%;
    height:240px;
    object-fit:cover;
}

.destino-info{
    padding:30px;
}

.destino-info h3{
    font-size:35px;
    margin-bottom:10px;
}

.destino-info p{
    color:#666;
    line-height:30px;
    margin-bottom:25px;
}

.destino-footer{
    display:flex;
    justify-content:space-between;
    align-items:center;
}

.price{
    color:#16a34a;
    font-size:32px;
    font-weight:800;
}

.arrow-btn{
    width:50px;
    height:50px;
    border-radius:50%;
    border:1px solid #ddd;
    display:flex;
    align-items:center;
    justify-content:center;
    cursor:pointer;
}

/* APP */

.app{
    padding:120px 7%;
}

.app-box{
    background:
    linear-gradient(rgba(0,0,0,0.75), rgba(0,0,0,0.8)),
    url('https://images.unsplash.com/photo-1522778526097-ce0a22ceb253?q=80&w=1974&auto=format&fit=crop');

    background-size:cover;
    background-position:center;

    border-radius:30px;
    padding:60px;
    display:flex;
    justify-content:space-between;
    align-items:center;
    color:white;
    overflow:hidden;
    position:relative;
}

.app-text{
    width:55%;
}

.app-text h2{
    font-size:65px;
    line-height:75px;
    margin-bottom:25px;
}

.app-text span{
    color:#4ade80;
}

.app-text p{
    font-size:22px;
    line-height:38px;
    color:#ddd;
    margin-bottom:35px;
}

.store-buttons{
    display:flex;
    gap:15px;
}

.store-buttons img{
    width:180px;
    cursor:pointer;
}

.app-phone img{
    width:330px;
}

/* FOOTER */

footer{
    background:#021126;
    color:white;
    padding:70px 7% 30px;
}

.footer-content{
    display:grid;
    grid-template-columns:2fr 1fr 1fr 1fr;
    gap:50px;
}

.footer-logo{
    font-size:48px;
    line-height:42px;
    font-weight:800;
    margin-bottom:20px;
}

.footer-logo span{
    color:#4ade80;
}

.footer-about{
    color:#ccc;
    line-height:32px;
    max-width:350px;
}

.footer-links h3{
    margin-bottom:25px;
}

.footer-links a{
    display:block;
    color:#ccc;
    text-decoration:none;
    margin-bottom:15px;
    transition:0.3s;
}

.footer-links a:hover{
    color:#4ade80;
}

.social-icons{
    display:flex;
    gap:15px;
    margin-top:20px;
}

.social-icons i{
    width:42px;
    height:42px;
    border:1px solid rgba(255,255,255,0.2);
    border-radius:50%;
    display:flex;
    align-items:center;
    justify-content:center;
    cursor:pointer;
    transition:0.3s;
}

.social-icons i:hover{
    background:#16a34a;
    border:none;
}

.copyright{
    margin-top:60px;
    text-align:center;
    color:#aaa;
}

/* RESPONSIVO */

@media(max-width:1200px){

    .hero-content{
        width:100%;
    }

    .trophy{
        display:none;
    }

    .search-box{
        grid-template-columns:1fr;
    }

    .app-box{
        flex-direction:column;
        text-align:center;
        gap:40px;
    }

    .app-text{
        width:100%;
    }

    .footer-content{
        grid-template-columns:1fr 1fr;
    }

}

@media(max-width:850px){

    .menu{
        display:none;
    }

    .hero-content h1{
        font-size:60px;
        line-height:70px;
    }

    .hero-content p{
        font-size:18px;
        line-height:32px;
    }

    .hero-buttons{
        flex-direction:column;
    }

    .section-title h2{
        font-size:40px;
    }

    .app-text h2{
        font-size:45px;
        line-height:55px;
    }

    .footer-content{
        grid-template-columns:1fr;
    }

}

</style>
</head>
<body>

<!-- HEADER -->

<header>

<div class="navbar">

<div class="logo">
VIVA<br>
<span>A COPA</span>
</div>

<div class="menu">
<a href="#">Início</a>
<a href="#">Jogos</a>
<a href="#">Destinos</a>
<a href="#">Pacotes</a>
<a href="#">Hospedagem</a>
<a href="#">Contato</a>
</div>

<a href="login.php" class="btn-login">
<i class="fa-solid fa-right-to-bracket"></i>
Entrar
</a>

</div>

</header>

<!-- HERO -->

<section class="hero">

<div class="hero-content">

<h1>
Viva a emoção da
<span>Copa 2026</span>
</h1>

<p>
Planeje sua viagem completa para a Copa do Mundo.
Voos, hospedagem, ingressos, turismo e experiências
exclusivas em um só lugar.
</p>

<div class="hero-buttons">

<a href="#" class="btn-primary">
<i class="fa-solid fa-suitcase"></i>
Explorar Pacotes
</a>

<a href="#" class="btn-secondary">
<i class="fa-regular fa-calendar"></i>
Ver Jogos
</a>

</div>

</div>

<div class="trophy">

<img src="https://upload.wikimedia.org/wikipedia/commons/d/d3/FIFA_World_Cup_Trophy.svg">

</div>

</section>

<!-- SEARCH -->

<div class="search-container">

<div class="search-box">

<div class="search-item">
<label>Destino</label>
<select>
<option>Escolha uma cidade</option>
<option>Nova York</option>
<option>Los Angeles</option>
<option>Toronto</option>
<option>México</option>
</select>
</div>

<div class="search-item">
<label>Data de ida</label>
<input type="date">
</div>

<div class="search-item">
<label>Data de volta</label>
<input type="date">
</div>

<div class="search-item">
<label>Pessoas</label>
<select>
<option>1 Pessoa</option>
<option>2 Pessoas</option>
<option>3 Pessoas</option>
<option>4 Pessoas</option>
</select>
</div>

<button class="search-btn">
<i class="fa-solid fa-magnifying-glass"></i>
Buscar
</button>

</div>

</div>

<!-- FEATURES -->

<section class="section">

<div class="section-title">

<h2>
Tudo para sua
<span>viagem perfeita</span>
</h2>

<p>
Organizamos toda sua experiência para a Copa do Mundo 2026.
</p>

</div>

<div class="features">

<div class="feature-card">

<div class="feature-icon">
<i class="fa-solid fa-plane"></i>
</div>

<h3>Passagens Aéreas</h3>

<p>
Compare preços e encontre os melhores voos
para acompanhar sua seleção.
</p>

</div>

<div class="feature-card">

<div class="feature-icon">
<i class="fa-solid fa-hotel"></i>
</div>

<h3>Hospedagem</h3>

<p>
Hotéis, hostels e acomodações próximas
aos estádios da Copa.
</p>

</div>

<div class="feature-card">

<div class="feature-icon">
<i class="fa-solid fa-ticket"></i>
</div>

<h3>Ingressos Oficiais</h3>

<p>
Compra segura de ingressos oficiais
com suporte completo.
</p>

</div>

<div class="feature-card">

<div class="feature-icon">
<i class="fa-solid fa-map-location-dot"></i>
</div>

<h3>Turismo</h3>

<p>
Descubra restaurantes, atrações e passeios
incríveis nas cidades-sede.
</p>

</div>

</div>

</section>

<!-- DESTINOS -->

<section class="section destinos">

<div class="section-title">

<h2>
Destinos da
<span>Copa 2026</span>
</h2>

<p>
Explore algumas das principais cidades da competição.
</p>

</div>

<div class="destinos-grid">

<div class="destino-card">

<img src="https://images.unsplash.com/photo-1499092346589-b9b6be3e94b2?q=80&w=1974&auto=format&fit=crop">

<div class="destino-info">

<h3>Nova York</h3>

<p>
Viva jogos históricos e conheça uma das cidades
mais famosas do mundo.
</p>

<div class="destino-footer">

<div class="price">
R$ 6.990
</div>

<div class="arrow-btn">
<i class="fa-solid fa-arrow-right"></i>
</div>

</div>

</div>

</div>

<div class="destino-card">

<img src="https://images.unsplash.com/photo-1515896769750-31548aa180ed?q=80&w=1974&auto=format&fit=crop">

<div class="destino-info">

<h3>Los Angeles</h3>

<p>
Futebol, praias e experiências inesquecíveis
durante a Copa.
</p>

<div class="destino-footer">

<div class="price">
R$ 7.490
</div>

<div class="arrow-btn">
<i class="fa-solid fa-arrow-right"></i>
</div>

</div>

</div>

</div>

<div class="destino-card">

<img src="https://images.unsplash.com/photo-1517935706615-2717063c2225?q=80&w=1974&auto=format&fit=crop">

<div class="destino-info">

<h3>Toronto</h3>

<p>
Conheça uma das cidades mais modernas
da Copa do Mundo 2026.
</p>

<div class="destino-footer">

<div class="price">
R$ 5.990
</div>

<div class="arrow-btn">
<i class="fa-solid fa-arrow-right"></i>
</div>

</div>

</div>

</div>

</div>

</section>

<!-- APP -->

<section class="app">

<div class="app-box">

<div class="app-text">

<h2>
Seu guia completo
da <span>Copa 2026</span>
</h2>

<p>
Receba alertas de jogos, roteiros personalizados,
clima da cidade, tradução, mapas e muito mais
direto no seu celular.
</p>

<div class="store-buttons">

<img src="https://developer.apple.com/assets/elements/badges/download-on-the-app-store.svg">

<img src="https://upload.wikimedia.org/wikipedia/commons/7/78/Google_Play_Store_badge_EN.svg">

</div>

</div>

<div class="app-phone">

<img src="https://cdn-icons-png.flaticon.com/512/0/191.png">

</div>

</div>

</section>

<!-- FOOTER -->

<footer>

<div class="footer-content">

<div>

<div class="footer-logo">
VIVA<br>
<span>A COPA</span>
</div>

<p class="footer-about">
Sua plataforma completa para viver
a Copa do Mundo de 2026 sem preocupação.
</p>

<div class="social-icons">

<i class="fa-brands fa-instagram"></i>
<i class="fa-brands fa-facebook"></i>
<i class="fa-brands fa-x-twitter"></i>
<i class="fa-brands fa-youtube"></i>

</div>

</div>

<div class="footer-links">

<h3>Links</h3>

<a href="#">Início</a>
<a href="#">Jogos</a>
<a href="#">Pacotes</a>
<a href="#">Hospedagem</a>
<a href="#">Contato</a>

</div>

<div class="footer-links">

<h3>Suporte</h3>

<a href="#">Central de ajuda</a>
<a href="#">Termos de uso</a>
<a href="#">Privacidade</a>
<a href="#">Suporte 24h</a>

</div>

<div class="footer-links">

<h3>Redes Sociais</h3>

<a href="#">Instagram</a>
<a href="#">Facebook</a>
<a href="#">Twitter</a>
<a href="#">YouTube</a>

</div>

</div>

<div class="copyright">
© 2026 VIVA A COPA - Todos os direitos reservados.
</div>

</footer>

</body>
</html>