<?php
namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Transaction extends Model
{
    protected $fillable = ['customer_id', 'package_id', 'driver_id', 'branch_id'];

    public function customer()
    {
        return $this->belongsTo(Customer::class);
    }

    public function package()
    {
        return $this->belongsTo(Package::class);
    }

    public function driver()
    {
        return $this->belongsTo(Driver::class);
    }

    public function branch()
    {
        return $this->belongsTo(Branch::class);
    }
}