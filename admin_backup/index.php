<?php 
  $title = "Admin - Dashboard";
  require_once "/xampp/htdocs/inmed-new/admin/component/header.php";
  require_once "controller/controller.auth.php";

  $auth = new Auth();
  $isLoggedIn = $auth->getSession("auth");
  $auth->redirect("auth", false, "home.php");
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
    }
</style>
<body>

  <main>
  <div class="overlay">
    <div class="d-flex align-items-center justify-content-center vh-100">
            <div class="card text-dark bg-light p-5 shadow" style="max-width: 55rem;">
                <div class ="container">
                    <img src ="../assets/img/inmed_logo.png" class="w-50 d-block mx-auto mb-5">

                    <!-- <form action ="controller/controller.login.php?mode=login" id="login" method ="POST" class="login-form"> -->
                    <!-- <input type="hidden" id="action" value="login"> -->
                        
                    <label for="cname" class="form-label">Username</label>
                    <input required type="text" id="user_email" name ="user_email" class="form-control" placeholder="Enter user name here">
                    <label for="cname" class="form-label mt-3">Password</label>
                <input required type="text" id="user_password" name = "user_password" class="form-control" placeholder="Enter password here ">
                <button class="mt-2 btn btn-dark" type="button" onclick = 'submitdata();' data-action='submit'><span>Submit</span></button>
                <script>
                function submitdata() {
                $("#login").trigger('submit');
            }
                </script>
                    <!-- </form> -->
                    <script type="text/javascript" src="assets/js/login.js"></script>

                </div>
            </div>
        </div>
    </div>
  </main>
</body>

</html>