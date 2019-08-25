<?php

namespace App;

use App\Invoice;
use Illuminate\Database\Eloquent\Model;

class Payment extends Model
{
    protected $fillable = [
        'data_scadenza',
        'importo',
        'metodo',
        'data_saldo',
    ];

    public function invoices()
    {
        return $this->hasOne(Invoice::class);
    }
}
