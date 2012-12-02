<?php

interface Reader
{
    public function read();
}

interface Writer
{
    public function write($value);
}

class Configure implements Reader, Writer
{
    public function write($value)
    {

    }

    public function read()
    {

    }
}