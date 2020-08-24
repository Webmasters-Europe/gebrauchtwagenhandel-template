<?php

trait Persitable
{
    /**
     *
     * @param string $path
     * @return void
     */
    public function save($path = "data/entries.txt"): void
    {
        $cars = self::getCars($path);
        $cars[] = $this;
        file_put_contents($path, serialize($cars));
    }
}
