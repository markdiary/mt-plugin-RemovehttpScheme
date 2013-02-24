<?php function smarty_modifier_removehttpscheme ($str, $args) {
    if ($args !=1) {
        return $str;
    }
    $pattern = '/^http?\:\/\//';
        if ( preg_match ($pattern , $str) ) {
            $str = preg_replace ( $pattern, '', $str );
        }
    return $str;
}
?>