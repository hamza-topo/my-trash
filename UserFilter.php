<?php

class UserFilter
{
    public function __invoke($a)
    {
        return $a['age'] == 29;
    }
}
