
<?php 

// Template Name:Drinks page template

get_header(); ?>

  <!-- Hero -->
  <section class="db-hero" style="background-image: url('<?php echo get_template_directory_uri(); ?>/assets/images/drinks-bg.png">
    <div class="container">
      <div class="hero-inner">
        <h1>Where Great Drinks<br>Meet Their Match</h1>
        <div class="awards-row">
          <img src="<?php echo get_template_directory_uri(); ?>/assets/images/logos.png" alt="">
        </div>
      </div>
    </div>
  </section>
  <!-- Hero Closed -->

  <!-- Press Bar -->
  <section class="db-press">
    <div class="container">
      <div class="press-grid">
        <div class="press-item">
          <div class="label">Featured in</div>
          <div class="press-logo-img"><img src="<?php echo get_template_directory_uri(); ?>/assets/images/The_Wall_Street_Journal-Logo.wine.png" alt=""></div>
        </div>
        <div class="press-item">
          <div class="label">As seen in "best boozy nibbles for Christmas"</div>
          <div class="press-logo-img"><img src="<?php echo get_template_directory_uri(); ?>/assets/images/The_Times_masthead.png" alt=""></div>
        </div>
        <div class="press-item">
          <div class="label">Featured in</div>
          <div class="press-logo-img"><img src="<?php echo get_template_directory_uri(); ?>/assets/images/2560px-The_Telegraph.svg.png" alt=""></div>
        </div>
      </div>
    </div>
  </section>
  <!-- Press Bar Closed -->

  <!-- About -->
  <section class="db-about">
    <div class="container">
      <div class="row">
        <div class="col-md-6 text-col">
          <div class="eyebrow">About The Drinks Bakery</div>
          <!-- <h2>A Lifelong Journey, Born Around the Table</h2> -->
          <p>Creating Drinks Biscuits has been a lifelong journey for The Drinks Bakery founder Andy Murray. "It all
            started with my parents. My mum and dad were foodies back in the 70s, before it was cool!" Andy says. "Every
            summer, we'd take our campervan on a culinary adventure around Europe. Wherever we stopped for the night, my
            parents would always match their aperitif with what the locals were eating. That respect for local flavors
            and matching with drinks was always part of our family DNA."</p>
          <p>After watching the emergence of craft drinks over the last 20 years Andy realised that the snack market had
            hardly changed and wanted to share his family's appreciation for the partnership between snacks and great
            drinks, so The Drinks Bakery was born.</p>
          <p>"We're very proud that both Drinks Biscuits and Drinks Twists are exceptional artisan products, beautifully
            made with non-GMO natural ingredients. We think they're the best drinks snacks in the world," says Andy.</p>
        </div>
        <div class="col-md-6 img-col">
          <img src="<?php echo get_template_directory_uri(); ?>/assets/images/The-drinks-bakery-Young-Andy-Murray-baking.jpg" alt="The Drinks Bakery founder Andy Murray">
        </div>
      </div>
    </div>
  </section>
  <!-- About Closed -->

  <!-- Viedo section... -->

  <section class="db-dragons">
    <div class="container">
      <div class="video-frame">

        <!-- Thumbnail -->
        <img src="<?php echo get_template_directory_uri(); ?>/assets/images/The-drinks-bakery-drinks-bakery-andy-murray-slayed-two-dragons-on-bbc-dragons-den-in-2018.webp"
          class="video-thumb">

        <!-- Play Button -->
        <div class="play-btn">
          <i class="fa fa-play-circle"></i>
        </div>

        <!-- Video -->
        <iframe class="youtube-video" src=""
          allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture"
          allowfullscreen>
        </iframe>

      </div>
      <p class="caption"> Andy Murray slaying two dragons on BBC Dragons’ Den (Shark Tank) in 2018.</p>
    </div>
  </section>

  <script>
    const videoFrame = document.querySelector(".video-frame");
    const iframe = document.querySelector(".youtube-video");

    videoFrame.addEventListener("click", function () {

      if (!videoFrame.classList.contains("active")) {
        videoFrame.classList.add("active");

        iframe.src = "https://www.youtube-nocookie.com/embed/g10O82mVV3M?autoplay=1";
      }

    });
  </script>

  <!-- Video section Closed -->

  <!-- Product Showcase -->
  <section class="db-products">
    <div class="container">
      <div class="section-header">
        <div class="eyebrow">Product Showcase</div>
        <h2>Extraordinary flavors,<br>exceptional quality</h2>
      </div>

      <!-- 1st Row -->

      <div class="category">
        <div class="row">

          <div class="col-md-4 d-flex">
            <div class="product-card w-100">
              <div class="img-wrap">
                <img src="<?php echo get_template_directory_uri(); ?>/assets/images/TDB_AgedGouda_WithBiscuits.jpg" alt="Aged Gouda Cheese & Red Onion">
              </div>
              <div class="color-band yellow"></div>
              <div class="card-body">
                <h4>Aged Gouda Cheese &amp; Red Onion (Box)</h4>
                <p>We use the best Lancashire cheese, combined with English mustard and spring onion to create a full-on
                  fruity profile with a spicy finish. Like a Ploughman’s lunch with a kick.</p>

                <div class="pairing-label">Drinks Pairings</div>
                <div class="pairing-tags">
                  <span class="pairing-tag">HOPPY IPA</span>
                  <span class="pairing-tag">STOUT</span>
                  <span class="pairing-tag">PILSNER</span>
                  <span class="pairing-tag">SAUVIGNON BLANC</span>
                  <span class="pairing-tag">PICPOUL</span>
                  <span class="pairing-tag">DRY WHITE WINES</span>
                  <span class="pairing-tag">CASK FINISHED WHISKY</span>
                </div>
              </div>
            </div>
          </div>

          <div class="col-md-4 d-flex">
            <div class="product-card w-100">
              <div class="img-wrap">
                <img src="<?php echo get_template_directory_uri(); ?>/assets/images/TDB_ItalianCheese_WithBiscuits.jpg" alt="Parmesan Cheese & Sweet Basil">
              </div>
              <div class="color-band green"></div>
              <div class="card-body">
                <h4>Parmesan Cheese &amp; Sweet Basil (Box)</h4>
                <p>We use outstanding Parmesan cheese with long lasting tangy, nutty and caramel notes. Sweet basil
                  brings a herbaceous freshness to this classic Italian flavor combination.</p>
                <div class="pairing-label">Drinks Pairings</div>
                <div class="pairing-tags">
                  <span class="pairing-tag">BLONDE BEER</span>
                  <span class="pairing-tag">LAGER</span>
                  <span class="pairing-tag">CHAMPAGNE</span>
                  <span class="pairing-tag">PROSECCO</span>
                  <span class="pairing-tag">FRUITY WHITE WINES</span>
                  <span class="pairing-tag">LIGHTER STYLE WHISKY</span>
                  <span class="pairing-tag">WHISKY HIGHBALL</span>
                </div>
              </div>
            </div>
          </div>


          <div class="col-md-4 d-flex">
            <div class="product-card w-100">
              <div class="img-wrap">
                <img src="<?php echo get_template_directory_uri(); ?>/assets/images/TDB_MatureCheddar_WithBiscuits.webp" alt="Mature Cheddar & Smoked Chilli">
              </div>
              <div class="color-band orange"></div>
              <div class="card-body">
                <h4>Mature Cheddar &amp; Smoked Chilli (Box)</h4>
                <p>We use outstanding British mature cheddar cheese that’s powerful, tangy and fruity with a long
                  finish. Smoked Spanish paprika gives this crumbly, satisfying biscuit a layer of smoky, warm richness.
                </p>
                <div class="pairing-label">Drinks Pairings</div>
                <div class="pairing-tags">
                  <span class="pairing-tag">Belgian Beer</span>
                  <span class="pairing-tag">Barrel-Aged Beer</span>
                  <span class="pairing-tag">Lager</span>
                  <span class="pairing-tag">Cider</span>
                  <span class="pairing-tag">Rioja</span>
                  <span class="pairing-tag">Malbec</span>
                  <span class="pairing-tag">Smoky Whisky</span>
                  <span class="pairing-tag">Bourbon</span>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>

      <!-- 2nd Row.. -->

      <div class="category">

        <div class="row">

          <div class="col-md-4 d-flex">
            <div class="product-card w-100">
              <div class="img-wrap">
                <img src="<?php echo get_template_directory_uri(); ?>/assets/images/TDB_AgedGouda_35g.jpg" alt="Green Olive & Parsley Twists">
              </div>
              <div class="color-band olive"></div>
              <div class="card-body">
                <h4>Aged Gouda Cheese &amp; Red Onion (Bag) </h4>
                <p>We use the best Lancashire cheese, combined with English mustard and spring onion to create a full-on
                  fruity profile with a spicy finish. Like a Ploughman’s lunch with a kick.</p>
                <div class="pairing-label">Drinks Pairings</div>
                <div class="pairing-tags">
                  <span class="pairing-tag">HOPPY IPA</span>
                  <span class="pairing-tag">STOUT</span>
                  <span class="pairing-tag">PILSNER</span>
                  <span class="pairing-tag">SAUVIGNON BLANC</span>
                  <span class="pairing-tag">PICPOUL</span>
                  <span class="pairing-tag">DRY WHITE WINES</span>
                  <span class="pairing-tag">CASK FINISHED WHISKY</span>
                </div>
              </div>
            </div>
          </div>

          <div class="col-md-4 d-flex">
            <div class="product-card w-100">
              <div class="img-wrap">
                <img src="<?php echo get_template_directory_uri(); ?>/assets/images/TDB_ItalianCheese_35g.jpg" alt="French Garlic & Herbs Twists">
              </div>
              <div class="color-band slate"></div>
              <div class="card-body">
                <h4>Parmesan Cheese &amp; Sweet Basil (Bag)</h4>
                <p>We use outstanding Parmesan cheese with long lasting tangy, nutty and caramel notes. Sweet basil
                  brings
                  a herbaceous freshness to this classic Italian flavor combination.</p>
                <div class="pairing-label">Drinks Pairings</div>
                <div class="pairing-tags">
                  <span class="pairing-tag">BLONDE BEER</span>
                  <span class="pairing-tag">LAGER</span>
                  <span class="pairing-tag">CHAMPAGNE</span>
                  <span class="pairing-tag">PROSECCO</span>
                  <span class="pairing-tag">FRUITY WHITE WINES</span>
                  <span class="pairing-tag">LIGHTER STYLE WHISKY</span>
                  <span class="pairing-tag">WHISKY HIGHBALL</span>
                </div>
              </div>
            </div>
          </div>

          <div class="col-md-4 d-flex">
            <div class="product-card w-100">
              <div class="img-wrap">
                <img src="<?php echo get_template_directory_uri(); ?>/assets/images/TDB_MatureCheddar_35g.webp" alt="Emmental Cheese & Onion Confit Twists">
              </div>
              <div class="color-band rose"></div>
              <div class="card-body">
                <h4>Mature Cheddar &amp; Smoked Chilli (Box)</h4>
                <p>We use outstanding British mature cheddar cheese that’s powerful, tangy and fruity with a long
                  finish.
                  Smoked Spanish paprika gives this crumbly, satisfying biscuit a layer of smoky, warm richness.</p>

                <div class="pairing-label">Drinks Pairings</div>
                <div class="pairing-tags">
                  <span class="pairing-tag"> BELGIAN BEER</span>
                  <span class="pairing-tag">BARREL-AGED BEER</span>
                  <span class="pairing-tag"> LAGER</span>
                  <span class="pairing-tag">CIDER RIOJA</span>
                  <span class="pairing-tag">MALBEC SMOKY WHISKY</span>
                  <span class="pairing-tag">Cabernet Sauvignon</span>
                  <span class="pairing-tag">BOURBON</span>
                </div>
              </div>
            </div>
          </div>
        </div>

      </div>

      <!-- 3rd Row -->

      <div class="category">

        <div class="row">

          <!-- 1 -->
          <div class="col-md-4 d-flex">
            <div class="product-card w-100">
              <div class="img-wrap">
                <img src="<?php echo get_template_directory_uri(); ?>/assets/images/TDB_Drinks_Twists_GreenOlive.jpg" alt="Green Olive & Parsley Twists">
              </div>
              <div class="color-band olive"></div>
              <div class="card-body">
                <h4>Green Olive &amp; Parsley (Twists)</h4>
                <p>
                  Pure, rough, buttery pastry is slowly layered and then compressed with a big flavor stripe of green
                  olive tapenade.
                  Punchy olive with a light herb and spice finish.
                </p>

                <div class="pairing-label">Drinks Pairings</div>
                <div class="pairing-tags">
                  <span class="pairing-tag">ALBARINO</span>
                  <span class="pairing-tag">SICILIAN WHITE WINES</span>
                  <span class="pairing-tag">ROSE</span>
                  <span class="pairing-tag">FINO SHERRY</span>
                  <span class="pairing-tag">MARTINI</span>
                  <span class="pairing-tag">APEROL SPRITZ</span>
                  <span class="pairing-tag">VODKA HIGHBALL</span>
                </div>
              </div>
            </div>
          </div>

          <!-- 2 -->
          <div class="col-md-4 d-flex">
            <div class="product-card w-100">
              <div class="img-wrap">
                <img src="<?php echo get_template_directory_uri(); ?>/assets/images/TDB_Drinks_Twists_FrenchGarlic.jpg" alt="French Garlic & Herbs Twists">
              </div>
              <div class="color-band slate"></div>
              <div class="card-body">
                <h4>French Garlic &amp; Herbs (Twists)</h4>
                <p>
                  Pure, rough, buttery pastry is slowly layered and then compressed with a big flavor stripe of salsa
                  verde that
                  includes garlic, green herbs and capsicum. Herbaceous and peppery.
                </p>

                <div class="pairing-label">Drinks Pairings</div>
                <div class="pairing-tags">
                  <span class="pairing-tag">CHAMPAGNE</span>
                  <span class="pairing-tag">PECORINO</span>
                  <span class="pairing-tag">SOAVE</span>
                  <span class="pairing-tag">GRUNER VELTLINER</span>
                  <span class="pairing-tag">SAUVIGNON BLANC</span>
                  <span class="pairing-tag">MANZANILLA SHERRY</span>
                  <span class="pairing-tag">COTE DU RHONE</span>
                  <span class="pairing-tag">MALBEC</span>
                  <span class="pairing-tag">CHIANTI CLASSICO</span>
                </div>
              </div>
            </div>
          </div>

          <!-- 3 -->
          <div class="col-md-4 d-flex">
            <div class="product-card w-100">
              <div class="img-wrap">
                <img src="<?php echo get_template_directory_uri(); ?>/assets/images/TDB_Drinks_Twists_Emmental.webp" alt="Emmental Cheese & Onion Confit Twists">
              </div>
              <div class="color-band rose"></div>
              <div class="card-body">
                <h4>Emmental Cheese &amp; Onion Confit (Twists)</h4>
                <p>
                  Pure, rough, buttery pastry is slowly layered and then compressed with a big flavor stripe of onion
                  confit and
                  a heap of grated Emmental. An onion hit with a toasted cheese edge.
                </p>

                <div class="pairing-label">Drinks Pairings</div>
                <div class="pairing-tags">
                  <span class="pairing-tag">WEISS BEER</span>
                  <span class="pairing-tag">GUINNESS</span>
                  <span class="pairing-tag">CHARDONNAY</span>
                  <span class="pairing-tag">WHITE RIOJA</span>
                  <span class="pairing-tag">PINOT NOIR</span>
                  <span class="pairing-tag">CABERNET SAUVIGNON</span>
                  <span class="pairing-tag">GRENACHE</span>
                </div>
              </div>
            </div>
          </div>

        </div>

      </div>
    </div>
  </section>

  <!-- Product Showcase Closed -->


  <!-- Slider section -->

  <section class="home-slider">
    <div class="owl-carousel owl-theme home-slide">
      <div class="item">
        <div class="slide-content">
          <img src="<?php echo get_template_directory_uri(); ?>/assets/images/TDB_MatureCheddar_WithBiscuits.webp" alt="">
        </div>
      </div>
      <div class="item">
        <div class="slide-content">
          <img src="<?php echo get_template_directory_uri(); ?>/assets/images/TDB_AgedGouda_WithBiscuits.jpg" alt="">
        </div>
      </div>


      <div class="item">
        <div class="slide-content">
          <img src="<?php echo get_template_directory_uri(); ?>/assets/images/TDB_AgedGouda_35g.jpg" alt="">
        </div>
      </div>
      <div class="item">
        <div class="slide-content">
          <img src="<?php echo get_template_directory_uri(); ?>/assets/images/TDB_AgedGouda_WithBiscuits.jpg" alt="">
        </div>
      </div>
      <div class="item">
        <div class="slide-content">
          <img src="<?php echo get_template_directory_uri(); ?>/assets/images/TDB_MatureCheddar_35g.webp" alt="">
        </div>
      </div>
      <div class="item">
        <div class="slide-content">
          <img src="<?php echo get_template_directory_uri(); ?>/assets/images/TDB_ItalianCheese_WithBiscuits.jpg" alt="">
        </div>
      </div>
      <div class="item">
        <div class="slide-content">
          <img src="<?php echo get_template_directory_uri(); ?>/assets/images/TDB_ItalianCheese_35g.jpg" alt="">
        </div>
      </div>
      <div class="item">
        <div class="slide-content">
          <img src="<?php echo get_template_directory_uri(); ?>/assets/images/TDB_MatureCheddar_WithBiscuits.webp" alt="">
        </div>
      </div>
        <div class="item">
        <div class="slide-content">
          <img src="<?php echo get_template_directory_uri(); ?>/assets/images/TDB_ItalianCheese_WithBiscuits.jpg" alt="">
        </div>
      </div>
    </div>
  </section>



  <!-- Shop Wholesale -->
  <section class="db-wholesale">
    <div class="container">
      <h2>Shop wholesale</h2>
      <div class="btn-row">
        <a href="#" class="ws-btn">Inquire</a>
        <a href="#" class="ws-btn">Faire</a>
      </div>
    </div>
  </section>
  <!-- Shop Wholesale Closed -->


<?php get_footer(); ?>