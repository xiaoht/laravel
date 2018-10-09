<?php

namespace App\Http\Models;

class Question extends Model
{
    //

    public function isHidden()
    {
        return $this->is_hidden === 'T';
    }
}
