<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Customer extends Model
{
    protected $guarded = [];

    // Default value
    protected $attributes = [
        'active' => 1
    ];

    // Relation One to Many (Inverse)
    public function company() {
        return $this->belongsTo(Company::class);
    }

    // Convert Attribute Values
    public function getActiveAttribute($attribute) {
        // return $this->[][$attribute];
        return $this->activeOptions()[$attribute];
    }

    // Local Scopes 
    public function scopeActive($query){
        return $query->where('active', 1);
    }
    
    public function scopeInActive($query){
        return $query->where('active', 0);
    }

    // Other Function
    public function activeOptions() {
        // ใช้สำหรับทำ select options ได้
        return [
            1 => 'Active',
            0 => 'Inactive',
            2 => 'Progress'
        ];
    }


}
