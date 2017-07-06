<?php
$access_token = 'BAaoNQhsx64H4YHOp/bfAfETlM9575QKunC7OrbrntIM+TDi6c+8FBTSSkaKkB/tcsLssPhXSuiZyhNaKtPv0TJ0uhMA2bAmt1jeuId7xjUbYZ+TYYJKCK2TvT1SpV3Yzj2tA9WpU+ZmA/tCn31tiAdB04t89/1O/w1cDnyilFU=';

$url = 'https://api.line.me/v1/oauth/verify';

$headers = array('Authorization: Bearer ' . $access_token);

$ch = curl_init($url);
curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
curl_setopt($ch, CURLOPT_HTTPHEADER, $headers);
curl_setopt($ch, CURLOPT_FOLLOWLOCATION, 1);
$result = curl_exec($ch);
curl_close($ch);

echo $result;
