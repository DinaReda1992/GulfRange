<!DOCTYPE html>
<html>
<head>
    <title>Gulf-Range</title>
</head>
<body>
    @if (session()->has('Sent'))
<div class="alert alert-success alert-dismissible fade show" role="alert">
    <strong>{{ session()->get('Sent') }}</strong>
    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
        <span aria-hidden="true">&times;</span>
    </button>
</div>
@endif
    <h1>{{ $mailData['name'] }}</h1>
    <p>{{ $mailData['email'] }}</p>
    <p>{{ $mailData['phone'] }}</p>
    <p>{{ $mailData['subject'] }}</p>
    <p>{{ $mailData['message'] }}</p>     
    <p>Thank you</p>
</body>
</html>