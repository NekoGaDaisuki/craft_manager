<?php

final class Plugin
{
    public static function createLink($label, array $args = array())
    {
        $args = array_merge(array('label' => $label), $args);
        return 'index.php?' . http_build_query($args);
    }
}
