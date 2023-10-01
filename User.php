<?php
require('Collection.php');
require('Mapper.php');

class User extends Collection
{
    use Mapper;
    protected array $fields = ['name', 'email', 'age'];
}
