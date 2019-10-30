<?php

use App\User;
use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateUsersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('users', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('name');
            $table->string('email')->unique();
            $table->timestamp('email_verified_at')->nullable();
            $table->string('password');
            $table->rememberToken();
            $table->string('verified')->default(User::UNVERIFIED_USER);
            $table->string('verification_token')->nullable();
            $table->string('admin')->default(User::REGULAR_USER);
            $table->string('referente')->nullable();
            $table->string('indirizzo_via')->nullable();
            $table->string('indirizzo_cap')->nullable();
            $table->string('indirizzo_citta')->nullable();
            $table->string('indirizzo_provincia')->nullable();
            $table->string('paese')->nullable();
            $table->string('paese_iso')->nullable();
            $table->string('tel')->nullable();
            $table->string('fax')->nullable();
            $table->string('piva')->nullable();
            $table->string('cf')->nullable();
            $table->timestamps();
            $table->softDeletes(); //deleted_at
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('users');
    }
}
