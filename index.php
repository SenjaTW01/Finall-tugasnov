<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Senjabaik</title>
  <style>
    /* Importing Google font - Fira Sans */
    @import url('https://fonts.googleapis.com/css2?family=Open+Sans:wght@300;400;500;600;700&display=swap');
    @import url('https://fonts.googleapis.com/css2?family=Open+Sans:ital,wght@1,600&family=Plus+Jakarta+Sans:wght@500;600&family=Poppins:ital,wght@0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,300;1,400;1,500;1,600;1,700;1,800;1,900&family=Ubuntu:ital,wght@0,400;0,500;0,700;1,500&display=swap');
@import url('https://fonts.googleapis.com/css2?family=Fira+Sans:wght@300;400;500;600;700&display=swap');
* {
  margin: 0;
  padding: 0;
  box-sizing: border-box;
  font-family: 'Fira Sans', sans-serif;
}

body {
  background: #1B1B1D;
}

header {
  position: fixed;
  left: 0;
  top: 0;
  width: 100%;
  z-index: 1;
  padding: 20px;
}

header .navbar {
  max-width: 1280px;
  margin: 0 auto;
  display: flex;
  align-items: center;
  justify-content: space-between;
}

.navbar .menu-links {
  display: flex;
  align-items: center;
  list-style: none;
  gap: 30px;
}

.navbar .menu-links li a {
  color: #fff;
  font-weight: 500;
  text-decoration: none;
  transition: 0.2s ease;
}

header .navbar a {
    font-family: 'Poppins';
    font-weight: 800;
    text-decoration-line: none;
    color: #ffffffff;
    font-size: 20px;
}

.navbar .menu-links .language-item a {
  display: flex;
  gap: 8px;
  align-items: center;
}

.navbar .menu-links .language-item span {
  font-size: 1.3rem;
}

.navbar .menu-links li a:hover {
  color: #1dbf73;
}

.navbar .menu-links .join-btn a {
  border: 1px solid #fff;
  padding: 8px 15px;
  border-radius: 4px;
}

.navbar .menu-links .join-btn a:hover {
  color: #fff;
  border-color: transparent;
  background: #1dbf73;
}

.hero-section {
  height: 100vh;
  background-image: url("images/hero-img.jpg");
  background-position: center;
  background-size: cover;
  position: relative;
  display: flex;
  padding: 0 20px;
  align-items: center;
}

.hero-section .content {
  max-width: 1280px;
  margin: 0 auto 40px;
  width: 100%;
}

.hero-section .content h1 {
  color: #fff;
  font-size: 3rem;
  max-width: 630px;
  line-height: 65px;
}

.hero-section .search-form {
  height: 48px;
  display: flex;
  max-width: 630px;
  margin-top: 30px;
}

.hero-section .search-form input {
  height: 100%;
  width: 100%;
  border: none;
  outline: none;
  padding: 0 15px;
  font-size: 1rem;
  border-radius: 4px 0 0 4px;
}

.hero-section .search-form button {
  height: 100%;
  width: 60px;
  border: none;
  outline: none;
  cursor: pointer;
  background: #1dbf73;
  color: #fff;
  border-radius: 0 4px 4px 0;
  transition: background 0.2s ease;
}

.hero-section .search-form button:hover {
  background: #19a463;
}

.hero-section .popular-tags {
  display: flex;
  color: #fff;
  gap: 25px;
  font-size: 0.875rem;
  font-weight: 500;
  margin-top: 25px;
}

.hero-section .popular-tags .tags {
  display: flex;
  gap: 15px;
  align-items: center;
  list-style: none;
}

.hero-section .tags li a {
  text-decoration: none;
  color: #fff;
  border: 1px solid #fff;
  padding: 4px 12px;
  border-radius: 50px;
  transition: 0.2s ease;
}

.hero-section .tags li a:hover {
  color: #000;
  background: #fff;
}

.navbar #hamburger-btn {
  color: #fff;
  cursor: pointer;
  display: none;
  font-size: 1.7rem;
}

