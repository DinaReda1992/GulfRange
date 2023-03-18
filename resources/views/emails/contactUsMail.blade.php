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
    <h1>{{ $mailData['title'] }}</h1>
    <p>{{ $mailData['email'] }}</p>
    <p>{{ $mailData['subject'] }}</p>
    <p>{{ $mailData['company'] }}</p>
    <p>{{ $mailData['phone'] }}</p>
    <p>{{ $mailData['question'] }}</p>
    {{--  <p>{{ $mailData['body'] }}</p>  --}}



  
    {{--  <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
    tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
    quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
    consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
    cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
    proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>  --}}
     
    <p>Thank you</p>
</body>
</html>