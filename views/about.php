<?php
//  Add page SEO

$title = 'About Organic Health - Committed to Sustainable Living';
$description = 'Learn about Organic Health`s dedication to promoting sustainable and healthy living through our range of organic products.';
$keywords = 'about, company, mission, values';
$robots = 'index, follow';

// Open Graph
$type = 'website';
$ogTitle = $title;
$ogDescription = $description;;
$ogImage = asset('img/about/banner/ABOUT-BANNER.jpg');

include './includes/header.php';
?>

<!-- Page Header Start -->
<div class="container-fluid about-banner mb-5 wow fadeIn" data-wow-delay="0.1s">
    <div class="container py-5">
        <h1 class="display-3 text-white mb-3 animated slideInDown">About Us</h1>
        <nav aria-label="breadcrumb animated slideInDown">
            <ol class="breadcrumb text-uppercase mb-0">
                <li class="breadcrumb-item"><a class="text-white" href="/">Home</a></li>
                <li class="breadcrumb-item text-primary active" aria-current="page">About</li>
            </ol>
        </nav>
    </div>
</div>
<!-- Page Header End -->


<!-- About Start -->
<div class="container-xxl py-5">
    <div class="container">
        <div class="row g-5">
            <div class="col-lg-6 wow fadeIn" data-wow-delay="0.1s">
                <div class="d-flex flex-column">
                    <img class="img-fluid rounded w-75 align-self-end" src="public/img/about-1.jpg" alt="">
                    <img class="img-fluid rounded w-50 bg-white pt-3 pe-3" src="public/img/about-2.jpg" alt="" style="margin-top: -25%;">
                </div>
            </div>
            <div class="col-lg-6 wow fadeIn" data-wow-delay="0.5s">
                <p class="d-inline-block border rounded-pill py-1 px-4">About Us</p>
                <h1 class="mb-4">Why You Should Trust Us? Get Know About Us!</h1>
                <p>Welcome to Organic Health Lifesciences Private Limited, your trusted partner in the world of nutraceuticals. Formerly known as Organic Health Healthcare Products and established in 2013, we take pride in our journey of crafting high-quality, innovative products that promote well-being. </p>
                <p class="mb-4">As a leading nutraceuticals product manufacturer, our commitment to excellence is evident in our three distinct divisions: Research and Development, Third-Party Finished Product Manufacturing, and Premix Manufacturing. These divisions work seamlessly to deliver products that meet the highest standards of quality and efficacy.</p>
            </div>
        </div>
        <div class="row">
            <p>With a vast portfolio of over 850 products, Organic Health Lifesciences is dedicated to providing a comprehensive range of nutritional supplements. Our global presence spans across 32+ countries, reflecting our commitment to making a positive impact on health worldwide.</p>
            <p>At Organic Health Lifesciences, quality is our priority. Our state-of-the-art facilities are certified by renowned institutions such as USFDA, WHO-GMP, HALAL, and FSSAI, ensuring that every product meets the stringent requirements of international standards.</p>
            <p>As a customer-centric organization, we prioritize transparency, integrity, and continuous innovation. Our team of dedicated professionals works tirelessly to stay at the forefront of the nutraceutical industry, bringing you products that not only meet but exceed your expectations.Partner with Organic Health Lifesciences Private Limited for a journey towards optimal health and well-being. Explore our diverse range of products and experience the difference that quality and innovation can make in your life.</p>
        </div>
    </div>
</div>
<!-- About End -->

