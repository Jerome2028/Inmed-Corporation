<?php
 $title = "Inmed - Visitors-appointment"; 
require_once 'component/import.php';
require_once 'component/header.php';
require_once 'component/navbar.php';
$visitorsAppointments = "Visitor's Appointment Form";

$captcha = utility::generateRandomString();
?>
<style>
    .form-bg {
    background-color: #f5832e;
    background-image: linear-gradient(62deg, #f5832e 10%, #ef4f38 40%);
    margin-top: 10px;
    border-radius: 5px;
    
}
.form-bg-text h3,p {
    color: white;
    /* text-transform: capitalize; */
    font-weight: 700;
    }
    .repair-title h3 {
    color:#ffffff;
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
    .captcha {
    font-size: 20px;
    letter-spacing: 1px;
    background: #198754;
    padding-left: 8px;
    padding-right: 8px;
    color: #fff;
    border-radius: 5px;
    }
</style>
   <body>
   
   <main>
<section class="">
 <div class="container form-bg p-5">
        <div class ="repair-title">
            <h3><?= $visitorsAppointments; ?></h3>
        </div>
   
        <form action ="controller/controller.captcha-form.php?mode=visitors" method ="POST" class="row mt-3 appointment-form" id ="appointment">
            <div class="col-md-6">
                <p>Max two(2) pax allowed to pickup,driver should stay in car only,wear mask and face shield.</p>
                <p>Present vaccination card to the guard on dty when duty  when entering the premises.No vaxx card, no entry.</p>
                <label for="cname" class="form-label text-white">Appointment Date/Time</label>
                <input type="text" class="form-control border-orange mt-1" id="" placeholder="Select Date*">
                <input type="text" class="form-control border-orange mt-3" id="" placeholder="Select Time*">

                <label for="cname" class="form-label text-white mt-4">Purpose</label>
                <input type="text" class="form-control border-orange mt-3" id="" placeholder="Pick up">
                <select required name="order_type" class="mt-1">
                            <option value="Pick up" selected>Pick up</option>
                            <option value="Delivery">Delivery</option>
							<option value="Billing/Collection">Billing/Collection</option>
                            <option value="Audit/Inspection">Audit/Inspection</option>
							<option value="Maintenance Work">Maintenance Work</option>
                        </select>
            </div>
            <div class="col-md-6">
            <input type="text" class="form-control border-orange mt-3" id="" placeholder="Company Name">
            <input required type="email" name="ic_email" class="form-control border-orange mt-3" placeholder="E-mail Address*">
            <input required type="email" name="ic_email_confirm" class="form-control border-orange mt-3" placeholder="Confirm E-mail Address* ">
                <label for="cname" class="form-label text-white mt-5">Authorized Persons</label>
                <input type="text" class="form-control border-orange mt-1" id="" placeholder="Full Name*">
                <input type="text" class="form-control border-orange mt-3" id="" placeholder="Full Name (Optional)*">
                <label for="cname" class="form-label text-white mt-5">Mode of Payment</label>
                <input type="text" class="form-control border-orange mt-1" id="" placeholder="None*">
        
                <div class="row">
                    <div class="col-md-8">
                    <p class="mt-3">Please retype <b class="captcha"><?= $captcha; ?></b> in the field below inorder to prove us that you are human:</p>
                        <input required type="hidden" name="ic_captcha" value="<?php echo $captcha; ?>">
                       
                        <button class="g-recaptcha mt-2 btn btn-dark" type="button"
                         onclick='onVisitor()' data-action='submit' 
                         data-sitekey="6Lc22AUlAAAAAK26UUbS4C96G9oy7mkPe7eSP79V"><span>Submit</span></button>
                    </div>

                    <div class="col-md-4">
                    <input required type="text" class="form-control mt-3" name="input_captcha" id="" placeholder="Captcha*">
                    </div>
                </div>
            </div>
        <script>
       function onVisitor(token) {
            $("#appointment").trigger('submit');
        }
        </script>
        </form>
    </div>
</div>
    <script>

    $(function() {
        $(".appointment-form").on("submit", function(e) {

            e.preventDefault();
            var error = false; var message = '';

            var ic_email = $(this).find("input[name='ic_email']").val();
            var ic_email_confirm = $(this).find("input[name='ic_email_confirm']").val()
            var ic_captcha = $(this).find("input[name='ic_captcha']").val();
            var input_captcha = $(this).find("input[name='input_captcha']").val();

            if (ic_captcha !== input_captcha) {
                error = true;
                message = 'Please Retype the captcha correctly';
            };

            if (ic_email !== ic_email_confirm) {
                error = true;
                message = 'Email Confirmation Does not match';
            };

            if ((ic_email  == "") || (ic_email_confirm  == "")) {
                error = true;
                message = 'Email required';
            }
            if (error) {
                Swal.fire({
                html: message,
                position: 'top-end',
                icon: 'error',
                title: 'Incomplete fields',
                showConfirmButton: false,
                timer: 96500,
                width: '300px'
                });
                return
            };

            $(".repair-form, body").css({
                opacity: "0.5",
                cursor: "wait"
            });

            var $inputs = $(this).find("input, select, button, textarea");
            var action = $(this).attr("action");
            var type = $(this).attr("method");
            var formData = new FormData(this);

            $inputs.prop("disabled", true);
            window.onbeforeunload = function() {
                return "Are you sure you want to navigate away from this page?";
            };

            $.ajax({
                url: action,
                type: type,
                data: formData,
                success: function(data) {
                    
                    window.onbeforeunload = null;

                    $(".appointment-form body").css({
                        opacity: "1",
                        cursor: "auto"
                    });

                    $inputs.prop("disabled", false);
                    $(":submit").val("submit");

                    Swal.fire({
                    position: 'top-end',
                    icon: 'success',
                    html: data,
                    title: 'match',
                    showConfirmButton: false,
                    timer: 1500
                    })
                    
                    $inputs.val("");

                    if(data.toLowerCase().trim() == "action complete") {
                        console.log('success');
                        window.location.href = "thank_you.php?";
                        return
                    }
                },
                cache: false,
                contentType: false,
                processData: false
            });
    });
});
</script>
   </main>
   </body>
