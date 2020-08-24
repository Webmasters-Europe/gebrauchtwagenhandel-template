<?php

class Functions
{
    /**
     *
     * @param mixed $url
     * @return exit
     */
    public function redirect($url)
    {
        header('Location: ' . $url);
        exit;
    }
}
