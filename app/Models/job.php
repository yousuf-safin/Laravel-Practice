<?php
namespace App\Models;
use Illuminate\Support\Arr;

class Job {
    public static function all(): array {
        return [
            [   
                'id' => 1,
                'title' => 'Director',
                'salary' => '$10,000'  
            ],
            [   
                'id' => 2,
                'title' => 'Programmer',
                'salary' => '$20,000'  
            ],
            [
                'id' => 3,
                'title' => 'Teacher',
                'salary' => '$60,000'  
            ]          
        ];
    }

    public static function find(int $id): array {
        $job = Arr::first(static::all(), fn($job) => $job['id'] == $id);
        
        if (!$job) {
            abort(404);
        }

        return $job; // Make sure to return the found job
    }
}