.navbar #close-menu-btn {
  position: absolute;
  display: none;
  color: #000;
  top: 20px;
  right: 20px;
  cursor: pointer;
  font-size: 1.7rem;
}

@media screen and (max-width: 900px) {
  header.show-mobile-menu::before {
    content: "";
    height: 100%;
    width: 100%;
    position: fixed;
    left: 0;
    top: 0;
    backdrop-filter: blur(5px);
  }

  .navbar .menu-links {
    height: 100vh;
    max-width: 300px;
    width: 100%;
    background: #fff;
    position: fixed;
    left: -300px;
    top: 0;
    display: block;
    padding: 75px 40px 0;
    transition: left 0.2s ease;
  }

  header.show-mobile-menu .navbar .menu-links {
    left: 0;
  }

  .navbar .menu-links li {
    margin-bottom: 30px;
  }

  .navbar .menu-links li a {
    color: #000;
    font-size: 1.1rem;
  }

  .navbar .menu-links .join-btn a {
    padding: 0;
  }

  .navbar .menu-links .join-btn a:hover {
    color: #1dbf73;
    background: none;
  }

  .navbar :is(#close-menu-btn, #hamburger-btn) {
    display: block;
  }

  .hero-section {
    background: none;
  }

  .hero-section .content {
    margin: 0 auto 80px;
  }

  .hero-section .content :is(h1, .search-form) {
    max-width: 100%;
  }

  .hero-section .content h1 {
    text-align: center;
    font-size: 2.5rem;
    line-height: 55px;
  }

  .hero-section .search-form {
    display: block;
    margin-top: 20px;
  }

  .hero-section .search-form input {
    border-radius: 4px;
  }
  
  .hero-section .search-form button {
    margin-top: 10px;
    border-radius: 4px;
    width: 100%;
  }

  .hero-section .popular-tags {
    display: none;
  }
}

h2 {
    color: fff;
}

* {
  margin: 0;
  padding: 0;
  box-sizing: border-box;
  font-family: 'Open Sans', sans-serif;
}
.footer {
  position: absolute;
  top: 150%;
  left: 50%;
  transform: translate(-50%, -50%);
  max-width: 250vh;
  width: 100%;
  background: #10182F;
  border-radius: 6px;
}
.footer .footer-row {
  display: flex;
  flex-wrap: wrap;
  justify-content: space-between;
  gap: 3.5rem;
  padding: 60px;
}
.footer-row .footer-col h4 {
  color: #fff;
  font-size: 1.2rem;
  font-weight: 400;
}
.footer-col .links {
  margin-top: 20px;
}
.footer-col .links li {
  list-style: none;
  margin-bottom: 10px;
}
.footer-col .links li a {
  text-decoration: none;
  color: #bfbfbf;
}
.footer-col .links li a:hover {
  color: #fff;
}
.footer-col p {
  margin: 20px 0;
  color: #bfbfbf;
  max-width: 300px;
}
.footer-col form {
  display: flex;
  gap: 5px;
}
.footer-col input {
  height: 40px;
  border-radius: 6px;
  background: none;
  width: 100%;
  outline: none;
  border: 1px solid #7489C6 ;
  caret-color: #fff;
  color: #fff;
  padding-left: 10px;
}
.footer-col input::placeholder {
  color: #ccc;
}
 .footer-col form button {
  background: #fff;
  outline: none;
  border: none;
  padding: 10px 15px;
  border-radius: 6px;
  cursor: pointer;
  font-weight: 500;
  transition: 0.2s ease;
}
.footer-col form button:hover {
  background: #cecccc;
}
.footer-col .icons {
  display: flex;
  margin-top: 30px;
  gap: 30px;
  cursor: pointer;
}
.footer-col .icons i {
  color: #afb6c7;
}
.footer-col .icons i:hover  {
  color: #fff;
}
@media (max-width: 768px) {
  .footer {
    position: relative;
    bottom: 0;
    left: 0;
    transform: none;
    width: 100%;
    border-radius: 0;
  }
  .footer .footer-row {
    padding: 20px;
    gap: 1rem;
  }
  .footer-col form {
    display: block;
  }
  .footer-col form :where(input, button) {
    width: 100%;
  }
  .footer-col form button {
    margin: 10px 0 0 0;
  }
}

  </style>
  <!-- Google Icons Link -->
  <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@48,400,0,0">
