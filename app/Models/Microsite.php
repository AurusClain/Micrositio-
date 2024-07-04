<?php
namespace App\Models;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Microsite extends Model
{
    use HasFactory;
    protected $fillable = [
        'name', 'logo', 'category', 'currency', 'payment_expiry', 'site_type'
    ];
}