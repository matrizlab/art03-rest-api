<?php

namespace App;

use App\Invoice;
use App\Category;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    protected $fillable = [
        'cod',
        'nome',
        'desc',
        'prezzo_ivato',
        'prezzo_netto',
        'prezzo_lordo',
        'costo',
        'cod_iva',
        'um',
        'categoria',
        'note',
        'magazzino',
        'giacenza_iniziale'

    ];

    public function categories()
    {
        return $this->belongsToMany(Category::class);
    }

    public function invoices()
    {
        return $this->belongsToMany(Invoice::class);
    }
}
