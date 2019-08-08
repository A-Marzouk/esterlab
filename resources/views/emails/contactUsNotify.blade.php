<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Contact us</title>
</head>
<body>
    <div class="container">
        <h1>
            New contact us form submission.
        </h1>
        <div>
            Name  : {{$contactData['name']}} <br/>
            phone : (+{{$contactData['countryCode']}}) {{$contactData['mobile_number']}} <br/>
            Date  & time : {{date(now())}} <br/>
        </div>
    </div>
</body>
</html>