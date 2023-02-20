<!DOCTYPE html>
<html lang="en">
<head>
  <title>Portfolio</title>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial sle=1.0">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/normalize/7.0.0/normalize.min.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.11.2/css/all.css" integrity="sha256-46qynGAkLSFpVbEBog43gvNhfrOj+BmwXdxFgVK/Kvc=" crossorigin="anonymous" />  
  <!-- Update these with your own fonts -->
  <link href="https://fonts.googleapis.com/css?family=Source+Code+Pro:400,900|Source+Sans+Pro:300,900&display=swap" rel="stylesheet">

  <link rel="stylesheet" href="css/style1.css">
  <!-- <script src="script.js"></script> -->

</head>
<body bg-color="black">

<header>
      <div class="logo"> 
          <img src="img/devlogo.png" alt="Logo">
      </div>
      <button class="nav-toggle" aria-label="toggle navigation">
        <span class="hamburger"></span>
      </button>
      <nav class="nav">
        <ul class="nav__list">
          <li class="nav__item"><a href="#home" class="nav__link">Home</a></li>
         <li class="nav__item"><a href="#services" class="nav__link">My Services</a></li>
         <li class="nav__item"><a href="#about" class="nav__link">About</a></li>
         <li class="nav__item"><a href="#work" class="nav__link">My Work</a></li>
        </ul>
      </nav>
</header>
      <!-- Introduction -->
      <section class="intro" id="home">
          <h1 class="section__title section__title--intro">
            Hi, I am <strong>Joshua Saculo</strong>
          </h1>
          <p class="section__subtitle section__subtitle--intro">Fresh Graduate of <strong>BSIT</strong></p>
          <img src="img/Joshua.png" alt="Wearing a toga">
      </section>

      <!-- My Services -->
      <section class="my-services" id="services"> 
        <h2 class="section__title section__title--services">What I do</h2>
        <div class="services">
          <div class="service">
            <h3>Design + Development</h3>
            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. 
              In congue lacinia libero id venenatis. Duis suscipit feugiat luctus. 
              Quisque neque nisi, interdum ut elit vel, aliquet feugiat arcu. </p>
          </div> <!-- / service -->

          <div class="service">
            <h3>Documentations</h3>
            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. 
              In congue lacinia libero id venenatis. Duis suscipit feugiat luctus. 
              Quisque neque nisi, interdum ut elit vel, aliquet feugiat arcu.</p>
          </div> <!-- / service -->

          <div class="service">
            <h3>Teaching</h3>
            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. 
              In congue lacinia libero id venenatis. Duis suscipit feugiat luctus. 
              Quisque neque nisi, interdum ut elit vel, aliquet feugiat arcu.</p>
          </div> <!-- / service -->
        </div><!-- / services -->
        <a href="#work" class="btn">My Work</a>
      </section>

        <!-- About Me -->
        <section class="about-me" id="about">
          <h2 class="section__title section__title--about">Who I am
          </h2>
          <p class="section__subtitle section__subtitle--about"></p>
          <div class="about-me__body">
            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. 
              In congue lacinia libero id venenatis. Duis suscipit feugiat luctus. 
              Quisque neque nisi, interdum ut elit vel, aliquet feugiat arcu. 
              Proin porttitor neque vitae lectus tempus, in laoreet ipsum tincidunt. 
              Cras porta mi ligula, ut tincidunt nibh luctus non. In at venenatis odio.</p>
          </div>
          <img src="img/Joshua01.png" alt="Joshua wearing barong">
        </section>

        <!-- My Work -->

        <section class="my-work" id="work">
          <h2 class="section__title">My work</h2>
          <p clas="section__subtitle"></p>
          <div class="portfolio">
            <!-- Portfolio item 01 -->
            <a href="#" class="portfolio__item">
              <img src="img/Portfolio-01.jpg" alt="" class="portfolio__img">
            </a>
            <!-- Portfolio item 02 -->
            <a href="#" class="portfolio__item">
              <img src="img/Portfolio-02.jpg" alt="" class="portfolio__img">
            </a>
            <!-- Portfolio item 03 -->
            <a href="#" class="portfolio__item">
              <img src="img/Portfolio-03.jpg" alt="" class="portfolio__img">
            </a>
            <!-- Portfolio item 04 -->
            <a href="#" class="portfolio__item">
              <img src="img/Portfolio-04.jpg" alt="" class="portfolio__img">
            </a>
            <!-- Portfolio item 05 -->
            <a href="#" class="portfolio__item">
              <img src="img/Portfolio-05.jpg" alt="" class="portfolio__img">
            </a>
            <!-- Portfolio item 06 -->
            <a href="#" class="portfolio__item">
              <img src="img/Portfolio-06.jpg" alt="" class="portfolio__img">
            </a>
            <!-- Portfolio item 07 -->
            <a href="#" class="portfolio__item">
              <img src="img/Portfolio-07.jpg" alt="" class="portfolio__img">
            </a>
            <!-- Portfolio item 08 -->
            <a href="#" class="portfolio__item">
              <img src="img/Portfolio-08.jpg" alt="" class="portfolio__img">
            </a>
            <!-- Portfolio item 09 -->
            <a href="#" class="portfolio__item">
              <img src="img/Portfolio-09.jpg" alt="" class="portfolio__img">
            </a>
            <!-- Portfolio item 10 -->
            <a href="#" class="portfolio__item">
              <img src="img/Portfolio-10.jpg" alt="" class="portfolio__img">
            </a>
          </div>
        </section>
      
      <!-- Footer -->
      <footer>
        <!-- My Email Address -->
        <a href="mailto:saculojosh1600@gmail.com" class="footer__link">saculojosh1600@gmail.com</a>
        <ul class="social-list">
          <li class="social-list__item"><a class="social-list__link" href="#footer">a</a></li>
          <li class="social-list__item"><a class="social-list__link" href="#footer">b</a></li>
          <li class="social-list__item"><a class="social-list__link" href="#footer">c</a></li>
          <li class="social-list__item"><a class="social-list__link" href="#footer">d</a></li>
        </ul>
      </footer>


</body>
</html>