<!-- Why Choose Us/ Feature Start -->
<div class="container-fluid bg-primary overflow-hidden my-5 px-lg-0">
    <div class="container feature px-lg-0">
        <div class="row g-0 mx-lg-0">
            <div class="col-lg-6 feature-text py-5 wow fadeIn" data-wow-delay="0.1s">
                <div class="p-lg-5 ps-lg-0">
                    <p class="d-inline-block border rounded-pill text-light py-1 px-4">Features</p>
                    <h1 class="text-white mb-4">Why Choose Us</h1>
                    <p class="text-white mb-4 pb-2">Owing to our extensive years of industry experience specially in researched based product manufacturing and profound market understanding, we are providing a wide gamut of products. Many factors, we have been able to create a competitive edge over other key players in the market</p>
                    <div class="row g-4">
                        <div class="col-lg-6 col-md-6">
                            <div class="d-flex align-items-center">
                                <div class="d-flex flex-shrink-0 align-items-center justify-content-center rounded-circle bg-light" style="width: 55px; height: 55px;">
                                    <i class="fa fa-check text-primary"></i>
                                </div>
                                <div class="ms-4">
                                    <p class="text-white mb-2">Comprehensive In-House Capabilities</p>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-6 col-md-6">
                            <div class="d-flex align-items-center">
                                <div class="d-flex flex-shrink-0 align-items-center justify-content-center rounded-circle bg-light" style="width: 55px; height: 55px;">
                                    <i class="fa fa-check text-primary"></i>
                                </div>
                                <div class="ms-4">
                                    <p class="text-white mb-2">Stringent Quality Approvals</p>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-6 col-md-6">
                            <div class="d-flex align-items-center">
                                <div class="d-flex flex-shrink-0 align-items-center justify-content-center rounded-circle bg-light" style="width: 55px; height: 55px;">
                                    <i class="fa fa-check text-primary"></i>
                                </div>
                                <div class="ms-4">
                                    <p class="text-white mb-2">Decade-Long Expertise in Regulated Markets</p>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-6 col-md-6">
                            <div class="d-flex align-items-center">
                                <div class="d-flex flex-shrink-0 align-items-center justify-content-center rounded-circle bg-light" style="width: 55px; height: 55px;">
                                    <i class="fa fa-check text-primary"></i>
                                </div>
                                <div class="ms-4">
                                    <p class="text-white mb-2">Global Presence, Local Understanding</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-6 pe-lg-0 wow fadeIn" data-wow-delay="0.5s" style="min-height: 400px;">
                <div class="position-relative h-100">
                    <img class="position-absolute img-fluid w-100 h-100" src="public/img/feature.jpg" style="object-fit: cover;" alt="">
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Why Choose Us /Feature End -->


<!--  Our Capabilities Start -->
<div class="container-xxl py-5">
    <div class="container">
        <div class="text-center mx-auto mb-5 wow fadeInUp" data-wow-delay="0.1s" style="max-width: 600px;">
            <p class="d-inline-block border rounded-pill py-1 px-4">Capabilities</p>
            <h1>Our Capabilities</h1>
        </div>
        <div class="row g-4">
            <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.1s">
                <div class="service-item bg-light rounded h-100 p-5">
                    <div class="d-inline-flex align-items-center justify-content-center bg-white rounded-circle mb-4" style="width: 65px; height: 65px;">
                        <i class="fa fa-solid fa-medal text-primary fs-4"></i>
                    </div>
                    <h4 class="mb-3">Our Quality</h4>
                    <p class="mb-4">As a quality-oriented organization, we are focused to provide our clients with excellent quality products. The offered products are processed by making use of optimum quality biochemical compounds and advanced technology. These products are well known among the clients for their longer shelf life, purity and effectiveness. In addition to this, the offered products are tested by a team of quality controllers on several parameters in order to ensure that the offered products are free from any flaws.</p>
                </div>
            </div>
            <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.3s">
                <div class="service-item bg-light rounded h-100 p-5">
                    <div class="d-inline-flex align-items-center justify-content-center bg-white rounded-circle mb-4" style="width: 65px; height: 65px;">
                        <i class="fa fa-solid fa-users text-primary fs-4"></i>
                    </div>
                    <h4 class="mb-3">Our Team</h4>
                    <p class="mb-4">Based on the skills of our adroit professionals, we can offer an innovative range of products. We have hired a team of highly skilled and knowledgeable professionals, who possess immense experience in their respective domains. Our products are delivered in proper packaging options to ensure that these remain safe and hygienic during transit. With the help of our hard working team member, we have been able to maintain the diversified requirements of our esteemed clients in the most efficient and effective manner.</p>
                </div>
            </div>
            <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.5s">
                <div class="service-item bg-light rounded h-100 p-5">
                    <div class="d-inline-flex align-items-center justify-content-center bg-white rounded-circle mb-4" style="width: 65px; height: 65px;">
                        <i class="fa fa-solid fa-star text-primary fs-4"></i>
                    </div>
                    <h4 class="mb-3">Client Satisfaction</h4>
                    <p class="mb-4">By focusing on variegated demands of our respected clients spread all over the world, we are offering an exclusive range of products. Keeping in mind the international quality standard, these products are processed using high quality basic bio-chemical compound. Owing to our ethical business policies, highly competitive prices and client-centric approach, we have achieved reputed position in the market. We deliver our products in a temper-proof packaging material in order to ensure safe transit at the clients’ end.</p>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Our Capabilities End -->

