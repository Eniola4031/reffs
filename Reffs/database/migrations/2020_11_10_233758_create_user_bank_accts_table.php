<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateUserBankAcctsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('user_bank_accts', function (Blueprint $table) {
            $table->uuid('uuid')->primary();
            $table->foreignUuid('user_id')->constrained('users','uuid');
            $table->foreignUuid('bank_id')->constrained('banks', 'uuid');
            $table->string('acct_no');
            $table->string('acct_name');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('user_bank_accts');
    }
}
