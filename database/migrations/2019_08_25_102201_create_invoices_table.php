<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateInvoicesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('invoices', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('token');
            $table->string('tipo');
            $table->integer('id_cliente')->unsigned();
            $table->string('nome');
            $table->string('indirizzo_via');
            $table->string('indirizzo_cap');
            $table->string('indirizzo_citta');
            $table->string('indirizzo_provincia');
            $table->string('indirizzo_extra');
            $table->string('paese');
            $table->string('lingua');
            $table->string('piva');
            $table->string('cf');
            $table->string('numero');
            $table->date('data');
            $table->date('prossima_scadenza');
            $table->string('valuta');
            $table->double('valuta_cambio');
            $table->boolean('prezzi_ivati');
            $table->double('importo_netto');
            $table->double('importo_iva');
            $table->double('importo_totale');
            $table->double('rivalsa');
            $table->double('importo_rivalsa');
            $table->double('cassa');
            $table->double('importo_cassa');
            $table->double('rit_acconto');
            $table->double('imponibile_ritenuta');
            $table->double('importo_rit_acconto');
            $table->double('rit_altra');
            $table->double('importo_rit_altra');
            $table->double('marca_bollo');
            $table->string('oggetto_visibile');
            $table->string('oggetto_interno');
            $table->string('centro_ricavo');
            $table->string('centro_costo');
            $table->string('note');
            $table->boolean('nascondi_scadenza');
            $table->boolean('ddt');
            $table->boolean('ftacc');
            $table->integer('product_id')->unsigned();
            $table->integer('payment_id')->unsigned();
            $table->timestamps();

            $table->foreign('product_id')->references('id')->on('products');
            $table->foreign('payment_id')->references('id')->on('payments');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('invoices');
    }
}
