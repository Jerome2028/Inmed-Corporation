<?php
      $title = "Inmed - About Us"; 
      require_once 'component/import.php';
      require_once 'component/header.php';
      require_once 'component/navbar.php';
    ?>
    <?php (require 'date.php'); 
    // $store = $def;
    ?>
    <body>
   
    <main>
        <section class="section-about">
            <div class="container">
                <div class="about-content">
                <p><a href="index.php">Home</a> /  About us</p>
                <h3 class="mt-3">About us Page</h3>
                </div>
            </div>
        </section>
        <section class="inmed-corporation">
            <div class="container inmed-corp">
                <div class="row">
                    <div class="col-sm-6">
                        <h2 class="fw-bold"><span class="inmed-color">Inmed</span> Corporation</h2>
                        <p class="mt-4">Is the country’s leading and trusted master distributor of quality local and imported medical products and supplies. With the primary focus of providing solid marketing support, Inmed Corporation has established a dependable structure offering significant value to its resellers and dealers in the Philippines and neighboring Asia Pacific Countries</p>
                    </div>

                    <div class="col-sm-6">
                        <img src="<?= $BASE ?>assets/img/inmed.png" class="w-75 rounded shadow">
                    </div>
                </div>
            </div>
        </section>

        <section class="section-our-values">
            <div class="container our-values">
                <div class="row">
                    <div class="col-sm-6" id="second">
                        <img src="<?= $BASE ?>assets/img/our-values.png" class="w-75 rounded shadow">
                    </div>
                    <div class="col-sm-6" id="first">
                    <h2 class="fw-bold">Our <span class="inmed-color">Values<span></h2>
                    <p class="mt-4">We pursue long term partnership with our customers and take pride in ethical business practice while maintaining a flourishing work environment.</p>
                    </div>
                </div>
            </div>
        </section> 
        <section class="section-come-visit-us" id="location">
            <div class="overlayy">
            <div class="container visit-us-txt mb-5">
                <h3><i class="fa-solid fa-shop fa-xl"></i><span><?=$status?></span><?=$msg?></h3>
            </div>

            <div class="container">
                <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3860.881372778918!2d121.07860621535178!3d14.605832880862877!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3397b802becba0a3%3A0xcbff08274e0928c0!2sInmed%20Corporation!5e0!3m2!1sen!2sph!4v1680497338472!5m2!1sen!2sph" height="450" style="border:0; width:100%;" class="rounded" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
            </div>

            <div class="container visit-us-txt">
                <form action ="controller/controller.captcha-form.php?mode=come-visit" method ="POST" class="row warranty-form" id ="warranty">
                <div class="card mt-5 shadow-sm">
                        <div class="card-body bg-white p-5">
                    <div class ="row">
                        <div class="col-md-8">
                            <div class="row">
                                <div class="col-md-6 mb-2">
                                    <input type="text" class="form-control form-control-md border-orange" placeholder="Name">
                                </div>

                                <div class="col-md-6 mb-2">
                                    <input type="text" class="form-control form-control-md border-orange" placeholder="Email">
                                </div>
                            </div>
                            <textarea class="form-control form-control-md border-orange" id="" rows="4" placeholder="Message (if Any)"></textarea> 
                            <div class="col-md-4">
                                <button type="button" class="mt-3 btn btn-glass"><p class="text-white">Submit</p></button>
                            </div>
                        </div>

                        <div class="col-md-4">
                                <h1>COME <span>VISIT US<span></h1>
                                <p>We’re open daily for walk-ins and reservations!<br>
                                5 Calle Industria, Bagumbayan<br>
                                Quezon City 1110 Philippines<br>
                                +63.2.8571188</p>
                        </div>
                         </div>                 
                    </div>                 
                    </div>
                </form>
            </div>
            </div>
        </section>
<?php
    include_once 'component/footer.php';
    ?>
    </main>
    </body>
