<!DOCTYPE html>
<html lang="en">

<?php require('components/head.php')?>
<link rel="stylesheet" type="text/css" href="<?php echo base_url();?>assets/custom/css/consultationcenter.css">
<link rel="stylesheet" type="text/css" href="<?php echo base_url();?>assets/custom/css/profile.css">


<link rel="stylesheet" type="text/css" href="<?php echo base_url();?>assets/css/responsive.css">


<?php require('components/header.php')?>


<body class="home-1">

    <section class="section-tb-padding">
        <div class="container">
            <div class="row">
                <div class="col-lg-10">
                    <div class="track-area">
                        <div class="track-main">
                            <div class="track">
                                <div class="step active">
                                    <span class="icon"><i class="fa fa-check"></i></span>
                                    <span class="text">Select Concern</span>
                                </div>
                                <div class="step active">
                                    <span class="icon"><i class="fa fa-user"></i></span>
                                    <span class="text">Select Vet</span>
                                </div>
                                <div class="step active">
                                    <span class="icon"><i class="fa fa-truck"></i></span>
                                    <span class="text">Review Booking</span>
                                </div>
                            </div>
                        </div>
                    </div>

                </div>
                <div class="col-lg-2 d-flex justify-content-center align-items-center">
                <a href="petz:;" class="btn btn-style1-custom-1 ">Next </a>

                </div>
            </div>
        </div>
    </section>






    <?php require('components/footer.php')?>
    <?php require('components/js.php')?>
</body>

</html>