</head>
<body>
  <header>
    <nav class="navbar">
        <a href="#">SenjaBlack</a>
      <ul class="menu-links">
        <li><a href="#">Home</a></li>
        <li><a href="http://localhost/project/final/login/login.php">Member</a></li>
        <li><a href="https://portofolio-sendi.vercel.app/">About Me</a></li>
        <li><a href="http://localhost/project/final/card/card.php">Card</a></li>
        <!-- <li><a href="login.php">Sign In</a></li>
        <li class="join-btn"><a href="#">Sign Up</a></li> -->
        <span id="close-menu-btn" class="material-symbols-outlined">close</span>
      </ul>
      <span id="hamburger-btn" class="material-symbols-outlined">menu</span>
    </nav>
  </header>

  <section class="hero-section">
    <div class="content">
      <h1>Hi... Buku apa yang sedang anda cari???</h1>
      <form action="#" class="search-form">
        <input type="text" placeholder="ketikan judul buku yang ada cari..." required>
        <button class="material-symbols-outlined" type="sumbit">search</button>
      </form>
      <div class="popular-tags">
        Popular:
        <ul class="tags">
          <li><a href="#">Drama</a></li>
          <li><a href="#">Romantis</a></li>
          <li><a href="#">Fantasi</a></li>
          <li><a href="#">Horor</a></li>
        </ul>
      </div>
    </div>
  </section>
  <section class="footer">
      <div class="footer-row">
        <div class="footer-col">
          <h4>Info</h4>
          <ul class="links">
            <li><a href="http://localhost:3000/">About me</a></li>
            <li><a href="#">Home</a></li>
            <li><a href="login.php">Member</a></li>
            <li><a href="card.php">Card</a></li>
          </ul>
        </div>
        <div class="footer-col">
        <h4>Info</h4>
          <ul class="links">
            <li><a href="http://localhost:3000/">About me</a></li>
            <li><a href="#">Home</a></li>
            <li><a href="login.php">Member</a></li>
            <li><a href="card.php">Card</a></li>
          </ul>
        </div>
        <div class="footer-col">
          <h4>Info</h4>
          <ul class="links">
            <li><a href="http://localhost:3000/">About me</a></li>
            <li><a href="#">Home</a></li>
            <li><a href="login.php">Member</a></li>
            <li><a href="card.php">Card</a></li>
          </ul>
        </div>
        <div class="footer-col">
          <h4>Mari SUBSCRIBE website saya</h4>
          <p>
            ga tau, isi aja dari pada gabut, terserah kalian mau isi apa,lagian saya juga ga akan membacanya.
          </p>
          <form action="#">
            <input type="text" placeholder="Email kamu" required>
            <button type="submit">SUBSCRIBE</button>
          </form>
          <div class="icons">
            <i class="fa-brands fa-facebook-f"></i> 
            <i class="fa-brands fa-twitter"></i>
            <i class="fa-brands fa-linkedin"></i>
            <i class="fa-brands fa-github"></i>
          </div>
        </div>
      </div>
    </section>
  
  <script>
    const header = document.querySelector("header");
    const hamburgerBtn = document.querySelector("#hamburger-btn");
    const closeMenuBtn = document.querySelector("#close-menu-btn");

    // Toggle mobile menu on hamburger button click
    hamburgerBtn.addEventListener("click", () => header.classList.toggle("show-mobile-menu"));

    // Close mobile menu on close button click
    closeMenuBtn.addEventListener("click", () => hamburgerBtn.click());
  </script>
</body>
</html>