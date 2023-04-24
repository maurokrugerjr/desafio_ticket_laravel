<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;
use Spatie\Permission\PermissionRegistrar;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        $tableNames = config('permission.table_names');

        Schema::table('users', function (Blueprint $table) use ($tableNames){
            $table->unsignedBigInteger(PermissionRegistrar::$pivotPermission)->nullable();
            $table->foreign(PermissionRegistrar::$pivotPermission)
            ->references('id') // permission id
            ->on($tableNames['permissions'])
            ->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('users', function (Blueprint $table) {
            $table->dropForeign('permission_id');
            // $table->foreign('permission_id')
            // ->references('id')
            // ->constrained()
            // ->onDelete('cascade');
        });
    }
};
