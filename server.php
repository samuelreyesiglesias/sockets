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

//script to keep the server running forever
$address="127.0.0.1";
$port="3222";
$sock=socket_create(AF_INET,SOCK_STREAM,0) or die("Cannot create a socket");
socket_bind($sock,$address,$port) or die("Couldnot bind to socket");
socket_listen($sock) or die("Couldnot listen to socket");
$accept=socket_accept($sock) or die("Couldnot accept");
$read=socket_read($accept,1024) or die("Cannot read from socket");
echo $read;
socket_write($accept,"Hello client");
//socket_close($sock);
//unclose to keep the server running forever
while(true){
    $accept=socket_accept($sock) or die("Couldnot accept");
    $read=socket_read($accept,1024) or die("Cannot read from socket");
    echo $read;
    socket_write($accept,"Hello client");
    sleep(3);
}

//not needed if the server is running forever
//socket_close($accept);
?>