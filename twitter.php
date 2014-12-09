<?php
require 'TwistOAuth.php';
//endpoint https://api.twitter.com/1/account/generate.json

$i = 0;


//Unique Username
$username = "tteexxbalbala";
//password
$password = "wordpress";


//認証用TwitterID,PASS
$id = "";
$pass = "";


//生成する垢の数
while($i < 10){


try {
    

    //OAuth認証
    //Twitter for Android Sign-Up連携
    $to = TwistOAuth::login('RwYLhxGZpMqsWZENFVw', 'Jk80YVGqc7Iz1IDEjCI6x3ExMSBnGjzBAH6qHcWJlo', $id, $pass);
    //rotrors   dora0329

    //API1???

    $request = $to->post('https://api.twitter.com/1/account/generate.json',
            array('screen_name' => $username.$i,
                'password'=>$password,
                'email'=>'ass'.rand().'bii'.rand().'@gmail.com',
                'name'=>'we'.rand().'x'.rand(),
                'protected'=>true //鍵垢
            ));

    //print_r($request);

    print $request->screen_name." Created.".PHP_EOL;


} catch (TwistException $e) {
    print $e->getMessage().PHP_EOL;
}

    $i++;
}



?>