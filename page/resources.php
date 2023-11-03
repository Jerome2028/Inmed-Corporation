<?php 
    $title = "Inmed - Resources"; 
    require_once 'component/import.php';
    require_once 'component/header.php';
    require_once 'component/navbar.php';
?>
    <?php


$captcha = utility::generateRandomString();
$requestrepair = "Request for Repair";
$visitorsAppointment = "Visitor's Appointment Form";
$warrantyReg = " Warranty Registration";
?>

    <style>
    .col-md-4 {
    margin-top: 1rem!important;
    }
    .round {
    border-radius: 5px!important;
    }
    .brochures h3 {
    color:#091018;
    }
    /* .card-body img{
    transition: transform .2s
    }
    .card-body img:hover {
    transform: scale(1.1);
    } */
    .form-bg {
    /* background-color: #f5832e; */
    background-color:#ffffff;
    /* background-image: linear-gradient(62deg, #f5832e 10%, #ef4f38 40%); */
    margin-top: 30px;
    /* border-radius: 50px; */
    }
    .bg-brochure {
    background-color: #f6f6f6;
    }
    /* .form-control {
        border-color: #ffffff!important;
    } */
    .form-bg-text h3 {
    color: #f5832e;
    text-transform: capitalize;
    font-weight: 700;
    }
    .form-bg.container {
        display: block;
    }
    .captcha {
    font-size: 20px;
    letter-spacing: 1px;
    background: #198754;
    padding-left: 8px;
    padding-right: 8px;
    color: #fff;
    border-radius: 5px;
    }
    .form-title h3 {
    color:#c4c0c0;
    font-size: 1.75rem;
    white-space: nowrap;
    text-decoration: none;
    text-align: center;
    }
    .form-title button {
    border: none;
    background-color: transparent;
    }
    .nav-tabs {
    border-bottom: transparent!important;
    }
    .repair-title h3 {
        text-transform: uppercase;
    }
    .nav-tabs .nav-link.active, .nav-tabs .nav-item.show .nav-link h3 {
    background-color: #f5832e;
    }
    .nav-tabs .nav-link.active h3 {
    color: #ffffff;
    font-weight: bold;
    }
    .nav-link a {
    text-decoration: none;
    }
    .brochures .nav {
    justify-content: center;
    }
    .nav-tabs .nav-link {
    border-radius: 5px!important;
    border: none!important;
}
table,th,td{
    color: #545252!important;
}

 .hovereffect {
  width: 100%;
  /* height: 63%; */
  float: left;
  overflow: hidden;
  position: relative;
  text-align: center;
  cursor: default;
  background: #f26f29;
  border-radius: 12px 12px 0px 0px;
}

.hovereffect .overlay {
  width: 100%;
  height: 100%;
  position: absolute;
  overflow: hidden;
  top: 0;
  left: 0;
  padding: 50px 20px;
}

.hovereffect img {
  display: block;
  position: relative;
  max-width: none;
  width: calc(100% + 20px);
  -webkit-transition: opacity 0.15s, -webkit-transform 0.15s;
  transition: opacity 0.35s, transform 0.35s;
  -webkit-transform: translate3d(-10px,0,0);
  transform: translate3d(-10px,0,0);
  -webkit-backface-visibility: hidden;
  backface-visibility: hidden;
}

.hovereffect:hover img {
  opacity: 0.8;
  color: #000000!important;
  filter: alpha(opacity=40);
  -webkit-transform: translate3d(0,0,0);
  transform: translate3d(0,0,0);
}

.hovereffect h2 {
    text-transform: uppercase;
    color: #fff;
    text-align: center;
    position: relative;
    font-size: 60px;
    overflow: hidden;
    padding: 2em 0px;
    background-color: transparent;
}

/* .hovereffect h2:after {
  position: absolute;
  bottom: 0;
  left: 0;
  width: 100%;
  height: 2px;
  background: #fff;
  content: '';
  -webkit-transition: -webkit-transform 0.35s;
  transition: transform 0.35s;
  -webkit-transform: translate3d(-100%,0,0);
  transform: translate3d(-100%,0,0);
} */
.section-brochures .card p {
    letter-spacing: 1.5px;
}

