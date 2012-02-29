#!/usr/bin/perl

use strict;
use warnings;
use IO::Socket::INET;

my $client = IO::Socket::INET->new(
    PeerAddr    =>  'localhost',
    PeerPort    =>  3000,
    Proto       =>  'tcp'
) or die "create socket error : $!";

while(1){
    # stdin
    my $data = <STDIN>;
    $client->print($data);
}

$client->close;

exit;
