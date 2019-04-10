<!DOCTYPE html>
<html lang="en">
<title>I'm DHELIAN ASHWAN</title>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">

<style>
body,h1,h2,h3,h4,h5,h6 {font-family: "Lato", sans-serif;}
body, html {
  height: 100%;
  color: #777;
  line-height: 1.8;
}

/* Create a Parallax Effect */
.bgimg-1, .bgimg-2, .bgimg-3 {
  background-attachment: fixed;
  background-position: center;
  background-repeat: no-repeat;
  background-size: cover;
}


/* Third image (Contact) */
.bgimg-3 {
  background-image: url("/w3images/parallax3.jpg");
  min-height: 400px;
}

.w3-wide {letter-spacing: 10px;}
.w3-hover-opacity {cursor: pointer;}

/* Turn off parallax scrolling for tablets and phones */
@media only screen and (max-device-width: 1600px) {
  .bgimg-1, .bgimg-2, .bgimg-3 {
    background-attachment: scroll;
    min-height: 400px;
  }
}
</style>

<body>

<!-- Header -->
<header class="w3-display-container w3-content w3-center" style="max-width:1500px">
  <img class="w3-image" src="images/POTO.png" alt="Me" width="1500" height="600">
  <div class="w3-display-middle w3-padding-large w3-border w3-wide w3-text-light-grey w3-center">
    <h1 class="w3-hide-medium w3-hide-small w3-xxxlarge">DHELIAN</h1>
    <h5 class="w3-hide-large" style="white-space:nowrap">DHELIAN</h5>
    <h3 class="w3-hide-medium w3-hide-small">NATURAL EXPLORER</h3>
  </div>
  
  <!-- Navbar (placed at the bottom of the header image) -->
  <div class="w3-bar w3-light-grey w3-round w3-display-bottommiddle w3-hide-small" style="bottom:-16px">
    <a href="#" class="w3-bar-item w3-button">Home</a>
    <a href="#portfolio" class="w3-bar-item w3-button">Portfolio</a>
    <a href="#contact" class="w3-bar-item w3-button">Contact</a>
  </div>
</header>

<!-- Navbar on small screens -->
<div class="w3-center w3-light-grey w3-padding-16 w3-hide-large w3-hide-medium">
<div class="w3-bar w3-light-grey">
  <a href="#" class="w3-bar-item w3-button">Home</a>
  <a href="#portfolio" class="w3-bar-item w3-button">Portfolio</a>
  <a href="#contact" class="w3-bar-item w3-button">Contact</a>
</div>
</div>
<!-- Page content -->
<div class="w3-content w3-padding-large w3-margin-top" id="portfolio">

  <!-- Images (Portfolio) -->
  <img src="images/foto1.png" alt="Ocean" class="w3-image" width="1000" height="500">
  <img src="images/foto2.png" alt="Ocean II" class="w3-image w3-margin-top" width="1000" height="500">
  <img src="images/foto3.png" alt="Falls" class="w3-image w3-margin-top" width="1000" height="500">
  <img src="images/foto4.png" alt="Skies" class="w3-image w3-margin-top" width="1000" height="500">
  <img src="images/foto5.png" alt="Mountains" class="w3-image w3-margin-top" width="1000" height="500">

  <!-- Contact -->
  <div class="w3-light-grey w3-padding-large w3-padding-32 w3-margin-top" id="contact">
    <h3 class="w3-center">SELAMAT DATANG DI WEBSITE SAYA</h3>
    <hr>
    <p>Bonjour .. <br/>Nama Saya Dhelian Ashwan Mahasiswa STMIK AKAKOM YOGYAKARTA Tahun 2017 Jurusan Sistem Informasi. Tanggal Lahir saya 27 april 1998. Saya adalah anak ke 2 dari 2 bersaudara. Kakak saya memiliki gelar SH, dan saya sebentar lagi akan mendapatkan gelar S.Kom<br/>
  <p class="w3-LEFT"><b>MERCI</b></p>
    <form action="/action_page.php" target="_blank">
      <div class="w3-section">
        <label>Name</label>
        <input class="w3-input w3-border" type="text" required name="Name">
      </div>
      <div class="w3-section">
        <label>Email</label>
        <input class="w3-input w3-border" type="text" required name="Email">
      </div>
      <div class="w3-section">
        <label>Message</label>
        <input class="w3-input w3-border" required name="Message">
      </div>
      <button type="submit" class="w3-button w3-block w3-dark-grey">Send</button>
    </form><br>
	</div>
<span class="w3-xxlarge w3-text-white w3-wide">CONTACT</span>
  </div>
</div>

<!-- Container (Contact Section) -->
<div class="w3-content w3-container w3-padding-64" id="contact">
    <div class="w3-col m8 w3-panel">
      <div class="w3-large w3-margin-bottom">
	  <h3 class="w3-center">CONTACT ME</h3>
	  <p><b><i class="fa fa-user w3-margin-right"></i>Dhelian Ashwan</b></p><br>
        <i class="fa fa-map-marker fa-fw w3-hover-text-black w3-xlarge w3-margin-right"></i> YOGYAKARTA, INDONEISA<br>
        <i class="fa fa-phone fa-fw w3-hover-text-black w3-xlarge w3-margin-right"></i> Phone: 085701111111<br>
        <i class="fa fa-envelope fa-fw w3-hover-text-black w3-xlarge w3-margin-right"></i> Email: dhelianaan@gmail.com<br>
      </div>
</div>


</script>

</body>
</html>

    <p>Powered by <a href="https://www.w3schools.com/w3css/default.asp" target="_blank" class="w3-hover-text-green">DHELIAN</a></p>

  </div>

<!-- End page content -->
</div>

</body>
</html>
