<?php
require 'TwistOAuth.php';
//endpoint https://api.twitter.com/1/account/generate.json

$i = 0;


//Unique Username
$username = "tteexxbalbala";
//password
$password = "wordpress";


//�F�ؗpTwitterID,PASS
$id = "";
$pass = "";


//��������C�̐�
while($i < 10){


try {
    

    //OAuth�F��
    //Twitter for Android Sign-Up�A�g
    $to = TwistOAuth::login('RwYLhxGZpMqsWZENFVw', 'Jk80YVGqc7Iz1IDEjCI6x3ExMSBnGjzBAH6qHcWJlo', $id, $pass);
    //rotrors   dora0329

    //API1???

    $request = $to->post('https://api.twitter.com/1/account/generate.json',
            array('screen_name' => $username.$i,
                'password'=>$password,
                'email'=>'ass'.rand().'bii'.rand().'@gmail.com',
                'name'=>'we'.rand().'x'.rand(),
                'protected'=>true //���C
            ));

    //print_r($request);

    print $request->screen_name." Created.".PHP_EOL;


} catch (TwistException $e) {
    print $e->getMessage().PHP_EOL;
}

    $i++;
}



?>