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
        Schema::create('employees', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->string('phone')->nullable();
            $table->enum('role', ['doctor', 'teacher', 'admin_staff']);

            // علاقة المدير (Self Relation)
            $table->foreignId('manager_id')->nullable()->constrained('employees')->onDelete('set null');

            // علاقة القسم
            $table->foreignId('department_id')->nullable()->constrained('departments')->onDelete('set null');

            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('employees');
    }
};
