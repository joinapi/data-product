<?php

namespace Joinbiz\Data\Models\Product;

use Illuminate\Database\Eloquent\Model;

/**
 * @property string $product_type_id
 * @property string $attr_name
 * @property string $description
 * @property string $last_updated_stamp
 * @property string $last_updated_tx_stamp
 * @property string $created_stamp
 * @property string $created_tx_stamp
 * @property ProductType $productType
 */
class ProductTypeAttr extends Model
{
    const CREATED_AT = 'created_stamp';
    const UPDATED_AT = 'last_updated_stamp';

    /**
     * The table associated with the model.
     *
     * @var string
     */
    protected $table = 'product_type_attr';

    /**
     * @var array
     */
    protected $fillable = ['description', 'last_updated_stamp', 'last_updated_tx_stamp', 'created_stamp', 'created_tx_stamp'];

    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function productType()
    {
        return $this->belongsTo('Joinbiz\Data\Models\Product\ProductType', 'product_type_id', 'product_type_id');
    }
}