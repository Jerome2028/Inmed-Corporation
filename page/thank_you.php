<?php $title = "Inmed - Thank you!";?>
<!doctype html>
<html lang="en">
    <?php (require_once 'component/header.php'); ?>
    <?php (require_once 'component/navbar.php'); ?>
    <style>
        .thank-you {
            position: relative;
            display: block;
            width: 100%;
            height: 100vh;
            text-align: center;
        }
        .thank-you h1{
            color:#616161 !important;
            text-transform: uppercase;
            font-weight: 700;
            margin-bottom: 0px;
            
        }
        .thank-you p{
            color:#616161 !important;
        }
        .thank-you .message {
            position: absolute;
            top: 50%;
            left: 50%;
            transform: translate(-50%, -50%);
        }
        .btn-warning {
            font-size: 12px;
            text-transform: none;
            background-color: #ff9800!important;
            padding: 8px 16px!important;
        }
        a .btn {
            color:white!important;
        }
    </style>
    <body>
    <main>

    <div class="container">
    <div class="thank-you">
        <div class="message">
            <h1 style="font-size: 50px">Thank You !</h1><br>
            <p>Your message was sent successfully</p>
            <br>
            <!-- <p class="orange-text text-darken-1"><b>Reminders</b></p>
            <br>
            <ul class="browser-default left-align" style="list-style: disc">
                <li><p>Please wear double mask and face shield upon entering the premises.</p></li>
                <li><p>Bring your own ballpen.</p></li>
                <li><p>Company ID.</p></li> -->
            </ul>
            <a href="index.php" class="btn btn-warning text-white p-2">Back to home</a>
        </div>
    </div>
    </div>
    <?php include_once 'component/footer.php';?>
    </main>
