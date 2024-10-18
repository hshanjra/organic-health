<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <title>Organic Health</title>
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <meta content="" name="keywords">
    <meta content="" name="description">

    <!-- Favicon -->
    <link href="img/favicon.ico" rel="icon">

    <!-- Google Web Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Open+Sans:wght@400;500&family=Roboto:wght@500;700;900&display=swap" rel="stylesheet">

    <!-- Icon Font Stylesheet -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.10.0/css/all.min.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.4.1/font/bootstrap-icons.css" rel="stylesheet">

    <!-- Libraries Stylesheet -->
    <link href="lib/animate/animate.min.css" rel="stylesheet">
    <link href="lib/owlcarousel/assets/owl.carousel.min.css" rel="stylesheet">
    <link href="lib/tempusdominus/css/tempusdominus-bootstrap-4.min.css" rel="stylesheet" />

    <!-- Customized Bootstrap Stylesheet -->
    <link href="css/bootstrap.min.css" rel="stylesheet">

    <!-- Template Stylesheet -->
    <link href="css/style.css" rel="stylesheet">

    <style>
        .gallery-conatiner {
            display: flex;
            flex-wrap: wrap;
            background-color: #fff;
            width: 100%;
            padding: 10px;
            box-shadow: 0 0 3px 0 rgb(0, 0, 0, 0.3);
            margin: 0px auto;
        }

        .gallery-item {
            flex-basis: 32.7%;
            margin-bottom: 6px;
            margin-right: 6px;
            opacity: 0.85;
            cursor: pointer;
            border: 1px solid #000;
            border-radius: 3px;
        }


        .gallery-item:hover {
            opacity: 1;
        }

        .gallery-item img {
            width: 100%;
            height: 100%;
            object-fit: cover;
            border-radius: 3px;
            user-select: none;
            -moz-user-select: none;
            -webkit-user-drag: none;
            -webkit-user-select: none;
            -ms-user-select: none;
        }

        .lightbox {
            position: fixed;
            display: none;
            background-color: rgba(0, 0, 0, 0.6);
            width: 100%;
            height: 100%;
            overflow: auto;
            top: 0;
            left: 0;
            z-index: 999999;
        }

        .lightbox-content {
            position: relative;
            width: 80%;
            height: 80%;
            margin: 5% auto;
            margin-top: 100px;
        }

        .lightbox-content img {
            width: 100%;
            height: 100%;
            border: 6px solid #fff;
            object-fit: cover;
            user-select: none;
            -moz-user-select: none;
            -webkit-user-drag: none;
            -webkit-user-select: none;
            -ms-user-select: none;
        }

        .lightbox-content h2 {
            color: #76A520;
            font-size: medium;
            font-weight: 400;
        }

        .lightbox-prev,
        .lightbox-next {
            position: absolute;
            background-color: rgba(0, 0, 0, 0.8);
            color: #fff;
            padding: 9px;
            top: 45%;
            cursor: pointer;
        }

        .lightbox-prev {
            left: 0;
        }

        .lightbox-next {
            right: 0;
        }

        @media (max-width:767px) {
            .gallery-conatiner {
                width: 100%;
            }

            .gallery-item {
                flex-basis: 49.80%;
                margin-bottom: 3px;
            }

            .lightbox-content {
                width: 80%;
                height: 60%;
                margin: 15% auto;
            }
        }

        @media (max-width:480px) {
            .gallery-item {
                flex-basis: 100%;
                margin-bottom: 1px;
            }

            .lightbox-content {
                width: 95%;
                margin: 20px auto;
            }

        }
    </style>
</head>

