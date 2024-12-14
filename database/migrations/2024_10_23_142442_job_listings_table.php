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
        schema::create('job_listings', function(Blueprint $table){
           $table->id();
           $table->foreignIdFor(App\Models\Employer::class);
           $table->string('title');
           $table->string('salary');
           $table->timestamps();
            
        });

        schema::create('job_tag', function(Blueprint $table){
            $table->id();
            $table->foreignIdFor(App\Models\Job::class, 'job_listing_id');
            $table->foreignIdFor(App\Models\Tag::class);
            $table->timestamps();
             
         });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('job_tag');
        Schema::dropIfExists('job_listings');
    }
};