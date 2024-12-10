<?php

namespace Joinbiz\Data\Models\Product;

use Illuminate\Database\Eloquent\Model;

/**
 * @property string $product_store_group_id
 * @property string $parent_group_id
 * @property string $from_date
 * @property string $thru_date
 * @property float $sequence_num
 * @property string $last_updated_stamp
 * @property string $last_updated_tx_stamp
 * @property string $created_stamp
 * @property string $created_tx_stamp
 * @property ProductStoreGroup $productStoreGroup
 * @property ProductStoreGroup $productStoreGroupByParentGroupId
 */
class ProductStoreGroupRollup extends Model
{
    const CREATED_AT = 'created_stamp';
    const UPDATED_AT = 'last_updated_stamp';

    /**
     * The table associated with the model.
     *
     * @var string
     */
    protected $table = 'product_store_group_rollup';

    /**
     * @var array
     */
    protected $fillable = ['thru_date', 'sequence_num', 'last_updated_stamp', 'last_updated_tx_stamp', 'created_stamp', 'created_tx_stamp'];

    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function productStoreGroup()
    {
        return $this->belongsTo('Joinbiz\Data\Models\Product\ProductStoreGroup', 'product_store_group_id', 'product_store_group_id');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function productStoreGroupByParentGroupId()
    {
        return $this->belongsTo('Joinbiz\Data\Models\Product\ProductStoreGroup', 'parent_group_id', 'product_store_group_id');
    }
}
