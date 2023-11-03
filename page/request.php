<html lang="en">
    <head> 
        <div class="loader-wrapper">
            <span class="loader"><span class="loader-inner"></span></span>
        </div>
    <?php (require_once 'component/header.php'); ?>
    </head>
    <?php (require_once 'component/navbar.php'); ?>
    <?php (require_once 'component/career.php'); ?>

<div class="container form-bg form-bg-text shadow-lg tab-content">
    <div class="container p-5 tab-pane active" id="requestrepair">
        <div class ="repair-title">
            <h3><?= $requestrepair; ?></h3>
        </div>
        <form class="row gx-5 mt-3">
            <div class="col-md-6">
                <label for="cname" class="form-label text-white">Customer's Name</label>
                <input type="text" class="form-control border-orange" id="" placeholder="Full Name*">

                <label for="cname" class="form-label text-white mt-4">Contact Information</label>

                <input type="text" class="form-control border-orange mt-3" id="" placeholder="Contact Number*">

                <input type="text" class="form-control border-orange mt-3" id="" placeholder="E-mail Address*">

                <input type="text" class="form-control border-orange mt-3" id="" placeholder="Confirm E-mail Address* ">

                <label for="cname" class="form-label text-white">Product Description</label>
                <input type="text" class="form-control border-orange" id="" placeholder="Enter product name / details">

                <label for="cname" class="form-label text-white">Model Number</label>
                <input type="text" class="form-control border-orange" id="" placeholder="Enter Serial number">
            </div>

            <div class ="col-md-6">
                <label for="storepurchase" class="form-label text-white">Store Purchased</label>
                <input type="text" class="form-control border-orange" id="" placeholder="Store Purchased">
                <label for="storepurchase" class="form-label text-white mt-3">Date of Purchase</label>
                <input type="text" class="form-control border-orange" id="" placeholder="Select Date">

                <label for="" class="form-label text-white mt-3">Problem Details</label>
                <textarea class="form-control border-orange" id="" rows="7" placeholder="Write your message..."></textarea>

                <div class="row">
                    <div class="col-md-8">
                        <p class="mt-3">Please retype <b class="captcha"><?= $captcha; ?></b> in the field below inorder to prove us that you are human:</p>
                        <button type="button" class="mt-2 btn btn-dark"><span>Submit</span></button>
                    </div>

                    <div class="col-md-4">
                        <input type="text" class="form-control mt-3" id="" placeholder="Captcha*">
                    </div>
                </div>
            </div>
        </form>
    </div>
</div>