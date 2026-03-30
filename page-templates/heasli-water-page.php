<?php 

// Template Name: Heasli water page template

get_header(); ?>


  <!-- Hero -->
  <section class="hw-hero" style="background-image: url('<?php echo get_template_directory_uri(); ?>/assets/images/Healsi-Belgravia-Imports.webp">
    <div class="container">
      <div class="hero-inner">
        <div class="eyebrow">Belgravia Imports Presents</div>
        <h1>Healsi Water</h1>
        <h2>Water elevated to
          its purest, most
          powerful form.</h2>
        <p>Ten years of research revealed nature's rarest composition—balanced pH and extraordinary silica that
          detoxifies, strengthens, and transforms your body from within.</p>
        <div class="btn-row">
          <a href="https://www.amazon.com/stores/Healsi/page/440E20AC-5BC3-4B0D-A1AC-DCB0A9A165F6?lp_asin=B08GLCBXF7&ref_=ast_bln" target="_blank" class="cta-btn"> <i class="fa fa-amazon" aria-hidden="true"></i>Shop on Amazon</a>
          <!-- <a href="#" class="cta-btn-outline">Wholesale on Faire</a> -->
        </div>
      </div>
    </div>
  </section>
  <!-- Hero Closed -->

  <!-- Stats Strip -->
  <section class="hw-stats">
    <div class="container-fluid px-0">
      <div class="stats-inner">
        <div class="stat-item">
          <span class="number">61<span class="unit"> mg/L</span></span>
          <span class="label">Silica Concentration</span>
        </div>
        <div class="stat-item">
          <span class="number">7.0</span>
          <span class="label">Neutral pH Balance</span>
        </div>
        <div class="stat-item">
          <span class="number">183<span class="unit"> mg/L</span></span>
          <span class="label">Total Mineralisation</span>
        </div>
        <div class="stat-item">
          <span class="number">10<span class="unit"> yrs</span></span>
          <span class="label">Of Research to Find the Source</span>
        </div>
      </div>
    </div>
  </section>
  <!-- Stats Strip Closed -->


  <!-- About -->
  <section class="hw-about">
    <div class="container">
      <div class="row">
        <div class="col-md-6 text-col">
          <div class="eyebrow">About Healsi Water</div>
          <h2>Ten years of relentless research. One singular discovery.</h2>
          <p>Ten years of relentless research across Europe's most pristine springs led Healsi to a singular discovery:
            a Portuguese source so rare in composition, it redefines what water can do for the human body.</p>
          <p>Healsi isn't just hydration — it's cellular restoration. With a perfectly balanced pH and one of the
            world's highest silica concentrations at 61 mg/L, every sip delivers profound benefits: stronger bones,
            cardiovascular support, natural detoxification that removes heavy metals, and visible transformation in your
            hair, skin, and nails.</p>
          <p>This is water for those who understand that true luxury is indulgence with a healthy aspect. Healsi is
            about investing in the body's optimal performance.</p>
          <p>Healsi represents the culmination of scientific rigor and nature's most guarded secret, bottled exclusively
            for those who demand more from every choice they make.</p>
        </div>
        <div class="col-md-6 img-col">
          <img src="<?php echo get_template_directory_uri(); ?>/assets/images//Healsi-Belgravia-Imports.webp" alt="Healsi Water bottles">
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
        <img src="<?php echo get_template_directory_uri(); ?>/assets/images/Healsi+_3-bottle.png" class="video-thumb">

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
    </div>
  </section>


  <script>
    const videoFrame = document.querySelector(".video-frame");
    const iframe = document.querySelector(".youtube-video");

    videoFrame.addEventListener("click", function () {

      if (!videoFrame.classList.contains("active")) {
        videoFrame.classList.add("active");

        iframe.src = "https://www.youtube-nocookie.com/embed/1oWe5o_wuO8?feature=oembed&autoplay=1&enablejsapi=1";
      }

    });
  </script>

  <!-- Origin -->
  <section class="hw-origin">
    <div class="container">
      <div class="row">
        <div class="col-md-6 text-col">
          <h2>A vessel as <br>exceptional as its contents</h2>
          <p>The diamond-cut bottle isn’t just packaging—it reflects the crystal-clear purity of the water inside. </p>
          <p>Each facet mirrors Healsi’s decade-long pursuit of molecular perfection, while its transparency showcases
            absolute clarity. This vessel perfectly embodies the union of form and function, fit for those who value
            excellence in every detail.</p>
          <p>The diamond facets echo the silica within—nature's mineral equivalent of rejuvenation, crystallized in a
            form as timeless as beauty itself.</p>

        </div>
        <div class="col-md-6 img-col">
          <img src="<?php echo get_template_directory_uri(); ?>/assets/images/Healsi+black_bottle.webp" alt="Portugal spring source">
        </div>
      </div>
    </div>
  </section>
  <!-- Origin Closed -->



  <!-- Product Showcase -->
  <section class="hw-products">
    <div class="container">

      <div class="hw-products-header">
        <div class="hw-eyebrow">Product Showcase</div>
        <h2>Extraordinary purity,<br>exceptional quality</h2>
      </div>

      <!-- Row 1: 12-packs -->
      <div class="hw-product-row">

        <div class="hw-product-col">
          <div class="hw-product-card">
            <div class="hw-bottle-wrap">
              <img src="images/h1.webp" alt="Healsi Fuchsia 12-pack">
            </div>
            <div class="hw-card-body">
              <h4>Fuchsia</h4>
              <span class="hw-size-tag">12 × 16.9 fl oz</span>
              <p>Silica-Rich Water for Hydration &amp; Skin Health | Refreshing, Balanced pH</p>
              <a href="https://www.amazon.com/Healsi-Natural-Artesian-Still-Silica/dp/B08GLCBXF7/ref=sr_1_2?dib=eyJ2IjoiMSJ9.UTjYAprK89RA46XKXCjPpnEc0xiOKOp9tYUvH1lSrpAf-jO6LOhYrHexxQotGx-z97G8hk5zk_vSZi9QBTPcISWi34gMetMsSpLbyQG1Bsl-PXVamkMdsMq8j8G9AMfy_4PEqpZuk4q8n_MyehagGhCWXlh2hJQ7xGCpbXr8xiMO4_EZacvD-gFpwOZGbKb4-vi7-xsSSnWztDto_k1pnARPWHnkMac1vZJtcolHxAUJh8zQzfa5ABWf6l0djK39rxNB5J_DwjLUnO3eI7zn9haC31FiINMrz8bM7rrRb4M.unBbRoTWFyjc8Ung1p2R3775d9i5VcLGcdMjdvKcALA&dib_tag=se&keywords=Healsi&qid=1764010494&sr=8-1"
                class="hw-amazon-btn"><i class="fa fa-amazon" aria-hidden="true"></i> Buy On Amazon</a>
            </div>
          </div>
        </div>

        <div class="hw-product-col">
          <div class="hw-product-card">
            <div class="hw-bottle-wrap">
              <img src="<?php echo get_template_directory_uri(); ?>/assets/images/h2.webp" alt="Healsi Crystal 12-pack">
            </div>
            <div class="hw-card-body">
              <h4>Crystal</h4>
              <span class="hw-size-tag">12 × 16.9 fl oz</span>
              <p>Silica-Rich Water for Hydration &amp; Skin Health | Refreshing, Balanced pH</p>
              <a href="https://www.amazon.com/healsi-Natural-Artesian-silica-crystal/dp/B08GL8ZHLH/ref=sr_1_1?crid=20GP1ZTIWHX67&dib=eyJ2IjoiMSJ9.IYaMTFYQTISgzzdWreGLrA.vbLE-XDmHNFYg0FE2XHgEF46rEiXpc2gjz7NKDh8DjY&dib_tag=se&keywords=B08GL8ZHLH&nsdOptOutParam=true&qid=1763553144&sprefix=b08gl8zhlh%2Caps%2C605&sr=8-1"
                class="hw-amazon-btn"><i class="fa fa-amazon" aria-hidden="true"></i> Buy On Amazon</a>
            </div>
          </div>
        </div>

        <div class="hw-product-col">
          <div class="hw-product-card">
            <div class="hw-bottle-wrap">
              <img src="<?php echo get_template_directory_uri(); ?>/assets/images/h3.webp" alt="Healsi Red Sparkling 12-pack">
            </div>
            <div class="hw-card-body">
              <h4>Red Sparkling</h4>
              <span class="hw-size-tag">12 × 16.9 fl oz</span>
              <p>Silica-Rich Water for Hydration &amp; Skin Health | Refreshing, Balanced pH</p>
              <a href="https://www.amazon.com/healsi-Pet-Sparkling-Red-500/dp/B07NDFTLP2/ref=sr_1_1?dib=eyJ2IjoiMSJ9.kCzkFoqjC8kYGLf-LKUPjg.qz00WvllidWEttYupUtO9diPtloDLLE_6VKyNxm9Cug&dib_tag=se&keywords=B07NDFTLP2&nsdOptOutParam=true&qid=1763555496&sr=8-1"
                class="hw-amazon-btn"><i class="fa fa-amazon" aria-hidden="true"></i> Buy On Amazon</a>
            </div>
          </div>
        </div>

      </div>

      <!-- Row 2: Large format -->
      <div class="hw-product-row">

        <div class="hw-product-col">
          <div class="hw-product-card">
            <div class="hw-bottle-wrap">
              <img src="<?php echo get_template_directory_uri(); ?>/assets/images/h4.webp" alt="Healsi Turquoise large">
            </div>
            <div class="hw-card-body">
              <h4>Turquoise</h4>
              <span class="hw-size-tag">6 × 33.8 fl oz</span>
              <p>Pure Artesian Water | Naturally Rich in Silica for Optimal Hydration</p>
              <a href="https://www.amazon.com/healsi-Natural-Artesian-silica-turquoise/dp/B08GL9C8K3/ref=sr_1_1?crid=PPXJM72V4CX6&dib=eyJ2IjoiMSJ9.oE_59erA_wQ-yHZTljsVjw.denY0G-WjOB7AWGmgFB6-udbjaEaixKFxh0nmHLbJtw&dib_tag=se&keywords=B08GL9C8K3&nsdOptOutParam=true&qid=1763555755&sprefix=b08gl9c8k3%2Caps%2C675&sr=8-1"
                class="hw-amazon-btn"><i class="fa fa-amazon" aria-hidden="true"></i> Buy On Amazon</a>
            </div>
          </div>
        </div>

        <div class="hw-product-col">
          <div class="hw-product-card">
            <div class="hw-bottle-wrap">
              <img src="<?php echo get_template_directory_uri(); ?>/assets/images/h5.webp" alt="Healsi Fuchsia large">
            </div>
            <div class="hw-card-body">
              <h4>Fuchsia</h4>
              <span class="hw-size-tag">6 × 33.8 fl oz</span>
              <p>Pure Artesian Water | Naturally Rich in Silica for Optimal Hydration</p>
              <a href="https://www.amazon.com/healsi-Natural-Artesian-silica-fuchsia/dp/B08GLC1MDX/ref=sr_1_1?crid=XJJZMNFIGR4&dib=eyJ2IjoiMSJ9.EGP_l4eBG9zKjafSgZIcNw.HIW0i8ZB3gzqrshAWrppcmp2QlTmkaIeFNc1ByVHSSE&dib_tag=se&keywords=B08GLC1MDX&nsdOptOutParam=true&qid=1763555949&sprefix=b08glc1mdx%2Caps%2C311&sr=8-1"
                class="hw-amazon-btn"><i class="fa fa-amazon" aria-hidden="true"></i> Buy On Amazon</a>
            </div>
          </div>
        </div>

        <div class="hw-product-col">
          <div class="hw-product-card">
            <div class="hw-bottle-wrap">
              <img src="<?php echo get_template_directory_uri(); ?>/assets/images/h6.webp" alt="Healsi Crystal large">
            </div>
            <div class="hw-card-body">
              <h4>Crystal</h4>
              <span class="hw-size-tag">6 × 33.8 fl oz</span>
              <p>Pure Artesian Water | Naturally Rich in Silica for Optimal Hydration</p>
              <a href="https://www.amazon.com/healsi-Natural-Artesian-silica-crystal/dp/B08GLFHR5V/ref=sr_1_1?crid=2JGSNUQ7FMD8X&dib=eyJ2IjoiMSJ9.Z2cDk1ZUwEowu8mBr9jZyw.xxTL65Sd-XHRT9QN8Gp5ZMc6xkvW3kzEmGrJ4n-4cBQ&dib_tag=se&keywords=B08GLFHR5V&nsdOptOutParam=true&qid=1763556060&sprefix=b08glfhr5v%2Caps%2C625&sr=8-1"
                class="hw-amazon-btn"><i class="fa fa-amazon" aria-hidden="true"></i> Buy On Amazon</a>
            </div>
          </div>
        </div>

      </div>
    </div>

    <!-- Shop CTA — outside .container so it bleeds full width -->
    <div class="hw-shop-cta">
      <h2>Shop Healsi Now</h2>
      <a href="#" class="hw-shop-amazon-btn">
        <i class="fa fa-amazon" aria-hidden="true"></i> Buy On Amazon
      </a>
      <h2>Shop wholesale</h2>
      <a href="<?php echo site_url('/contact'); ?>" class="hw-shop-inquire-btn">Inquire</a>
    </div>

  </section>
  <!-- Product Showcase Closed -->




<?php get_footer(); ?>