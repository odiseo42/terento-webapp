<?php

class User extends Eloquent
{
    public function items()
    {
        return $this->has_many('Item');
    }
}