<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class payment_detail extends Model
{
    use HasFactory;
    protected $fillable = ['payment_for', 'bayar', 'tanggal', 'detail', 'id_payment', 'jam'];
}
