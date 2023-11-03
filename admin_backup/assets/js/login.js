
function submitdata() { 
    var error = false; var message = '';
    var user_email = $('#user_email').val();
    var user_password = $('#user_password').val();
    if ((user_email  == "") || (user_password  == "")) {
        error = true;
        message = 'Email required';
    }
     else {
      submit(user_email, user_password)
  }
    if (error) {
      Swal.fire({
      html: message,
      position: 'top-end',
      icon: 'error',
      title: 'Incomplete fields',
      showConfirmButton: false,
      timer: 1500,
      // width: '300px'
      });
      return
  }
}
      function submit(user_email, user_password) {
        $.ajax ({
        type:'post',
        url:'controller/controller.login.php?mode=login',
        data:{
          submitdata:"submitdata",
          user_email:user_email,
          user_password:user_password,
        },
        success:function(response) {
          var responseVal = jQuery.parseJSON(response);
          if (responseVal["message"] == "Success") {
          Swal.fire({
            position: 'top-end',
            icon: 'success',
            text: 'Welcome Back '+ user_email,
            html: data,
            title: 'match',
            showConfirmButton: false,
            timer: 1500,
            width:'300px'
            })
            .then((result) => {
              if (result.isConfirmed) {
                  window.location.href="home.php";
              } else {
                  window.location.href="logout.php";
              }
          })        
        }
      else{

          const Toast = Swal.mixin({
              toast: true,
              position: 'top-end',
              showConfirmButton: false,
              timer: 3000,
              timerProgressBar: true,
          })
      
          Toast.fire({
              icon: 'warning',
              title: 'Invalid Credentials'
          })
    }

        }
        }
        )};
  

