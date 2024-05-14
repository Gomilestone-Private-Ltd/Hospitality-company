<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Order extends Model
{
    use HasFactory, SoftDeletes;

    protected $fillable = [
                            'slug',
                            'product_id',
                            'user_id',
                            'address_id',
                            'order_no',
                            'invoice_no',
                            'party_order_no',
                            'purchase_order_date',
                            'order_status',
                            'total_amount',
                            'total_amount_with_gst',
                            'remark',
                            'added_by',
                            'updated_by',
                            'deleted_by'
                           ];
    
    /**
     * @method Get aded by details
     * @param
     * @return added by details
     */
    public function addedBy(){
        return $this->belongsTo(Admin::class,'added_by');
      }
}