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
                                    <a href="javascript:void(0)"><img src="<?php echo base_url();?>assets/img/proffessor.jpg" alt="img" class="img-fluid" width="90px" height="90px"></a>
                                </div>
                                <div class="order-name">
                                    <h4>Sergio Marquina</h4>
                                    <span>Joined April 06, 2024</span>
                                </div>
                            </div>
                            <div class="order-his-page">
                                <ul class="profile-ul">
                                    <li class="profile-li"><a href="#" class="active profilee">Profile</a></li>
                                    <li class="profile-li"><a href="#" class="addresss">Address</a></li>
                                </ul>
                            </div>
                        </div>
                        <div class="profile-form" id="profile">
                            <form>
                                <ul class="pro-input-label">
                                    <li>
                                        <label>First name</label>
                                        <input type="text" name="name" placeholder="First name">
                                    </li>
                                    <li>
                                        <label>Last name</label>
                                        <input type="text" name="name" placeholder="Last name">
                                    </li>
                                </ul>
                                <ul class="pro-input-label">
                                    <li>
                                        <label>Email address</label>
                                        <input type="text" name="name" placeholder="Email address" required>
                                    </li>
                                    <li>
                                        <label>Phone number</label>
                                        <input type="text" name="name" placeholder="Phone number">
                                    </li>
                                </ul>
                                <ul class="pro-input-label">
                                    <li>
                                        <label>New password</label>
                                        <input type="text" name="name" placeholder="New password">
                                    </li>
                                    <li>
                                        <label>Confirm password</label>
                                        <input type="text" name="name" placeholder="Confirm password">
                                    </li>
                                </ul>
                                <ul class="pro-submit">
                                    <li>
                                        <input type="checkbox" name="name">
                                        <label>Subscribe me to newsletter</label>
                                    </li>
                                    <li>
                                        <a href="profile.html" class="btn btn-style1">Update profile</a>
                                    </li>
                                </ul>
                            </form>
                        </div>
                        <div class="profile-form d-none" id="address">
                            <form>
                            <ul class="pro-input-label">
            <li>
                <label>Address</label>
                <input type="text" name="address" placeholder="Address">
            </li>
            <li>
                <label>City</label>
                <input type="text" name="city" placeholder="City">
            </li>
        </ul>
        <ul class="pro-input-label">
            <li>
                <label>State</label>
                <input type="text" name="state" placeholder="State">
            </li>
            <li>
                <label>Pin code</label>
                <input type="text" name="pincode" placeholder="Pin code">
            </li>
        </ul>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <?php require('components/footer.php');?>
    <?php require('components/js.php');?>

    <script>
        $(document).ready(function(){
            $('.addresss').click(function(){
                $('#profile').addClass('d-none');
                $('#address').removeClass('d-none').addClass('d-inline');
                $('.addresss').addClass('active')
                $('.profilee').removeClass('active')

            });

            $('.profilee').click(function(){
                $('#address').addClass('d-none');
                $('#profile').removeClass('d-none').addClass('d-inline');
                $('.profilee').addClass('active')
                $('.addresss').removeClass('active')
            });
        });
    </script>
</body>
</html>
