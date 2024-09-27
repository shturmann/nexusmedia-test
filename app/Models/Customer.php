<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Customer extends Model
{
    use HasFactory;

    public $table = 'customers';
    protected $primaryKey = 'id';

    /**
     *
     * @var bool
     */
    public $timestamps = true;

    protected $fillable = ['name', 'email'];

    public function orders()
    {
        return $this->hasMany(Order::class);
    }
}
