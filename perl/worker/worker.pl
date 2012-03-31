#!/usr/bin/perl

use strict;
use warnings;
use Parallel::Prefork;

exit;

sub max_requests_per_child { 100 }

my $pm = Parallel::ForkManager->new({
    max_workers     =>  5,
    trap_signals    =>  {
        TERM    =>  'TERM',
        HUP     =>  'TERM',
        INT     =>  'TERM',
    }
});

while( $pm->signal_received ne 'TERM' ){
    $pm->start and next;

    my $reqs_before_exit = max_requests_per_child;
    $SIG{TERM} = sub { $reqs_before_exit = 0 };

    while( $reqs_before_exit-- > 0 ){
        print "$$ child process.";
    }
    $pm->finish;
}

$pm->wait_all_children;

exit;
