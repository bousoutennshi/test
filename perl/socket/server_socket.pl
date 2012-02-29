#!/usr/bin/perl

use strict;
use warnings;
use IO::Socket::INET;

my $socket = IO::Socket::INET->new(
    LocalAddr   =>  'localhost',
    LocalPort   =>  3000,
    Proto       =>  'tcp',
    Listen      =>  10,
    ResueAddr   =>  1
) or die "create socket error : $!";

while(1){
    my $client = $socket->accept();
    while( <$client> ){
        print $_;
    }
    $client->close;
}

$socket->close;

exit;
