<?php include 'header.php'; ?>

<!-- breadcrumb-area-start -->
<div class="breadcrumb-area bg-default  has-breadcrumb-overlay" data-background="assets/img/breadcrumb/contact.jpeg">
    <div class="container h1-container">
        <div class="row">
            <div class="col-xxl-12">
                <div class="breadcrumb-wrap text-center">
                    <h2 class="breadcrumb-title chy-heading-1 chy-split-in-right chy-split-text">contact us</h2>
                    <div class="breadcrumb-list wow fadeInUp" data-wow-duration="2s">
                        <a href="index.php">Home</a>
                        <span>contact us</span>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- breadcrumb-area-end -->

<!-- contact-page-start -->
<div class="contact-page-area bg-default pt-120 pb-120">
    <div class="container chy-container-1">


        <!-- .section-title -->
        <div class="section-title-wrap mb-50 text-center">
            <h5 class="chy-subtitle-1 wow fadeInDown">contact us</h5>
            <h2 class="chy-title-1  chy-split-in-right chy-split-text">Excited About The Project? Please Get in Touch.
            </h2>
        </div>

        <div class="row">
            <div class="col-lg-7">
                <div class="contact-form-2-wrap">
                    <h6 class="title chy-heading-1">Contact Us</h6>
       <form id="contactForm" class="contact-form-2" action="sendMail.php" method="post">
  <input type="hidden" name="form_type" value="contact">

  <div class="item 1">
    <label for="name">First Name<span>*</span></label>
    <input name="name" id="name" type="text" placeholder="first name" required>
  </div>

  <div class="item2">
    <label for="phone">Phone Number<span>*</span></label>
    <input name="phone" id="phone" type="tel" placeholder="phone number" required>
  </div>

  <div class="item3">
    <label for="email">Email Address<span>*</span></label>
    <input name="email" id="email" type="email" placeholder="email address" required>
  </div>

  <div class="item5">
    <label for="message">Message<span>*</span></label>
    <textarea name="message" id="message" cols="30" rows="10" placeholder="Type your message" required></textarea>
  </div>

  <div class="btn-wrap item6">
    <button type="submit" aria-label="contact form" class="chy-pr-btn-1">
      <span class="text">Send Message</span>
      <span class="icon"><i class="fa-solid fa-right-long"></i></span>
    </button>
  </div>
</form>




                </div>

            </div>

            <!-- right-content -->
            <div class="col-lg-5">
                <div class="contact-page-content">
                    <div class="contact-page-map mb-40">
                        <iframe
                            src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d7008.484102431226!2d77.36748179584899!3d28.562493425931095!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x390ce5f25ac323b5%3A0xd496afa2bb8dd672!2sSector%2049%2C%20Noida%2C%20Uttar%20Pradesh!5e0!3m2!1sen!2sin!4v1753179822137!5m2!1sen!2sin"
                            width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy"
                            referrerpolicy="no-referrer-when-downgrade"></iframe>
                    </div>
                    <div class="border-left">
                        <div class="contact-page-contact-list mb-50">
                            <div class="item">
                                <div class="icon">
                                    <i class="fas fa-map-marker-check"></i>
                                </div>
                                <div class="content-wrap">
                                    <h4 class="chy-heading-1 title">address:</h4>
                                    <p class="chy-para-1 text">Sec-49 Noida, Gautambudh Nagar Uttar Pradesh</p>
                                </div>
                            </div>
                            <div class="item">
                                <div class="icon">
                                    <i class="fas fa-phone"></i>
                                </div>
                                <div class="content-wrap">
                                    <h4 class="chy-heading-1 title">Phone Number:</h4>
                                    <a href="#" aria-label="link" class="chy-para-1 text">+91 8318230234 </a>
                                </div>
                            </div>
                            <div class="item">
                                <div class="icon">
                                    <i class="fas fa-envelope"></i>
                                </div>
                                <div class="content-wrap">
                                    <h4 class="chy-heading-1 title">email:</h4>
                                    <a href="#" aria-label="link" class="chy-para-1 text"
                                        style="text-transform: lowercase;">owldigitalsmedia@gmail.com</a>
                                </div>
                            </div>
                        </div>
                        <ul class="contact-page-social-link">
                            <li>
                                <a aria-label="social" href="#">
                                    <i class="fab fa-facebook-f"></i>
                                </a>
                            </li>
                            <li>
                                <a aria-label="WhatsApp"
                                    href="https://api.whatsapp.com/send?phone=8532855455&text=Hi,%20I%20need%20some%20information"
                                    target="_blank">
                                    <i class="fab fa-whatsapp"></i>
                                </a>
                            </li>

                            <li>
                                <a href="https://youtube.com" target="_blank">
                                    <i class="fab fa-youtube"></i>
                                </a>
                            </li>

                            <li>
                                <a href="https://www.instagram.com/owldigitals.co" target="_blank">
                                    <i class="fab fa-instagram"></i>
                                </a>
                            </li>

                        </ul>
                    </div>
                </div>
            </div>
        </div>

    </div>
</div>

<script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
<script>
function handleFormSubmit(formSelector) {
  const form = document.querySelector(formSelector);
  if (!form) return;

  form.addEventListener('submit', function (e) {
    e.preventDefault();
    const formData = new FormData(form);

    // show success immediately on click
    Swal.fire({
      icon: 'success',
      title: 'Thank you!',
      text: 'Your form has been submitted successfully.'
    });

    // send form in background
    fetch(form.action, {
      method: 'POST',
      body: formData
    }).catch(() => {
      // if you want an error alert if send fails
      Swal.fire({
        icon: 'error',
        title: 'Oops...',
        text: 'Something went wrong sending your form!'
      });
    });

    form.reset(); // clear fields right away
  });
}

handleFormSubmit('#contactForm');
handleFormSubmit('#careerForm');
</script>



<!-- contact-page-end -->

<?php include 'footer.php'; ?>