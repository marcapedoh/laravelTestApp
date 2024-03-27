<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Students extends Model
{
    use HasFactory;
    private string $first_name;
    private string $last_name;
    private int $age;
    public function classAppartenance(): HasOne{
        return $this->hasOne(Classes::class);
    }
}
