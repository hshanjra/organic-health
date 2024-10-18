<?php
// Set default values if not set
$title = isset($title) ? htmlspecialchars($title, ENT_QUOTES, 'UTF-8') : 'Organic Health';
$description = isset($description) ? htmlspecialchars($description, ENT_QUOTES, 'UTF-8') : '';
$keywords = isset($keywords) ? htmlspecialchars($keywords, ENT_QUOTES, 'UTF-8') : '';
$robots = isset($robots) ? htmlspecialchars($robots, ENT_QUOTES, 'UTF-8') : 'index, follow';
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <title><?= $title; ?></title>
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <meta name="description" content="<?= $description; ?>">
    <meta name="keywords" content="<?= $keywords; ?>">
    <meta name="robots" content="<?= $robots; ?>">

    <!-- Favicon -->
    <!-- <link href="img/favicon.ico" rel="icon"> -->
    <link href="<?= asset("img/favicon.ico") ?>" rel="icon">

    <!-- Google Web Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Open+Sans:wght@400;500&family=Roboto:wght@500;700;900&display=swap" rel="stylesheet">

    <!-- Icon Font Stylesheet -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.10.0/css/all.min.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.4.1/font/bootstrap-icons.css" rel="stylesheet">

    <!--Navbar cdn-->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>


    <!-- Libraries Stylesheet -->
    <link href="<?= asset("lib/animate/animate.min.css") ?>" rel="stylesheet">
    <link href="<?= asset("lib/owlcarousel/assets/owl.carousel.min.css") ?>" rel="stylesheet">
    <link href="<?= asset("lib/tempusdominus/css/tempusdominus-bootstrap-4.min.css") ?>" rel="stylesheet" />

    <!-- Customized Bootstrap Stylesheet -->
    <link href="<?= asset("css/bootstrap.min.css") ?>" rel="stylesheet">

    <!-- Template Stylesheet -->
    <link href="<?= asset("css/style.css") ?>" rel="stylesheet">
    <link href="<?= asset("css/navbar.css") ?>" rel="stylesheet">
    <link href="<?= asset("css/media.css") ?>" rel="stylesheet">
</head>

