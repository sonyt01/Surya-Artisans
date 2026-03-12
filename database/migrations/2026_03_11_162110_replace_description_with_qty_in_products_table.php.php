<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {
    public function up(): void
    {
        Schema::table('products', function (Blueprint $table) {
            // Drop 'description' only if it exists
            if (Schema::hasColumn('products', 'description')) {
                $table->dropColumn('description');
            }

            // Add 'qty' if it doesn't exist
            if (!Schema::hasColumn('products', 'qty')) {
                $table->integer('qty')->default(1)->after('name');
            }
        });
    }

    public function down(): void
    {
        Schema::table('products', function (Blueprint $table) {
            if (!Schema::hasColumn('products', 'description')) {
                $table->string('description')->nullable();
            }

            if (Schema::hasColumn('products', 'qty')) {
                $table->dropColumn('qty');
            }
        });
    }
};
