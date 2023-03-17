<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('sites', function (Blueprint $table) {
            $table->string('currency')->nullable();
            $table->float('vat')->default(0);
            $table->boolean('vat_in_price')->default(0);
            $table->boolean('vat_in_delivery')->default(0);
            $table->boolean('vat_in_payment')->default(0);
            $table->boolean('minus_quantities')->default(0);
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('sites', function (Blueprint $table) {
            $table->dropColumn([
                'currency',
                'vat',
                'vat_in_price',
                'vat_in_delivery',
                'vat_in_payment',
                'minus_quantities',
            ]);
        });
    }
};
