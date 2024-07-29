<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class MantenedorModel extends Model
{
    use HasFactory;
    
    // Buscar la tabla con el nombre projects usando eloquent
    protected $table = 'projects';

    protected function casts(): array {
        return [
            'published_at' => 'datetime',
        ];
    }
    
}
