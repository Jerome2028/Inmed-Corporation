<?php 
    $title = "Inmed - Corporation";
    require_once 'component/import.php';
    require_once 'component/header.php';
    require_once 'component/navbar.php';
    ?>
    <style>
    .career-bg {
        background-color: #f6f6f6;
        padding-top: 50px;
        padding-bottom: 240px;
    }
    .career-text span{
    color: #f5832e;
    text-align: center;
    font-weight: 600;
    font-size: 3rem;
}
.career-text h1 {
    color: #212529;
    text-align: center;
    font-weight: 600;
    font-size: 3rem;
}
    .career-img img{
        display: block;
        margin-left: auto;
        margin-right: auto;
        margin-top: -200px;
    }
    .career-img .w-25 {
    width: 600px!important;
    border-radius: 5px;
}
.section-explore-career {
    margin-top: -70px;
}
.section-explore-career .col-sm-5 .btn-glass {
    padding: 11px!important;
    border-radius: 0px!important;
}
/* .section-explore-career .row .col-sm-4 .form-control{
    border-width: 1px!important;
} */
    .explorer h4{
        text-align: center;
    font-weight: 600;
    color: #212529;
    }
    .explorer span {
    color: #f5832e;
    }
    .explorer-bg{
        background-color: #f49619;
       /* background-color: #f6f6f6; */
        padding-bottom: 3rem;
        padding-top: 3rem;
    }
    .view-info h2{
        font-size: 1.5rem;
        color: #616161;
    }
    .view-info h4 span{
        font-size: 1rem;
        color: #616161;
    }

    hr.line {
        border: 1px solid #616161;
    margin-top: 1.5rem;
    margin-bottom: 1.5rem;
}
.view-info .btn .btn-warning{
    background-color: #f49619!important;
    color: white;
    border-radius: none !important;
}
.popup {
    position: fixed;
    top: 0;
    width: 100vw;
    height: 100vh;
    background-color: rgba(0, 0, 0, .5);
    display: grid;
    place-content: center;
    opacity: 0;
    pointer-events: none;
    transition: 700ms ease-in-out opacity;
    line-height: 30px;
}
.popup-content {
    width: clamp(300px, 90vw, 1000px);
    background-color: #fff;
    padding: clamp(1.5rem, 100vw, 3rem);
    /* box-shadow: 0 0 .5em rgba(0, 0, 0, .5); */
    border-radius: .5em;
    opacity: 0;
    transform: translateY(20%);
    transition: 200ms ease-in-out opacity,
                200ms ease-in-out transform;
    position: relative;
}
.popup span {
    position: absolute;
    top: 2rem;
    right: 2rem;
    line-height: 1;
    cursor: pointer;
    user-select: none;
}
.popup h1:active {
    transform: scale(.9);
}

