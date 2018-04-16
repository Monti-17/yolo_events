<!doctype html>

<html>
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <meta name="description" content="YOLO events">
  <meta name="author" content="monti|kreativ">

  <title>YOLO events</title>
  <link href="<?php echo get_bloginfo('template_directory'); ?>/style.css" rel="stylesheet">
  <link rel="stylesheet" type="text/css" href="<?php echo get_bloginfo('template_directory'); ?>/css/animate.min.css"/>
  <script src="<?php echo get_bloginfo('template_directory'); ?>/js/jquery-2.1.0.min.js"></script>
  <script src="<?php echo get_template_directory_uri() . '/js/main.js'?>"></script>
  <script src="<?php echo get_template_directory_uri() . '/js/scroll.js'?>"></script>
  <script src="<?php echo get_template_directory_uri() . '/js/parallax.js'?>"></script>
</head>

<body>
  <div id="wrapper">
    <nav id="navbar">
      <ul id="menu">
        <li>
          <span class="menuitems"><a href="home">home</a></span>
        </li>
        <li>
          <span class="menuitems"><a href="about">about</a></span>
        </li>
        <li>
          <span class="menuitems"><a href="products">products</a></span>
        </li>
        <li>
          <span class="menuitems"><a href="testimonials">testimonials</a></span>
        </li>
        <li>
          <span class="menuitems"><a href="contact_us">contact us</a></span>
        </li>
      </ul>
    </nav>
    <article>
      <div id="callToAction">
        <!--##anchor tags not working##--> <a href="/book_now">book now</a>
      </div>
    </article>
    <section id="home" data-type="background" data-speed="10">
    </section>
    <div>
      <img id="homeLogo" src="<?php echo get_bloginfo('template_directory'); ?>/Assets/logo.svg" alt="">
      <article id="homeContent">scroll down<br>
        <p class="animated infinite bounce" id="arrow">&#711;
      </article>
    </div>
    <section id="about" data-type="background" data-speed="5">
        <div id="aboutUsShape">
          <img class="shape" src="<?php echo get_bloginfo('template_directory'); ?>/Assets/yellow.svg" alt="yellow">
          <div class="typeface" id="aboutUs">
            a bit about us
          </div>
        </div>
        <div class="placeholder" id="lachie"> <p>lachie wood</p> </div>
        <div class="placeholder" id="steve"> <p>steve lawrence</p> </div>
        <div>
          <article>
            Lorem ipsum dolor sit amet, consectetur adipiscing
            elit, sed do eiusmod tempor incididunt ut labore et dolore
            magna aliqua. Ut enim ad minim veniam, quis nostrud
            exercitation ullamco laboris nisi ut aliquip ex ea commodo
            consequat.
            <img class="shape" id="aboutShape" src="<?php echo get_bloginfo('template_directory'); ?>/Assets/orange.svg" alt="blue">

          </article>
        </div>
    </section>
    <section class="typeface" id="products" data-type="background" data-speed="10">
      <article>
      <div>
        <img class="shape" id="productsTitle" src="<?php echo get_bloginfo('template_directory'); ?>/Assets/green.svg" alt="yellow">
        <div class="typeface" id="productsTitle">
          <p>our</p>
          <h1>products</h1>
          <p>and</p>
          <h1>services</h1>
        </div>
          <h3 class="typeface">
            A jumping castle is the perfect way to entertain at any
            event! YOLO Events has a wide range of styles and themes
            for you to choose from to make your next event stand out
            from the rest! All our Jumping Castles come included with
            a trained operator so we’ll look after it all for you!
          </h3>
      </div>
        <article id="activities" class="typeface">
          <div id="activitiesTitle">
            <h1>activities</h1>
            <p>
              Lorem ipsum dolor sit amet, consectetur adipiscing
              elit, sed do eiusmod tempor incididunt ut labore et dolore
              magna aliqua. Ut enim ad minim veniam, quis nostrud
              exercitation ullamco laboris nisi ut aliquip ex ea commodo
              consequat.
            </p>
            <img class="shape" id="activitiesShape" src="<?php echo get_bloginfo('template_directory'); ?>/Assets/pink.svg" alt="pink">

          </div>
          <div id="activitiesGrid">
            <ul>
              <li>
                <span>
                  <img class="products" src="<?php echo get_bloginfo('template_directory'); ?>/Assets/dolphin.jpg" alt="blue">
                </span>
                <span class="caption"><p>placeholder</p></span>
              </li>
              <li>
                <span>
                  <img class="products" src="<?php echo get_bloginfo('template_directory'); ?>/Assets/dolphin.jpg" alt="blue">
                </span>
                <span class="caption"><p>placeholder</p></span>
              </li>
              <li>
                <span>
                  <img class="products" src="<?php echo get_bloginfo('template_directory'); ?>/Assets/dolphin.jpg" alt="blue">
                </span>
                <span class="caption"><p>placeholder</p></span>
              </li>

              <li>
                <span>
                  <img class="products" src="<?php echo get_bloginfo('template_directory'); ?>/Assets/dolphin.jpg" alt="blue">
                </span>
                <span class="caption"><p>placeholder</p></span>
              </li>
              <li>
                <span>
                  <img class="products" src="<?php echo get_bloginfo('template_directory'); ?>/Assets/dolphin.jpg" alt="blue">
                </span>
                <span class="caption"><p>placeholder</p></span>
              </li>
              <li>
                <span>
                  <img class="products" src="<?php echo get_bloginfo('template_directory'); ?>/Assets/dolphin.jpg" alt="blue">
                </span>
                <span class="caption"><p>placeholder</p></span>
              </li>
              <li>
                <span>
                  <img class="products" src="<?php echo get_bloginfo('template_directory'); ?>/Assets/dolphin.jpg" alt="blue">
                </span>
                <span class="caption"><p>placeholder</p></span>
              </li>
              <li>
                <span>
                  <img class="products" src="<?php echo get_bloginfo('template_directory'); ?>/Assets/dolphin.jpg" alt="blue">
                </span>
                <span class="caption"><p>placeholder</p></span>
              </li>
            </ul>
          </div>
        </article>
        <article id="slides" class="typeface">
          <div id="slidesTitle">
            <h1>slides</h1>
            <p>
              Lorem ipsum dolor sit amet, consectetur adipiscing
              elit, sed do eiusmod tempor incididunt ut labore et dolore
              magna aliqua. Ut enim ad minim veniam, quis nostrud
              exercitation ullamco laboris nisi ut aliquip ex ea commodo
              consequat.
            </p>
            <img class="shape" id="slidesShape" src="<?php echo get_bloginfo('template_directory'); ?>/Assets/yellow.svg" alt="pink">

          </div>
          <div id="slidesGrid">
            <ul>
              <li>
                <span>
                  <img class="products" src="<?php echo get_bloginfo('template_directory'); ?>/Assets/dolphin.jpg" alt="blue">
                </span>
                <span class="caption"><p>placeholder</p></span>
              </li>
              <li>
                <span>
                  <img class="products" src="<?php echo get_bloginfo('template_directory'); ?>/Assets/dolphin.jpg" alt="blue">
                </span>
                <span class="caption"><p>placeholder</p></span>
              </li>
              <li>
                <span>
                  <img class="products" src="<?php echo get_bloginfo('template_directory'); ?>/Assets/dolphin.jpg" alt="blue">
                </span>
                <span class="caption"><p>placeholder</p></span>
              </li>

              <li>
                <span>
                  <img class="products" src="<?php echo get_bloginfo('template_directory'); ?>/Assets/dolphin.jpg" alt="blue">
                </span>
                <span class="caption"><p>placeholder</p></span>
              </li>
              <li>
                <span>
                  <img class="products" src="<?php echo get_bloginfo('template_directory'); ?>/Assets/dolphin.jpg" alt="blue">
                </span>
                <span class="caption"><p>placeholder</p></span>
              </li>
              <li>
                <span>
                  <img class="products" src="<?php echo get_bloginfo('template_directory'); ?>/Assets/dolphin.jpg" alt="blue">
                </span>
                <span class="caption"><p>placeholder</p></span>
              </li>
              <li>
                <span>
                  <img class="products" src="<?php echo get_bloginfo('template_directory'); ?>/Assets/dolphin.jpg" alt="blue">
                </span>
                <span class="caption"><p>placeholder</p></span>
              </li>
              <li>
                <span>
                  <img class="products" src="<?php echo get_bloginfo('template_directory'); ?>/Assets/dolphin.jpg" alt="blue">
                </span>
                <span class="caption"><p>placeholder</p></span>
              </li>
            </ul>
          </div>
        </article>
        <article id="combos" class="typeface">
          <div id="combosTitle">
            <h1>combos</h1>
            <p>
              Lorem ipsum dolor sit amet, consectetur adipiscing
              elit, sed do eiusmod tempor incididunt ut labore et dolore
              magna aliqua. Ut enim ad minim veniam, quis nostrud
              exercitation ullamco laboris nisi ut aliquip ex ea commodo
              consequat.
            </p>
            <img class="shape" id="combosShape" src="<?php echo get_bloginfo('template_directory'); ?>/Assets/green.svg" alt="pink">

          </div>
          <div id="combosGrid">
            <ul>
              <li>
                <span>
                  <img class="products" src="<?php echo get_bloginfo('template_directory'); ?>/Assets/dolphin.jpg" alt="blue">
                </span>
                <span class="caption"><p>placeholder</p></span>
              </li>
              <li>
                <span>
                  <img class="products" src="<?php echo get_bloginfo('template_directory'); ?>/Assets/dolphin.jpg" alt="blue">
                </span>
                <span class="caption"><p>placeholder</p></span>
              </li>
              <li>
                <span>
                  <img class="products" src="<?php echo get_bloginfo('template_directory'); ?>/Assets/dolphin.jpg" alt="blue">
                </span>
                <span class="caption"><p>placeholder</p></span>
              </li>

              <li>
                <span>
                  <img class="products" src="<?php echo get_bloginfo('template_directory'); ?>/Assets/dolphin.jpg" alt="blue">
                </span>
                <span class="caption"><p>placeholder</p></span>
              </li>
              <li>
                <span>
                  <img class="products" src="<?php echo get_bloginfo('template_directory'); ?>/Assets/dolphin.jpg" alt="blue">
                </span>
                <span class="caption"><p>placeholder</p></span>
              </li>
              <li>
                <span>
                  <img class="products" src="<?php echo get_bloginfo('template_directory'); ?>/Assets/dolphin.jpg" alt="blue">
                </span>
                <span class="caption"><p>placeholder</p></span>
              </li>
              <li>
                <span>
                  <img class="products" src="<?php echo get_bloginfo('template_directory'); ?>/Assets/dolphin.jpg" alt="blue">
                </span>
                <span class="caption"><p>placeholder</p></span>
              </li>
              <li>
                <span>
                  <img class="products" src="<?php echo get_bloginfo('template_directory'); ?>/Assets/dolphin.jpg" alt="blue">
                </span>
                <span class="caption"><p>placeholder</p></span>
              </li>
            </ul>
          </div>
        </article>
        <article id="castles" class="typeface">
          <div id="castlesTitle">
            <h1>castles</h1>
            <p>
              Lorem ipsum dolor sit amet, consectetur adipiscing
              elit, sed do eiusmod tempor incididunt ut labore et dolore
              magna aliqua. Ut enim ad minim veniam, quis nostrud
              exercitation ullamco laboris nisi ut aliquip ex ea commodo
              consequat.
            </p>
            <img class="shape" id="castlesShape" src="<?php echo get_bloginfo('template_directory'); ?>/Assets/blue.svg" alt="pink">

          </div>
          <div id="castlesGrid">
            <ul>
              <li>
                <span>
                  <img class="products" src="<?php echo get_bloginfo('template_directory'); ?>/Assets/dolphin.jpg" alt="blue">
                </span>
                <span class="caption"><p>placeholder</p></span>
              </li>
              <li>
                <span>
                  <img class="products" src="<?php echo get_bloginfo('template_directory'); ?>/Assets/dolphin.jpg" alt="blue">
                </span>
                <span class="caption"><p>placeholder</p></span>
              </li>
              <li>
                <span>
                  <img class="products" src="<?php echo get_bloginfo('template_directory'); ?>/Assets/dolphin.jpg" alt="blue">
                </span>
                <span class="caption"><p>placeholder</p></span>
              </li>

              <li>
                <span>
                  <img class="products" src="<?php echo get_bloginfo('template_directory'); ?>/Assets/dolphin.jpg" alt="blue">
                </span>
                <span class="caption"><p>placeholder</p></span>
              </li>
              <li>
                <span>
                  <img class="products" src="<?php echo get_bloginfo('template_directory'); ?>/Assets/dolphin.jpg" alt="blue">
                </span>
                <span class="caption"><p>placeholder</p></span>
              </li>
              <li>
                <span>
                  <img class="products" src="<?php echo get_bloginfo('template_directory'); ?>/Assets/dolphin.jpg" alt="blue">
                </span>
                <span class="caption"><p>placeholder</p></span>
              </li>
              <li>
                <span>
                  <img class="products" src="<?php echo get_bloginfo('template_directory'); ?>/Assets/dolphin.jpg" alt="blue">
                </span>
                <span class="caption"><p>placeholder</p></span>
              </li>
              <li>
                <span>
                  <img class="products" src="<?php echo get_bloginfo('template_directory'); ?>/Assets/dolphin.jpg" alt="blue">
                </span>
                <span class="caption"><p>placeholder</p></span>
              </li>
            </ul>
          </div>
        </article>
      </article>
    </section>
    <section id="testimonials" data-type="background" data-speed="10">
      <img class="shape" id="testimonialsShape" src="<?php echo get_bloginfo('template_directory'); ?>/Assets/blue.svg" alt="yellow">
      <div class="typeface" id="testimonialsTitle">
        testimonials
      </div>
      <div>
        <article>
          Lorem ipsum dolor sit amet, consectetur adipiscing
          elit, sed do eiusmod tempor incididunt ut labore et dolore
          magna aliqua. Ut enim ad minim veniam, quis nostrud
          exercitation ullamco laboris nisi ut aliquip ex ea commodo
          consequat.
        </article>
        <img id="quote1" src="<?php echo get_bloginfo('template_directory'); ?>/Assets/quote1.svg" alt="quote">
        <h1>
          YOLO events was super great and Lachie
          is a sexy beast ;) ~ Anonymous
        </h1>
        <img id="quote2" src="<?php echo get_bloginfo('template_directory'); ?>/Assets/quote2.svg" alt="quote">
      </div>
    </section>
    <section id="contact" data-type="background" data-speed="10">
      <img class="shape" id="contactShape" src="<?php echo get_bloginfo('template_directory'); ?>/Assets/pink.svg" alt="pink">
      <div class="typeface" id="contactTitle">
        contact us
      </div>
      <img id="contactSVG" src="<?php echo get_bloginfo('template_directory'); ?>/Assets/contact.svg" alt="">
      <div class="typeface" id="contacts">
        <p>0490 302 517</p>
        <p>yoloeventbookings@gmail.com</p>
      </div>
      <!--div>
        <form action="mailto:m.monti@live.com.au" method="post" enctype="text/plain">
          <input type="text" name="name" placeholder="name">
          <input type="text" name="email" placeholder="email">
          <input type="text" name="phone" placeholder="phone">
          <textarea name="enquire now" rows="1" cols="20" placeholder="enquire now"></textarea>
          <input type="submit" name="<br />SEND ENQUIRY" value="SEND ENQUIRY">
        </form>
      </div-->
    </section>
    <footer>
      <img id="footerBanner" src="<?php echo get_bloginfo('template_directory'); ?>/Assets/footer.svg" alt="">
      <div id="footerLogo">
        <a href="#"><img src="<?php echo get_bloginfo('template_directory'); ?>/Assets/logo.svg" alt=""></a>
      </div>
      <span class="typeface">
        copyright yolo events &copy; <?php echo date("Y"); ?> all rights reserved <br>
        website designed and built by monti|kreativ
      </span>
    </footer>
  </div>
</body>
</html>
