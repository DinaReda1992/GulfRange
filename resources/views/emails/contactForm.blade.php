<!DOCTYPE html>
<html>

<head>
    <title>Gulf Range</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <link href="{{ URL::asset('assets\css\flexslider.css') }}" rel="stylesheet">
    <link href="{{ URL::asset('assets\css\bootstrap.min.css') }}" rel="stylesheet">
    <link href="{{ URL::asset('assets\css\bootstrap-rtl.min.css') }}" rel="stylesheet">
    <link href="{{ URL::asset('assets\css\icons-fonts.css') }}" rel="stylesheet">
    <link href="{{ URL::asset('assets\css\style.css') }}" rel="stylesheet">
    <link href="{{ URL::asset('assets\css\icons-fonts.css') }}" rel="stylesheet">
    <script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-validate/1.19.0/jquery.validate.min.js"></script>
    <link rel="stylesheet"
        href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.5.2/css/bootstrap.min.css" />
    <style>
        .error {
            color: #FF0000;
        }
    </style>
</head>

<body>
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
            <form id="contact-form" id="contactUsForm" method="post" action="javascript:void(0)" method="POST">
                @csrf
                <div class="row">
                    <div class="col-md-12 mb-30">
                        <!-- <label>Name *</label> -->
                        <input type="text" name="name" class="controled" placeholder="Name"
                            value="{{ old('name') }}">
                        @if ($errors->has('name'))
                            <span class="text-danger">{{ $errors->first('name') }}</span>
                        @endif
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-12 mb-30">
                        <!-- <label>Email *</label> -->
                        <input type="text" name="email" class="controled" placeholder="Email"
                            value="{{ old('email') }}">
                        @if ($errors->has('email'))
                            <span class="text-danger">{{ $errors->first('email') }}</span>
                        @endif
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-12 mb-30">
                        <!-- <label>Phone *</label> -->
                        <input type="text" name="phone" maxlength='14' class="controled" placeholder="Phone"
                            value="{{ old('phone') }}">
                        @if ($errors->has('phone'))
                            <span class="text-danger">{{ $errors->first('phone') }}</span>
                        @endif
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-12 mb-30">
                        <!-- <label>subject *</label> -->
                        <input type="text" name="subject" class="controled" placeholder="Subject"
                            value="{{ old('subject') }}">
                        @if ($errors->has('subject'))
                            <span class="text-danger">{{ $errors->first('subject') }}</span>
                        @endif
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-12 mb-30">
                        <!-- <label>Message *</label> -->
                        <textarea name="message" rows="3" class="form-control">{{ old('message') }}</textarea>
                        @if ($errors->has('message'))
                            <span class="text-danger">{{ $errors->first('message') }}</span>
                        @endif
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-12 text-center-xxs">
                        <input type="submit" id="submit" class="button medium gray"
                            value="SEND MESSAGE"data-loading-text="Loading...">
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

ENDDDDDDDDDDDDDDDDD
    //////////////////////////////////////////////////////////////////////template

    <div class="contact-form-cont">
        <!-- TITLE -->
        <div class="mb-40">
            <h2 class="section-title">CONTACT <span class="bold">US</span></h2>
        </div>

        <!-- CONTACT FORM -->
        <div>
            <form id="contact-form" action="php/contact-form.php" method="POST" novalidate="novalidate">

                <div class="row">
                    <div class="col-md-12 mb-30">
                        <!-- <label>Your name *</label> -->
                        <input type="text" value="" data-msg-required="Please enter your name" maxlength="100"
                            class="controled" name="name" id="name" placeholder="NAME" required=""
                            aria-required="true">
                    </div>
                </div>

                <div class="row">
                    <div class="col-md-12 mb-30">
                        <!-- <label>Your email address *</label> -->
                        <input type="email" value="" data-msg-required="Please enter your email address"
                            data-msg-email="Please enter a valid email address" maxlength="100" class="controled"
                            name="email" id="email" placeholder="EMAIL" required="" aria-required="true">
                    </div>
                </div>

                <div class="row">
                    <div class="col-md-12 mb-40">
                        <!-- <label>Message *</label> -->
                        <textarea maxlength="5000" data-msg-required="Please enter your message" rows="3" class="controled"
                            name="message" id="message" placeholder="MESSAGE" required="" aria-required="true"></textarea>
                    </div>
                </div>

                <div class="row">
                    <div class="col-md-12 text-center-xxs">
                        <input type="submit" value="SEND MESSAGE" class="button medium gray"
                            data-loading-text="Loading...">
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





    <script>
        if ($("#contactUsForm").length > 0) {
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
                        //regex: '/^(009665|9665|\+9665|05|5)(5|0|3|6|4|9|1|8|7)([0-9]{7})$/',
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
                        required: "enter (009665), (+9665), (9665),(05) or (5)********* followed by the mobile number",
                        maxlength: "Your mobile  number is too long",
                        minlength: "Your mobile number is too short",
                        //regex : "Invalid mobile format"
                    },
                    subject: {
                        required: "Please enter subject",
                    },
                    message: {
                        required: "Please enter message",
                        maxlength: "Your message name maxlength should be 300 characters long."
                    },

                },
                submitHandler: function(form) {
                    $.ajaxSetup({
                        headers: {
                            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                        }
                    });
                    $('#submit').html('Please Wait...');
                    $("#submit").attr("disabled", true);
                    $.ajax({
                        url: "{{ route('contact.us.store') }}",
                        type: "POST",
                        data: $('#contactUsForm').serialize(),
                        success: function(response) {
                            $('#submit').html('Submit');
                            $("#submit").attr("disabled", false);
                            alert('Ajax form has been submitted successfully');
                            document.getElementById("contactUsForm").reset();
                        }
                    });
                }
            })
        }
    </script>