<body>
    <!-- Spinner Start -->
    <div id="spinner" class="show bg-white position-fixed translate-middle w-100 vh-100 top-50 start-50 d-flex align-items-center justify-content-center">
        <div class="spinner-grow text-primary" style="width: 3rem; height: 3rem;" role="status">
            <span class="sr-only">Loading...</span>
        </div>
    </div>
    <!-- Spinner End -->


    <!-- Topbar Start -->
    <div class="container-fluid bg-light p-0 wow fadeIn" data-wow-delay="0.1s">
        <div class="row gx-0 d-none d-lg-flex">
            <div class="col-lg-7 px-5 text-start">
                <div class="h-100 d-inline-flex align-items-center py-3 me-4">
                    <small class="fa fa-phone-alt text-primary me-2"></small>
                    <small><a href="tel:+91123-456-7890" class="text-primary"> (+91) 123-456-7890 </a></small>
                </div>
                <div class="h-100 d-inline-flex align-items-center py-3">
                    <small class="fa fa-envelope-open text-primary me-2"></small>
                    <small><a href="mailto:name@gmail.com" class="text-primary "> name@gmail.com</a></small>
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
    <!-- Topbar End -->

    <!-- Navbar Start -->
    <nav class="navbar navbar-expand-lg bg-white navbar-light sticky-top p-0 wow fadeIn" data-wow-delay="0.1s">
        <a href="/" class="navbar-brand d-flex align-items-center px-4 px-lg-5" style="margin-top: 20px; margin-bottom: 20px;">
            <!-- <h1 class="m-0 text-primary"><i class="far fa-hospital me-3"></i>Klinik</h1> -->
            <img class="logo-img" src="img/Organic-Health.png" alt="" />
        </a>
        <button type="button" class="navbar-toggler me-4" data-bs-toggle="collapse" data-bs-target="#navbarCollapse">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarCollapse">
            <div class="navbar-nav p-4 p-lg-0">
                <a href="index.html" class="nav-item nav-link active">Home</a>
                <a href="about.html" class="nav-item nav-link">About</a>
                <div class="nav-item dropdown">
                    <a href="#" class="nav-link dropdown-toggle" data-bs-toggle="dropdown">Capabilities</a>
                    <div class="dropdown-menu rounded-0 rounded-bottom m-0">
                        <a href="manufacturing.html" class="dropdown-item">Manufacturing</a>
                        <a href="capacity.html" class="dropdown-item">Capacity</a>
                        <a href="packaging.html" class="dropdown-item">Packaging</a>
                        <a href="infrastructure.html" class="dropdown-item">Infrastructure</a>
                        <a href="accreditation.html" class="dropdown-item">Accreditation</a>
                    </div>
                </div>
                <a href="clients.html" class="nav-item nav-link">Clients</a>


                <div class="nav-item dropdown">
                    <a href="#" class="nav-link dropdown-toggle" data-bs-toggle="dropdown">Products</a>
                    <div class="dropdown-menu rounded-0 rounded-bottom m-0 submenu">
                        <div class="sub-mega-menu">
                            <ul>
                                <li><a href="gym-supplement.html" class="dropdown-item">GYM SUPPLEMENT</a></li>
                                <li><a href="blood-clotting.html" class="dropdown-item">BLOOD CLOTTING</a></li>
                                <li><a href="fmcg.html" class="dropdown-item">FMCG</a></li>
                                <li><a href="gastrointestinal.html" class="dropdown-item">GASTROINTESTINAL</a></li>
                                <li><a href="heart-care.html" class="dropdown-item">HEART CARE</a></li>
                                <li><a href="kids-supplement.html" class="dropdown-item">KIDS SUPPLEMENT</a></li>
                                <li><a href="malnutrition.html" class="dropdown-item">MALNUTRITION</a></li>
                                <li><a href="kidney-care.html" class="dropdown-item">KIDNEY CARE</a></li>
                                <li><a href="sexual-wellness.html" class="dropdown-item">SEXUAL WELLNESS</a></li>
                                <li><a href="supplement-for-sports-person.html" class="dropdown-item">SUPPLEMENT FOR SPORTS PERSON</a></li>

                            </ul>

                            <ul>
                                <li><a href="effervescent-tablets.html" class="dropdown-item">EFFERVESCENT TABLETS</a></li>
                                <li><a href="essential-oils.html" class="dropdown-item">ESSENTIAL OILS</a></li>
                                <li><a href="energy-drink.html" class="dropdown-item">ENERGY DRINK</a></li>
                                <li><a href="general-wellness.html" class="dropdown-item">GENERAL WELLNESS</a></li>
                                <li><a href="joint-care.html" class="dropdown-item">JOINT CARE</a></li>
                                <li><a href="infant-milk-formula.html" class="dropdown-item">INFANT MILK FORMULA</a></li>
                                <li><a href="probiotics.html" class="dropdown-item">PROBIOTICS</a></li>
                                <li><a href="skin-car.html" class="dropdown-item">SKIN CARE</a></li>
                                <li><a href="stress-relief.html" class="dropdown-item">STRESS RELIEF</a></li>
                                <li><a href="vitamin-and-minerals.html" class="dropdown-item">VITAMIN AND MINERALS</a></li>

                            </ul>

                            <ul>
                                <li><a href="immunity.html" class="dropdown-item">IMMUNITY</a></li>
                                <li><a href="diabetic-care.html" class="dropdown-item">DIABETIC CARE</a></li>
                                <li><a href="antioxidants.html" class="dropdown-item">ANTIOXIDANTS</a></li>
                                <li><a href="sprays.html" class="dropdown-item">ORAL SPRAYS</a></li>
                                <li><a href="herbal-supplement.html" class="dropdown-item">HERBAL SUPPLEMENT</a></li>
                                <li><a href="pregnancy-care.html" class="dropdown-item">PREGNANCY CARE</a></li>
                                <li><a href="protein-powder.html" class="dropdown-item">PROTEIN POWDER</a></li>
                                <li><a href="multivitamin.html" class="dropdown-item">MULTIVITAMIN</a></li>
                                <li><a href="recovery-supplement.html" class="dropdown-item">RECOVERY SUPPLEMENT</a></li>
                                <li><a href="weight-loss.html" class="dropdown-item">WEIGHT LOSS</a> </li>

                            </ul>
                        </div>
                        <div class="mobile-sub-mega-menu">
                            <a href="gym-supplement.html" class="dropdown-item">GYM SUPPLEMENT</a>
                            <a href="blood-clotting.html" class="dropdown-item">BLOOD CLOTTING</a>
                            <a href="fmcg.html" class="dropdown-item">FMCG</a>
                            <a href="gastrointestinal.html" class="dropdown-item">GASTROINTESTINAL</a>
                            <a href="heart-care.html" class="dropdown-item">HEART CARE</a>
                            <a href="kids-supplement.html" class="dropdown-item">KIDS SUPPLEMENT</a>
                            <a href="malnutrition.html" class="dropdown-item">MALNUTRITION</a>
                            <a href="kidney-care.html" class="dropdown-item">KIDNEY CARE</a>
                            <a href="sexual-wellness.html" class="dropdown-item">SEXUAL WELLNESS</a>
                            <a href="supplement-for-sports-person.html" class="dropdown-item">SUPPLEMENT FOR SPORTS PERSON</a>

                            <a href="effervescent-tablets.html" class="dropdown-item">EFFERVESCENT TABLETS</a>
                            <a href="essential-oils.html" class="dropdown-item">ESSENTIAL OILS</a>
                            <a href="energy-drink.html" class="dropdown-item">ENERGY DRINK</a>
                            <a href="general-wellness.html" class="dropdown-item">GENERAL WELLNESS</a>
                            <a href="joint-care.html" class="dropdown-item">JOINT CARE</a>
                            <a href="infant-milk-formula.html" class="dropdown-item">INFANT MILK FORMULA</a>
                            <a href="probiotics.html" class="dropdown-item">PROBIOTICS</a>
                            <a href="skin-car.html" class="dropdown-item">SKIN CARE</a>
                            <a href="stress-relief.html" class="dropdown-item">STRESS RELIEF</a>
                            <a href="vitamin-and-minerals.html" class="dropdown-item">VITAMIN AND MINERALS</a>

                            <a href="immunity.html" class="dropdown-item">IMMUNITY</a>
                            <a href="diabetic-care.html" class="dropdown-item">DIABETIC CARE</a>
                            <a href="antioxidants.html" class="dropdown-item">ANTIOXIDANTS</a>
                            <a href="sprays.html" class="dropdown-item">ORAL SPRAYS</a>
                            <a href="herbal-supplement.html" class="dropdown-item">HERBAL SUPPLEMENT</a>
                            <a href="pregnancy-care.html" class="dropdown-item">PREGNANCY CARE</a>
                            <a href="protein-powder.html" class="dropdown-item">PROTEIN POWDER</a>
                            <a href="multivitamin.html" class="dropdown-item">MULTIVITAMIN</a>
                            <a href="recovery-supplement.html" class="dropdown-item">RECOVERY SUPPLEMENT</a>
                            <a href="weight-loss.html" class="dropdown-item">WEIGHT LOSS</a>
                            </ul>
                        </div>
                    </div>
                </div>

                <div class="nav-item dropdown">
                    <a href="#" class="nav-link dropdown-toggle" data-bs-toggle="dropdown">Premixes</a>
                    <div class="dropdown-menu rounded-0 rounded-bottom m-0">
                        <a href="vitamin-mineral-premix.html" class="dropdown-item">VITAMIN & MINERAL PREMIX</a>
                        <a href="fortification-premix.html" class="dropdown-item">FORTIFICATION PREMIX</a>
                        <a href="pre-pro-biotic-premix.html" class="dropdown-item">PRE & PRO-BIOTIC PREMIX</a>
                        <a href="premix-for-beverage.html" class="dropdown-item">PREMIX FOR BEVERAGE</a>
                        <a href="protein-amino-acid-premix.html" class="dropdown-item">PROTEIN & AMINO ACID PREMIX</a>
                    </div>
                </div>

                <a href="distributionship.html" class="nav-item nav-link">Distributionship</a>
                <a href="contact.html" class="nav-item nav-link">Contact</a>
                <a href="dailyessentials.html" class="nav-item nav-link" style="margin-right: 0;">Daily Essentials</a>

            </div>
            <!-- <a href="" class="btn btn-primary rounded-0 py-4 px-lg-5 d-none d-lg-block">Appointment<i class="fa fa-arrow-right ms-3"></i></a> -->
        </div>
    </nav>
    <!-- Navbar End -->


    <!-- Page Header Start -->
    <div class="container-fluid page-header py-5 mb-5 wow fadeIn" data-wow-delay="0.1s">
        <div class="container py-5">
            <h1 class="display-3 text-white mb-3 animated slideInDown">GYM Supplement</h1>
            <nav aria-label="breadcrumb animated slideInDown">
                <ol class="breadcrumb text-uppercase mb-0">
                    <li class="breadcrumb-item"><a class="text-white" href="index.html">Home</a></li>
                    <li class="breadcrumb-item text-primary active" aria-current="page">GYM Supplement</li>
                </ol>
            </nav>
        </div>
    </div>
    <!-- Page Header End -->


    <!-- Contact Start -->
    <div class="container-xxl py-5">
        <div class="container">
            <div class="text-center mx-auto mb-5 wow fadeInUp" data-wow-delay="0.1s" style="max-width: 600px;">
                <p class="d-inline-block border rounded-pill py-1 px-4">GYM Supplement</p>
                <h1>All GYM Supplement</h1>
            </div>

            <div class="row g-4">
                <div class="gallery-conatiner">
                    <div class="gallery-item  wow fadeInUp" data-wow-delay="0.1s" data-index="1">
                        <div class="image">
                            <img src="img/gym-supplement/BCAA(1).jpg" alt="">
                            <div class="product-title">
                                <h2> BCCA</h2>
                            </div>
                        </div>
                    </div>
                    <div class="gallery-item  wow fadeInUp" data-wow-delay="0.1s" data-index="2"><img src="img/gym-supplement/BCAA-GLUTAMINE.jpg" alt=""></div>
                    <div class="gallery-item  wow fadeInUp" data-wow-delay="0.1s" data-index="3"><img src="img/gym-supplement/BCAA.jpg" alt=""></div>
                    <div class="gallery-item  wow fadeInUp" data-wow-delay="0.1s" data-index="4"><img src="img/gym-supplement/CREATINE.jpg" alt=""></div>
                    <div class="gallery-item  wow fadeInUp" data-wow-delay="0.1s" data-index="5"><img src="img/gym-supplement/DURING-WORKOUT.jpg" alt=""></div>
                    <div class="gallery-item  wow fadeInUp" data-wow-delay="0.1s" data-index="6"><img src="img/gym-supplement/EAA-WITH-BCAA-GLUTAMINE.jpg" alt=""></div>
                    <div class="gallery-item  wow fadeInUp" data-wow-delay="0.1s" data-index="7"><img src="img/gym-supplement/GLUTAMINE.jpg" alt=""></div>
                    <div class="gallery-item  wow fadeInUp" data-wow-delay="0.1s" data-index="8"><img src="img/gym-supplement/HIGH-CARBS.jpg" alt=""></div>
                    <div class="gallery-item  wow fadeInUp" data-wow-delay="0.1s" data-index="9"><img src="img/gym-supplement/JOGGING-POWDER.jpg" alt=""></div>
                    <div class="gallery-item  wow fadeInUp" data-wow-delay="0.1s" data-index="10"><img src="img/gym-supplement/L-ARGININE.jpg" alt=""></div>
                    <div class="gallery-item  wow fadeInUp" data-wow-delay="0.1s" data-index="11"><img src="img/gym-supplement/MASS-GAINER-1-3.jpg" alt=""></div>
                    <div class="gallery-item  wow fadeInUp" data-wow-delay="0.1s" data-index="12"><img src="img/gym-supplement/MASS-GAINER-1-4.jpg" alt=""></div>
                    <div class="gallery-item  wow fadeInUp" data-wow-delay="0.1s" data-index="13"><img src="img/gym-supplement/MASS-GAINER-1-5.jpg" alt=""></div>
                    <div class="gallery-item  wow fadeInUp" data-wow-delay="0.1s" data-index="14"><img src="img/gym-supplement/MASS-GAINER-WITH-GLUTEN-570x570.jpg" alt=""></div>
                    <div class="gallery-item  wow fadeInUp" data-wow-delay="0.1s" data-index="15"><img src="img/gym-supplement/MASS-GAINER.jpg" alt=""></div>

                    <div class="gallery-item  wow fadeInUp" data-wow-delay="0.1s" data-index="15"><img src="img/gym-supplement/MUSHROOM-MASS-GAINER.jpg" alt=""></div>
                    <div class="gallery-item  wow fadeInUp" data-wow-delay="0.1s" data-index="15"><img src="img/gym-supplement/OATS-WHEY-PROTEIN-01.jpg" alt=""></div>
                    <div class="gallery-item  wow fadeInUp" data-wow-delay="0.1s" data-index="15"><img src="img/gym-supplement/PEA-PROTEIN.jpg" alt=""></div>
                    <div class="gallery-item  wow fadeInUp" data-wow-delay="0.1s" data-index="15"><img src="img/gym-supplement/PEA-SOY-PROTEIN-ISOLATE-570x570.jpg" alt=""></div>
                    <div class="gallery-item  wow fadeInUp" data-wow-delay="0.1s" data-index="15"><img src="img/gym-supplement/PEANUT-PROTEIN-01.jpg" alt=""></div>
                    <div class="gallery-item  wow fadeInUp" data-wow-delay="0.1s" data-index="15"><img src="img/gym-supplement/POST-WORKOUT.jpg" alt=""></div>
                    <div class="gallery-item  wow fadeInUp" data-wow-delay="0.1s" data-index="15"><img src="img/gym-supplement/PRE-WORKOUT.jpg" alt=""></div>
                    <div class="gallery-item  wow fadeInUp" data-wow-delay="0.1s" data-index="15"><img src="img/gym-supplement/PROTEIN-SOUP.jpg" alt=""></div>
                    <div class="gallery-item  wow fadeInUp" data-wow-delay="0.1s" data-index="15"><img src="img/gym-supplement/SOY-PROTEIN.jpg" alt=""></div>
                    <div class="gallery-item  wow fadeInUp" data-wow-delay="0.1s" data-index="15"><img src="img/gym-supplement/SPI-FOR-WOMENT-STARTUP-01-570x570.jpg" alt=""></div>
                    <div class="gallery-item  wow fadeInUp" data-wow-delay="0.1s" data-index="15"><img src="img/gym-supplement/SPI-WHEY-CAREAL-01.jpg" alt=""></div>
                    <div class="gallery-item  wow fadeInUp" data-wow-delay="0.1s" data-index="15"><img src="img/gym-supplement/SUPER-G-CELL--1024x1024.jpg" alt=""></div>
                    <div class="gallery-item  wow fadeInUp" data-wow-delay="0.1s" data-index="15"><img src="img/gym-supplement/TRANSPERENT-PROTEIN-DRINK-02-1.jpg" alt=""></div>
                    <div class="gallery-item  wow fadeInUp" data-wow-delay="0.1s" data-index="15"><img src="img/gym-supplement/WEIGHT-GAINER.jpg" alt=""></div>
                    <div class="gallery-item  wow fadeInUp" data-wow-delay="0.1s" data-index="15">
                        <img src="img/gym-supplement/WHEY-GOLD.jpg" alt="">
                        <h2>WHEY GOLDWHEY GOLD</h2>
                    </div>



                    <!-- <div class="gallery-item  wow fadeInUp" data-wow-delay="0.1s" data-index="15"><img src="img/gym-supplement/" alt=""></div> 
                    <div class="gallery-item  wow fadeInUp" data-wow-delay="0.1s" data-index="15"><img src="img/gym-supplement" alt=""></div> 
                    <div class="gallery-item  wow fadeInUp" data-wow-delay="0.1s" data-index="15"><img src="img/gym-supplement" alt=""></div> 
                    <div class="gallery-item  wow fadeInUp" data-wow-delay="0.1s" data-index="15"><img src="img/gym-supplement" alt=""></div> 
                    <div class="gallery-item  wow fadeInUp" data-wow-delay="0.1s" data-index="15"><img src="img/gym-supplement" alt=""></div> 
                    <div class="gallery-item  wow fadeInUp" data-wow-delay="0.1s" data-index="15"><img src="img/gym-supplement" alt=""></div>  -->


                </div>

                <!-- <div class="col-lg-4 wow fadeIn" data-wow-delay="0.1s">
                     
                </div>   -->



            </div>
        </div>
    </div>
    <!-- Contact End -->


    <!--Gallery Section Start-->

    <!--Gallery Section End-->


    <!-- Footer Start -->
    <div class="container-fluid bg-dark text-light footer mt-5 pt-5 wow fadeIn" data-wow-delay="0.1s">
        <div class="container py-5">
            <div class="row g-5">
                <div class="col-lg-3 col-md-6">
                    <h5 class="text-light mb-4">About Organic Health</h5>
                    <p class="mb-2">We, Organic Health Lifesciences pvt. Ltd., is counted amongst the trusted names in research and development, manufacturing an exclusive range of Nutritional and health supplements.
                        In order to manage our quality standards, we are supported with a sophisticated infrastructural facility that spreads over a large area.</p>
                </div>

                <div class="col-lg-3 col-md-6">
                    <h5 class="text-light mb-4">Our Location</h5>

                    <p class="mb-2" style="font-size: 13px;"><span class="footer-heading">International Office:</span>Nábrežie slobody 1926/4 Púchov 020 01 Slovakia</p>
                    <p class="mb-2" style="font-size: 13px;"><span class="footer-heading">India Office:</span>C-42, LGF Lane No.2, Mahendru Enclave New Delhi-110009.</p>
                    <p class="mb-2" style="font-size: 13px;"><span class="footer-heading">Manufacturing Unit:</span>81-84, Jay Maa Kali Estate, Olpad-Sayan Road, Surat- 394540, Gujarat, India</p>


                </div>
                <div class="col-lg-3 col-md-6">
                    <h5 class="text-light mb-4">Our Location</h5>

                    <p class="mb-2"><i class="fa fa-phone-alt me-3"></i>+91 63594 22555</p>
                    <p class="mb-2"><i class="fa fa-envelope me-3"></i>info@example.com</p>
                    <p class="mb-2"><span class="footer-heading">Opening Hours:</span> Mon - sat 09:00am - 06:00pm</p>

                    <div class="d-flex pt-2">
                        <a class="btn btn-outline-light btn-social rounded-circle" href=""><i class="fab fa-twitter"></i></a>
                        <a class="btn btn-outline-light btn-social rounded-circle" href=""><i class="fab fa-facebook-f"></i></a>
                        <a class="btn btn-outline-light btn-social rounded-circle" href=""><i class="fab fa-youtube"></i></a>
                        <a class="btn btn-outline-light btn-social rounded-circle" href=""><i class="fab fa-linkedin-in"></i></a>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6">
                    <h5 class="text-light mb-4">Quick Links</h5>
                    <a class="btn btn-link" href="index.html">Home</a>
                    <a class="btn btn-link" href="about.html">About Organic Health</a>
                    <a class="btn btn-link" href="">Products</a>
                    <a class="btn btn-link" href="manufacturing.html">Capabilities</a>
                    <a class="btn btn-link" href="clients.html">Clients</a>
                    <a class="btn btn-link" href="premixes.html">Premixes</a>
                    <a class="btn btn-link" href="contact.html">Contact</a>

                </div>

            </div>
        </div>
        <div class="container">
            <div class="copyright">
                <div class="row">
                    <div class="col-md-6 text-center text-md-start mb-3 mb-md-0">
                        &copy; <a class="border-bottom" href="#">Organic Health</a>, All Right Reserved.
                    </div>
                    <!-- <div class="col-md-6 text-center text-md-end">
                    Designed By <a class="border-bottom" href="">Organic Health</a>
                </div> -->
                </div>
            </div>
        </div>
    </div>
    <!-- Footer End -->


    <!-- Back to Top -->
    <a href="#" class="btn btn-lg btn-primary btn-lg-square rounded-circle back-to-top"><i class="bi bi-arrow-up"></i></a>


    <!-- JavaScript Libraries -->
    <script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/js/bootstrap.bundle.min.js"></script>
    <script src="lib/wow/wow.min.js"></script>
    <!-- <script src="lib/easing/easing.min.js"></script> -->
    <!-- <script src="lib/waypoints/waypoints.min.js"></script>
    <script src="lib/counterup/counterup.min.js"></script>
    <script src="lib/owlcarousel/owl.carousel.min.js"></script>
    <script src="lib/tempusdominus/js/moment.min.js"></script>
    <script src="lib/tempusdominus/js/moment-timezone.min.js"></script>
    <script src="lib/tempusdominus/js/tempusdominus-bootstrap-4.min.js"></script> -->

    <!-- Template Javascript -->
    <script src="js/main.js"></script>

    <script>
        const galleryItem = document.getElementsByClassName("gallery-item");

        const lightBoxConatiner = document.createElement("div");
        const lightBoxContent = document.createElement("div");
        const lightboxClose = document.createElement('button')
        const lightBoxImg = document.createElement("img");
        const lightBoxPrev = document.createElement("div");
        const lightBoxNext = document.createElement("div");

        lightBoxConatiner.classList.add('lightbox');
        lightBoxContent.classList.add('lightbox-content');

        lightBoxConatiner.classList.add('close')

        lightBoxPrev.classList.add("fa", "fa-angle-left", "lightbox-prev");
        lightBoxNext.classList.add("fa", "fa-angle-right", "lightbox-next");

        lightBoxConatiner.appendChild(lightBoxContent);

        lightBoxConatiner.appendChild(lightboxClose);

        lightBoxContent.appendChild(lightBoxImg);
        lightBoxContent.appendChild(lightBoxPrev);
        lightBoxContent.appendChild(lightBoxNext);

        document.body.appendChild(lightBoxConatiner)

        let index = 1;

        function showLighBox(n) {
            if (n > galleryItem.length) {
                index = 1;
            } else if (n < 1) {
                index = galleryItem.length
            }
            let imageLocation = galleryItem[index - 1].children[0].getAttribute("src");
            lightBoxImg.setAttribute("src", imageLocation);

        }

        function currentImage() {
            lightBoxConatiner.style.display = "block";

            let imageIndex = parseInt(this.getAttribute("data-index"));
            showLighBox(index = imageIndex);
        }

        for (let i = 0; i < galleryItem.length; i++) {
            galleryItem[i].addEventListener("click", currentImage);
        }

        function sliderImage(n) {
            showLighBox(index += n);
        }

        function prevImage() {
            sliderImage(-1);
        }

        function nextImage() {
            sliderImage(1);
        }
        lightBoxPrev.addEventListener("click", prevImage);
        lightBoxNext.addEventListener("click", nextImage);

        function closeLightBox() {
            if (this === event.target) {
                lightBoxConatiner.style.display = "none";
            }
        }
        lightBoxConatiner.addEventListener("click", closeLightBox)
    </script>

</body>

</html>