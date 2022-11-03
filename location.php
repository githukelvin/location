<?php
echo "<prev>";
$ip =$_SERVER["REMOTE_ADDR"];
$ip2 = getenv("REMOTE_ADDR");

// $ip3 =$_SERVER['HTTP_CF_CONNECTING_IP'];
echo "<br>" ;

// echo $ip3;
echo "<br>" ;
echo "<br>" ;

echo $ip2;
echo "<br>" ;
echo "<br>" ;

print_r($_SERVER);
echo "<br>" ;
print_r($ip);
 
// To get  any host ip  addres  like  google ,facebook
echo "<br>" ;

echo gethostbyname('www.google.com');
echo "<br>" ;

echo "</prev>";


// GEOLOCATION

//https://ipwhois.app/json/41.89.56.2



// getting  the real   location
$urlB='http://ip-api.com/json/'.$ip2;
echo $urlB;
$ipVal =  curl_init($urlB);

curl_setopt($ipVal,CURLOPT_RETURNTRANSFER,true);

$json_VAlue= curl_exec($ipVal);
print_r($json_VAlue);
echo "<br>" ;
curl_close($ipVal);
$ResultIp = json_decode($json_VAlue,true);
echo "<br>" ;
print_r($ResultIp);
?>