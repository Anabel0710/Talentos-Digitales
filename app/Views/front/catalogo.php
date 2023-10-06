<section class="hero">
  <div class="conteiner">
    <div class="cards">
      <img src="imagenes/cards.vino.jpg" alt="">
      <div class="titulo-cards">Vinos y espumantes</div>
      <p>Marcas nacionales e importadas.</p>
      <a href="#">Ver mas</a>
    </div>
    <div class="cards">
      <img src="imagenes/cards_cerveza.png.jpeg" alt="">
      <div class="titulo-cards">Cervezas</div>
      <p>Gran Variedad de Cervezas Artesanales</p>
      <a href="#">Ver mas</a>
    </div>
    <div class="cards">
      <img src="imagenes/cards_licores.png.jpeg" alt="">
      <div class="titulo-cards">Licores</div>
      <p>Licores, aperitivos, vodka y mucho mas</p>
      <a href="#">Ver mas</a>
    </div>
  </div>
</section>
<section class="ofertas">
  <h1>REGALOS PERSONALIZADOS</h1>
  <div class="conteiner">
    <div class="cards">
      <img src="imagenes/oferta1.jpg" alt="">
      <div class="titulo-cards"></div>
      <p>Regalos personalizados</p>
      <a href="#">Comprar</a>
    </div>
    <div class="cards">
      <img src="imagenes/oferta2.jpg" alt="">
      <div class="titulo-cards"></div>
      <p>Regalos personalizados</p>
      <a href="#">Comprar</a>
    </div>
    <div class="cards">
      <img src="imagenes/oferta3.jpg" alt="">
      <div class="titulo-cards"></div>
      <p>Regalos personalizados</p>
      <a href="#">Comprar</a>
    </div>
  </div>
</section>
<div class="galeria">
  <h1>NUESTROS PRODUCTOS</h1>
  <div class="linea"></div>
  <div class="contenedor-imagenes">
    <div class="imagen">
      <img src="imagenes/imagen.banner1.png" alt="">
      <div class="overlay">
        <h2>Comprar</h2>
      </div>
    </div>
    <div class="imagen">
      <img src="imagenes/imagen.banner2.png" alt="">
      <div class="overlay">
        <h2>Comprar</h2>
      </div>
    </div>
    <div class="imagen">
      <img src="imagenes/imagen.banner3.png" alt="">
      <div class="overlay">
        <h2>Comprar</h2>
      </div>
    </div>
    <div class="imagen">
      <img src="imagenes/imagen.banner13.jpeg" alt="">
      <div class="overlay">
        <h2>Comprar</h2>
      </div>
    </div>
    <div class="imagen">
      <img src="imagenes/imagen.banner6.jpg" alt="">
      <div class="overlay">
        <h2>Comprar</h2>
      </div>
    </div>
    <div class="imagen">
      <img src="imagenes/imagen.banner7.jpg" alt="">
      <div class="overlay">
        <h2>Comprar</h2>
      </div>
    </div>
    <div class="imagen">
      <img src="imagenes/imagen.banner8.jpg" alt="">
      <div class="overlay">
        <h2>Comprar</h2>
      </div>
    </div>
    <div class="imagen">
      <img src="imagenes/imagen.banner10.jpeg" alt="">
      <div class="overlay">
        <h2>Comprar</h2>
      </div>
    </div>
    <div class="imagen">
      <img src="imagenes/imagen.banner12.jpg" alt="">
      <div class="overlay">
        <h2>Comprar</h2>
      </div>
    </div>
  </div>
</div>


<style>

 .hero {
      height: 100vh;
      width: 90%;
      margin: 30px auto;
      background-image: url(imagenes/hero_image.png.png);
      background-size: cover;
      background-repeat: no-repeat;
      max-width: 1200px;
      padding: 20px;
      box-sizing: border-box;
  }
  
  .conteiner{
    width: 100%;
    max-width: 1200px;
    height: 430px;
    display: flex;
    flex-wrap: wrap;
    justify-content: center;
    margin: auto;
  }

  .cards{
    width: 330px;
    height: 430px;
    border-radius: 8%;
    box-shadow: 0 2px 2px rgb(228, 23, 217);
    overflow: hidden;
    margin: 20px;
    text-align: center;
    transition: all 0.25s;
    background-color: rgb(243, 250, 248);
   filter:alpha(opacity=70);
    -moz-opacity:.70;opacity:.70;
  
  }
  .cards:hover {
    transform: translateY(-15px);
    box-shadow: 0 12px 16px rgba(0, 0, 0, 0.2);
    filter:alpha(opacity=100);
    -moz-opacity:1;opacity:1;
  }

  .cards img{
    width: 320px;
    height: 300px;
  }
  .titulo-cards{
    font-weight: 600;
    font-size: large;
  
  }
  .cards p{
    padding: 0 1rem;
    font-size: 16px;
    font-family: Cambria, Cochin, Georgia, Times, 'Times New Roman', serif;
  }

  .cards a{
    font-weight: 700;
    text-decoration: none;
    color: rgb(255, 255, 255);
    background-color: rgb(241, 112, 224);
    border-radius:0 0 15px 15px;
    padding: 10px;
    text-align: center;
    

  }

  .ofertas{
    color: black;
    align-items: center;
    align-content: center;
    text-align: center;

  }
  
  
  *{
    margin:0;
    padding: 0;
    box-sizing: border-box;
}

.galeria{
    font-family: 'open sans';
}

.galeria h1{
    text-align: center;
    margin:20px 0 15px 0;
    font-weight: 300;
}

.linea{
    border-top: 5px solid #0077C0;
    margin-bottom: 40px;
}

.contenedor-imagenes{
    display:flex;
    width: 85%;
    margin: auto;
    justify-content: space-around;
    flex-wrap: wrap;
    border-radius:3px;
}

.contenedor-imagenes .imagen{
    width: 32%;
    position: relative;
    height: 350px;
    margin-bottom:5px;
    box-shadow: 0px 0px 3px 0px rgb(240, 52, 208)
}
.imagen img{
    width: 100%;
    height:100%;
    object-fit: cover;
}

.overlay{
    position: absolute;
    bottom: 0;
    left: 0;
    background:rgba(0, 118, 192, 0.781) ;
    width: 100%;
    height: 0;
    overflow: hidden;
    transition: .5s ease;
}

.overlay h2{
    color: #fff;
    font-weight: 300;
    font-size:30px;
    position: absolute;
    top: 50%;
    left:50%;
    text-align: center;
    transform: translate(-50%, -50%);
}

.imagen:hover .overlay{
    height:100%;
    cursor: pointer;
}

@media screen and (max-width:1000px){
    .contenedor-imagenes{
        width: 95%;
    }
}

@media screen and (max-width:700px){
    .contenedor-imagenes{
        width: 90%;
    }
    .contenedor-imagenes .imagen{
        width: 48%;
    }
}

@media screen and (max-width:450px){
    h1{
        font-size:22px;
    }
    .contenedor-imagenes{
        width: 98%;
    }
    .contenedor-imagenes .imagen{
        width: 80%;
    }
}
<\style>