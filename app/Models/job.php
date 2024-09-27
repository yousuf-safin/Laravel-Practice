<?php
namespace App\Models;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Support\Arr;

class Job extends Model{
   use HasFactory;
   protected $table = 'job_listings';

   protected $fillable = ['title', 'salary'];

   /**
    * Get the employer that owns the Job
    *
    * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
    */
   public function employer()
   {
       return $this->belongsTo(Employer::class);
   }

   /**
    * The tags that belong to the Job
    *
    * @return \Illuminate\Database\Eloquent\Relations\BelongsToMany
    */
   public function tags()
   {
       return $this->belongsToMany(Tag::class, 'job_listing_tag', 'job_listing_id', 'tag_id');
   }
}
