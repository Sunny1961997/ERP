<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Supplierpayment extends Model
{
    public function supplier()
    {
        return $this->belongsTo(Supplier::class);
    }
}
