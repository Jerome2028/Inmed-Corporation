<?php
 $title = "Inmed - Corporation"; 
require_once 'component/import.php';
require_once 'component/header.php';
require_once 'component/navbar.php';
?>
<body>
<main>
<section class="growing-fast">
    <div class="banner-bg">
        <div class ="overlay"> 
            <div class ="banner-title">
                <div class="gradient-text">
                    WE HELP YOU GROW YOUR BUSINESS
                </div>
                <p>Are you looking to expand your network and business? or to shop<br>From the comfort of your home and get faster shipping...</p>
                <div class="btn-top container">
                    <div class="gradient-textt">
                        <a href="<?= $BASE; ?>reseller"><button  type="button class" class="btn">Reseller Portal</button></a>
                    </div>
                    <div class="txt-right">
                        <button type="button" class="btn btn-outline-light">Online Direct Shop</button>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section> 

<section class ="social-section">
    <div class ="container d-flex">
        <div class ="first-layer flex-fill">
            <div class="soc-logo">
                <a href="#" class="transbox"><img src = "<?= $BASE; ?>assets/img/png/PHONE-01.png" class ="">+63.2.8571188</a>
                <a href="#" class="transbox"><img src = "<?= $BASE; ?>assets/img/png/cp.png" class ="">0917-81(46633)</a>
                <a href="<?= $BASE; ?>visitors" class="transbox"><img src="<?= $BASE; ?>assets/img/png/CALENDAR-01.png">Request for appointment</a>
                <a href="<?= $BASE; ?>about-us/#location" class="transbox"><img src="<?= $BASE; ?>assets/img/png/arrow.png">Directions</a>
            </div>  
        </div>

    <div class ="second-layer flex-fill">
        <div class="soc-logo">
            <a href ="https://www.facebook.com/InmedCorporation" class="transbox"><img src ="assets/img/png/fb.png"></a>
            <a href ="https://www.linkedin.com/company/inmed-corporation-ph/about/" class="transbox"><img src ="assets/img/png/in.png"></a>
            <a href ="https://www.instagram.com/inmedcorporation/" class="transbox"><img src ="assets/img/png/ig.png"></a>
            <a href ="https://www.youtube.com/@inmedcorporation348" class="transbox"><img src ="assets/img/png/yt.png"></a>
            <a href ="https://www.lazada.com.ph/shop/inmed-corporation-official/" class="transbox"><img src ="assets/img/png/laz.png" class="laz"></a>
        </div>
    </div>
    </div>
</section>

<section class="who-we-are">
    <div class ="container">
        <div class="our-mission">
            <div class ="row">
                <div class ="col-md-6">
                    <div class ="info-text container">
                        <h1>WHO WE ARE</h1>
                        <p><span class ="inmed-color fw-bold">Inmed Corporation</span> is a distributor of quality healthcare supplies and medical products that provide the best.</p>
                    </div>
                    <div class ="our-mission">
                        <div class ="container">
                                <h2>Our<span class="inmed-color"> Vision</h2>
                            <div class ="row mt-3">
                                <div class="col-sm-2 mission-img rounded">
                                    <i class="fa-solid fa-eye" style="color: #ff7c00;"></i>
                                </div>

                                <div class="col-sm-10">
                                    <p>To be the preferred supplier to all resellers in the healthcare industry.</p>
                                </div>
                            </div>
                        </div>
                        <div class="mt-5"></div>

                        <div class ="container">
                                <h2>Our <span class="inmed-color">Mission</span></h2>
                            <div class ="row mt-3">
                                <div class="col-sm-2 mission-img rounded">
                                    <i class="fa-solid fa-compass" style="color: #ff7c00;"></i>
                                </div>
                                <div class="col-sm-10">
                                    <p>To help our resellers grow their business through products and services that provide unequal value.</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="container">
                        <div class="inmed-alone">
                            <img src="assets/img/img11.jpg" class="shadow-lg rounded">
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<section class="we-are-ready">
    <div class="container multi-text">
        <h1><span class ="info-text fw-bolder">WE ARE READY </span>TO HELP YOU</h1>
        <div class="mb-2"></div>
        <p>By adding you, your business and/or products to our database, you can create more sales. No upfront costs!
        Easy to fill out, easy to send and it’s automated so you won’t miss any emails!</p>
        <div class="card mt-3 shadow-sm">
            <div class="card-body bg-white">
    <form id="home-form" method="POST" action="controller/controller.captcha-form.php?mode=ready" class="form-info mt-3">
        <div class="row m-3">
            <div class="col-sm-4">
                <input required name="cf_name" type="text" class="form-control" placeholder="Name*">
            </div>

            <div class="col-sm-4">
                <input required name="cf_email" type="text" class="form-control" placeholder="E-mail*">
            </div>

            <div class="col-sm-4">
                <input required name="cf_phone" type="text" class="form-control" placeholder="Contact Number">
            </div>

            <div class="col-sm-8 mt-3">
                <textarea class="form-control border-3" rows="4" placeholder="Message (if Any)"></textarea>
            </div>

            <div class="col-sm-4 mt-3">
                <input required name="cf_business" type="text" class="form-control" placeholder="Business Name* ">
                <button type="text" class="btn btn-contact"  data-callback='onSubmit' 
                data-action='submit'>Get your Contact Form</button>
            </div>
        </div>
    </form>
        </div>
        </div>
    </div>
