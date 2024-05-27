<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Cuti extends Model
{
    use HasFactory;

    /**
     * The table associated with the model.
     *
     * @var string
     */
    protected $table = 'tbl_cuti';

    /**
     * Get the route key for the model.
     */
    public function getRouteKeyName(): string
    {
        return 'Cuti_ID';
    }
}
