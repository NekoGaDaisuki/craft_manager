<?php

final class PHPTools
{

    const REL = 'stylesheet';
    const CSS = 'text/css';
    const JS = 'text/javascript';

    public static function renderCSS($css)
    {
        if ($css !== null)
        {
            foreach ($css as $style)
            {
                echo "\n\t\t";
                $attr = ['href' => $style, 'rel' => self::REL, 'type' => self::CSS];
                echo HTMLTools::createSimpleElement('link', $attr);
            }
        }
        echo "\n";
    }

    public static function renderJS($js)
    {
        if ($js !== null)
        {
            foreach ($js as $src)
            {
                echo "\n\t\t";
                $attr = ['type' => self::JS, 'src' => $src];
                echo HTMLTools::createElement('script', $attr);
            }
        }
        echo "\n";
    }

}
