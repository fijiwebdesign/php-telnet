PHP Telnet Client
==========

Simple PHP Telnet Client. Supports any socket/stream protocols that PHP supports including encrypted connections. 

* Example HTTP Request

![alt tag](http://g.recordit.co/cS1let15Y4.gif)

* Example Sending Email via SMTP

![alt tag](http://g.recordit.co/hhEEKVUm0D.gif)

Install
=======

Copy telnet.php to your local machine.

```
git clone https://github.com/fijiwebdesign/php-telnet/
cd php-telnet/
```

Usage
=====

Open your command line client/shell/terminal etc. 

`php telnet.php host port`

*Example*

`php telnet.php google.com 80`

*Example using ssl to connect to an IMAP server*

`php telnet.php imap.gmail.com 993 ssl`

The telnet program supports any of the protocols that php sockets supports. This depeds on your PHP install but is normally:  tcp, udp, ssl, sslv3, sslv2, tls

Requirements
--------

You'll need PHP with sockets support

About
-----

Based initially on the python example from http://www.binarytides.com/code-telnet-client-sockets-python with additions to support encryption and other tcp based protocols. 
