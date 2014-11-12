#!/usr/bin/env php

<?php
// telnet program example 
 
// main function
function telnet() {
    global $argv, $argc;
     
    if ($argc < 3) :
        die('Usage : php telnet.php hostname port');
    endif;
     
    $host = $argv[1];
    $port = (int) $argv[2];
    
    if (!$s = fsockopen($host, $port, $errno)) {
        die('Unable to connect : ' . $host . ':' . $port);
    }
    stream_set_blocking($s, 0);
     
    echo 'Connected to remote host' . PHP_EOL;
     
    while (true) {

        $socket_list = array($s, STDIN);
         
        # Get the list sockets which are readable
        if (stream_select($socket_list , $write_sockets, $error_sockets, null) !== false) {
        
            foreach ($socket_list as $sock) {

                // incoming message from remote server
                if ($sock == $s) {
                    if (!$data = stream_get_contents($s)) {
                        echo 'Connection closed';
                     } else {
                        fputs(STDOUT, $data); // print data
                    }
                }
                // user entered a message
                else {
                    $msg = fgets($sock);
                    fputs($s, $msg);
                }
            }
        } else {
            die('Error reading from socket');
        }
    }
}

telnet();
