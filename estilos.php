<style>
    body {
    background: #000;
    color: #fff;
    margin-left: 0.5%;
    margin-right: 0.5%;
        text-align: center;
}
.bg-hea-tr{
  background-color: rgb(42, 42, 42);
}
.container-pc{
  max-width: 100%;
  margin: 5px;
}
.margin-7px{
  margin: 7px;
}

.b-r-box-sh{
  border-radius: 8px;
  box-shadow: 0 0 10px rgba(255, 6, 6, 0.6);
}

a{
    text-decoration: none;
}

#buscado {
    background-color: #fff;
    width: 450px;
    border: transparent;
    border-bottom: solid 1px #fff;
    border-radius: 10px;
    padding: 6px 10px 6px 30px;
    outline: none;
  }
.btn-search{
    padding: 8px 10px 10px 8px;
    border-radius: 8px;
    
}
.centered-element {
    flex-grow: 1;
    text-align: center;
}

.btn-login {
    color: rgb(70, 70, 70);
    box-shadow: 0 0 10px rgba(255, 6, 6, 0.6);
    background-color: rgb(255, 255, 255);
    border: 1px solid rgb(105, 105, 105);
    padding: 10px;
    border-radius: 10px;
    text-decoration: none;
  }
  .btn-login:hover {
    color: rgb(0, 0, 0);
    box-shadow: 0 0 20px rgba(255, 6, 6, 0.6);
    background-color: rgb(255, 255, 255);
  }
  .div-btn{
    width: 100%;
    display: flex;
    justify-content: center;
    align-items: center;
    margin-top: 3%;
    padding: 8px;
    border: 1px solid rgb(70, 70, 70);
    border-radius: 10px;
   
    background-color: #0a0a0a;
  }
  .nav-btn:hover{
    color: darkred;
  }
  .btn-principal{
    color: darkred;
  }

@media screen and (max-width: 1010px) {
  .header {
      flex-direction: column;
      text-align: center; 
  }
  .header-img {
      width: 15%; 
      margin-bottom: 10px; 
  }
  .btn-login, .nav-btn4, .nav-btn5, .nav-btn7, .nav-btn8 {
    display: none;
  }

  .nav-header {
      flex-direction: column; /* Apila los elementos del menú verticalmente */
  }

  .nav-btn {
      padding: 10px;
      margin-bottom: 5px; /* Agrega espacio entre los elementos del menú */
  }
  h1{
    color: #fff;
    font-size: 50px;
    margin-top: 10px;
  }
}

  .seccion-1{
    display: flex;
    justify-content: space-between;
    margin-top: 10px;
  }
  .slider-s1{
    display: block;

  }
  .pl-suntek{
    text-align: center;
    width: 20%;
    
  }
  .pl-img1{
    width: 400px;
    border: 1px solid white;
    border-radius: 5px;
  }
  .showcase{
    display: flex;
    justify-content: center;
    width: 100%;
  }
  .img-showcase{

    margin-top: 10px;
    width: 1260px;
    max-height: 400px;
    border: 1px solid white;
    border-radius: 5px;
  }

  .centered{
    display: block;
    justify-content: center;
    align-content: center;
    text-align: center;
  }
  .shcase{
    height: 400px;
  }
  .shcase2{
    height: 400px;
  }
  .contenedor {
    display: flex;
    justify-content: center;
    align-items: center;
    align-content: center;
    flex-wrap: wrap;
    margin: auto;
  }
  .container-fluid{
    max-width: 1300px;
  }
  .producto-div {
    text-align: center;
    border: 2px solid wheat;
    border-radius: 12px;
    max-width: 18%;
    min-height: 400px;
    padding: 4px;
    margin: 5px;
    cursor: pointer;
    transition: transform 0.2s ease;
    background-image: url("img/fondo.png");
    background-position: center center;
    display: flex; /* Agregamos display flex */
    flex-direction: column; /* Apilamos los elementos verticalmente */
    align-items: center; /* Centramos horizontalmente los elementos */
  }
  
  .producto-div:hover {
    transform: scale(1.05);
  }
  
  .producto-imagen {
    border: 2px solid wheat;
    border-radius: 10px;
    
    min-width: 100%;
    max-height: auto;
    max-width: 100%;
    transition: transform 0.2s ease;
  }
  
  .producto-div:hover .producto-imagen {
    transform: scale(1.05);
  }
  
  .producto-text {
    text-align: center;
    display: flex; 
    flex-direction: column; 
    align-items: center;
    flex-grow: 1;
    justify-content: center;
  }
  
  .producto-descripcion {
    color: #fff;
    margin-top: auto;

  }
  .producto-precio {
    color: grey;
    margin-top: auto;
  }
  .btn-primary {
    margin-top: auto; 
  }


.btn {
  display: inline-block;
  padding: 10px 20px;
  background-color: rgb(131, 27, 27); 
  color: #fff;
  text-decoration: none;
  font-weight: bold;
  margin-right: 10px;
  border-radius: 5px;
}

.cardbg{
  background-image: url("img/fondo.png");
  background-position: center center;
  box-shadow: 0 0 15px rgba(255, 6, 6, 0.6);
  text-align: center;
}


.detalle-descripcion{
  display: flex;
  flex-wrap: wrap;
}

pre {
  white-space: pre-wrap;
  word-wrap: break-word;
  text-align: justify;
}

</style>
<style>
      .btn{
    background-color: black;
    border:2px solid white;
    color:white;
  }
  .header{
    background-color: #0a0a0a;
  }
  .nav-btn{
    padding: 10px;
    padding-left: 35px;
    padding-right: 35px;
    color: #ffffff;
    font-family:  Georgia, Times, 'Times New Roman', serif;
    text-decoration: none;
    font-weight: bold;
  }

  .btn:hover{
    background-color: grey;
    border:white;
  }
  .border-radius-2{
    border: 2px solid black;
    border-radius: 10px;
  }
  .bg-img-tr{
    background-color: rgba(19, 19, 19, 0.4) ;
  }
  .bg-hea-tr{
    background-color: rgba(0,0,0);
  }
  .bg-hea-tr:hover{
    background-color: rgba(100, 100, 100, 1);
  }
  @media (min-width: 772px) { 
            .pc-none{
              display:none;
            }
.categoria{
  width: 25%;
  border:2px solid white;
  display:flex; ;
  height: 60%;
}
            .categoria > img {
  height: 80px;
}
  .header-img {
      width: 15%;
      margin-bottom: 10px; 
  }
}
@media (max-width: 772px) { 
            .cel-none{
              display:none;
            }
 
  #buscado {
    background-color: #fff;
    width: 70%;
    border: transparent;
    border-bottom: solid 1px #fff;
    border-radius: 10px;
    padding: 7px 10px 7px 10px;
    outline: none;
    margin-top: 7%;
  }
.btn-search{
  width: 20%;
    padding: 7px 7px 7px 7px;
    border-radius: 8px;
    box-shadow: 0 0 10px rgba(255, 6, 6, 0.6);
}
.categoria{

  width:49%;
  border:1px solid white;
  display:flex; ;
  height: 50%;
  margin: auto;
  margin-top: 4px;
}
.categoria > img {
  height: 58px;
}
}
  .contenedorr {
    display: flex;
    justify-content: center;
    flex-wrap: wrap;
    width: 100%;
  }
      </style>
