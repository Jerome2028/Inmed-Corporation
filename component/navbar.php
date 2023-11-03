<div id="topheader">
<nav class="navbar navbar-expand-lg navbar-light bg-white fixed-top shadow-sm">
    <div class ="container d-flex justify-content-center">
        <div class ="row">
            <div class="col-sm-2">
                <a class="navbar-brand" href="<?= $BASE; ?>"><img src = "<?= $BASE ?>assets/img/Inmed-01.svg" class ="inmed-nav w-75"></a>
            </div>

            <div class="col-sm-10">
                <form class="form-inline">
                    <div class="input-group top mt-3 w-100">
                        <input type="text" class="form-control search" name="search" id="search" value="" placeholder="Search Products...">
                            <button class="btn btn-glass" type="button" id="search_btn">
                                <!-- <i class="fa-solid fa-magnifying-glass"></i> -->
                                Search
                            </button>
                      
                            <div class ="buy-now">
                                <button class ="btn btn-warning shadow ripple">BUY NOW</button>
                                <button class="navbar-toggler" type="button" data-bs-toggle="offcanvas" data-bs-target="#offcanvasNavbar" aria-controls="offcanvasNavbar">
                                <span class="navbar-toggler-icon"></span>
                            </button>
                        </div>
                    </div>
                </form>
          

            <div class="col-sm-12">
                <div class="navbar-collapse mt-2" id="navbarSupportedContent">
                    <ul class="navbar-nav">
                        <li class="nav-item active">
                            <a class="nav-link" href="<?= $BASE ?>">Home</span></a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="<?= $BASE ?>about-us/">About Us</a>
                        </li>
                        <li class="nav-item">
                            <div class="btn-group">
                                <button type="button" class="btn dropdown-toggle" data-bs-toggle="dropdown" aria-expanded="false">
                                    Downloads
                                </button>
                                <ul class="dropdown-menu">
                                    <li class="link"><a class="dropdown-item" href="<?= $BASE ?>brochures&catalog/">Brochures & Catalog</a></li>
                                    <li class="link"><a class="dropdown-item" href="<?= $BASE ?>manual">Manual</a></li>
                                </ul>
                                </div>
                        </li>
                        <!-- <li class="nav-item">
                            <a class="nav-link" href="<?= $BASE ?>resources/">Resources</a>
                        </li> -->
                        <li class="nav-item">
                            <a class="nav-link" href="<?= $BASE ?>career">Careers</a>
                        </li> 
                        <li class="nav-item">
                            <a class="nav-link" href="https://inmed.com.ph/direct/">Product & Services</a>
                        </li> 
                        <li class ="soc-nav flex-fill nav-item">
                            <div class="soc-logo soc-img">
                                <a href ="" class="soc-press transbox"><img src ="assets/img/png/fb.png"></a>
                                <a href ="" class="soc-press transbox"><img src ="assets/img/png/in.png"></a>
                                <a href ="" class="soc-press transbox"><img src ="assets/img/png/ig.png"></a>
                                <a href ="" class="soc-press transbox"><img src ="assets/img/png/yt.png"></a>
                                <a href ="" class="soc-press transbox"><img src ="assets/img/png/laz.png"></a>
                            </div>
                        </li>    
                    </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
</nav>
<div class="offcanvas offcanvas-end" tabindex="-1" id="offcanvasNavbar" aria-labelledby="offcanvasNavbarLabel">
          <div class="offcanvas-header">
            <h5 class="offcanvas-title" id="offcanvasNavbarLabel"></h5>
            <span class="my-1 mx-2 close"  aria-label="Close" data-bs-dismiss="offcanvas"><i class="fa-solid fa-xmark" style="color: #ffffff;"></i></span>
          </div>
          
          <ul class="navbar-nav">
            <li class="nav-item active start">
                <a class="nav-link" href="<?= $BASE ?>">Home <span class="sr-only">(current)</span></a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="<?= $BASE ?>about-us/">About Us</a>
            </li>
            <li class="nav-item">
                <div class="btn-group">
                    <button type="button" class="btn dropdown-toggle" data-bs-toggle="dropdown" aria-expanded="false">
                        Downloads
                    </button>
                    <ul class="dropdown-menu">
                        <li class="link"><a class="dropdown-item" href="<?= $BASE ?>brochures&catalog/">Brochures & Catalog</a></li>
                        <li class="link"><a class="dropdown-item" href="<?= $BASE ?>manual">Manual</a></li>
                    </ul>
                    </div>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="<?= $BASE ?>career">Careers</a>
            </li> 
            <li class="nav-item">
                <a class="nav-link" href="https://inmed.com.ph/products/">Product & Services</a>
            </li> 

            <li class ="soc-nav flex-fill nav-item">
                <div class="soc-logo soc-img">
                    <a href ="" class="soc-press transbox"><img src ="assets/img/png/fb.png"></a>
                    <a href ="" class="soc-press transbox"><img src ="assets/img/png/in.png"></a>
                    <a href ="" class="soc-press transbox"><img src ="assets/img/png/ig.png"></a>
                    <a href ="" class="soc-press transbox"><img src ="assets/img/png/yt.png"z></a>
                    <a href ="" class="soc-press transbox"><img src ="assets/img/png/laz.png" class ="laz"></a>
                </div>
            </li>    
        </ul>
    </div>
    <div class="mt-5"></div>
</div>


<div class="loader-wrapper">
    <span class="loader"><span class="loader-inner"></span></span>
</div>
<script src="<?= $BASE ?>assets/js/search.js"></script>
    <link rel="stylesheet" href="https://code.jquery.com/ui/1.13.2/themes/base/jquery-ui.css">
    <script src="https://code.jquery.com/ui/1.13.2/jquery-ui.js"></script>