</section>

<section class="stay-upto-date">
    <div class ="container">
        
    <div class="text-center">
        <h1>STAY UP-TO-DATE</h1>
        <p class="mt-3">Please keep in touch by joining our mailing list. We promise, we'll only send you important,relevant information from time to time. Not more than once a month. Just to be clear.</p>
    </div>
    <div class="card-sm mt-3">
        <div class="card-body">
            <form action ="controller/controller.captcha-form.php?mode=stay" method ="POST" class="row stay-update" id ="stay-update">
                <div class ="container">
                    <div class="row">
                        <div class="col-sm-12 mx-auto">
                            <div class="search-bottom">
                                <input required type="email" name="ic_email" class="form-control mb-1 mt-2 mx-auto w-50" placeholder="E-mail Address*">
                            </div>
                        </div>

                        <div class="d-flex justify-content-center">        
                            <div class="g-recaptcha mt-2 mx-auto" data-sitekey="6Lc22AUlAAAAAK26UUbS4C96G9oy7mkPe7eSP79V" data-callback="onRecaptchaSuccess" data-expired-callback="onRecaptchaResponseExpiry" data-error-callback="onRecaptchaError"></div>
                        </div>
                        <div class="d-flex justify-content-center"> 
                            <button class="g-recaptcha mx-auto btn btn-dark" type="button"
                                onclick='onSubmit()' data-action='submit' 
                                data-sitekey="6Lc22AUlAAAAAK26UUbS4C96G9oy7mkPe7eSP79V"><span>Submit</span>
                            </button>
                        </div>
                    </div>
                </div>
            </form>
        </div>
    </div>
</div>
    <script>
        function onSubmit(token) {
            $("#stay-update").trigger('submit');
        }
    </script>

</section> 
 
    <?php include_once 'component/footer.php';?>
</main>

<script>
$(function(){
    $(".form-info").on("submit", function(e) {
        e.preventDefault();
        var error = false; var message = '';

    });

});
</script>

<script>

$(function() {
    $(".stay-update").on("submit", function(e) {

        e.preventDefault();

        var error = false; var message = '';
     
        var ic_email = $(this).find("input[name='ic_email']").val();


        if (ic_email  == "")
            error = true;
            message = 'Email required';

        if (error) {
            Swal.fire({
            html: message,
            position: 'top-end',
            icon: 'error',
            title: 'Incomplete fields',
            showConfirmButton: false,
            timer: 1500,
            width: '300px'
            });
            return
        }

        $(".stay-update, body").css({
            opacity: "0.5",
            cursor: "wait"
        });

        var $inputs = $(this).find("input, select, button, textarea");
        var action = $(this).attr("action");
        var type = $(this).attr("method");
        var formData = new FormData(this);

        $inputs.prop("disabled", true);
        window.onbeforeunload = function() {
            return "Are you sure you want to navigate away from this page?";
        };

        $.ajax({
            url: action,
            type: type,
            data: formData,
            success: function(data) {
                
                window.onbeforeunload = null;

                $(".repair-form, body").css({
                    opacity: "1",
                    cursor: "auto"
                });

                $inputs.prop("disabled", false);
                $(":submit").val("submit");

                Swal.fire({
                position: 'top-end',
                icon: 'success',
                html: data,
                title: 'match',
                showConfirmButton: false,
                timer: 1500
                })
                
                $inputs.val("");

                if(data.toLowerCase().trim() == "action complete") {
                    console.log('success');
                    window.location.reload = "home.php";
                    return
                }
            },
            cache: false,
            contentType: false,
            processData: false
        });
    
});
});
</script>
</body>

<script src="https://www.google.com/recaptcha/api.js?render=" async defer>
</script>

<script>
    AOS.init({
    once:true
});


</script>

</html>