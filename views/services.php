<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="stylesheet" href="../css/services.css" />
    <link
      href="https://cdn.jsdelivr.net/npm/boxicons@2.0.5/css/boxicons.min.css"
      rel="stylesheet"
    />

    <title>TAYAM_CERTIFICO PORTFOLIO</title>
  </head>
  <body>
    <!-- HEADER -->
    <header class="l-header">
      <nav class="nav bd-grid">
        <div>
          <a href="#" class="nav__logo">Portfolio</a>
        </div>

        <div class="nav__menu" id="nav-menu">
          <ul class="nav__list">
            <li class="nav__item">
              <a href="index.html" class="nav__link active">Home</a>
            </li>
            <li class="nav__item">
              <a href="about.html" class="nav__link">About</a>
            </li>
            <li class="nav__item">
              <a href="services.html" class="nav__link">Services</a>
            </li>
            <li class="nav__item">
              <a href="works.html" class="nav__link">Work</a>
            </li>
            <li class="nav__item">
              <a href="contact.html" class="nav__link">Contact</a>
            </li>
          </ul>
        </div>

        <div class="nav__toggle" id="nav-toggle">
          <i class="bx bx-menu"></i>
        </div>
      </nav>
    </header>

     <div id="card">
        <h1>Services</h1>
        <div class="image-crop">
            <img id="avatar" src="../img/diogenespic.png" alt="Diogenes Tayam"></img>
        </div>
        <div id="bio">
            <div id="texts">
            <p class="text"> Photography<br>
                I am sufficient in photography. I capture stunning portraits and also loves to captures the beauty of the nature.<br><br>
                <p class="text"> Layouting<br>
                    I am knowledgeable in layouting. I create your imagination into reality.<br><br>
                    <p class="text"> Photo & Video Editing<br> 
                        Photo & video editing is my passion. I make photos and videos more stunning to the eyes and creative.<br><br>
                        <p class="text"> Front-end Web Development<br>
                            I am also sufficient in front-end web development.<br><br>
                        </p>
                    </p>
                </p>
              </p>
            </p>
            <div id="buttons">
                <button onclick="location.href = 'works.html';" class="button1">My works</button>
            </div>
        </div>
        </div>
    </div>
            <div id="card2">
                <h2>Services</h2>
                <div class="image-crop2">
                    <img id="avatar" src="../img/jeddypic.png" alt="Jeddy Certifico"></img>
                </div>
                <div id="bio">
                    <p class="text2">Web Development<br>
                        I am a sufficient in various programming languages such as JavaScript, PHP, HTML, CSS, and also I am knowledgable in C, Python, and Java prhramming languages.<br><br>
                    </p>
                    <div id="buttons">
                        <button onclick="location.href = 'works.html';" class="button2">My works</button>
                    </div>
                    </div>
                </div>     
            </div>
    </main>

    <footer class="footer">
      <p class="footer__title">Tayam_Certifico</p>
      <div class="footer__social">
        <a href="#" class="footer__icon"><i class="bx bxl-facebook"></i></a>
        <a href="#" class="footer__icon"><i class="bx bxl-instagram"></i></a>
        <a href="#" class="footer__icon"><i class="bx bxl-twitter"></i></a>
      </div>
      <p>&#169; 2023 copyright all right reserved</p>
    </footer>
  </body>
</html>