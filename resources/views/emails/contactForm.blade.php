<div class="contact-form-cont">
    <!-- TITLE -->
    <div class="mb-40">
        <h2 class="section-title">CONTACT <span class="bold">US</span></h2>
    </div>
    @if (Session::has('success'))
        <div class="alert alert-success">
            {{ Session::get('success') }}
        </div>
    @endif
    <div>
        <form id="contactUsForm" method="post" action="javascript:void(0)" method="POST">
            @csrf
            <div class="container">
                <div class="row">
                    <div class="col-md-12 mb-30">
                        <!-- <label>Name *</label> -->
                        <input type="text" name="name" class="controled" placeholder="Name" value="">
                        @if ($errors->has('name'))
                            <span class="text-danger">{{ $errors->first('name') }}</span>
                        @endif
                    </div>
                    <div class="col-md-12 mb-30">
                        <!-- <label>Email *</label> -->
                        <input type="text" name="email" class="controled" placeholder="Email" value="">
                        @if ($errors->has('email'))
                            <span class="text-danger">{{ $errors->first('email') }}</span>
                        @endif
                    </div>
                    <div class="col-md-12 mb-30">
                        <!-- <label>Phone *</label> -->
                        <input type="text" name="phone" maxlength='14' class="controled" placeholder="Phone"
                            value="">
                        @if ($errors->has('phone'))
                            <span class="text-danger">{{ $errors->first('phone') }}</span>
                        @endif
                    </div>
                    <div class="col-md-12 mb-30">
                        <!-- <label>subject *</label> -->
                        <input type="text" name="subject" class="controled" placeholder="Subject" value="">
                        @if ($errors->has('subject'))
                            <span class="text-danger">{{ $errors->first('subject') }}</span>
                        @endif
                    </div>
                    <div class="col-md-12 mb-30">
                        <!-- <label>Message *</label> -->
                        <textarea name="message" rows="3" class="form-control"></textarea>
                        @if ($errors->has('message'))
                            <span class="text-danger">{{ $errors->first('message') }}</span>
                        @endif
                    </div>
                    <div class="col-md-12 text-center-xxs">
                        <input type="submit" id="submitContactUs" class="button medium gray"
                            value="SEND MESSAGE"data-loading-text="Loading...">
                    </div>
                </div>
            </div>
        </form>
        <div class="alert alert-success hidden animated fadeIn" id="contactSuccess">
            <strong>Success!</strong> Your message has been sent to us.
        </div>

        <div class="alert alert-danger hidden animated shake" id="contactError">
            <strong>Error!</strong> There was an error sending your message.
        </div>
    </div>
</div>


{{--  <div class="contact-form-cont">
    <!-- TITLE -->
    <div class="mb-40">
        <h2 class="section-title">CONTACT <span class="bold">US</span></h2>
    </div>

    <!-- CONTACT FORM -->
    <div>
        <form id="contact-form" action="php/contact-form.php" method="POST" novalidate="novalidate">
            <div class="container">
                <div class="row">
                    <div class="col-md-12 mb-30">
                        <!-- <label>Your name *</label> -->
                        <input type="text" value="" data-msg-required="Please enter your name" maxlength="100"
                            class="controled" name="name" id="name" placeholder="NAME" required=""
                            aria-required="true">
                    </div>
                    <div class="col-md-12 mb-30">
                        <!-- <label>Your email address *</label> -->
                        <input type="email" value="" data-msg-required="Please enter your email address"
                            data-msg-email="Please enter a valid email address" maxlength="100" class="controled"
                            name="email" id="email" placeholder="EMAIL" required="" aria-required="true">
                    </div>
                    <div class="col-md-12 mb-40">
                        <!-- <label>Message *</label> -->
                        <textarea maxlength="5000" data-msg-required="Please enter your message" rows="3" class="controled" name="message"
                            id="message" placeholder="MESSAGE" required="" aria-required="true"></textarea>
                    </div>
                    <div class="col-md-12 text-center-xxs">
                        <input type="submit" value="SEND MESSAGE" class="button medium gray"
                            data-loading-text="Loading...">
                    </div>
                </div>

            </div>
        </form>
        <div class="alert alert-success hidden animated fadeIn" id="contactSuccess">
            <strong>Success!</strong> Your message has been sent to us.
        </div>

        <div class="alert alert-danger hidden animated shake" id="contactError">
            <strong>Error!</strong> There was an error sending your message.
        </div>
    </div>
</div>  --}}



@push('scripts')
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-validate/1.19.2/jquery.validate.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-validate/1.19.2/additional-methods.min.js"></script>
    <script>
        $("#contactUsForm").validate({
            rules: {
                name: {
                    required: true,
                    maxlength: 50
                },
                email: {
                    required: true,
                    maxlength: 50,
                    email: true,
                },
                phone: {
                    required: true,
                    maxlength: 14,
                    minlength: 9,
                    pattern: '^((?:[+?0?0?966]+)(?:\s?\d{2})(?:\s?\d{7}))$',
                },
                subject: {
                    required: true,
                },
                message: {
                    required: true,
                    maxlength: 300
                },
            },
            messages: {
                name: {
                    required: "Please enter name",
                    maxlength: "Your name maxlength should be 50 characters long."
                },
                email: {
                    required: "Please enter valid email",
                    email: "Please enter valid email",
                    maxlength: "The email name should less than or equal to 50 characters",
                },
                phone: {
                    required: "Phone number required",
                    maxlength: "Your mobile  number is too long",
                    minlength: "Your mobile number is too short",
                    pattern : "enter (009665), (+9665), (9665),(05) or (5)********* followed by the mobile number"

                },
                subject: {
                    required: "Please enter subject",
                },
                message: {
                    required: "Please enter message",
                    maxlength: "Your message name maxlength should be 300 characters long."
                },
            }
        })

        $('#submitContactUs').on('click', function(e) {
            e.preventDefault();
            if($("#contactUsForm").valid()){
                $.ajax({
                    url: "{{ route('contact.us.store') }}",
                    type: "POST",
                    data: $('#contactUsForm').serialize(),
                    success: function(response) {
                        console.log(response);
                        $('#submit').html('Submit');
                        $("#submit").attr("disabled", false);
                        alert('Ajax form has been submitted successfully');
                        document.getElementById("contactUsForm").reset();
                    },
                    error: function(err){
                        console.log(err)
                    }
                });
            }
        })
    </script>
@endpush

