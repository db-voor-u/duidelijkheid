<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;
use App\Models\User;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('post_makes', function (Blueprint $table) {
            $table->id();
            // $table->foreignIdFor(User::class);
            $table->string('image')->nullable();
            $table->string('title');
            $table->string('slug')->unique();
            $table->text('body');

            $table->softDeletes();

            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('post__makes');
    }
};