.hovereffect:hover h2:after {
  -webkit-transform: translate3d(0,0,0);
  transform: translate3d(0,0,0);
}

.hovereffect a, .hovereffect p {
  color: #FFF;
  opacity: 0;
  filter: alpha(opacity=0);
  -webkit-transition: opacity 0.35s, -webkit-transform 0.35s;
  transition: opacity 0.35s, transform 0.35s;
  -webkit-transform: translate3d(100%,0,0);
  transform: translate3d(100%,0,0);
}

.hovereffect:hover a, .hovereffect:hover p {
  opacity: 1;
  filter: alpha(opacity=100);
  -webkit-transform: translate3d(0,0,0);
  transform: translate3d(0,0,0);
}
.faq-bg{
    background-color: #f8f9fa;
    padding-top: 50px;
    padding-bottom: 50px;
}
.faq h2{
    font-weight: 600;
}
.resources-form-spacer input[type=text], input[type=email] {
    margin-bottom: 10px!important;
    border: none!important;
    border-radius: 0px!important;
}
.resources-form-spacer .btn-warning{
    padding: 13px 26px!important;
    float: right;
}
.faq, input[type=text]{
    margin-top: 0px!important;
    /* border-right: 0 !important;
    border-radius:5px 0px 0px 5px!important; */
}
.faq .btn-glass {
    margin-top: 0px;
    margin-right: 0px;
}
.faq .nav-tabs .nav-link.active, .nav-tabs .nav-item.show .nav-link h3 {
    background-color: transparent;
    border-color: transparent!important;
}
.faq .nav-tabs .nav-link.active h3 {
    color: #f5832e!important;
    border-color: transparent!important;
    font-weight: 700!important;
    padding-bottom: 1px;
    border-bottom: 2px solid #f5832e!important;
}
.faq .nav {
    justify-content: space-around;
}
.accordion-button:focus {
    border-color: none!important;
    border: none!important;
    box-shadow: none!important;
}
.accordion-button:not(.collapsed) {
    background-color: transparent!important;
}
.accordion-button:not(.collapsed) {
    color: #f5832e;
    box-shadow: none!important;
}
.accordion-item {
    border-bottom: var(--bs-accordion-border-width) solid var(--bs-accordion-border-color)!important;
    border: none;
}
.accordion-item:last-of-type {
    border-bottom-right-radius: 0px!important;
    border-bottom-left-radius: 0px!important;
}
.accordion-button {
    color: #616161;
}
#order ,#account,#product,#payment{
    scroll-margin-top: 200px;
}
/* .repair-title:target{
    display: block!important;
} */
@media only screen and (max-width: 1024px) {
.form-title h3 {
    font-size: 1.5rem;
    }
}
@media only screen and (max-width: 768px) {
.form-title h3 {
    font-size: 1rem;
}
.section-form p {
    color: white;
    font-size: 12px!important;
}
#warrantyReg label {
    font-size: 12px;
}
.card {
    border-color: transparent!important;
}
.card-body .w-100 {
    width: 75%!important;
    margin: auto!important;
    display: block!important;
}
}
    </style>
    <body>
        <main>
            <section class="section-resources shadow-sm">
                <div class="container">
                    <div class="about-content">
                    <p><a href="https://inmed.com.ph/dev_site/">Home</a> / Resources</p>
                    <h3 class="mt-3">Resources Page</h3>
                    </div>
                </div>
            </section>
            <section class="section-brochures">
            <div class = "container">
                <h4 class="fw-bold">Brochures & Catalog</h4>
                    <div class="mt-3 row">
                        <div class="col-md-4 d-flex align-items-stretch">
                            <div class="card shadow rounded-3 border border-0">
                                <div class="hovereffect"> 
                                    <img src="<?= $BASE ?>assets/20th_cover_catalog_a1.jpg" class="round w-100 card-img-top" alt="...">
                        
                                    <div class="overlay">
                                        <a href="<?= $BASE ?>assets/static/anniversary/20th_anniversary_cat_a.pdf"><h2><i class="fa-solid fa-circle-down" style="color: #42b078;"></i></h2></a>
                                    </div>
                                </div>
                                <div class="card-body p-4">
                                    <p class ="lh-lg"><i class="fa-solid fa-check"></i> GENERAL NURSING<br> <i class="fa-solid fa-check"></i> PERSONAL PROTECTIVE EQUIPMENT<br><i class="fa-solid fa-check"></i> INFUSION THERAPHY LINE</p>
                                </div>
                            </div>
                        </div>
                

                    <div class="col-md-4 d-flex align-items-stretch">
                            <div class="card shadow rounded-3 border border-0">
                                <div class="hovereffect"> 
                                    <img src="<?= $BASE ?>assets/20th_cover_catalog_b.jpg" class="round w-100 card-img-top" alt="...">
                        
                                    <div class="overlay">
                                        <a href="<?= $BASE ?>assets/static/anniversary/20th_anniversary_cat_b.pdf"><h2><i class="fa-solid fa-circle-down" style="color: #42b078;"></i></h2></a>
                                    </div>
                                </div>
                                <div class="card-body p-4">
                                    <p class="lh-lg"><i class="fa-solid fa-check"></i> ANESTHESIA & AIRWAY<br><i class="fa-solid fa-check"></i> GASTROENTEROLOGY<br><i class="fa-solid fa-check"></i> Orthopedic Products<br><i class="fa-solid fa-check"></i> RENAL CARE RESPIRATORY CARE<br><i class="fa-solid fa-check"></i> STERILIZATION<br><i class="fa-solid fa-check"></i> SURGERY & OPERATION<br><i class="fa-solid fa-check"></i> UROLOGICAL PRODUCTS</p>
                                </div>
                            </div>
                        </div>
                    

                        <div class="col-md-4 d-flex align-items-stretch">
                            <div class="card shadow rounded-3 border border-0">
                                <div class="hovereffect"> 
                                    <img src="<?= $BASE ?>assets/20th_cover_catalog_c.jpg" class="round w-100 card-img-top" alt="...">
                        
                                    <div class="overlay">
                                        <a href="<?= $BASE ?>assets/static/anniversary/20th_anniversary_cat_c.pdf"><h2><i class="fa-solid fa-circle-down" style="color: #42b078;"></i></h2></a>
                                    </div>
                                </div>
                                <div class="card-body p-4">
                                    <p class="lh-lg"><i class="fa-solid fa-check"></i> MEDICAL EQUIPMENTS <br><i class="fa-solid fa-check"></i> OTHER HEALTH CARE PRODUCTS</p>
                                </div>
                            </div>
                        </div>

                    <div class="mt-3"></div>

                        <div class="col-md-4 d-flex align-items-stretch">
                            <div class="card shadow rounded-3 border border-0">
                                <div class="hovereffect"> 
                                    <img src="<?= $BASE ?>assets/20th_cover_catalog_d.jpg" class="round w-100 card-img-top" alt="...">
                        
                                    <div class="overlay">
                                        <a href="<?= $BASE ?>assets/static/anniversary/20th_anniversary_cat_d.pdf"><h2><i class="fa-solid fa-circle-down" style="color: #42b078;"></i></h2></a>
                                    </div>
                                </div>
                                <div class="card-body p-4">
                                    <p class="lh-lg"><i class="fa-solid fa-check"></i> CLEAN SPACE <br><i class="fa-solid fa-check"></i> POWERED AIR PURIFYING RESPIRATORY (PAPR)</p>
                                </div>
                            </div>
                        </div>

                        <div class="col-md-4 d-flex align-items-stretch">
                            <div class="card shadow rounded-3 border border-0">
                                <div class="hovereffect"> 
                                    <img src="<?= $BASE  ?>assets/20th_cover_catalog_e.jpg" class="round w-100 card-img-top" alt="...">
                        
                                    <div class="overlay">
                                        <a href="<?= $BASE ?>assets/static/anniversary/20th_anniversary_cat_e.pdf"><h2><i class="fa-solid fa-circle-down" style="color: #42b078;"></i></h2></a>
                                    </div>
                                </div>
                                <div class="card-body p-4">
                                    <p class="lh-lg"><i class="fa-solid fa-check"></i> CLEAN SPACE <br><i class="fa-solid fa-check"></i> POWERED AIR PURIFYING RESPIRATORY (PAPR)</p>
                                </div>
                            </div>
                        </div>

                        <div class="col-md-4 d-flex align-items-stretch">
                            <div class="card shadow rounded-3 border border-0">
                                <div class="hovereffect"> 
                                    <img src="<?= $BASE ?>assets/cover_catalog_anchor_surg_needle_f.jpg" class="round w-100 card-img-top" alt="...">
                        
                                    <div class="overlay">
                                        <a href="<?= $BASE ?>assets/static/anniversary/Anchor_Needle_Brochure_FA_2019_Actual_Size_Print_web2022.pdf"><h2><i class="fa-solid fa-circle-down" style="color: #42b078;"></i></h2></a>
                                    </div>
                                </div>
                                <div class="card-body p-4">
                                    <p class="lh-lg"><i class="fa-solid fa-check"></i> CLEAN SPACE <br><i class="fa-solid fa-check"></i> POWERED AIR PURIFYING RESPIRATORY (PAPR)</p>
                                </div>
                            </div>
                        </div>
                </div>
            </div>
            </section>

            <section class="section-form">
                <div class="container brochures">
                    <h4 class="mb-3 fw-bold">Forms</h4>
                        <ul class="nav nav-tabs" id ="resources-tab">
                            <li class="nav-item">
                                <div class="form-title">
                                    <a href="#requestrepair" class="nav-link active" data-bs-toggle="tab"><h3><?= $requestrepair; ?></h3></a>
                                </div>
                            </li>

                            <li class="nav-item">
                                <div class="form-title">
                                    <a href="#visitorsAppointment" class="nav-link" data-bs-toggle="tab"><h3><?= $visitorsAppointment; ?></h3></a>
                                </div>
                            </li>

                            <li class="nav-item">
                                <div class="form-title">
                                    <a href="#warrantyReg" class="nav-link" data-bs-toggle="tab"><h3><?= $warrantyReg; ?></h3></a>
                                </div>
                            </li>
                        </ul>
                    <?php include_once 'forms.php';?>
                </div>
            <script>
                    $(document).ready(function(){
                    $('a[data-bs-toggle="tab"]').on('show.bs.tab', function(e) {
                        localStorage.setItem('activeTab', $(e.target).attr('href'));
                    });
                    var activeTab = localStorage.getItem('activeTab');
                    if(activeTab){
                        $('#resources-tab a[href="' + activeTab + '"]').tab('show');
                    }
                });
            </script>
            </section>

    <section class="section-faq">
    <div class="faq-bg">
            <div class="container faq">
            <h2 class="mb-3 text-center">How can we help you ?</h2>
                <div class ="row d-flex justify-content-center">
                    <div class="col align-self-center">
                        <div class="input-group mx-auto w-75">
                            <input type="text" class="form-control rounded-start" placeholder="Type your question...">
                            <button class="btn btn-glass" type="button"><i class="fa-solid fa-magnifying-glass"></i></button>
                        </div>
                    </div>

                    <nav id="faq-scroll" class="navbar navbar-light bg-light flex-column align-items-stretch">
                        <ul class="nav nav-tabs mt-3" id="faqs">
                            <li class="nav-item">
                                <div class="form-title">
                                    <a href="#order" class="nav-link active"><h3>ORDER</h3></a>
                                </div>
                            </li>

                            <li class="nav-item">
                                <div class="form-title">
                                    <a href="#account" class="nav-link"><h3>ACCOUNT</h3></a>
                                </div>
                            </li>

                            <li class="nav-item">
                                <div class="form-title">
                                    <a href="#product" class="nav-link" ><h3>PRODUCT</h3></a>
                                </div>
                            </li>

                            <li class="nav-item">
                                <div class="form-title">
                                    <a href="#payment" class="nav-link"><h3>PAYMENT AND BILLING</h3></a>
                                </div>
                            </li>
                        </ul>
                    </nav>
                </div>
            </div>
        </div>
        <?php 
            include_once 'faq.php';
        ?>
        <script>
    $(document).ready(function(){
    $('a[data-bs-toggle="tab"]').on('show.bs.tab', function(e) {
        localStorage.setItem('activeTab', $(e.target).attr('href'));
    });
    var activeTab = localStorage.getItem('activeTab');
    if(activeTab){
        $('#faqs a[href="' + activeTab + '"]').tab('show');
    }
});
</script>
    </section>
            <?php include_once 'component/footer.php';?>
        </main>
    </body>