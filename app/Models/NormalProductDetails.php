<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

/**
 * Class NormalProductDetails
 * @package App\Models
 */
class NormalProductDetails extends Model
{
    //
    use SoftDeletes;
    /**
     * @var string
     */
    protected $table = "normal_product_details";
    /**
     * @var array
     */
    protected $dates = ['deleted_at'];

    /**
     * @var array
     */
    protected $fillable = ['price', 'serial', 'discount_type', 'model_number', 'barcode', 'discount', 'stock'];

    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function product()
    {
        return $this->belongsTo('App\Models\Product', 'product_id');
    }


}
