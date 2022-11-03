<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>AJAX |JQUERY</title>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
</head>
<body>
   <script type="text/javascript">
  var ds = $.getJSON(" http://ip-api.com/json",(ip)=>{
    var data={
        ip:ip.query,
        isp:ip.isp,
        country:ip.country,
        city:ip.regionName,
    }
console.log(data)

  })
console.log(ds)

   </script> 
</body>
</html>