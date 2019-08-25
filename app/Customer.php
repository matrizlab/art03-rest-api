<?php

namespace App;

use App\Invoice;

class Customer extends User
{
    public function invoices()
    {
        return $this->hasMany(Invoice::class);
    }
}
