<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Project extends Model
{
    use HasFactory;

    public function getRouteKeyName()
    {
        return 'title';
        //para que las url sean mas amigables en torno a lo que es los espacios se aconseja realizar un campo mas llamado url 
    }
}
