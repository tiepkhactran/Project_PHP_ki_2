<?php
use Pusher\Pusher;
function sayHello(){
    echo("Hello Huong");
    return "Hello Huong xinh!";

}
function sendMessage($broadcast,$event,$data){
    $options = array(
        'cluster' => env("PUSHER_APP_CLUSTER"),
        'useTLS' => true
    );
    $pusher = new Pusher(
        env("PUSHER_APP_KEY"),
        env("PUSHER_APP_SECRET"),
        env("PUSHER_APP_ID"),
        $options
    );

    //$data['message'] = 'hello world';
    $pusher->trigger($broadcast,$event, $data);
}

