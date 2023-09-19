<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class WineInvoice extends Model
{
    use HasFactory;
    protected $table = 'wine_invoice';
    protected $primaryKey = 'id';

    protected $fillable = [
        'wine',
        'wine_description',
        'qty',
        'unit',
        'rate',
        'discount',
        'amounts',
        'invoice_id',
    ];

    public function invoice(){
        return $this->belongsTo(Invoice::class, "invoice_id", "id");
    }
    
}
