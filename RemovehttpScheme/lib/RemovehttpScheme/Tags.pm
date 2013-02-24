package RemovehttpScheme::Tags;
use strict;
use warnings;

sub remove_http {
    my ($str,$arg, $ctx) = @_;
    return $str if $arg !=1;
    $str =~ s/^https?\:\/\/// if $str =~ m/^https?\:\/\//;
    return $str;
}
1;
