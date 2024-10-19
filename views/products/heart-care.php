<?php
// SEO
$title = 'Heart Care';
$description = 'Heart care ';
$keywords = 'heart care,';
$robots = 'index, follow';

// Open Graph
$ogTitle = $title;
$ogDescription = $description;;
$ogImage = asset("img/heart-care/banner/HEART-CARE-02.jpg");

include 'includes/header.php';
?>


<!-- Page Header Start -->
<div class="container-fluid gymsupplement-header mb-5 wow fadeIn" data-wow-delay="0.1s">
  <div class="container py-5">
    <h1 class="display-3 text-white mb-3 animated slideInDown">Heart Care Supplement</h1>
    <nav aria-label="breadcrumb animated slideInDown">
      <ol class="breadcrumb text-uppercase mb-0">
        <li class="breadcrumb-item"><a class="text-white" href="/">Home</a></li>
        <li class="breadcrumb-item text-primary active" aria-current="page">GYM Supplement</li>
      </ol>
    </nav>
  </div>
</div>
<!-- Page Header End -->



<!--Gallery Section Start-->
<div class="container-xxl py-5">
  <div class="container">
    <div class="text-center mx-auto mb-5 wow fadeInUp" data-wow-delay="0.1s" style="max-width: 600px;">
      <p class="d-inline-block border rounded-pill py-1 px-4">Supplement</p>
      <h1>Heart Care Support Product</h1>
    </div>

    <div class="row g-4">
      <div class=" wow fadeIn" data-wow-delay="0.1s">
        <div class="container-xxl">
          <div class="row gy-4 mb-4">
            <img src="<?= asset("img/heart-care/banner/HEART-CARE-02.jpg") ?>" alt="" />
          </div>
        </div>
      </div>
    </div>

    <div class="row g-4">
      <div class="image-grid wow fadeIn" data-wow-delay="0.1s">
        <div class="container-xxl">
          <div class="row gy-4">

            <div class="col-12 col-sm-6 col-md-4 wow fadeInUp">
              <figure>
                <a class="d-block" href="">
                  <img src="<?= asset('img/heart-care/HEART-VITA.jpg') ?>" class="img-fluid" alt="HEART VITA" data-caption="HEART VITA">
                </a>
              </figure>
            </div>

            <div class="col-12 col-sm-6 col-md-4 wow fadeInUp">
              <figure>
                <a class="d-block" href="">
                  <img src="<?= asset('img/heart-care/GARLIC-CAP.jpg') ?>" class="img-fluid" alt="GARLIC CAPSULE" data-caption="GARLIC CAPSULE">
                </a>
              </figure>
            </div>

            <div class="col-12 col-sm-6 col-md-4 wow fadeInUp">
              <figure>
                <a class="d-block" href="">
                  <img src="<?= asset('img/heart-care/CLA.jpg') ?>" class="img-fluid" alt="CLA" data-caption="CLA">
                </a>
              </figure>
            </div>

            <div class="col-12 col-sm-6 col-md-4 wow fadeInUp">
              <figure>
                <a class="d-block" href="">
                  <img src="<?= asset('img/heart-care/DHA.jpg') ?>" class="img-fluid" alt="DHA" data-caption="DHA">
                </a>
              </figure>
            </div>

            <div class="col-12 col-sm-6 col-md-4 wow fadeInUp">
              <figure>
                <a class="d-block" href="">
                  <img src="<?= asset('img/heart-care/COLEUS.jpg') ?>" class="img-fluid" alt="COLEUS FORSKOHLII EXTRACT" data-caption="COLEUS FORSKOHLII EXTRACT">
                </a>
              </figure>
            </div>

            <div class="col-12 col-sm-6 col-md-4 wow fadeInUp">
              <figure>
                <a class="d-block" href="">
                  <img src="<?= asset('img/heart-care/HEART-CAREE.jpg') ?>" class="img-fluid" alt="HEARTCARE OIL COMBINATION (KRILL, FLEXSEED, CHIA, HEMP, SUNFLOWER SEEDS)" data-caption="HEARTCARE OIL COMBINATION (KRILL, FLEXSEED, CHIA, HEMP, SUNFLOWER SEEDS)">
                </a>
              </figure>
            </div>


          </div>
        </div>
      </div>
    </div>
  </div>
</div>


<!--Gallery Section End-->


<?php include 'includes/footer.php'; ?>