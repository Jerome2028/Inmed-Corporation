<?php
 $title = "Inmed - Corporation"; 
require_once 'component/import.php';
require_once 'component/header.php';
require_once 'component/navbar.php';
?>
<style>
.manuals label {
    margin-left: 10rem!important;
}
.row .col-md-2 p{ 
    text-align: center;
    font-size: 12px;
}
</style>
<body>
<main>
<section class="section-careers shadow-sm">
        <div class="container">
            <div class="about-content">
            <p><a href="https://inmed.com.ph/dev_site/">Home</a> / Downloads</p>
            <h3 class="mt-3">Manuals</h3>
            </div>
        </div>
    </section>
    <section class = "manuals">
        <div class = "container">
        <form class="form-inline">
            <label class="mb-3">Search Products Manuals:</label>
            <div class="input-group w-75 mx-auto">
                <input type="text" class="form-control" name="manuals" id="manuals" value="" placeholder="What are you looking for...">
                <button class="btn btn-glass" type="button" id="search_manuals"><i class="fa-solid fa-magnifying-glass"></i></button>
            </div>
        </div>
    </section>
    <section>
        <div class="container">
            <div class="card border border-0 shadow">
            <div class=" card-body row">
                <div class="col-md-2 m-3">
                <a href ="<?= $BASE; ?>assets/static/Manuals/Angelbiss Oxygen Concentrator with Nebulizer Function.pdf"><img src="<?= $BASE; ?>assets/img/pdf-file.png" class="mx-auto d-block w-50">
                <p>Angelbiss Oxygen Concentrator with Nebulizer Function</p></a>
                </div>
                <div class="col-md-2 m-3">
                 <a href ="<?= $BASE; ?>assets/static/Manuals/Brielle Automatic Arm-Type BP Monitor BM-130.pdf">
                <img src="<?= $BASE; ?>assets/img/pdf-file.png" class="mx-auto d-block w-50">
                <p>Brielle Automatic Arm-Type BP Monitor BM-130</p></a>
                </div>
                <div class="col-md-2 m-3">
                <a href ="<?= $BASE; ?>assets/static/Manuals/Brielle Automatic Arm-Type BP Monitor BM-26U.pdf">
                <img src="<?= $BASE; ?>assets/img/pdf-file.png" class="mx-auto d-block w-50">
                <p>Brielle Automatic Arm-Type BP Monitor BM-26U</p></a>
                </div>
                <div class="col-md-2 m-3">
                <a href ="<?= $BASE; ?>assets/static/Manuals/Brielle Automatic Arm-Type BP Monitor BM-63U.pdf">
                <img src="<?= $BASE; ?>assets/img/pdf-file.png" class="mx-auto d-block w-50">
                <p>Brielle Automatic Arm-Type BP Monitor BM-63U</p></a>
                </div>
                <div class="col-md-2 m-3">
                <a href ="<?= $BASE; ?>assets/static/Manuals/Brielle Automatic Arm-Type BP Monitor with Adaptor BM-270.pdf">
                <img src="<?= $BASE; ?>assets/img/pdf-file.png" class="mx-auto d-block w-50">
                <p>Brielle Automatic Arm-Type BP Monitor with Adaptor BM-270</p></a>
                </div>
                <div class="col-md-2 m-3">
                <a href ="<?= $BASE; ?>assets/static/Manuals/Brielle Automatic Wrist-Type BP Monitor BM-120.pdf">
                <img src="<?= $BASE; ?>assets/img/pdf-file.png" class="mx-auto d-block w-50">
                <p>Brielle Automatic Wrist-Type BP Monitor BM-120</p></a>
                </div>
                <div class="col-md-2 m-3">
                <a href ="<?= $BASE; ?>assets/static/Manuals/Brielle Professional TENS BS-100.pdf">
                <img src="<?= $BASE; ?>assets/img/pdf-file.png" class="mx-auto d-block w-50">
                <p>Brielle Professional TENS BS-100</p></a>
                </div>
                <div class="col-md-2 m-3">
                <a href ="<?= $BASE; ?>assets/static/Manuals/Creative Fingertip Pulse Oximeter.pdf">
                <img src="<?= $BASE; ?>assets/img/pdf-file.png" class="mx-auto d-block w-50">
                <p>Creative Fingertip Pulse Oximeter</p></a>
                </div>
                <div class="col-md-2 m-3">
                <a href ="<?= $BASE; ?>assets/static/Manuals/Getwell Kids Nebulizer GKN-1100 (Moly Cow).pdf">
                <img src="<?= $BASE; ?>assets/img/pdf-file.png" class="mx-auto d-block w-50">
                <p>Getwell Kids Nebulizer GKN-1100 (Moly Cow)</p></a>
                </div>
                <div class="col-md-2 m-3">
                <a href ="<?= $BASE; ?>assets/static/Manuals/Getwell Kids Nebulizer GKN-1200 (Jerry Fish).pdf">
                <img src="<?= $BASE; ?>assets/img/pdf-file.png" class="mx-auto d-block w-50">
                <p>Getwell Kids Nebulizer GKN-1200 (Jerry Fish)</p></a>
                </div>
                <div class="col-md-2 m-3">
                <a href ="<?= $BASE; ?>assets/static/Manuals/Getwell Kids Nebulizer GKN-1300 (Bebe Penguin).pdf">
                <img src="<?= $BASE; ?>assets/img/pdf-file.png" class="mx-auto d-block w-50">
                <p>Getwell Kids Nebulizer GKN-1300 (Bebe Penguin)</p></a>
                </div>
                <div class="col-md-2 m-3">
                <a href ="<?= $BASE; ?>assets/static/Manuals/Getwell Nebulizer GWN-1000.pdf">
                <img src="<?= $BASE; ?>assets/img/pdf-file.png" class="mx-auto d-block w-50">
                <p>Getwell Nebulizer GWN-1000</p></a>
                </div>
                <div class="col-md-2 m-3">
                <a href ="<?= $BASE; ?>assets/static/Manuals/Getwell Nebulizer GWN-1250.pdf">
                <img src="<?= $BASE; ?>assets/img/pdf-file.png" class="mx-auto d-block w-50">
                <p>Getwell Nebulizer GWN-1250</p></a>
                </div>
                <div class="col-md-2 m-3">
                <a href ="<?= $BASE; ?>assets/static/Manuals/Getwell Pocket Mesh Nebulizer GM-350.pdf">
                <img src="<?= $BASE; ?>assets/img/pdf-file.png" class="mx-auto d-block w-50">
                <p>Getwell Pocket Mesh Nebulizer GM-350</p></a>
                </div>
                <div class="col-md-2 m-3">
                <a href ="<?= $BASE; ?>assets/static/Manuals/Inmed Finger Pulse Oximeter F-100.pdf">
                <img src="<?= $BASE; ?>assets/img/pdf-file.png" class="mx-auto d-block w-50">
                <p>Inmed Finger Pulse Oximeter F-100</p></a>
                </div>
                <div class="col-md-2 m-3">
                <a href ="<?= $BASE; ?>assets/static/Manuals/Inmed Finger Pulse Oximeter F-110.pdf">
                <img src="<?= $BASE; ?>assets/img/pdf-file.png" class="mx-auto d-block w-50">
                <p>Inmed Finger Pulse Oximeter F-110</p></a>
                </div>
                <div class="col-md-2 m-3">
                <a href ="<?= $BASE; ?>assets/static/Manuals/Inmed Finger Pulse Oximeter F-120.pdf">
                <img src="<?= $BASE; ?>assets/img/pdf-file.png" class="mx-auto d-block w-50">
                <p>Inmed Finger Pulse Oximeter F-120</p></a>
                </div>
                <div class="col-md-2 m-3">
                <a href ="<?= $BASE; ?>assets/static/Manuals/Inmed Optics Microscope IOM-12 and IOM-13A.pdf">
                <img src="<?= $BASE; ?>assets/img/pdf-file.png" class="mx-auto d-block w-50">
                <p>Inmed Optics Microscope IOM-12 and IOM-13A</p></a>
                </div>
                <div class="col-md-2 m-3">
                <a href ="<?= $BASE; ?>assets/static/Manuals/Steripak Sealing Machine.pdf">
                <img src="<?= $BASE; ?>assets/img/pdf-file.png" class="mx-auto d-block w-50">
                <p>Steripak Sealing Machine</p></a>
                </div>
                <div class="col-md-2 m-3">
                <a href ="<?= $BASE; ?>assets/static/Manuals/TMS Anti-Bedsore Mattress System 7700.pdf">
                <img src="<?= $BASE; ?>assets/img/pdf-file.png" class="mx-auto d-block w-50">
                <p>TMS Anti-Bedsore Mattress System 7700</p></a>
                </div>
                <div class="col-md-2 m-3">
                <a href ="<?= $BASE; ?>assets/static/Manuals/TMS Defibrillator TD-1000.pdf">
                <img src="<?= $BASE; ?>assets/img/pdf-file.png" class="mx-auto d-block w-50">
                <p>TMS Defibrillator TD-1000</p></a>
                </div>
                <div class="col-md-2 m-3">
                <a href ="<?= $BASE; ?>assets/static/Manuals/TMS Defibrillator TD-9000D.pdf">
                <img src="<?= $BASE; ?>assets/img/pdf-file.png" class="mx-auto d-block w-50">
                <p>TMS Defibrillator TD-9000D</p></a>
                </div>
                <div class="col-md-2 m-3">
                <a href ="<?= $BASE; ?>assets/static/Manuals/TMS Ear & Forehead Thermometer EF-401B.pdf">
                <img src="<?= $BASE; ?>assets/img/pdf-file.png" class="mx-auto d-block w-50">
                <p>TMS Ear & Forehead Thermometer EF-401B</p></a>
                </div>
                <div class="col-md-2 m-3">
                <a href ="<?= $BASE; ?>assets/static/Manuals/TMS Infusion Pump TI-600.pdf">
                <img src="<?= $BASE; ?>assets/img/pdf-file.png" class="mx-auto d-block w-50">
                <p>TMS Infusion Pump TI-600</p></a>
                </div>
                <div class="col-md-2 m-3">
                <a href ="<?= $BASE; ?>assets/static/Manuals/TMS Infusion Pump TI-820.pdf">
                <img src="<?= $BASE; ?>assets/img/pdf-file.png" class="mx-auto d-block w-50">
                <p>TMS Infusion Pump TI-820</p></a>
                </div>
                <div class="col-md-2 m-3">
                <a href ="<?= $BASE; ?>assets/static/Manuals/TMS Nebulizer Pump T200.pdf">
                <img src="<?= $BASE; ?>assets/img/pdf-file.png" class="mx-auto d-block w-50">
                <p>TMS Nebulizer Pump T200</p></a>
                </div>
                <div class="col-md-2 m-3">
                <a href ="<?= $BASE; ?>assets/static/Manuals/TMS Oxygen Concentrator 7F-5.pdf">
                <img src="<?= $BASE; ?>assets/img/pdf-file.png" class="mx-auto d-block w-50">
                <p>TMS Oxygen Concentrator 7F-5</p></a>
                </div>
                <div class="col-md-2 m-3">
                <a href ="<?= $BASE; ?>assets/static/Manuals/TMS Oxygen Concentrator TC-170.pdf">
                <img src="<?= $BASE; ?>assets/img/pdf-file.png" class="mx-auto d-block w-50">
                <p>TMS Oxygen Concentrator TC-170</p></a>
                </div>
                <div class="col-md-2 m-3">
                <a href ="<?= $BASE; ?>assets/static/Manuals/TMS Oxygen Concentrator TC-260.pdf">
                <img src="<?= $BASE; ?>assets/img/pdf-file.png" class="mx-auto d-block w-50">
                <p>TMS Oxygen Concentrator TC-260</p></a>
                </div>
                <div class="col-md-2 m-3">
                <a href ="<?= $BASE; ?>assets/static/Manuals/TMS Portable Suction Unit T-150.pdf">
                <img src="<?= $BASE; ?>assets/img/pdf-file.png" class="mx-auto d-block w-50">
                <p>TMS Portable Suction Unit T-150</p></a>
                </div>
                <div class="col-md-2 m-3">
                <a href ="<?= $BASE; ?>assets/static/Manuals/TMS Syringe Pump TS-900.pdf">
                <img src="<?= $BASE; ?>assets/img/pdf-file.png" class="mx-auto d-block w-50">
                <p>TMS Syringe Pump TS-900</p></a>
                </div>
                <div class="col-md-2 m-3">
                <a href ="<?= $BASE; ?>assets/static/Manuals/TMS Ultrasonic Fetal Doppler A-100C.pdf">
                <img src="<?= $BASE; ?>assets/img/pdf-file.png" class="mx-auto d-block w-50">
                <p>TMS Ultrasonic Fetal Doppler A-100C</p></a>
                </div>
            </div>
            </div>
        </div>
    </section>
</main>
</body>
<script src="<?= $BASE ?>assets/js/search.js"></script>
    <link rel="stylesheet" href="https://code.jquery.com/ui/1.13.2/themes/base/jquery-ui.css">
    <script src="https://code.jquery.com/ui/1.13.2/jquery-ui.js"></script>