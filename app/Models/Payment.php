<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Payment extends Model
{
    use HasFactory;


    protected $fillable = ['payment_name', 'user_id', 'amount', 'currency', 'payer', 'debtors', 'note'];


    public function scopeFilter($query, array $filters)
    {
        if ($filters['search'] ?? false) {
            $query->where('payment_name', 'like', '%' . request('search') . '%')
                ->orWhere('id', 'like', '%' . request('search') . '%')
                ->orWhere('amount', 'like', '%' . request('search') . '%')
                ->orWhere('payer', 'like', '%' . request('search') . '%')
                ->orWhere('debtors', 'like', '%' . request('search') . '%')
                // ->orWhere('date', 'like', '%' . request('search') . '%')
                ->orWhere('note', 'like', '%' . request('search') . '%');
        }
    }
}