<!--Company Fact sheet Start-->
<div class="container-xxl py-5">
    <div class="container">
        <div class="row g-5">
            <div class="col-lg-6 wow fadeIn" data-wow-delay="0.5s">
                <p class="d-inline-block border rounded-pill py-1 px-4">Company Fact sheet</p>
                <h1 class="mb-4">Below mentioned are the members,</h1>
                <p>Our talented team includes:</p>
                <p><i class="far fa-check-circle text-primary me-3"></i>Research specialists</p>
                <p><i class="far fa-check-circle text-primary me-3"></i>Pharmacists</p>
                <p><i class="far fa-check-circle text-primary me-3"></i>Processing experts</p>
                <p><i class="far fa-check-circle text-primary me-3"></i>Quality analysts</p>
                <p><i class="far fa-check-circle text-primary me-3"></i>Product designers</p>
                <p><i class="far fa-check-circle text-primary me-3"></i>Marketing consultants</p>
                <p><i class="far fa-check-circle text-primary me-3"></i>HR managements</p>
            </div>

            <div class="col-lg-6 wow fadeIn" data-wow-delay="0.1s">
                <div class="d-flex flex-column">
                    <img class="img-fluid rounded w-75 align-self-end" src="public/img/Factsheet-1.jpg" alt="">
                    <img class="img-fluid rounded w-50 bg-white pt-3 pe-3" src="public/img/about-2.jpg" alt="" style="margin-top: -25%;">
                </div>
            </div>
        </div>
    </div>
</div>
<!--Company Fact sheet End-->


<!--Why Organic Health Start-->
<div class="container-xxl py-5">
    <div class="container">
        <div class="text-center mx-auto mb-5 wow fadeInUp" data-wow-delay="0.1s" style="max-width: 600px;">
            <p class="d-inline-block border rounded-pill py-1 px-4">Organic Health</p>
            <h1>Why Organic Health</h1>
        </div>
        <div class="row g-5">
            <div class="wow fadeIn" data-wow-delay="0.5s">
                <!-- <p class="d-inline-block border rounded-pill py-1 px-4">Company Fact sheet</p> -->
                <h5 class="mb-4">When it comes to nutraceuticals, Organic Health Lifesciences stands out as the preferred choice, and here’s why:</h5>
                <h5>1. Comprehensive In-House Capabilities:</h5>
                <p>Our dedicated facility covers every aspect of nutraceutical production, ensuring a seamless process from concept to delivery. From capsules and tablets to effervescent formulations, pouches, sachets, oral sprays, syrups, drops, and powder jars, we have it all under one roof.</p>

                <h5>2. Expert Teams for Innovation:</h5>
                <p>Our in-house teams are the driving force behind our success. The designing team brings creativity to your product’s visual identity, while our Research and Development team ensures cutting-edge formulations. The product development team collaborates seamlessly to turn ideas into high-quality, market-ready products.</p>

                <h5>3. Stringent Quality Approvals:</h5>
                <p>Rest assured, our products meet the highest international standards. With approvals from USFDA, FSSAI, WHO-GMP, HALAL, and ISO 9001:2015, we prioritize quality and compliance at every stage of our operations.</p>

                <h5>4. Decade-Long Expertise in Regulated Markets:</h5>
                <p>With a rich experience spanning 10 years, RITS Lifesciences has successfully navigated and excelled in regulated markets such as the USA, European countries, the Middle East, and the Asia-Pacific region. Our track record in these stringent environments speaks volumes about our commitment to quality and regulatory compliance.</p>

                <h5>5. Global Presence, Local Understanding:</h5>
                <p>Our global footprint extends to various continents, allowing us to understand and cater to diverse market needs. Whether it’s the dynamic markets of the USA or the intricate regulations of Europe, we have the experience to meet and exceed expectations. Choose RITS Lifesciences Private Limited for a partnership built on a decade of expertise, in-house excellence, and a commitment to delivering nutraceutical solutions that stand out in the global market.</p>

                <div class="row g-4">
                    <div class="col-lg-4 wow fadeInUp">
                        <p><i class="far fa-check-circle text-primary me-3"></i>Innovative solutions</p>
                        <p><i class="far fa-check-circle text-primary me-3"></i>Continuous research and development</p>
                        <p><i class="far fa-check-circle text-primary me-3"></i>Timely delivery</p>
                    </div>

                    <div class="col-lg-4 wow fadeInUp">
                        <p><i class="far fa-check-circle text-primary me-3"></i>Rigorous quality audits</p>
                        <p><i class="far fa-check-circle text-primary me-3"></i>Single window system for every single product development</p>
                        <p><i class="far fa-check-circle text-primary me-3"></i>Modern processing equipment</p>
                    </div>

                    <div class="col-lg-4 wow fadeInUp">
                        <p><i class="far fa-check-circle text-primary me-3"></i>Ethical business policies</p>
                        <p><i class="far fa-check-circle text-primary me-3"></i> Complementary product designing and packaging solutions</p>
                        <p><i class="far fa-check-circle text-primary me-3"></i>Market support</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!--Why Organic Health End-->


<?php include './includes/footer.php'; ?>