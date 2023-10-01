<?php

trait Mapper
{
    public function mapFromArray(array $data)
    {
        $obj = new stdClass();
        foreach ($data as $key => $value) {
            $obj->$key = $value;
        }
        return $obj;
    }
}
