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

<style>
    /* Common style for all form controls */
    .contact-form-2 .item input,
    .contact-form-2 .item select,
    .contact-form-2 .item textarea {
        width: 100%;
        height: 62px;
        background: #F3F3F5;
        border: none;
        outline: none;
        border-radius: 50px;
        padding: 0 25px;
        font-size: 16px;
        font-weight: 400;
        color: #504E4E;
        text-transform: capitalize;

    }

    /* On focus */
    .contact-form-2 .item input:focus,
    .contact-form-2 .item select:focus,
    .contact-form-2 .item textarea:focus {
        outline: none;
        border-color: #007bff;
        /* highlight color */
        box-shadow: 0 0 0 3px rgba(0, 123, 255, 0.1);
    }

    /* Make selects look like inputs */
    .contact-form-2 .item select {
        appearance: none;
        /* remove default arrow style */
        -webkit-appearance: none;
        -moz-appearance: none;
        background-image: url("data:image/svg+xml,%3Csvg xmlns='http://www.w3.org/2000/svg' width='16' height='16' fill='%23666' class='bi bi-caret-down-fill' viewBox='0 0 16 16'%3E%3Cpath d='M7.247 11.14l-4.796-5.481C1.451 5.309 1.795 4.5 2.555 4.5h10.89c.76 0 1.104.809.104 1.159l-4.796 5.481a1 1 0 0 1-1.506 0z'/%3E%3C/svg%3E");
        background-repeat: no-repeat;
        background-position: right 12px center;
        background-size: 12px;
    }
</style>
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
                    <h6 class="title chy-heading-1">Apply For job</h6>
                    <form id="careerForm" class="contact-form-2" action="sendMail.php" method="post" enctype="multipart/form-data">
  <input type="hidden" name="form_type" value="career">
  
  <div class="item">
    <label for="first_name">First Name<span>*</span></label>
    <input name="first_name" id="first_name" type="text" placeholder="First name" required>
  </div>

  <div class="item">
    <label for="last_name">Last Name<span>*</span></label>
    <input name="last_name" id="last_name" type="text" placeholder="Last name" required>
  </div>

  <div class="item">
    <label for="mobile">Mobile Number<span>*</span></label>
    <input name="mobile" id="mobile" type="tel" placeholder="Mobile number" required>
  </div>

  <div class="item">
    <label for="email">Email Address<span>*</span></label>
    <input name="email" id="email" type="email" placeholder="Email address" required>
  </div>

  <div class="item">
    <label for="gender">Gender<span>*</span></label>
    <select name="gender" id="gender" required>
      <option value="">Select Gender</option>
      <option value="Male">Male</option>
      <option value="Female">Female</option>
      <option value="Other">Other</option>
    </select>
  </div>

  <div class="item">
    <label for="service">Service<span>*</span></label>
    <select name="service" id="service" required>
      <option value="">Select Service</option>
      <option value="Web Development">Web Development</option>
      <option value="Logo Design">Logo Design</option>
      <option value="Marketing">Marketing</option>
      <option value="Digital Marketing">Digital Marketing</option>
      <!-- your other options -->
    </select>
  </div>

  <div class="item">
    <label for="resume">Upload Resume<span>*</span></label>
    <input name="resume" id="resume" type="file" accept=".pdf,.doc,.docx" required style="padding: 15px 25px;">
  </div>

  <div class="item">
    <label for="dob">Date of Birth<span>*</span></label>
    <input name="dob" id="dob" type="date" required>
  </div>

  <div class="item">
    <label for="experience">Years of Experience<span>*</span></label>
    <input name="experience" id="experience" type="number" min="0" placeholder="Years of experience" required>
  </div>

  <div class="item">
    <label for="current_salary">Current Salary<span>*</span></label>
    <input name="current_salary" id="current_salary" type="number" placeholder="Current salary" required>
  </div>

  <div class="item">
    <label for="expected_salary">Expected Salary<span>*</span></label>
    <input name="expected_salary" id="expected_salary" type="number" placeholder="Expected salary" required>
  </div>

  <div class="item">
    <label for="location">Current Location<span>*</span></label>
    <input name="location" id="location" type="text" placeholder="Current location" required>
  </div>

  <div class="btn-wrap item">
    <button type="submit" aria-label="career form" class="chy-pr-btn-1">
      <span class="text">Apply Now</span>
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