<!DOCTYPE html>
<html>
<head>
  <title>Membuat Halaman Web Dinamis Dengan PHP | X PPLG - SMKN 1 DEPOK</title>
  <!-- menghubungkan dengan file css -->
  <link rel="stylesheet" type="text/css" href="style2.css">
  <!-- menghubungkan dengan file jquery -->
  <script type="text/javascript" src="jquery.js"></script>
</head>
<body>

<div class="content">
  <header>
    <h1 class="judul">KOMUNITAS KUCING</h1>
    <h3 class="deskripsi">Love and care your pet</h3>
</header>
 
  <div class="menu">
    <ul>
      <li><a href="utama.php?page=home">HOME</a></li>
      <li><a href="utama.php?page=tentang">FORM PENDAFTARAN</a></li>
      <li><a href="utama.php?page=tutorial">GALLERY</a></li>
    </ul>
  </div>
 
  <div class="badan">
 
 
  <?php 
  if(isset($_GET['page'])){
      $page = $_GET['page'];

      switch($page) {
          case'home':
          include "Halaman/home.php";
          break;
      case 'tentang':
          include "halaman/form_pendaftaran.php";
          break;
      case 'tutorial':
          include "halaman/gallery.php";
          break;
      
  }
}else{
  include "halaman/home.php";
}
          
?>

</div>
</div>
</body>
</html>

