<?php

namespace Joinbiz\Data\Models\Product;

use Illuminate\Database\Eloquent\Model;

/**
 * @property string $config_item_id
 * @property string $config_option_id
 * @property string $config_item_id_to
 * @property string $config_option_id_to
 * @property float $sequence_num
 * @property string $config_iactn_type_id
 * @property string $description
 * @property string $last_updated_stamp
 * @property string $last_updated_tx_stamp
 * @property string $created_stamp
 * @property string $created_tx_stamp
 * @property ProductConfigItem $productConfigItem
 * @property ProductConfigItem $productConfigItemByConfigItemIdTo
 */
class ProductConfigOptionIactn extends Model
{
    const CREATED_AT = 'created_stamp';
    const UPDATED_AT = 'last_updated_stamp';

    /**
     * The table associated with the model.
     * 
     * @var string
     */
    protected $table = 'product_config_option_iactn';

    /**
     * @var array
     */
    protected $fillable = ['config_iactn_type_id', 'description', 'last_updated_stamp', 'last_updated_tx_stamp', 'created_stamp', 'created_tx_stamp'];

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
    public function productConfigItemByConfigItemIdTo()
    {
        return $this->belongsTo('Joinbiz\Data\Models\Product\ProductConfigItem', 'config_item_id_to', 'config_item_id');
    }
}
