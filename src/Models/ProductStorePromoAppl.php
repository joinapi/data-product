<?php

namespace Joinbiz\Data\Models\Product;

use Illuminate\Database\Eloquent\Model;

/**
 * @property string $product_store_id
 * @property string $product_promo_id
 * @property string $from_date
 * @property string $thru_date
 * @property float $sequence_num
 * @property string $manual_only
 * @property string $last_updated_stamp
 * @property string $last_updated_tx_stamp
 * @property string $created_stamp
 * @property string $created_tx_stamp
 * @property ProductStore $productStore
 * @property ProductPromo $productPromo
 */
class ProductStorePromoAppl extends Model
{
    const CREATED_AT = 'created_stamp';
    const UPDATED_AT = 'last_updated_stamp';

    /**
     * The table associated with the model.
     *
     * @var string
     */
    protected $table = 'product_store_promo_appl';

    /**
     * @var array
     */
    protected $fillable = ['thru_date', 'sequence_num', 'manual_only', 'last_updated_stamp', 'last_updated_tx_stamp', 'created_stamp', 'created_tx_stamp'];

    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function productStore()
    {
        return $this->belongsTo('Joinbiz\Data\Models\Product\ProductStore', 'product_store_id', 'product_store_id');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function productPromo()
    {
        return $this->belongsTo('Joinbiz\Data\Models\Product\ProductPromo', 'product_promo_id', 'product_promo_id');
    }
}