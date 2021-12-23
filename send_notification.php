<?php
function sendNotification(){
    $url ="https://fcm.googleapis.com/fcm/send";

    $fields=array(
        "to"=>$_REQUEST['token'],
        "notification"=>array(
            "body"=>$_REQUEST['message'],
            "title"=>$_REQUEST['title'],
            "click_action"=>"https://google.com"
        )
    );

    $headers=array(
        'Authorization:key=AAAA5XKttOc:APA91bHtczQviwptR5k66BTfc5QlWPWfJpCyE3aP4gcLl8o6v4-dpR1yZo0EBUz6z7Al3XF28Sy60lGYyC9bKkE86I7WWcmO0TY8guEcWSJVTHbnZi8_4t3YpATARw54CV7rRgM2nXyn',
        'Content-Type:application/json'
    );

    $ch=curl_init();
    curl_setopt($ch,CURLOPT_URL,$url);
    curl_setopt($ch,CURLOPT_POST,true);
    curl_setopt($ch,CURLOPT_HTTPHEADER,$headers);
    curl_setopt($ch,CURLOPT_RETURNTRANSFER,true);
    curl_setopt($ch,CURLOPT_POSTFIELDS,json_encode($fields));
    $result=curl_exec($ch);
    print_r($result);
    curl_close($ch);
}
sendNotification();