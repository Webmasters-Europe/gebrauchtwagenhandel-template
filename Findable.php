<?php

trait Findable
{
    /**
     *
     * @param mixed $path
     * @return array
     */
    public function getCars($path = "data/entries.txt")
    {
        $cars = [];
        if (file_exists($path)) {
            $unserialized = unserialize(file_get_contents($path));
            if ($unserialized) {
                $cars = array_reverse($unserialized);
            }
        }

        return $cars;
    }
    /**
     *
     * @param mixed $userInput
     * @param string $encoding
     * @return string
     */
    public function escape($userInput, $encoding = 'UTF-8')
    {
        return htmlspecialchars(
            strip_tags($userInput),
            ENT_QUOTES | ENT_HTML5,
            $encoding
        );
    }
}
