<?php 
  $title = "Inmed - Corporation";
  require_once 'component/import.php';
  require_once 'component/header.php';
  require_once 'component/navbar.php';
        ?>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
    </head>
    <style>
      .not-found{
        margin-top:15rem;
      }
      .not-found {
    padding-bottom: 15rem;
}
.not-found .container h1, .not-found .container p{
  color: #616161!important;
}

    </style>
      <body>  
          <main>
          <?php (require_once 'component/navbar.php'); ?>
          <section class="not-found">
            <div class ="container">
          <center><h1>404 - Page not found</h1>
        <p class="mt-2 text-center">base Oh dear, this link isn’t working. Don't worry, you can find lots about us in our <a href="<?= $BASE; ?>"><span class="text-primary">homepage.</span></a></p></center>
            </div>    
      </section>
          <?php include_once 'component/footer.php';?>
        </main>
      </body>