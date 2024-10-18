<?php include 'includes/header.php';
include 'api/send_dist_email.php';
?>



<!-- Page Header Start -->
<div class="container-fluid page-header py-5 mb-5 wow fadeIn" data-wow-delay="0.1s">
    <div class="container py-5">
        <h1 class="display-3 text-white mb-3 animated slideInDown">Distributorship</h1>
        <nav aria-label="breadcrumb animated slideInDown">
            <ol class="breadcrumb text-uppercase mb-0">
                <li class="breadcrumb-item"><a class="text-white" href="/">Home</a></li>
                <li class="breadcrumb-item text-primary active" aria-current="page">Distributorship</li>
            </ol>
        </nav>
    </div>
</div>
<!-- Page Header End -->


<!-- Contact Start -->
<div class="container-xxl py-5">
    <div class="container">
        <div class="text-center mx-auto mb-5 wow fadeInUp" data-wow-delay="0.1s" style="max-width: 600px;">
            <p class="d-inline-block border rounded-pill py-1 px-4">Distributorship</p>
            <h1>Have Any Query about Distributorship?</h1>
        </div>

        <div class="row g-4">
            <div class=" wow fadeIn" data-wow-delay="0.1s">
                <div class="bg-light rounded p-5">
                    <h1 class="mb-4">Please Contact Us!</h1>
                    <form method="post" action="/distributorship">
                        <?php if (!empty($errorMessage)): ?>
                            <div style="color: red;" class="mb-3"><?= $errorMessage; ?></div>
                        <?php endif; ?>

                        <?php if (!empty($successMessage)): ?>
                            <div class="mb-3" style="color:green;"><?= $successMessage; ?></div>
                        <?php endif; ?>

                        <div class="row g-3">
                            <div class="col-md-6">
                                <div class="form-floating">
                                    <input type="text" class="form-control" id="name" name="name" value="<?= htmlspecialchars($name); ?>" required placeholder="Your Name">
                                    <label for="name">Your Name</label>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-floating">
                                    <input type="email" class="form-control" id="email" name="email" value="<?= htmlspecialchars($email); ?>" required placeholder="Your Email">
                                    <label for="email">Your Email</label>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-floating">
                                    <input type="text" inputmode="numeric" class="form-control" id="contact" name="contact" value="<?= htmlspecialchars($contact_number); ?>" required placeholder="Your Contact Number">
                                    <label for="contact">Contact No.</label>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-floating">
                                    <input type="Address" class="form-control" id="address" name="address" value="<?= htmlspecialchars($address); ?>" required placeholder="Your Address">
                                    <label for="address">Address</label>
                                </div>
                            </div>
                            <div class="col-12">
                                <div class="form-floating">
                                    <input type="text" class="form-control" id="subject" name="subject" value="<?= htmlspecialchars($subject); ?>" required placeholder="Subject">
                                    <label for="subject">Subject</label>
                                </div>
                            </div>
                            <div class="col-12">
                                <div class="form-floating">
                                    <textarea class="form-control" placeholder="Leave a message here" id="message" name="message" rows="5" required style="height: 100px;"><?= htmlspecialchars($message); ?></textarea>
                                    <label for="message">Message</label>
                                </div>
                            </div>
                            <div class="col-12">
                                <button class="btn btn-primary w-100 py-3" type="submit">Send Message</button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>

        </div>
    </div>
</div>
<!-- Contact End -->


<?php include 'includes/footer.php'; ?>