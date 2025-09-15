<?php include 'header.php'; ?>

<!-- breadcrumb-area-start -->
<div class="breadcrumb-area bg-default  has-breadcrumb-overlay" data-background="assets/img/bg/career.png">
    <div class="container h1-container">
        <div class="row">
            <div class="col-xxl-12">
                <div class="breadcrumb-wrap text-center">
                    <h2 class="breadcrumb-title chy-heading-1 chy-split-in-right chy-split-text">Career</h2>
                    <div class="breadcrumb-list wow fadeInUp" data-wow-duration="2s">
                        <a href="index.php">Home</a>
                        <span>Career</span>
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
            <h5 class="chy-subtitle-1 wow fadeInDown">Career</h5>
            <h2 class="chy-title-1  chy-split-in-right chy-split-text">Creative digital solutions expert
            </h2>
        </div>

        <div class="row">
            <div class="col-lg-12">
                <div class="contact-form-2-wrap">
                    <h6 class="title chy-heading-1">Contact Us</h6>
                    <form id="contactForm" class="contact-form-2" action="sendMail.php" method="post">
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
                            <textarea name="message" id="message" cols="30" rows="10" placeholder="Type your message"
                                required></textarea>
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

          
        </div>

    </div>
</div>

<script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
<script>
    document.getElementById("contactForm").addEventListener("submit", function (e) {
        e.preventDefault();

        let formData = new FormData(this);

        // ✅ Show success message immediately on click
        Swal.fire({
            icon: 'success',
            title: 'Message Sent!',
            text: 'Thank you for contacting us. We will reply soon.'
        });

        // ✅ Still send the data to backend in background
        fetch("sendMail.php", {
            method: "POST",
            body: formData
        })
            .catch(error => {
                console.error("Error sending mail:", error);
            });

        // ✅ Reset the form after sending
        document.getElementById("contactForm").reset();
    });
</script>


<!-- contact-page-end -->

<?php include 'footer.php'; ?>