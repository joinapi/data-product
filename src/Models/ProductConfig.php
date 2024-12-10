<?php

namespace Joinbiz\Data\Models\Product;

use Illuminate\Database\Eloquent\Model;

/**
 * @property string $product_id
 * @property string $config_item_id
 * @property float $sequence_num
 * @property string $from_date
 * @property string $description
 * @property string $long_description
 * @property string $config_type_id
 * @property string $default_config_option_id
 * @property string $thru_date
 * @property string $is_mandatory
 * @property string $last_updated_stamp
 * @property string $last_updated_tx_stamp
 * @property string $created_stamp
 * @property string $created_tx_stamp
 * @property ProductConfigItem $productConfigItem
 * @property Product $product
 */
class ProductConfig extends Model
{
    const CREATED_AT = 'created_stamp';
    const UPDATED_AT = 'last_updated_stamp';

    /**
     * The table associated with the model.
     *
     * @var string
     */
    protected $table = 'product_config';

    /**
     * @var array
     */
    protected $fillable = ['description', 'long_description', 'config_type_id', 'default_config_option_id', 'thru_date', 'is_mandatory', 'last_updated_stamp', 'last_updated_tx_stamp', 'created_stamp', 'created_tx_stamp'];

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