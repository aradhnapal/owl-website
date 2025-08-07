<?php
include 'header.php';
include 'services-list.php';
$current_service = "BRAND DESIGN IDENTITY";
?>

<!-- Service Detail Content -->
<div class="service-details-area pt-120 pb-70">
    <div class="container chy-container-1">
        <div class="row">
            <!-- left-content -->
            <div class="col-xxl-8 col-xl-8 col-lg-8">
                <div class="service-details-content mb-50">
                    <div class="service-details-main-img img-cover">
                        <img src="assets/img/services/sd-img-1.jpg" alt="BRAND DESIGN IDENTITY">
                    </div>
                    <h2 class="chy-heading-1 service-details-title chy-split-in-right chy-split-text">BRAND DESIGN IDENTITY</h2>
                    <p class="chy-para-1 inner-page-disc">
                        This is the BRAND DESIGN IDENTITY service detail page. Add your brand design identity service description here.
                    </p>
                </div>
            </div>
            <!-- sidebar -->
            <div class="col-xxl-4 col-xl-4 col-lg-4">
                <div class="blog-2-page-sidebar mb-50">
                    <div class="sidebar-box mb-30 wow fadeInUp">
                        <h4 class="sidebar-box-title chy-heading-1">services category</h4>
                        <div class="sidebar-box-wrap">
                            <ul class="sidebar-category">
                                <?php foreach ($services as $name => $file): ?>
                                    <?php if ($name !== $current_service): ?>
                                        <li class="wow fadeInUp">
                                            <a href="<?php echo $file; ?>">
                                                <span class="text"><?php echo $name; ?></span>
                                                <span class="icon-1"><i class="flaticon-next"></i></span>
                                            </a>
                                        </li>
                                    <?php endif; ?>
                                <?php endforeach; ?>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<?php include 'footer.php'; ?> 