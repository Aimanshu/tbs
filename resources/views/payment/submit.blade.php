<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <title>Document</title>
</head>
<body>
    <form name="frm1" target="paypal" id="frm1"  action="{{$url}}" method="post">
        
    </form>
    <script>
    $(document).ready(function(){
        $("#frm1").submit();
    });
    </script>
</body>
</html>