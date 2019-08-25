<?php

namespace App;

use App\Customer;
use App\Product;
use App\Payment;
use Illuminate\Database\Eloquent\Model;

class Invoice extends Model
{
    protected $fillable = [
        'id',
        'token',
        'tipo',
        'id_cliente',
        'nome',
        'indirizzo_via',
        'indirizzo_cap',
        'indirizzo_citta',
        'indirizzo_provincia',
        'indirizzo_extra',
        'paese',
        'lingua',
        'piva',
        'cf',
        'numero',
        'data',
        'prossima_scadenza',
        'valuta',
        'valuta_cambio',
        'prezzi_ivati',
        'importo_netto',
        'importo_iva',
        'importo_totale',
        'rivalsa',
        'importo_rivalsa',
        'cassa',
        'importo_cassa',
        'rit_acconto',
        'imponibile_ritenuta',
        'importo_rit_acconto',
        'rit_altra',
        'importo_rit_altra',
        'marca_bollo',
        'oggetto_visibile',
        'oggetto_interno',
        'centro_ricavo',
        'centro_costo',
        'note',
        'nascondi_scadenza',
        'ddt',
        'ftacc',
        'product_id',
        'payment_id',
    ];

    public function customers()
    {
        return $this->belongsTo(Customer::class);
    }

    public function products()
    {
        return $this->belongsToMany(Product::class);
    }

    public function payments()
    {
        return $this->hasMany(Payment::class);
    }
}
