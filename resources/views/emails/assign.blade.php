<!DOCTYPE html>
<html lang="en">
<head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
</head>
<body>

<div class="container">
    <h4> Checkout Confirmation </h4>
    <p> Hallow, {{$user->first_name}}</p>
    <p>{{$name}} has been been assigned to you</p>
    <p>Please unsure that you return it in time and that it has been checked out of the asset trucker..</p>
    <p>Checked out by {{$admin->username}}</p>
    <p>Thanks</p>
</div>

</body>
</html>