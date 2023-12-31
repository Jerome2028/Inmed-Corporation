<?php
  $adtitle = "Inmed - Admin"; 
  require_once 'component/import.php';
  require_once 'component/header.php';

?>

<style>
    body{
        font-family: 'Poppins', sans-serif;
    background-color: #f9fbfc;
    font-size: 14px;
    color: #545252;
    }
    .form-label {
        color: #545252;
    }
    .card{
        border: none!important;
    }
    ::placeholder{
        font-size: 10px;
        
    }
    button span {
        font-size: 13px;
    }
    .btn {
    --bs-btn-padding-x: 1rem;
    --bs-btn-padding-y: 0.175rem;
    border-radius: 0px!important;
    }
</style>
<body>

  <main>
  <div class="overlay">
    <div class="d-flex align-items-center justify-content-center vh-100">
            <div class="card text-dark bg-light p-5 shadow" style="max-width: 55rem;">
                <div class ="container">
                    <img src ="<?= $ADBASE; ?>assets/img/inmed_logo.png" class="w-50 d-block mx-auto mb-3">

                    <form action ="controller/controller.login.php?mode=login" id="login" method ="POST" class="login-form">
                    <input type="hidden" id="action" value="login">
                        
                    <label for="cname" class="form-label">Username</label>
                    <input required type="text" id="ic_user" name ="ic_user" class="form-control" placeholder="Enter user name here">
                    <label for="cname" class="form-label mt-3">Password</label>
                <input required type="text" id="ic_pass"  name = "ic_pass" class="form-control" placeholder="Enter password here ">
                <button class="mt-3 btn btn-dark w-100" type="button" onclick = 'submitdata();' data-action='submit'><span>Submit</span></button>
                    </form>
                    <script type="text/javascript" src="<?= $ADBASE; ?>assets/js/login.js">
                </script>

                </div>
            </div>
        </div>
    </div>
  </main>
</body>

</html>