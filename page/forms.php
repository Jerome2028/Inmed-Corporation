<div class="container form-bg form-bg-text shadow tab-content resources-form-spacer ">
    <div class="container p-5 tab-pane active" id="requestrepair">
        <div class ="repair-title">
            <h3><?= $requestrepair; ?></h3>
        </div>
        <form action ="controller/controller.captcha-form.php?mode=repair" method ="POST" class="row gx-5 mt-3 repair-form" id ="repair">
            <div class="col-md-6">
                <label for="cname" class="form-label">Customer's Name</label>
                <input type="text" class="form-control " id="" placeholder="Full Name*">

                <label for="cname" class="form-label mt-4">Contact Information</label>

                <input type="text" class="form-control " id="" placeholder="Contact Number*">

                <input required type="email" name="ic_email" class="form-control  mt-3" placeholder="E-mail Address*">
                <input required type="email" name="ic_email_confirm" class="form-control  mt-3" placeholder="Confirm E-mail Address* ">

                <label for="cname" class="form-label">Product Description</label>
                <input type="text" class="form-control " id="" placeholder="Enter product name / details">

                <label for="cname" class="form-label">Model Number</label>
                <input type="text" class="form-control " id="" placeholder="Enter Serial number">
            </div>

            <div class ="col-md-6">
                <label for="storepurchase" class="form-label">Store Purchased</label>
                <input type="text" class="form-control " id="" placeholder="Store Purchased">
                <label for="storepurchase" class="form-label mt-4">Date of Purchase</label>
                <input type="text" class="form-control " id="" placeholder="Select Date">

                <label for="" class="form-label mt-4">Problem Details</label>
                <textarea class="form-control " id="" rows="7" placeholder=  "Write your message..."></textarea>

                <div class="row">
                    <div class="col-md-8">
                        <p class="mt-3">Please retype <b class="captcha"><?= $captcha; ?></b> in the field below inorder to prove us that you are human:</p>
                        <input required type="hidden" name="ic_captcha" value="<?php echo $captcha; ?>">
                    </div>
                    <div class="col-md-4">
                        <input required type="text" class="form-control  mt-3" name="input_captcha" id="" placeholder="Captcha*">
                    </div>
                </div>
                <button class="g-recaptcha mt-2 btn btn-warning" type="button"
                         onclick='onRepair()' data-action='submit' 
                         data-sitekey="6Lc22AUlAAAAAK26UUbS4C96G9oy7mkPe7eSP79V"><span>Submit</span></button>
            </div>
                <script>
                function onRepair(token) {
                    $("#repair").trigger('submit');
                }
            </script>
        </form>
    </div>

    <script>

    $(function() {
        $(".repair-form").on("submit", function(e) {

            e.preventDefault();

            var error = false; var message = '';
         
            var ic_email = $(this).find("input[name='ic_email']").val();
            var ic_email_confirm = $(this).find("input[name='ic_email_confirm']").val()
            var ic_captcha = $(this).find("input[name='ic_captcha']").val();
            var input_captcha = $(this).find("input[name='input_captcha']").val();


            if (ic_email != ic_email_confirm) {
                error = true;
                message = 'Email Confirmation Does not match';
            }
            if ((ic_email  == "") || (ic_email_confirm  == "")) {
                error = true;
                message = 'Email required';
            }
            
            if (ic_captcha != input_captcha) {
                error = true;
                message = 'Please Retype the captcha correctly';
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

                    $(".repair-form, body").css({
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
                    timer: 1500,
                    width:'300px'
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
    <div class="container p-5 tab-pane fade" id="visitorsAppointment">
        <div class ="repair-title">
            <h3><?= $visitorsAppointment; ?></h3>
        </div>
   
        <form action ="controller/controller.captcha-form.php?mode=visitors" method ="POST" class="row justify-content-evenly mt-3 appointment-form" id ="appointment">
            <div class="col-md-6">
                <p>Max two(2) pax allowed to pickup,driver should stay in car only,wear mask and face shield.</p>
                <p>Present vaccination card to the guard on dty when duty  when entering the premises.No vaxx card, no entry.</p>
                <label for="cname" class="form-label">Appointment Date/Time</label>
                <input type="text" class="form-control  mt-5" id="" placeholder="Select Date*">
                <input type="text" class="form-control  mt-3" id="" placeholder="Select Time*">

                <label for="cname" class="form-label mt-4">Purpose</label>
                <input type="text" class="form-control  mt-3" id="" placeholder="Pick up">
                <select required name="order_type" class="mt-1">
                            <option value="Pick up" selected>Pick up</option>
                            <option value="Delivery">Delivery</option>
							<option value="Billing/Collection">Billing/Collection</option>
                            <option value="Audit/Inspection">Audit/Inspection</option>
							<option value="Maintenance Work">Maintenance Work</option>
                        </select>
            </div>

            <div class="col-md-6">
            <input type="text" class="form-control  mt-3" id="" placeholder="Company Name">
            <input required type="email" name="ic_email" class="form-control  mt-3" placeholder="E-mail Address*">
            <input required type="email" name="ic_email_confirm" class="form-control  mt-3" placeholder="Confirm E-mail Address* ">
                <label for="cname" class="form-label mt-5">Authorized Persons</label>
                <input type="text" class="form-control  mt-1" id="" placeholder="Full Name*">
                <input type="text" class="form-control  mt-3" id="" placeholder="Full Name (Optional)*">
                <label for="cname" class="form-label mt-5">Mode of Payment</label>
                <input type="text" class="form-control  mt-1" id="" placeholder="None*">
        
                <div class="row">
                    <div class="col-md-8">
                    <p class="mt-3">Please retype <b class="captcha"><?= $captcha; ?></b> in the field below inorder to prove us that you are human:</p>
                        <input required type="hidden" name="ic_captcha" value="<?php echo $captcha; ?>">
                    </div>
                    <div class="col-md-4">
                        <input required type="text" class="form-control  mt-3" name="input_captcha" id="" placeholder="Captcha*">
                    </div>
                </div>
                <button class="g-recaptcha mt-2 btn btn-warning" type="button"
                         onclick='onVisitor()' data-action='submit' 
                         data-sitekey="6Lc22AUlAAAAAK26UUbS4C96G9oy7mkPe7eSP79V"><span>Submit</span></button>
            </div>
        <script>
       function onVisitor(token) {
            $("#appointment").trigger('submit');
        }
        </script>
        </form>
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

    <div class="container p-5 tab-pane fade" id="warrantyReg">
        <div class ="repair-title">
            <h3><?= $warrantyReg; ?></h3>
        </div>
        <form action ="controller/controller.captcha-form.php?mode=warranty" method ="POST" class="row justify-content-evenly mt-3 warranty-form" id ="warranty">
            <div class="col-md-6">
                <label for="" class="form-label">Contact Information <span class="text-right">*indicates Required</span></label>
                <input type="text" class="form-control  mt-1" id="" placeholder="Full Name*">
                <input required type="email" name="ic_email" class="form-control  mt-3" placeholder="E-mail Address*">
                <input required type="email" name="ic_email_confirm" class="form-control  mt-3" placeholder="Confirm E-mail Address* ">
                <input type="text" class="form-control  mt-3" id="" placeholder="Complete Address">
                <input type="text" class="form-control  mt-3" id="" placeholder="Country">
                <input type="text" class="form-control  mt-3" id="" placeholder="Mobile Number">
                <input type="text" class="form-control  mt-3" id="" placeholder="Phone Number">
        

                <label for="" class="form-label mt-4">How did you first become aware of Inmed Products</label>
            </div>

            <div class="col-md-6">
                <input type="text" class="form-control  mt-3" id="" placeholder="Company Name">
        
                <label for="cname" class="form-label mt-5">Authorized Persons</label>
                <input type="text" class="form-control  mt-1" id="" placeholder="Full Name*">
                <input type="text" class="form-control  mt-3" id="" placeholder="Full Name (Optional)*">
                <label for="cname" class="form-label mt-5">Mode of Payment</label>
                <input type="text" class="form-control  mt-1" id="" placeholder="None*">
        
                <div class="row">
                    <div class="col-md-8">
                        <p class="mt-3">Please retype <b class="captcha"><?= $captcha; ?></b> in the field below inorder to prove us that you are human:</p>
                        <input required type="hidden" name="ic_captcha" value="<?php echo $captcha; ?>">
                    </div>

                    <div class="col-md-4">
                    <input required type="text" class="form-control  mt-3" name="input_captcha" id="" placeholder="Captcha*">
                    </div>
                </div>
                <button class="g-recaptcha mt-2 btn btn-warning" type="button"
                         onclick='onWarranty()' data-action='submit' 
                         data-sitekey="6Lc22AUlAAAAAK26UUbS4C96G9oy7mkPe7eSP79V"><span>Submit</span></button>
            </div>
            <script>
            function onWarranty(token) {
            $("#warranty").trigger('submit');
        }
        </script>
        </form>
    </div>

    <script>

    $(function() {
        $(".warranty-form").on("submit", function(e) {

            e.preventDefault();

            var error = false; var message = '';
            var ic_email = $(this).find("input[name='ic_email']").val();
            var ic_email_confirm = $(this).find("input[name='ic_email_confirm']").val()
            var ic_captcha = $(this).find("input[name='ic_captcha']").val();
            var input_captcha = $(this).find("input[name='input_captcha']").val();

            if (ic_captcha != input_captcha) {
                error = true;
                message = 'Please Retype the captcha correctly';
            };

            if (ic_email != ic_email_confirm) {
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
                width: '300px',
                });
                return
            };

            $(".warranty-form, body").css({
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
</div>