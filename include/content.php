<div class="container">
<div class="left" >
<span  href="#home"><img src="../img/img_avatar.png" alt="Avatar" class="avatar"> Rodrigo Faustino</span>
  <a id="esconder" href="index">Home</a>
  <a id="esconder" href="sobre">Sobre mim</a>
  <a id="esconder" href="contato">Contato</a>
</div>
<div id="myNav" class="overlay">
  <a href="#" class="closebtn" onclick="closeNav()">&times;</a>
  <div class="overlay-content">
    <a href="index">Home</a>
    <a href="sobre">Sobre mim</a>
    <a href="contato">Contato</a>
    
  </div>
</div>
 <div id="myOverlay" class="searc">
  <span class="searcbtn" onclick="closeSearch()" title="Close Overlay">×</span>
  <div class="searc-content">
    <form action="procurar.php">
      <input type="text" placeholder="Procurar.." name="search" required>
      <button type="submit"><i class="fa fa-search"></i></button>
    </form>
  </div>
</div>
<div class="right">

<span id="menu"  onclick="openNav()">&#9776</span>
  <a href="index" class="home"><i class="fa fa-fw fa-home"></i> </a>
  <a id="search" href="procurar"  onclick="openSearch()"><i class="fa fa-fw fa-search"></i> </a>
  <a  class="acender"><i onclick="acender(this)" class="fa fa-sun-o" ></i></a>
  <a  href="#" class="seta"><i class="fa fa-fw fa-arrow-up"></i> </a>
</div>