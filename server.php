<?php
/*
$address="127.0.0.1";
$port="3222";
$sock=socket_create(AF_INET,SOCK_STREAM,0) or die("Cannot create a socket");
socket_bind($sock,$address,$port) or die("Couldnot bind to socket");
socket_listen($sock) or die("Couldnot listen to socket");
$accept=socket_accept($sock) or die("Couldnot accept");
$read=socket_read($accept,1024) or die("Cannot read from socket");
echo $read;
socket_write($accept,"Hello client");
socket_close($sock);
*/

//script to keep the server running forever and add a counter to the message sent to the client in a session
/* 
session_start();
$address="127.0.0.1";
$port="3222";
$sock=socket_create(AF_INET,SOCK_STREAM,0) or die("Cannot create a socket");
socket_bind($sock,$address,$port) or die("Couldnot bind to socket");
socket_listen($sock) or die("Couldnot listen to socket");
while(true){
    $accept=socket_accept($sock) or die("Couldnot accept");
    $read=socket_read($accept,1024) or die("Cannot read from socket"); 
    echo $read;
    $msg="Hello client" ;
    socket_write($accept,$msg);
    sleep(1);
  //  socket_close($accept);
}
//socket_close($sock);
*/ 

session_start(); 
$counter = 0; 
$address="127.0.0.1"; 
$port="3222"; 
$sock=socket_create(AF_INET,SOCK_STREAM,0) or die("Cannot create a socket"); 
socket_bind($sock,$address,$port) or die("Couldnot bind to socket"); 
socket_listen($sock) or die("Couldnot listen to socket"); 
while(true){ 
    $accept=socket_accept($sock) or die("Couldnot accept"); 
    $read=socket_read($accept,1024) or die("Cannot read from socket"); 
    echo "Message ".++$counter." sent to client: ".$read; 
    $msg="Hello client" . $counter ; 
    socket_write($accept,$msg); 
    //sleep(1); 
}
 


 
?>