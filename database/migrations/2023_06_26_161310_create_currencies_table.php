<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
	/**
	 * Run the migrations.
	 */
	public function up(): void
	{
		Schema::create(
			'currencies', static function (Blueprint $table) {
				$table->string('id')->unique();
				$table->timestamps();
				$table->string('name');
				$table->decimal('price')->unsigned();
				$table->boolean('active')->default(true);
				$table->timestamp('active_at');
				$table->integer('sort')->unsigned()->default(1);
			}
		);
	}

	/**
	 * Reverse the migrations.
	 */
	public function down(): void
	{
		Schema::dropIfExists('currencies');
	}
};