.showPopup {
    opacity: 1;
    transform: translateY(0);
    pointer-events: all;
    z-index: 10;
        overflow: auto;
}
.modal-title {
    color: #f5832e!important;
}
@media only screen and (max-width: 1024px) {
    .career-text h1 {
    font-size: 2.5rem;
}
.career-img .w-25 {
    width: 500px!important;
}
.popup-content {
    width: clamp(271px, 80vw,800px);
    background-color: #fff;
    padding: clamp(1.5rem, 100vw, 2.5rem)
}
.popup {
    line-height:28px!important
}

}
@media only screen and (max-width: 425px) {
.career-text h1 {
    font-size: 1.5rem;
}
.career-img .w-25 {
    width: 401px!important;
}
.explorer h3 {
    font-size: 1rem!important;
}
}
</style>
    <body>
        <main>
        <section class="section-careers shadow-sm">
        <div class="container">
                <div class="about-content">
                <p><a href="index.php">Home</a> / Careers</p>
                <h3 class="mt-3">Careers Page</h3>
                </div>
            </div>
            </section>
        <section class="section-career">
            <div class="container-fluid">
                <div class="career-bg career-text">
                    <h1>"We are <span>Hiring!</span>"</h1>
                </div>

                <div class= "career-img">
                    <img src ="<?= $BASE; ?>assets/img/career.jpg" class="w-25">
                </div>
            </div>
        </section>

        <section class="section-explore-career">
            <div class="container">
                <div class="explorer mb-4">
                    <h4>Explore career opportunities at <span> Inmed</span></h4>
                </div>
            </div>

            <div class="container-fluid">
                <div class="explorer-bg">
                    <div class="container">
                        <div class="bg-white rounded">
                            <div class="row">
                                <div class="d-flex justify-content-evenly">
                                    <div class="col-sm-4">
                                    <label for="keyword" class="form-label fw-bold mt-3">Keyword</label>
                                    <input type="text" class="form-control mb-4" placeholder="Type here..." aria-label="keyword">
                                    </div>
                                  
                                    <div class="col-sm-5">
                                    <label for="department" class="form-label fw-bold mt-3">Department</label>
                                        <div class="input-group">
                                            <input type="text" class="form-control mb-4" placeholder="Name" aria-label="department">
                                            <button class="btn btn-glass mb-4" type="button">Search Jobs</button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <section>
            <div class="container view-info">
                <div class="row">
                    <div class="col-md-8">
                        <h2>PROFESSIONAL RESELLER SPECIALIST</h2>
                        <h4><i class="fa-solid fa-location-dot" style="color:#616161;"></i><span class="ms-3">Bagumbayan, Quezon City</span></h4>
                    </div>

                    <div class ="col-md-4">
                        <button class="btn btn-warning"><span>View Info</span></button>
                    </div>

                    <hr class="line">

                    <div class="col-md-8">
                        <h2>PROFESSIONAL RESELLER SPECIALIST</h2>
                        <h4><i class="fa-solid fa-location-dot" style="color:#616161;"></i><span class="ms-3">Bagumbayan, Quezon City</span></h4>
                    </div>

                    <div class ="col-md-4">
                        <button class="btn btn-warning"><span>View Info</span></button>
                    </div>

                    <hr class="line">

                    <!-- <div class="col-md-8">
                        <h2>PROFESSIONAL RESELLER SPECIALIST</h2>
                        <h4><i class="fa-solid fa-location-dot" style="color:#616161;"></i><span class="ms-3">Bagumbayan, Quezon City</span></h4>
                    </div>

                    <div class ="col-md-4">
                        <button class="btn btn-warning"><span>View Info</span></button>
                    </div>

                    <hr class="line">

                    <div class="col-md-8">
                        <h2>PROFESSIONAL RESELLER SPECIALIST</h2>
                        <h4><i class="fa-solid fa-location-dot" style="color:#616161;"></i><span class="ms-3">Bagumbayan, Quezon City</span></h4>
                    </div>

                    <div class ="col-md-4">
                        <button class="btn btn-warning"><span>View Info</span></button>
                    </div>

                    <hr class="line"> -->
                    
                </div>
            </div>     
        </section>
        <section>
        <div class="popup">
        <div class="popup-content container shadow">
       <span class="btn-close" aria-label="Close"></span>
            <h2 class ="modal-title">PROFESSIONAL RESELLER SPECIALIST</h2>
            <p class ="fw-bold mt-2"><i class="fa-solid fa-location-dot fa-xl" style="color:#616161;"></i>&nbsp; Bagumbayan, Quezon City</p>
            <p class ="fw-bold mt-3">Job Overview:</p>
            <p>Makes a regular coverage/contact with assigned customers through personal visits and telemarketing to build rapport, promote the use of the products and develop demand</p>
            <p class="fw-bold mt-3">Qualifications:</p>

            <p>• Bachelor’s degree in business, marketing, economics, nursing or anyrelated field.</p>
            <p>• With experience in Sales and Marketing</p>
            <p>• Understanding of the sales process and dynamics.</p>
            <p>• A commitment to excellent customer service.</p>
            <p>• Excellent written and verbal communication skills.</p>
            <p>• With excellent interpersonal skills, including the ability to quickly build rapport</p>
            <p>• Experience using computers for a variety of tasks.</p>
            <p>• Competency in Microsoft applications including Word, Excel</p>
            <p>• Able to work comfortably in a fast paced environment.</p>
            <p>• Track record of over-achieving quota</p>
            <p>• Familiarity with different sales techniques</p>
            <p>• Strong communication, negotiation and interpersonal skills</p>
            <p>• Self motivated and driven</p>
        </div>
    </div>

    <script>
        const popup = document.querySelector('.popup');
        const x = document.querySelector('.popup-content span')

        window.addEventListener('load', () => {
            popup.classList.add('showPopup');
            popup.childNodes[1].classList.add('showPopup');
        })
        x.addEventListener('click', () => {
            popup.classList.remove('showPopup');
            popup.childNodes[1].classList.remove('showPopup');
        })
    </script>
        </section>
    <?php include_once 'component/footer.php';?>
        </main>
    </body>