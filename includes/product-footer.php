 <!-- Footer Start -->
 <div class="container-fluid bg-dark text-light footer mt-5 pt-5 wow fadeIn" data-wow-delay="0.1s">
   <div class="container py-5">
     <div class="row g-5">

       <div class="col-lg-6 col-md-6">
         <div class="footer-logo">
           <img src="<?= asset("img/OrganicHealth-white.png") ?>" alt="Organic Health" />
         </div>
         <!-- <h5 class="text-light mb-4">About Organic Health</h5> -->
         <p class="mb-2">We, Organic Health Lifesciences pvt. Ltd., is counted amongst the trusted names in research and development, manufacturing an exclusive range of Nutritional and health supplements.
           In order to manage our quality standards, we are supported with a sophisticated infrastructural facility that spreads over a large area.</p>

       </div>

       <div class="col-lg-3 col-md-6">
         <h5 class="text-light mb-4">Our Location</h5>

         <p class="mb-2"><i class="fa fa-phone-alt me-3"></i>+1 (305)-924-1622</p>
         <p class="mb-2"><i class="fa fa-envelope me-3"></i>enq.organichealth@gmail.com</p>
         <p class="mb-2" style="font-size: 13px;"><span class="footer-heading">USA Office:</span>2070 NW 141st Street Opalocka FL 33054</p>

         <p class="mb-2"><span class="footer-heading">Opening Hours:</span> Mon - sat 09:00am - 06:00pm</p>

       </div>
       <div class="col-lg-3 col-md-6">
         <h5 class="text-light mb-4">Quick Links</h5>
         <a class="btn btn-link" href="/">Home</a>
         <a class="btn btn-link" href="/about">About Organic Health</a>
         <a class="btn btn-link" href="/products/gym-supplement">Supplements</a>
         <a class="btn btn-link" href="/capabilities/manufacturing">Capabilities</a>
         <a class="btn btn-link" href="/clients">Clients</a>
         <a class="btn btn-link" href="/premixes/vitamin-mineral-premix">Premixes</a>
         <a class="btn btn-link" href="/contact">Contact</a>
       </div>

     </div>
   </div>
   <div class="container">
     <div class="copyright">
       <div class="row gx-0  d-lg-flex">
         <div class="col-lg-7 text-start  wow fadeInUp" data-wow-delay="0.1s">
           &copy; <a class="border-bottom" href="/">Organic Health</a>, All Right Reserved.
         </div>
         <div class="col-lg-5  copyright-icon text-end wow fadeInUp" data-wow-delay="0.1s">
           <ul class="social-icon">
             <li><a class="btn btn-outline-light btn-social rounded-circle" href=""><i class="fab fa-twitter"></i></a></li>
             <li><a class="btn btn-outline-light btn-social rounded-circle" href=""><i class="fab fa-facebook-f"></i></a></li>
             <li><a class="btn btn-outline-light btn-social rounded-circle" href=""><i class="fab fa-youtube"></i></a></li>
             <li> <a class="btn btn-outline-light btn-social rounded-circle" href=""><i class="fab fa-linkedin-in"></i></a></li>
           </ul>
         </div>
       </div>
     </div>
   </div>
 </div>
 <!-- Footer End -->


 <!-- Back to Top -->
 <a href="#" class="btn btn-lg btn-primary btn-lg-square rounded-circle back-to-top"><i class="bi bi-arrow-up"></i></a>


 <!--Gallery Product Image Slider Model Start-->

 <div class="modal lightbox-modal" id="lightbox-modal" tabindex="-1">
   <div class="modal-dialog modal-fullscreen">
     <div class="modal-content">
       <button type="button" class="btn-close btn-close-white" data-bs-dismiss="modal" aria-label="Close"></button>
       <div class="modal-body">
         <div class="container-fluid p-0">
           <!-- JS content here -->
         </div>
       </div>
     </div>
   </div>
 </div>
 <!--Gallery Product Image Slider Model End-->



 <!-- JavaScript Libraries -->
 <script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
 <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/js/bootstrap.bundle.min.js"></script>
 <script src="<?= asset("lib/wow/wow.min.js") ?>"></script>

 <!-- Template Javascript -->
 <script src="<?= asset('js/main.js') ?>"></script>
 <script src="<?= asset('js/navbar.js') ?>"></script><!--Toggle Menu Js -->


 <!--Gallery JS -->
 <script>
   const imageGrid = document.querySelector(".image-grid");
   const links = imageGrid.querySelectorAll("a");
   const imgs = imageGrid.querySelectorAll("img");
   const lightboxModal = document.getElementById("lightbox-modal");
   const bsModal = new bootstrap.Modal(lightboxModal);
   const modalBody = document.querySelector(".modal-body .container-fluid");

   for (const link of links) {
     link.addEventListener("click", function(e) {
       e.preventDefault();
       const currentImg = link.querySelector("img");
       const lightboxCarousel = document.getElementById("lightboxCarousel");
       if (lightboxCarousel) {
         const parentCol = link.parentElement.parentElement;
         const index = [...parentCol.parentElement.children].indexOf(parentCol);
         const bsCarousel = new bootstrap.Carousel(lightboxCarousel);
         bsCarousel.to(index);
       } else {
         createCarousel(currentImg);
       }
       bsModal.show();
     });
   }

   function createCarousel(img) {
     const markup = `
            <div id="lightboxCarousel" class="carousel slide carousel-fade" data-bs-ride="carousel" data-bs-interval="false">
              <div class="carousel-inner">
                ${createSlides(img)}
              </div> 
              <button class="carousel-control-prev" type="button" data-bs-target="#lightboxCarousel" data-bs-slide="prev">
               <span class="carousel-control-prev-icon" aria-hidden="true"></span>
               <span class="visually-hidden">Previous</span>
              </button>
              <button class="carousel-control-next" type="button" data-bs-target="#lightboxCarousel" data-bs-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Next</span>
              </button>
            </div>
            `;

     modalBody.innerHTML = markup;
   }

   function createSlides(img) {
     let markup = "";
     const currentImgSrc = img.getAttribute("src");

     for (const img of imgs) {
       const imgSrc = img.getAttribute("src");
       const imgAlt = img.getAttribute("alt");
       const imgCaption = img.getAttribute("data-caption");

       markup += `
            <div class="carousel-item${currentImgSrc === imgSrc ? " active" : ""}">
              <img src=${imgSrc} alt=${imgAlt}>
              ${imgCaption ? createCaption(imgCaption) : ""}
            </div>
            `;
     }

     return markup;
   }

   function createCaption(caption) {
     return `<div class="carousel-caption">
             <p class="m-0">${caption}</p>
            </div>`;
   }
 </script>

 </body>

 </html>