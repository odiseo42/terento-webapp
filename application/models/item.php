<?php

class Item extends Eloquent
{
    public function author()
    {
        return $this->belongs_to('User', 'user_id');
    }
}