<body>
    <!-- Spinner Start -->
    <div id="spinner" class="show bg-white position-fixed translate-middle w-100 vh-100 top-50 start-50 d-flex align-items-center justify-content-center">
        <div class="spinner-grow text-primary" style="width: 3rem; height: 3rem;" role="status">
            <span class="sr-only">Loading...</span>
        </div>
    </div>
    <!-- Spinner End -->


    <!-- Top bar Start -->
    <div class="container-fluid bg-light p-0 wow fadeIn" data-wow-delay="0.1s">
        <div class="row gx-0 d-none d-lg-flex">
            <div class="col-lg-7 px-5 text-start">
                <div class="h-100 d-inline-flex align-items-center py-3 me-4">
                    <small class="fa fa-phone-alt text-primary me-2"></small>
                    <small><a href="tel:+1305-924-1622" class="text-primary"> +1 (305) 924-1622 </a></small>
                </div>
                <div class="h-100 d-inline-flex align-items-center py-3">
                    <small class="fa fa-envelope-open text-primary me-2"></small>
                    <small><a href="mailto:enq.organichealth@gmail.com" class="text-primary ">enq.organichealth@gmail.com</a></small>
                </div>
            </div>
            <div class="col-lg-5 px-5 text-end">

                <div class="h-100 d-inline-flex align-items-center margin-right ">
                    <a class="btn btn-sm-square rounded-circle bg-white text-primary me-1" href=""><i class="fab fa-facebook-f"></i></a>
                    <a class="btn btn-sm-square rounded-circle bg-white text-primary me-1" href=""><i class="fab fa-twitter"></i></a>
                    <a class="btn btn-sm-square rounded-circle bg-white text-primary me-1" href=""><i class="fab fa-linkedin-in"></i></a>
                    <a class="btn btn-sm-square rounded-circle bg-white text-primary me-0" href=""><i class="fab fa-instagram"></i></a>
                </div>
                <div class="h-100 d-inline-flex align-items-center py-3 ">
                    <a href="#" class="border brochure" style="padding: 5px 12px; border-radius: 10px;">Brochure</a>
                </div>
            </div>
        </div>
    </div>
    <!-- Top bar End -->


    <!-- Navbar Start -->
    <header>
        <a href="/" class="logo">
            <img src="<?= asset("img/Organic-Health.jpg") ?>" alt="Organic Health" />
        </a>
        <div class="navigation">
            <ul class="menu">
                <div class="close-btn"></div>
                <li class="menu-item">
                    <a href="/" class="active">Home</a>
                </li>
                <li class="menu-item">
                    <a href="about">About</a>
                </li>

                <li class="menu-item">
                    <a href="#" class="sub-btn">Capabilities <small class="fa fa-angle-down me-2"></small></a>
                    <ul class="sub-menu Capabilities">
                        <li class="sub-item"><a href="/capabilities/manufacturing" class="dropdown-item">Manufacturing</a></li>
                        <li class="sub-item"><a href="/capabilities/manufacturing#capacity" class="dropdown-item">Capacity</a></li>
                        <li class="sub-item"><a href="/capabilities/manufacturing#packaging" class="dropdown-item">Packaging</a></li>
                    </ul>
                </li>

                <li class="menu-item">
                    <a href="/clients">Clients</a>
                </li>

                <li class="menu-item">
                    <a href="#" class="sub-btn">
                        Products
                        <small class="fa fa-angle-down me-2"></small>
                    </a>
                    <ul class="sub-menu left-menu">
                        <div class="dekstop-menu">
                            <!--Desktop Menu Start-->
                            <div class="sub-mega-menu">
                                <ul>
                                    <li class="sub-item"><a href="/products/gym-supplement" class="dropdown-item">GYM SUPPLEMENT</a></li>
                                    <li class="sub-item"><a href="/products/blood-clotting" class="dropdown-item">BLOOD CLOTTING</a></li>
                                    <li class="sub-item"><a href="/products/fmcg" class="dropdown-item">FMCG</a></li>
                                    <li class="sub-item"><a href="/products/gastrointestinal" class="dropdown-item">GASTROINTESTINAL</a></li>
                                    <li class="sub-item"><a href="/products/heart-care" class="dropdown-item">HEART CARE</a></li>
                                    <li class="sub-item"><a href="/products/kids-supplement" class="dropdown-item">KIDS SUPPLEMENT</a></li>
                                    <li class="sub-item"><a href="/products/malnutrition" class="dropdown-item">MALNUTRITION</a></li>
                                    <li class="sub-item"><a href="/products/kidney-care" class="dropdown-item">KIDNEY CARE</a></li>
                                    <li class="sub-item"><a href="/products/sexual-wellness" class="dropdown-item">SEXUAL WELLNESS</a></li>
                                    <li class="sub-item"><a href="/products/supplement-for-sports-person" class="dropdown-item">SUPPLEMENT FOR SPORTS PERSON</a></li>

                                </ul>

                                <ul>
                                    <li class="sub-item"><a href="/products/effervescent-tablets" class="dropdown-item">EFFERVESCENT TABLETS</a></li>
                                    <li class="sub-item"><a href="/products/essential-oils" class="dropdown-item">ESSENTIAL OILS</a></li>
                                    <li class="sub-item"><a href="/products/energy-drink" class="dropdown-item">ENERGY DRINK</a></li>
                                    <li class="sub-item"><a href="/products/general-wellness" class="dropdown-item">GENERAL WELLNESS</a></li>
                                    <li class="sub-item"><a href="/products/joint-care" class="dropdown-item">JOINT CARE</a></li>
                                    <li class="sub-item"><a href="/products/infant-milk-formula" class="dropdown-item">INFANT MILK FORMULA</a></li>
                                    <li class="sub-item"><a href="/products/probiotics" class="dropdown-item">PROBIOTICS</a></li>
                                    <li class="sub-item"><a href="/products/skin-care" class="dropdown-item">SKIN CARE</a></li>
                                    <li class="sub-item"><a href="/products/stress-relief" class="dropdown-item">STRESS RELIEF</a></li>
                                    <li class="sub-item"><a href="/products/vitamin-and-minerals" class="dropdown-item">VITAMIN AND MINERALS</a></li>

                                </ul>

                                <ul>
                                    <li class="sub-item"><a href="/products/immunity" class="dropdown-item">IMMUNITY</a></li>
                                    <li class="sub-item"><a href="/products/diabetic-care" class="dropdown-item">DIABETIC CARE</a></li>
                                    <li class="sub-item"><a href="/products/antioxidants" class="dropdown-item">ANTIOXIDANTS</a></li>
                                    <li class="sub-item"><a href="/products/sprays" class="dropdown-item">ORAL SPRAYS</a></li>
                                    <li class="sub-item"><a href="/products/herbal-supplement" class="dropdown-item">HERBAL SUPPLEMENT</a></li>
                                    <li class="sub-item"><a href="/products/pregnancy-care" class="dropdown-item">PREGNANCY CARE</a></li>
                                    <li class="sub-item"><a href="/products/protein-powder" class="dropdown-item">PROTEIN POWDER</a></li>
                                    <li class="sub-item"><a href="/products/multivitamin" class="dropdown-item">MULTIVITAMIN</a></li>
                                    <li class="sub-item"><a href="/products/recovery-supplement" class="dropdown-item">RECOVERY SUPPLEMENT</a></li>
                                    <li class="sub-item"><a href="/products/weight-loss" class="dropdown-item">WEIGHT LOSS</a> </li>

                                </ul>
                            </div>
                            <!--Desktop Menu End-->
                        </div>


                        <div class="sub-mega-menu mobile-menu">
                            <ul>
                                <li class="sub-item"><a href="/products/gym-supplement" class="dropdown-item">GYM SUPPLEMENT</a></li>
                                <li class="sub-item"><a href="/products/blood-clotting" class="dropdown-item">BLOOD CLOTTING</a></li>
                                <li class="sub-item"><a href="/products/fmcg" class="dropdown-item">FMCG</a></li>
                                <li class="sub-item"><a href="/products/gastrointestinal" class="dropdown-item">GASTROINTESTINAL</a></li>
                                <li class="sub-item"><a href="/products/heart-care" class="dropdown-item">HEART CARE</a></li>
                                <li class="sub-item"><a href="/products/kids-supplement" class="dropdown-item">KIDS SUPPLEMENT</a></li>
                                <li class="sub-item"><a href="/products/malnutrition" class="dropdown-item">MALNUTRITION</a></li>
                                <li class="sub-item"><a href="/products/kidney-care" class="dropdown-item">KIDNEY CARE</a></li>
                                <li class="sub-item"><a href="/products/sexual-wellness" class="dropdown-item">SEXUAL WELLNESS</a></li>
                                <li class="sub-item"><a href="/products/supplement-for-sports-person" class="dropdown-item">SUPPLEMENT FOR SPORTS PERSON</a></li>

                                <li class="sub-item"><a href="/products/effervescent-tablets" class="dropdown-item">EFFERVESCENT TABLETS</a></li>
                                <li class="sub-item"><a href="/products/essential-oils" class="dropdown-item">ESSENTIAL OILS</a></li>
                                <li class="sub-item"><a href="/products/energy-drink" class="dropdown-item">ENERGY DRINK</a></li>
                                <li class="sub-item"><a href="/products/general-wellness" class="dropdown-item">GENERAL WELLNESS</a></li>
                                <li class="sub-item"><a href="/products/joint-care" class="dropdown-item">JOINT CARE</a></li>
                                <li class="sub-item"><a href="/products/infant-milk-formula" class="dropdown-item">INFANT MILK FORMULA</a></li>
                                <li class="sub-item"><a href="/products/probiotics" class="dropdown-item">PROBIOTICS</a></li>
                                <li class="sub-item"><a href="/products/skin-care" class="dropdown-item">SKIN CARE</a></li>
                                <li class="sub-item"><a href="/products/stress-relief" class="dropdown-item">STRESS RELIEF</a></li>
                                <li class="sub-item"><a href="/products/vitamin-and-minerals" class="dropdown-item">VITAMIN AND MINERALS</a></li>

                                <li class="sub-item"><a href="/products/immunity" class="dropdown-item">IMMUNITY</a></li>
                                <li class="sub-item"><a href="/products/diabetic-care" class="dropdown-item">DIABETIC CARE</a></li>
                                <li class="sub-item"><a href="/products/antioxidants" class="dropdown-item">ANTIOXIDANTS</a></li>
                                <li class="sub-item"><a href="/products/sprays" class="dropdown-item">ORAL SPRAYS</a></li>
                                <li class="sub-item"><a href="/products/herbal-supplement" class="dropdown-item">HERBAL SUPPLEMENT</a></li>
                                <li class="sub-item"><a href="/products/pregnancy-care" class="dropdown-item">PREGNANCY CARE</a></li>
                                <li class="sub-item"><a href="/products/multivitamin" class="dropdown-item">MULTIVITAMIN</a></li>
                                <li class="sub-item"><a href="/products/recovery-supplement" class="dropdown-item">RECOVERY SUPPLEMENT</a></li>
                                <li class="sub-item"><a href="/products/weight-loss" class="dropdown-item">WEIGHT LOSS</a> </li>

                            </ul>
                        </div>

                    </ul>
                </li>

                <li class="menu-item">
                    <a href="#" class="sub-btn">Premixes <small class="fa fa-angle-down me-2"></small></a>
                    <ul class="sub-menu Capabilities">
                        <li class="sub-item"><a href="/premixes/vitamin-mineral-premix" class="dropdown-item">VITAMIN & MINERAL PREMIX</a></li>
                        <li class="sub-item"> <a href="/premixes/fortification-premix" class="dropdown-item">FORTIFICATION PREMIX</a></li>
                        <li class="sub-item"><a href="/premixes/pre-pro-biotic-premix" class="dropdown-item">PRE & PRO-BIOTIC PREMIX</a></li>
                        <li class="sub-item"><a href="/premixes/premix-for-beverage" class="dropdown-item">PREMIX FOR BEVERAGE</a></li>
                        <li class="sub-item"><a href="/premixes/protein-amino-acid-premix" class="dropdown-item">PROTEIN & AMINO ACID PREMIX</a></li>
                    </ul>
                </li>

                <li class="menu-item">
                    <a href="/distributorship">Distributorship</a>
                </li>

                <li class="menu-item">
                    <a href="/contact">Contact</a>
                </li>

                <li class="menu-item">
                    <a href="/daily-essentials">Daily Essentials</a>
                </li>
            </ul>
        </div>
        <div class="menu-btn"></div>
    </header>
    <!-- Navbar End -->