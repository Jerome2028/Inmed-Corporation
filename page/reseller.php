<?php 
    $title = "Inmed - Corporation";
    require_once 'component/import.php';
    require_once 'component/header.php';
    require_once 'component/navbar.php';
?>

<?php
function generateRandomString($length = 5) {
    $characters = '23456789abcdefghkmnopqrstuvwxyz';
    $charactersLength = strlen($characters);
    $randomString = '';
    for ($i = 0; $i < $length; $i++) {
        $randomString .= $characters[rand(0, $charactersLength - 1)];
    }
    return $randomString;
}
$captcha = generateRandomString();
$InmedReseller = "Inmed Reseller Registration";
$PeekLoyalty = "Perks & Loyalty Rewards";
$Support = "Support";
?>
<style>
  #topheader .mt-5 {
        margin-top: 8rem!important;
    }
    .reseller-bg {
    background-color: #f5832e;
    /* background-image: linear-gradient(62deg, #f5832e 10%, #ef4f38 40%); */
    margin-top: 20px;
    border-radius: 5px;
    }
    .reseller-bg h1,h3,p{
        color:white;
    }
    .reseller-text h1{
        font-weight: 600;
        text-transform: uppercase;
        font-size: 4rem!important;
        /* letter-spacing: 2px; */
    }
    .border-orange {
    border: 3px solid #f4a886!important;
    }
    .gradient-reseller {
        position: absolute;
        color: white;
        background-color: #ff6d1f;
        background-image: linear-gradient(62deg, #ff6d1f 10%, #ef4f38 40%);
        padding: 0px 25px!important;
        display: block;
        white-space: nowrap;
        margin-left: -25px;
    }
    .spacer {
        margin-top: 7rem !important;
        font-weight: 600;
        text-transform: uppercase;
        font-size: 4rem!important;
        /* letter-spacing: 2px; */
    }
    .btn-warning {
    font-size: 12px;
    text-transform: none;
    background-color: #ff9800!important;
    padding: 8px 16px!important;
    color:white!important
    }
    .reseller img{
        display: block!important;
        margin :auto!important;
    }
    .reseller h3,p{
        text-align: center!important;
        margin-bottom:1rem!important;
        font-weight: 600;
        color:black;
    }
    .border-orange {
    border: 3px solid #f4a886!important;
}
.registration h3,p{
    color:white;
    text-align: left!important;
}
.registration p {
    color: white;
    text-align: left!important;
    font-weight: 100;
}
.form-bg-block .container{
        display: block;
        animation: fadein .8s;
    }
.vl{
    border-left: 4px solid #ff9800;
    height: 270px;
}
.nav-tabs .nav-link.active, .nav-tabs .nav-item.show .nav-link {
    background-color: transparent!important;
    border-color: transparent!important;
    text-decoration: underline!important;
    border-: none!important;
}
.nav-link.active{
color: #f5832e!important;
    font-weight: bold!important;
}
.nav-link.active p{
    color: #f5832e!important;
    font-weight: 600;
}
.nav-tabs .nav-link {
    border: none!important;
}
.nav-tabs{
    border-bottom: none!important;
}
.becoming-reseller .mt-5{
    margin-top: 4rem !important;
}
</style>
  
<body>
<main>
<section class="becoming-reseller bg-light w-100">
    <div class = "container">
    <div class = "row">
        <div class ="col-md-8 reseller-text mt-5">
            <h1 class="mb-3">Becoming an</h1>
            <div class="gradient-reseller">
                <h1>Inmed Reseller</h1>
            </div>
            <h2 class="spacer mb-3">is Simple</h2>
            <button type="button" class="btn btn-warning"><b>FORM HERE</b></button>
        </div>

        <div class ="col-md-4">
            <img src ="<?= $BASE; ?>assets/img/reseller-logo.png" class="w-100">
        </div>
    </div>
    </div> 
</section>

<section class="reseller-service">
    <div class="container">
    <h3 class="text-dark fw-bold"><span class="inmed-color">Reseller Service</span> Include</h3>
        <div class="row mt-5 reseller">
            <div class="col-md-4">
                <h3>Membership</h3>
                <img src="<?= $BASE; ?>assets/img/membership.png" class="w-25 mt-3">
            </div>

            <div class="col-md-4">
                <h3>Perks</h3>
                <img src="<?= $BASE; ?>assets/img/perks.png" class="w-25 mt-3">
            </div>

            <div class="col-md-4">
                <h3>Loyalty  Reward</h3>
                <img src="<?= $BASE; ?>assets/img/loyalty-reward.png" class="w-25 mt-3">
            </div>
        </div>
    </div>
</section>

<section class="bg-light">
<div class="container registration">
    <div class ="row">
        <div class="col-md-9 reseller-bg">
        <?php include_once 'reseller-form.php';?>
        </div>
        <div class="col-md-3">
            <div class="container">
                <form class="form-inline">
                    <div class="input-group top mt-3 w-100">
                        <input type="text" class="form-control border-3" placeholder="Search...">
                    </div>
                </form>
                <h2 class="text-dark mt-5 fw-bold">Forms</h2>
                <ul class="nav nav-tabs mt-3" id="reseller">
                    <li class="nav-item">
                        <div class="form-title">
                            <a href="#ireseller" class="nav-link active" data-bs-toggle="tab"><p class="text-dark"><?= $InmedReseller; ?></p></a>
                        </div>
                    </li>

                    <li class="nav-item">
                        <div class="form-title">
                            <a href="#Support" class="nav-link" data-bs-toggle="tab"><p class="text-dark"><?= $Support; ?></p></a>
                        </div>
                    </li>
                </ul> 
            </div>
        </div>
    </div>
</div>
</section>

<script>
    $(document).ready(function(){
    $('a[data-bs-toggle="tab"]').on('show.bs.tab', function(e) {
        localStorage.setItem('activeTab', $(e.target).attr('href'));
    });
    var activeTab = localStorage.getItem('activeTab');
    if(activeTab){
        $('#reseller a[href="' + activeTab + '"]').tab('show');
    }
});
</script>
    <?php include_once 'component/footer.php';?>
</body>
<script>
  AOS.init();
</script>
</main>