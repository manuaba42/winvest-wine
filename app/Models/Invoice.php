<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Invoice extends Model
{
    use HasFactory;
    protected $table = 'invoice';
    protected $primaryKey = 'id';

    protected $fillable = [
        'id',
        'date_invoice',
        'terms',
        'date_due',
        'po',
        'investor_id',
    ];

    public function investor(){
        return $this->belongsTo(User::class, "investor_id", "id");
    }
    public function payment()
    {
        return $this->hasMany(Payment::class, 'id','invoice_id');
    }
    public function wine_invoice()
    {
        return $this->hasMany(WineInvoice::class, 'id','invoice_id');
    }
}
