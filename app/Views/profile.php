<!DOCTYPE html>
<html lang="en">

<?php require('components/head.php');?>
<link rel="stylesheet" type="text/css" href="<?php echo base_url();?>assets/custom/css/profile.css">
<link rel="stylesheet" type="text/css" href="<?php echo base_url();?>assets/custom/css/product.css">
<link rel="stylesheet" type="text/css" href="<?php echo base_url();?>assets/css/responsive.css">

<?php require('components/header.php');?>

<body class="home-1">
    <section class="order-histry-area section-tb-padding">
        <div class="container">
            <div class="row">
                <div class="col">
                    <div class="order-history">

                        <div class="profile">
                            <div class="order-pro">
                                <div class="pro-img">
                                    <a href="javascript:void(0)"><img
                                            src="<?php echo base_url();?>assets/img/proffessor.jpg" alt="img"
                                            class="img-fluid" width="90px" height="90px"></a>
                                </div>
                                <div class="order-name">
                                    <h4><?= $user_data->first_name; ?> <?= $user_data->last_name; ?> <i class='fa fa-edit c-pointer'></i></h4>
                                    <span>Joined April 06, 2024</span>
                                </div>
                            </div>
                            <div class="order-his-page">
                                <ul class="profile-ul">
                                    <li class="profile-li"><a href="#" class="active profilee">Profile</a></li>
                                    <!-- <li class="profile-li"><a href="#" class="addresss">Address</a></li> -->
                                    <li class="profile-li"><a href="#" class="orderr">Order</a></li>
                                    <li class="profile-li"><a href="#" class="wishlist">Wishlist</a></li>
                                </ul>
                            </div>
                        </div>

                        <div class="profile-form" id="profile">
                            <form>
                                <ul class="pro-input-label">
                                    <li>
                                        <label>First name</label>
                                        <input disabled value="<?= $user_data->first_name; ?>" type="text" name="name" placeholder="First name">
                                    </li>
                                    <li>
                                        <label>Last name</label>
                                        <input disabled value="<?= $user_data->last_name; ?>" type="text" name="name" placeholder="Last name">
                                    </li>
                                </ul>
                                <ul class="pro-input-label">
                                    <li>
                                        <label>Email address</label>
                                        <input disabled value="<?= $user_data->email_id; ?>" type="text" name="name" placeholder="Email address" required>
                                    </li>
                                    <li>
                                        <label>Phone number</label>
                                        <input disabled value="<?= $user_data->mobile_number; ?>" type="text" name="name" placeholder="Phone number">
                                    </li>
                                </ul>
                            </form>
                        </div>

                        <div class="profile-form d-none" id="address">

                            msgfmt_get_pattern

                            <form>
                                <ul class="pro-input-label">
                                    <li>
                                        <label>Ph No</label>
                                        <input type="text" name="phno" placeholder="8956235412">
                                    </li>
                                    <li>
                                        <label>Street Address</label>
                                        <input type="text" name="pincode" placeholder="New york">
                                    </li>
                                </ul>
                                <ul class="pro-input-label">

                                    <li>
                                        <label>Street Address 2</label>
                                        <input type="text" name="pincode" placeholder="Venice">
                                    </li>

                                    <li>
                                        <label>City</label>
                                        <input type="text" name="phno" placeholder="Trichy">
                                    </li>
                                </ul>
                                <ul class="pro-input-label">

                                    <li>
                                        <label>Pin Code</label>
                                        <input type="text" name="pincode" placeholder="641 407">
                                    </li>

                                    <li>
                                        <label>Country</label>
                                        <input type="text" name="phno" placeholder="India">
                                    </li>
                                </ul>
                            </form>

                            <!-- ALREADY ADDEED ADDRESS -->
                            <div class="order-history my-4">
                                <div class="profile-wishlist">
                                    <div class="wishlist-area">
                                        <div class="wishlist-details">
                                            <div class="wishlist-item">
                                                <span class="wishlist-head">Address</span>

                                            </div>
                                            
                                            <div class="wishlist-all-pro">
                                                <div class="wishlist-pro">
                                                    <div class="pro-details">
                                                        <span class="all-size"> Jane Doe</span>
                                                        <span class="wishlist-text">456 Elm Street, Apartment 201,
                                                            Building B, Westwood Heights,<br> New York, NY, 10001, United
                                                            States<br>7896541320</span>
                                                    </div>
                                                </div>
                                                <div class="qty-item">
                                                    <a href="" class="add-wishlist">Edit</a>
                                                    <a href="" class="add-wishlist">Remove</a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>


                                </div>

                            </div>
                        </div>

                    </div>
                </div>
            </div>
        </div>
        </div>
    </section>
    
    <?php require('components/footer.php');?>
    <?php require('imports/js.php');?>

    <script>
    $(document).ready(function() {
        $('.addresss').click(function() {
            $('#profile').addClass('d-none');
            $('#address').removeClass('d-none').addClass('d-inline');
            $('.addresss').addClass('active')
            $('.profilee').removeClass('active')

        });

        $('.profilee').click(function() {
            $('#address').addClass('d-none');
            $('#profile').removeClass('d-none').addClass('d-inline');
            $('.profilee').addClass('active')
            $('.addresss').removeClass('active')
        });
    });
    </script>
</body>

</html>