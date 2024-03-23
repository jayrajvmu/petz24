<!DOCTYPE html>
<html lang="en">

<?php require('components/head.php')?>
<link rel="stylesheet" type="text/css" href="<?php echo base_url();?>assets/custom/css/grooming.css">
<link rel="stylesheet" type="text/css" href="<?php echo base_url();?>assets/css/responsive.css">
<?php require('components/header.php')?>

<style>
    .toggle-container {
        display: flex;
        gap: 10px;
        align-items: center; /* Align items vertically in the toggle container */
    }

    .toggle-btn {
        padding: 8px 16px;
        background-color: #ccc;
        border: none;
        cursor: pointer;
        outline: none;
        border-radius: 35px;
    }

    .toggle-btn.active {
        background-color: #00bcd4;
        color: #fff;
    }

    .billing-addresss-1 {
        padding-top: 10px; /* Adjust the padding for consistency */
    }

    .billing-addresss-1 label {
        margin-right: 10px; /* Add margin to the labels for spacing */
        width: 120px; /* Set a fixed width for labels for alignment */
    }

    .billing-addresss-1 input {
        flex: 1; /* Allow inputs to grow and fill the available space */
        max-width: 200px;
        border-radius: 100px; /* Set a max-width for inputs */
    }
</style>

<body class="home-1">
    <div class="container section-tb-padding">
        <div class="row">
            <div class="col-lg-4">
                <div class="billing-area">
                    <div class="billing-title">
                        <h4>Update Pet</h4>
                    </div>
                    <div class="billing-address-1">
                        <!-- Type -->
                        <div class="billing-addresss-1 d-flex justify-content-between align-items-center">
                            <label for="type">TYPE</label>
                            <div class="toggle-container">
                                <button id="dogBtn" class="toggle-btn active" onclick="toggleType('dog')">Dog</button>
                                <button id="catBtn" class="toggle-btn" onclick="toggleType('cat')">Cat</button>
                            </div>
                        </div>
                        <!-- Gender -->
                        <div class="billing-addresss-1 d-flex justify-content-between align-items-center">
                            <label for="gender">GENDER</label>
                            <div class="toggle-container">
                                <button id="maleBtn" class="toggle-btn active" onclick="toggleType('male')">Male</button>
                                <button id="femaleBtn" class="toggle-btn" onclick="toggleType('female')">Female</button>
                            </div>
                        </div>
                        <!-- Breed -->
                        <div class="billing-addresss-1 d-flex justify-content-between align-items-center">
                            <label for="breed">BREED</label>
                            <div class="toggle-container">
                                <input type="text" placeholder="Enter breed">
                            </div>
                        </div>
                        <!-- DOB -->
                        <div class="billing-addresss-1 d-flex justify-content-between align-items-center">
                            <label for="dob">DOB</label>
                            <div class="toggle-container">
                                <input type="date">
                            </div>
                        </div>
                        <!-- Age -->
                        <div class="billing-addresss-1 d-flex justify-content-between align-items-center">
                            <label for="age">AGE</label>
                            <div class="toggle-container">
                                <input type="number" placeholder="Year">
                                <input type="number" placeholder="Month">
                            </div>
                        </div>
                        <!-- Name -->
                        <div class="billing-addresss-1 d-flex justify-content-between align-items-center">
                            <label for="name">NAME</label>
                            <div class="toggle-container">
                                <input type="text" placeholder="Enter name">
                            </div>
                        </div>
                        <a href="petz:;" class="btn btn-style1-custom"><i
                                                    class="fa fa-shopping-bag d-none d-lg-inline"></i>
                                                Add Pet</a>
                    </div>
                </div>
            </div>
            <div class="col-lg-8">
                <img src="https://www.zigly.com/static/version1710913419/frontend/Amasty/JetTheme_child/en_US/Zigly_Managepets/images/banner-1.png"
                    alt="" class="img-fluid">
            </div>
        </div>
    </div>

    <?php require('components/footer.php')?>
    <?php require('components/js.php')?>

    <script>
        function toggleType(type) {
            // Remove active class from all buttons
            document.querySelectorAll('.toggle-btn').forEach(btn => {
                btn.classList.remove('active');
            });
            // Add active class to the clicked button
            document.getElementById(`${type}Btn`).classList.add('active');

            // You can add more logic here based on the selected type (dog or cat)
            console.log(`Selected type: ${type}`);
        }
    </script>
</body>

</html>
