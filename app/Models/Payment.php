<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Payment extends Model
{
    use HasFactory;
    protected $table = 'payment';
    protected $primaryKey = 'id';

    protected $fillable = [
        'id',
        'sub_total',
        'total',
        'payment_made',
        'balance_due',
        'invoice_id',
    ];

    public function invoice(){
        return $this->belongsTo(Invoice::class, "invoice_id", "id");
    }
}
