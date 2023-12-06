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
        Schema::create('sites', function (Blueprint $table) {
            $table->id();
            $table->string('username')->unique();
//            $table->uuid('id')->primary();
            $table->string('admin_email')->nullable();
            $table->string('admin_password')->nullable();
            $table->string('custom_domain')->nullable();
            $table->string('name')->nullable();
            $table->string('front_end_url')->unique();
            $table->string('crm_url')->nullable();
            $table->string('logo')->nullable();
            $table->string('support_email')->nullable();
            $table->string('status')->default('pending');
            $table->string('custom_domain_status')->default('pending');
            $table->json('report')->nullable();
            $table->foreignUuid('user_id')->references('id')->on('users')
                ->onDelete('cascade')
                ->onUpdate('cascade');
            $table->boolean('is_active')->default(0);
            $table->boolean('custom_domain_connected')->default(0);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('sites');
    }
};
