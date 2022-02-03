<?php





//BY :@AKIL828 - @FFFFFFM

function RandomString($n)
    {
      $characters = '0123456789abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ'; 
    $randomString = ''; 
    for ($i = 0; $i < $n; $i++) { 
        $index = rand(0, strlen($characters) - 1); 
        $randomString .= $characters[$index]; 
    } 
    return $randomString; 
} 

function ak(){
$ch = curl_init(); 
curl_setopt($ch, CURLOPT_URL, "https://newserv.freewha.com/cgi-bin/create_ini.cgi"); 
curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
curl_setopt($ch, CURLOPT_ENCODING , "");
$dom = RandomString("5");
curl_setopt($ch, CURLOPT_POSTFIELDS, "action=validate&domainName=".$dom.".orgfree.com&email=".$dom."%40gmail.com&password=OOakil828OO&confirmPassword=OOakil828OO&agree=1"); 
$ch = curl_exec($ch);

if(strpos($ch ,"Create your account at Free Web Hosting Area")){
return "$dom";
}else{
return "NO";
}

}

$jj = ak();
echo "link : ".$jj.".orgfree.com
pass : OOakil828OO
email : $jj@gmail.com

DONE BY :@AKIL828 - @FFFFFFM

";

//BY :@AKIL828 - @FFFFFFM

