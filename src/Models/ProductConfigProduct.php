<?php

namespace Joinbiz\Data\Models\Product;

use Illuminate\Database\Eloquent\Model;

/**
 * @property string $config_item_id
 * @property string $config_option_id
 * @property string $product_id
 * @property float $quantity
 * @property float $sequence_num
 * @property string $last_updated_stamp
 * @property string $last_updated_tx_stamp
 * @property string $created_stamp
 * @property string $created_tx_stamp
 * @property ProductConfigItem $productConfigItem
 * @property Product $product
 */
class ProductConfigProduct extends Model
{
    const CREATED_AT = 'created_stamp';
    const UPDATED_AT = 'last_updated_stamp';

    /**
     * The table associated with the model.
     *
     * @var string
     */
    protected $table = 'product_config_product';

    /**
     * @var array
     */
    protected $fillable = ['quantity', 'sequence_num', 'last_updated_stamp', 'last_updated_tx_stamp', 'created_stamp', 'created_tx_stamp'];

    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function productConfigItem()
    {
        return $this->belongsTo('Joinbiz\Data\Models\Product\ProductConfigItem', 'config_item_id', 'config_item_id');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function product()
    {
        return $this->belongsTo('Joinbiz\Data\Models\Product\Product', 'product_id', 'product_id');
    }
}
