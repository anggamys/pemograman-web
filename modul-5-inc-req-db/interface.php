<?php

interface MyInterface
{
    public function A();
    public function B();
    public function setNama(string $nama): string;
}

class MyClass implements MyInterface
{
    protected $nama;

    public function A(): string
    {
        echo "Ini dari function A <br>";
    }

    public function B(): string
    {
        echo "Ini dari function B <br>";
    }

    public function setNama(string $nama): string
    {
        $this->nama = $nama;
        echo $this->nama;
    }
}
