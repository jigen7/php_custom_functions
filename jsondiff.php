<?php


$jsonData1 = '{"id":1,"name":"Old Manila - The Peninsula","about":"","contact_details":"","address":"The Peninsula, Ayala Corner Makati Avenue, Urdaneta, Makati City","city":"Makati City","lat":"14.554911","long":"121.025433","cover_pic_path":"home_jambajuice.png","cuisines":"European, French, Mediterranean, Australian","is_premium":0,"created_by":0,"created_at":"2016-02-25 11:15:11","updated_at":"2016-02-02 06:01:25","deleted_at":"2016-02-25 11:15:11"}';
$jsonData2 = '{"id":1,"name":"Old Manila - The Peninsula","about":"test","contact_details":"Paolo","address":"The Peninsula, Ayala Corner Makati Avenue, Urdaneta, Makati City","city":"Makati City","lat":"14.554911","long":"121.025433","cover_pic_path":"home_jambajuice.png","cuisines":"European, French, Mediterranean, Australian","is_premium":"0","created_by":0,"created_at":"2016-02-25 11:15:11","updated_at":"2016-03-08 02:09:35","deleted_at":"2016-02-25 11:15:11"}';


$jsonDataArr1 = json_decode($jsonData1, TRUE);
$jsonDataArr2 = json_decode($jsonData2, TRUE);


$diff1 = array_diff_assoc($jsonDataArr1, $jsonDataArr2);

$diff2 = array_diff_assoc($jsonDataArr2, $jsonDataArr1);

print_r($diff1);
echo "<br>";
print_r($diff2);

?>