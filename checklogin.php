<?php 

$user=$_POST['user']; 
$pass=$_POST['pass'];

function httpGet($url)
{
    $ch = curl_init();  
 
    curl_setopt($ch,CURLOPT_URL,$url);
    curl_setopt($ch,CURLOPT_RETURNTRANSFER,true);
//  curl_setopt($ch,CURLOPT_HEADER, false); 
 
    $output=curl_exec($ch);
 
    curl_close($ch);
    return $output;
}
 
$url = "http://muthu.pythonanywhere.com/Authenticate?UserName=".$user."&Password=".$pass; 
if (httpGet($url) == "1"){
	echo "<script>alert('Incorrect Credentials');window.location.href='login.html';</script>";
}
else{
	header("Location:home.php");
}
?>