</body>

</html>

{{--  Ajax
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-validate/1.19.0/jquery.validate.min.js"></script>
    <style>
        .error {
            color: #FF0000;
        }
    </style>
    </head>

    <body>
        <div class="container mt-4">
            <div class="card">
                <div class="card-header text-center font-weight-bold">
                    <h2>Laravel 9 Ajax Post Form</h2>
                </div>
                <div class="card-body">
                    <form name="contactUsForm" id="contactUsForm" method="post" action="javascript:void(0)">
                        @csrf
                        <div class="row">
                            <div class="col-md-6">
                                <div class="form-group">
                                    <strong>Name:</strong>
                                    <input type="text" name="name" class="form-control" placeholder="Name"
                                        value="{{ old('name') }}">
                                    @if ($errors->has('name'))
                                        <span class="text-danger">{{ $errors->first('name') }}</span>
                                    @endif
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <strong>Email:</strong>
                                    <input type="text" name="email" class="form-control" placeholder="Email"
                                        value="{{ old('email') }}">
                                    @if ($errors->has('email'))
                                        <span class="text-danger">{{ $errors->first('email') }}</span>
                                    @endif
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-6">
                                <div class="form-group">
                                    <strong>Phone:</strong>
                                    <input type="text" name="phone" maxlength='14' class="form-control"
                                        placeholder="Phone" value="{{ old('phone') }}">
                                    @if ($errors->has('phone'))
                                        <span class="text-danger">{{ $errors->first('phone') }}</span>
                                    @endif
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <strong>Subject:</strong>
                                    <input type="text" name="subject" class="form-control" placeholder="Subject"
                                        value="{{ old('subject') }}">
                                    @if ($errors->has('subject'))
                                        <span class="text-danger">{{ $errors->first('subject') }}</span>
                                    @endif
                                </div>
                            </div>
                        </div>
                        <div class="form-group">
                            <strong>Message:</strong>
                            <textarea name="message" rows="3" class="form-control">{{ old('message') }}</textarea>
                            @if ($errors->has('message'))
                                <span class="text-danger">{{ $errors->first('message') }}</span>
                            @endif
                        </div>
                        <button type="submit" class="btn btn-primary" id="submit">Send</button>
                    </form>
                </div>
            </div>
        </div>
        <script>
            if ($("#contactUsForm").length > 0) {
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
                            required: "Please enter phone",
                            maxlength: "Your phone  maxlength should be in the right form"
                        },
                        subject: {
                            required: "Please enter subject",
                        },
                        message: {
                            required: "Please enter message",
                            maxlength: "Your message name maxlength should be 300 characters long."
                        },

                    },
                    submitHandler: function(form) {
                        $.ajaxSetup({
                            headers: {
                                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                            }
                        });
                        $('#submit').html('Please Wait...');
                        $("#submit").attr("disabled", true);
                        $.ajax({
                            url: "{{ route('contact.us.store') }}",
                            type: "POST",
                            data: $('#contactUsForm').serialize(),
                            success: function(response) {
                                $('#submit').html('Submit');
                                $("#submit").attr("disabled", false);
                                alert('Ajax form has been submitted successfully');
                                document.getElementById("contactUsForm").reset();
                            }
                        });
                    }
                })
            }
        </script>
    </body>

</html>  --}}
