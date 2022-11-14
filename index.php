<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Readssy</title>
    <link rel="stylesheet" href="styles.css" />
    <script
      src="https://kit.fontawesome.com/a7dbdcfa2b.js"
      crossorigin="anonymous"
    ></script>
  </head>
  <body>
    <!-- header section starts  -->

    <div class="one">
      <header class="header">
        <div class="header-1">
          <a href="#" class="logo"> <i class="fas fa-pen"></i> READSSY </a>

          <form action="" class="search-form">
            <input
              type="search"
              name=""
              placeholder="Search here..."
              id="search-box"
            />
            <label for="search-box" class="fas fa-search"></label>
          </form>

          <div class="icons">
            <div id="login-btn">
              <a href="login.php" class="fas fa-user"></a>
            </div>
            <div class="con-icon">
              <a
                href="contact.php"
                class="social__icon--link"
                target="_parent"
              >
                <i class="fa fa-phone"></i>
              </a>
            </div>
          </div>
        </div>
      </header>
      <!-- header section ends -->

      <!--Main Section-->
      <div class="main">
        <div class="main__container">
          <div class="main__content">
            <h1>For Quality Review</h1>
            <h2>To find your next Read</h2>
            <p>See what makes us different!</p>
            <a href="login.php"><button>Get Started</button> </a>
          </div>
          <div class="main__img--container">
            <img src="images/pic1.svg" alt="pic" id="main__img" />
          </div>
        </div>
      </div>

      <!--Footer section-->
      <div class="footer__container">
        <div class="footer__link">
          <div class="footer__link--wrapper">
            <div class="footer__link--items">
              <h2>About Us</h2>
              <a href="/">How it works</a>
              <a href="service.php">Terms of Services</a>
            </div>
          </div>
          <div class="footer__link--wrapper">
            <div class="footer__link--items">
              <h2>Social Medias</h2>
              <div class="FB">
                <a href="https://www.facebook.com" target="_blank">Facebook</a>
              </div>
              <div class="IG">
                <a href="https://www.instagram.com" target="_blank"
                  >Instagram</a
                >
              </div>
            </div>
          </div>
          <div class="social__media">
            <div class="social__media--wrap">
              <div class="social__icons">
                <a
                  href="https://www.facebook.com"
                  class="social__icon--link"
                  target="_blank"
                >
                  <i class="fa fa-facebook"></i
                ></a>
                <a
                  href="https://www.instagram.com"
                  class="social__icon--link"
                  target="_blank"
                >
                  <i class="fa fa-instagram" id="IG_icon"></i
                ></a>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </body>
</html>
