<div class="container tab-content">
    <div class="tab-pane active fade show container" id ="ireseller">
        <div class="row p-5">
            <div class="col-md-6">
                <h3 class="fw-bold">INMED RESELLER REGISTRATION</h3>
                    <form action ="controller/controller.captcha-form.php?mode=repair" method ="POST" class="mt-3 repair-form" id ="repair">
                        <label for="cname" class="form-label text-white">Contact Information</label>
                        <input type="text" class="form-control border-orange" id="" placeholder="Full Name*">

                        <input type="text" class="form-control border-orange mt-3" id="" placeholder="Email Address*">
                        <input required type="email" name="ic_email_confirm" class="form-control border-orange mt-3" placeholder="Confirm E-mail Address* ">

                        <input type="text" class="form-control border-orange mt-3" id="" placeholder="Phone Number*">

                        <input type="text" class="form-control border-orange mt-3" id="" placeholder="Company*">

                        <input type="text" class="form-control border-orange mt-3" id="" placeholder="Address*">

                        <p class="mt-3">Please retype <b class="captcha"><?= $captcha; ?></b> in the field below inorder to prove us that you are human:</p>
                        <input required type="text" class="form-control mt-3" name="input_captcha" id="" placeholder="Captcha*">
                        <input required type="hidden" name="ic_captcha" value="<?php echo $captcha; ?>">
                        

                        <button class="g-recaptcha mt-2 btn btn-dark" type="button"
                            onclick='onRepair()' data-action='submit' 
                            data-sitekey="6Lc22AUlAAAAAK26UUbS4C96G9oy7mkPe7eSP79V"><span>Submit</span>
                        </button>
                    </form>
            </div>

            <div class="col-md-6 mt-3">
                <h3 class="fw-bold mt-5">#1  STEP</h3>
                <p class="">Submit your letter of intent.</p>
                <h3 class="fw-bold mt-5">#2  STEP</h3>
                <p class="">Once we recieve your basic information, a confirmation notice will be sent to your email. Click on the link attached to the notice, which will redicrect you to more information about becoming a reseller. </p>
                <h3 class="fw-bold mt-5">#3  STEP</h3>
                <p class="">After reviewing the available packages and the terms and 
                conditions, submit the required documents:</p>
                <div class="row">
                    <div class="col-sm-1">
                        <div class="ms-3 vl"></div>

                    </div>
                    <div class="col-sm-11">
                        <p>Completed Customer Information Sheet [<b class="text-success fw-bold">download</b>]
                        <p>DTI Business Certificate of Registration (Single proprietor)</p>
                        <p>SEC Documents (Partnership and Corporation)</p>
                        <p>Current Mayor’s Permit</p>
                        <p>BIR Certificate of Registration (2303)</p>
                        <p>Pictures of Establishment</p>
                    </div>
                </div>
                <h3 class="fw-bold mt-5"><span class="">#4</span>  STEP</h3>
                <p class="">Please ensure completion of the application form and sets of 
                documents. Incomplete information will delay approval.</p>
                <p>For the Existing Resellers:</p>
                <p>*Please update your company information and attach the 
                following required annual documents</p>
                <p>- Customer Information Sheet</p>
                <p>- Current and unexpired Mayor’s Permit</p>
                <p>*in addition, please submit also the following documents if 
                there is a change of ownership:</p>
                <p>-DTI Registration or SEC Registration and documents</p>
                <p>-BIR Certificate of Registration</p>
            </div>
        </div>
    </div>

    <div class="tab-pane fade container" id="Support">
        <div class="row p-5">
            <div class="col-md-6">
                <h3 class="fw-bold mb-3">Contact us</h3>
                <p>We will get back to you ASAP</p>
                    <form action ="controller/controller.captcha-form.php?mode=repair" method ="POST" class="mt-3" id ="">
                        <input type="text" class="form-control border-orange" id="" placeholder="First Name*">

                        <input type="text" class="form-control border-orange mt-3" id="" placeholder="Last Name*">
                        <input required type="email" name="ic_email_confirm" class="form-control border-orange mt-3" placeholder="Confirm E-mail Address* ">

                        <input type="text" class="form-control border-orange mt-3" id="" placeholder="Email Address*">

                        <input type="text" class="form-control border-orange mt-3" id="" placeholder="Phone Number*">                        

                        <button class="g-recaptcha mt-2 btn btn-dark" type="button"
                            onclick='onRepair()' data-action='submit' 
                            data-sitekey="6Lc22AUlAAAAAK26UUbS4C96G9oy7mkPe7eSP79V"><span>Submit</span>
                        </button>
                    </form>
            </div>
            <div class="col-md-6">
                <div class="mb-5"></div>
                <label for="cname" class="form-label text-white">Message *</label>
                <textarea class="form-control border-orange mt-2" rows="6" placeholder="Type your message here..."></textarea>
            </div>
        </div>
    </div>
</div>