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
        Schema::create('tags', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->timestamps();
        });
        // Many to Many relationship between jobs and tags
        // This table acts as a pivot table to connect jobs to tags
        // The foreign key for the job is named job_listing_id to avoid confusion with the job_id foreign key in the user table
        // The foreign key for the tag is named tag_id to be consistent with the naming convention
        // The timestamps are not necessary for this pivot table, but are included for consistency with the other tables
        Schema::create('job_tag', function (Blueprint $table) {
            $table->id();
            $table->foreignIdFor(App\Models\Job::class,'job_listing_id')->constrained()->cascadeOnDelete();
            $table->foreignIdFor(App\Models\Tag::class,'tag_id')->constrained()->cascadeOnDelete();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('tags');
        Schema::dropIfExists('job_tag');
    }
};
