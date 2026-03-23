<?php 

// Template Name:Partnership Pillars template

get_header(); ?>

    <!-- Hero -->
    <section class="pp-hero">
        <div class="container">
            <div class="pp-hero-inner">
                <div class="pp-eyebrow">How We Work With Brand Partners</div>
                <h1>As champions of strong brand partnerships, Belgravia Imports collaborates with you and celebrates
                    product wins at every step of the journey.</h1>
                <p class="pp-eyebrow">Our partnership pillars</p>
            </div>
        </div>
    </section>
    <!-- Hero Closed -->


    <!-- Three Pillars -->
    <section class="pp-pillars">
        <div class="container">

            <div class="pp-section-header">
                <div class="pp-eyebrow">The Partnership Pillars</div>
                <h2>Three disciplines. One mission.</h2>
            </div>

            <!-- Row 1 -->
            <div class="pp-pillars-grid">

                <div class="pp-pillar-col">
                    <div class="pp-pillar-card">
                        <div style="display:flex; align-items:center; justify-content:space-between;">
                            <span class="pp-pillar-num">01</span>
                            <span class="pp-pillar-icon"><i class="fa fa-star"></i></span>
                        </div>
                        <h3>Curated Lineup</h3>
                        <!-- <span class="pp-pillar-tagline">Exclusive, non-competing focus</span> -->
                        <p>Curated lineup showcases a limited number of exclusive, non-competing product lines at all
                            times.</p>
                    </div>
                </div>

                <div class="pp-pillar-divider">
                    <i class="fa fa-long-arrow-right"></i>
                </div>

                <div class="pp-pillar-col">
                    <div class="pp-pillar-card">
                        <div style="display:flex; align-items:center; justify-content:space-between;">
                            <span class="pp-pillar-num">02</span>
                            <span class="pp-pillar-icon"><i class="fa fa-trophy"></i></span>
                        </div>
                        <h3>Best in Category</h3>
                        <!-- <span class="pp-pillar-tagline">Expert strategy, sustained success</span> -->
                        <p>Talented experts select and deploy "best in category" strategies to lead and sustain market
                            success.</p>
                    </div>
                </div>

            </div>

            <!-- Row 2 -->
            <div class="pp-pillars-grid" style="margin-top: 30px;">

                <div class="pp-pillar-col">
                    <div class="pp-pillar-card">
                        <div style="display:flex; align-items:center; justify-content:space-between;">
                            <span class="pp-pillar-num">03</span>
                            <span class="pp-pillar-icon"><i class="fa fa-globe"></i></span>
                        </div>
                        <h3>Unique Positioning</h3>
                        <!-- <span class="pp-pillar-tagline">Decades of industry connections</span> -->
                        <p>Industry connections and decades of experience ensure unique positioning of products for U.S.
                            consumers.</p>
                    </div>
                </div>

                <div class="pp-pillar-divider">
                    <i class="fa fa-long-arrow-right"></i>
                </div>

                <div class="pp-pillar-col">
                    <div class="pp-pillar-card">
                        <div style="display:flex; align-items:center; justify-content:space-between;">
                            <span class="pp-pillar-num">04</span>
                            <span class="pp-pillar-icon"><i class="fa fa-handshake-o"></i></span>
                        </div>
                        <h3>True Brand Partners</h3>
                        <!-- <span class="pp-pillar-tagline">Partner to partner, we want you to succeed</span> -->
                        <p>We call our vendors Brand Partners for a reason. Expanding to the U.S. can be a daunting
                            proposal, and we're always here to help. Partner to partner, we want you to succeed.</p>
                    </div>
                </div>

            </div>



        </div>
    </section>
    <!-- Three Pillars Closed -->


    <!-- Pledges -->
    <section class="pp-benefits">
        <div class="container">
            <div class="pp-section-header">
                <div class="pp-eyebrow">Our Commitment</div>
                <h2>Belgravia Imports pledges to:</h2>
            </div>
            <div class="pp-benefits-grid">

                <div class="pp-benefit-card">
                    <span class="pp-benefit-icon"><i class="fa fa-certificate"></i></span>
                    <h4>USFDA Packaging</h4>
                    <p>Work together to help craft packaging for USFDA approval.</p>
                </div>

                <div class="pp-benefit-card">
                    <span class="pp-benefit-icon"><i class="fa fa-check-circle"></i></span>
                    <h4>Key Classifications</h4>
                    <p>Feature key classifications: Organic, Kosher, Gluten Free, No MSG, NON GMO, and more.</p>
                </div>

                <div class="pp-benefit-card">
                    <span class="pp-benefit-icon"><i class="fa fa-bar-chart"></i></span>
                    <h4>Scale Consumer Access</h4>
                    <p>Partner with sales brokers and distributor networks to scale consumer access.</p>
                </div>

            </div>
        </div>
    </section>
    <!-- Pledges Closed -->


    <!-- logos section -->
<?php get_template_part('page-templates/logos', 'section'); ?>
<!-- logos section end -->


 <!-- slider -->
  <?php get_template_part('page-templates/home', 'slider'); ?>
<!-- slider closed -->

<?php get_footer(); ?>