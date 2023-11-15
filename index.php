<?php

session_start();
if(!isset($_SESSION['count'])){
    $_SESSION['count']=0;
}
else{
    $_SESSION['count']++;
}
$address="127.0.0.1";
$port="3222";
$msg="Hello server" . $_SESSION['count'];

$sock=socket_create(AF_INET,SOCK_STREAM,0) or die("Cannot create a socket");
socket_connect($sock,$address,$port) or die("Could not connect to the socket");
socket_write($sock,$msg);

$read=socket_read($sock,1024);
echo $read;
socket_close($sock);

?>
 
 