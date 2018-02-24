<html>
<head><title>Selamat datang di Pemilihan Ketua Kelas</title>
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<style>

body {
	background-image: url("background.jpg");
}

.b {
	width: 500px;
	height: 500px;
	position: absolute;
	right: 31%;
	top: 10%;
}

.logo {
	width: 200px;
	height: 100px;
	position: absolute;
	left: 2%;
	-webkit-transition: width 1s, height 1s; /* For Safari 3.1 to 6.0 */
    transition: width 1s, height 1s;
}

.logo:hover {
	width: 300px;
	height: 200px;
}

.masuk {
	color: white;
	cursor: pointer;
	background-color: #4caf50;
	width: 8%;
	height: 5%;
	border: none;
	border-radius: 4px;
	font-size: 16px;
	font-family: georgia;
	text-align: center;
	text-decoration: none;
	position: absolute;
	top: 3%;
	left: 85%;
}

.masuk:hover {
	background-color: #555;
	color: white;
}

.daftar {
	background-color: transparent;
	color: white;
	cursor: pointer;
	width: 15%;
	height: 5%;
	border: 2px solid #e7e7e7;
	border-radius: 4px;
	font-size: 16px;
	font-family: georgia;
	text-align: center;
	position: absolute;
	top: 3%;
	left: 67%;
}

.daftar:hover {
	background-color: white;
	color: black;
}

li {
	display: inline;
}

h1 {
	font-size: 34px;
	font-family: georgia;
	color: white;
}

.p {
	font-size: 24px;
	font-family: georgia;
	color: white; 
}

hr {
	width: 35%
}

/* The Modal (background) */
.modal {
    display: none; /* Hidden by default */
    position: fixed; /* Stay in place */
    z-index: 1; /* Sit on top */
    padding-top: 100px; /* Location of the box */
    left: 0;
    top: 0;
    width: 100%; /* Full width */
    height: 100%; /* Full height */
    overflow: auto; /* Enable scroll if needed */
    background-color: rgb(0,0,0); /* Fallback color */
    background-color: rgba(0,0,0,0.4); /* Black w/ opacity */
}

/* Modal Content */
.modal-content {
    background-color: lightblue;
    margin: auto;
    padding: 20px;
    border: none;
    width: 50%;
}

.modal-header {
	text-align: center;
	font-size: 24px; 
	font-family: georgia;
}

input[type=text], select {
  width: 60%;
  padding:12px 20px;
  margin: 8px 0;
  display: inline-block;
  border: 1px solid #ccc;
  border-radius: 4px;
  box-sizing: border-box;
}

input[type=password], select {
  width: 60%;
  padding:12px 20px;
  margin: 0 0;
  display: inline-block;
  border: 1px solid #ccc;
  border-radius: 4px;
  box-sizing: border-box;
}

input[type=submit] {
	background-color: #4CAF50;
	border: none;
	color: white;
	padding: 8px 32px;
	text-align: center;
	text-decoration: none;
	font-size: 18px;
	font-family: georgia;
	cursor: pointer;
	width: 100%;
	border-radius: 4px;
}

/* The Close Button */
.close {
    color: #aaaaaa;
    float: right;
    font-size: 28px;
    font-weight: bold;
}

.close:hover,
.close:focus {
    color: #000;
    text-decoration: none;
    cursor: pointer;
}

</style>
</head>

<body>

<img src="../img/formcopy.png" class="b">
<img src="../img/logo.png" class="logo">

<button id="daftar" class="daftar">Daftar</button>
<button id="masuk" class="masuk">Masuk</button>
<!-- The Modal -->
<div id="modal-masuk" class="modal">

  <!-- Modal content -->
  <div class="modal-content">
    <div class="modal-header">
    <span class="close">&times;</span>
    <p>Masuk dengan Akun</p>
	</div>
	<div class="modal-body">
	<form method="POST" action="connectivity.php">
    <input type="text" autocomplete="off" name="nis" value="" placeholder="NIS"></p>
    <input type="password" name="password" value="" placeholder="Password"></p>
    <input type="submit" name="submit" value="Masuk"></p>
	</div>
  </div>
</div>
</form>

<div id="modal-daftar" class="modal">

  <!-- Modal content -->
  <div class="modal-content">
    <div class="modal-header">
    <span class="close">&times;</span>
    <p>Daftar sekarang!</p>
	</div>
	<div class="modal-body">
	<form method="POST" action="connectivity.php">
    <input type="text" autocomplete="off" name="nis" value="" placeholder="Masukkan NIS"></p>
    <input type="text" autocomplete="off" name="kelas" value="" placeholder="Masukkan Kelas"></p>
    <input type="password" name="password" value="" placeholder="Masukkan Password"></p>
    <input type="submit" name="submit" value="Daftar"></p>
	</div>
  </div>
</div>
</form>

<br><br><br><br><br><br><br><br><br><br>

<h1 align="center">Selamat datang di Pemilihan Ketua Kelas</h1><hr>
<p align="center" class="p">Cara paling nyaman dan termudah untuk<br>melaksanakan pemilihan ketua kelas secara online<br>tanpa menghabiskan banyak waktu dan biaya.</p>

<script>
// Get the modal
var modal = document.getElementById('modal-masuk');
var modalDaftar = document.getElementById('modal-daftar');

// Get the button that opens the modal
var btn = document.getElementById("masuk");
var btnDaftar = document.getElementById("daftar");

// Get the <span> element that closes the modal
var span = document.getElementsByClassName("close")[0];
var spanDaftar = document.getElementsByClassName("close")[1];

// When the user clicks the button, open the modal 
btn.onclick = function() {
    modal.style.display = "block";
}
btnDaftar.onclick = function(){
	modalDaftar.style.display = "block";
}

// When the user clicks on <span> (x), close the modal
span.onclick = function() {
    modal.style.display = "none";  
}
spanDaftar.onclick = function() {
	    modalDaftar.style.display = "none";
}

// When the user clicks anywhere outside of the modal, close it
window.onclick = function(event) {
    if (event.target == modal) {
        modal.style.display = "none";
    } else if (event.target == modalDaftar) {
    	modal.style.display = "none";
    }
}
</script>

</body>
</html>