<!DOCTYPE html>
<html lang="en">

<?php require('components/head.php')?>
<link rel="stylesheet" type="text/css" href="<?php echo base_url();?>assets/custom/css/profile.css">
<link rel="stylesheet" type="text/css" href="<?php echo base_url();?>assets/custom/css/product.css">


<?php require('components/header.php')?>


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
                                    <span>Joined april 06, 2024</span>
                                </div>
                            </div>
                            <div class="order-his-page">
                                <ul class="profile-ul">
                                    <!-- <li class="profile-li"><a href="order-history.html"><span>Orders</span> <span class="pro-count">5</span></a></li> -->
                                    <li class="profile-li"><a href="profile.html" class="active">Profile</a></li>
                                    <li class="profile-li"><a href="pro-addresses.html">Address</a></li>
                                    <!-- <li class="profile-li"><a href="pro-wishlist.html"><span>Wishlist</span> <span class="pro-count">3</span></a></li> -->
                                </ul>
                            </div>
                        </div>
                        <div class="profile-form">
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
                    </div>
                </div>
            </div>
        </div>
    </section>
    <?php require('components/footer.php')?>
    <?php require('components/js.php')?>
</body>
</html>