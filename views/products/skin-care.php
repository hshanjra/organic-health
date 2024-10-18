<?php include 'includes/product-header.php'; ?>

<!-- Page Header Start -->
<div class="container-fluid gymsupplement-header mb-5 wow fadeIn" data-wow-delay="0.1s">
  <div class="container py-5">
    <h1 class="display-3 text-white mb-3 animated slideInDown">Skin Care Supplement</h1>
    <nav aria-label="breadcrumb animated slideInDown">
      <ol class="breadcrumb text-uppercase mb-0">
        <li class="breadcrumb-item"><a class="text-white" href="/">Home</a></li>
        <li class="breadcrumb-item text-primary active" aria-current="page">Skin Care Supplement</li>
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
      <h1>Skin Care Supplement</h1>
    </div>

    <div class="row g-4">
      <div class=" wow fadeIn" data-wow-delay="0.1s">
        <div class="container-xxl">
          <div class="row gy-4 mb-4">
            <img src="<?= asset("img/skin-car/banner/skin-care.jpg") ?>" alt="" />
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
                  <img src="<?= asset('img/skin-car/Hair-Nail-Skin-1.jpg') ?>" class="img-fluid" alt="SKIN HAIR NAIL (ALL IN ONE)" data-caption="SKIN HAIR NAIL (ALL IN ONE)">
                </a>
              </figure>
            </div>

            <div class="col-12 col-sm-6 col-md-4 wow fadeInUp">
              <figure>
                <a class="d-block" href="">
                  <img src="<?= asset('img/skin-car/VITAFAIR-NEEM-ECTRACT-VITAMIN-E.jpg') ?>" class="img-fluid" alt="VITAFAIR (NEEM EXTRACT, VITAMIN E, COLLAGEN, VITAMIN C)" data-caption="VITAFAIR (NEEM EXTRACT, VITAMIN E, COLLAGEN, VITAMIN C)">
                </a>
              </figure>
            </div>

            <div class="col-12 col-sm-6 col-md-4 wow fadeInUp">
              <figure>
                <a class="d-block" href="">
                  <img src="<?= asset('img/skin-car/COLLAGEN.jpg') ?>" class="img-fluid" alt="COLLAGEN" data-caption="COLLAGEN">
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


<?php include 'includes/product-footer.php'; ?>