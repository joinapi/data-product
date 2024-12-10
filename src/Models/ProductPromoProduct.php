<?php

namespace Joinbiz\Data\Models\Product;

use Illuminate\Database\Eloquent\Model;

/**
 * @property string $product_promo_id
 * @property string $product_promo_rule_id
 * @property string $product_promo_action_seq_id
 * @property string $product_promo_cond_seq_id
 * @property string $product_id
 * @property string $product_promo_appl_enum_id
 * @property string $last_updated_stamp
 * @property string $last_updated_tx_stamp
 * @property string $created_stamp
 * @property string $created_tx_stamp
 * @property Enumeration $enumerationByProductPromoApplEnumId
 * @property Product $product
 * @property ProductPromo $productPromo
 */
class ProductPromoProduct extends Model
{
    const CREATED_AT = 'created_stamp';
    const UPDATED_AT = 'last_updated_stamp';

    /**
     * The table associated with the model.
     *
     * @var string
     */
    protected $table = 'product_promo_product';

    /**
     * @var array
     */
    protected $fillable = ['product_promo_appl_enum_id', 'last_updated_stamp', 'last_updated_tx_stamp', 'created_stamp', 'created_tx_stamp'];

    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function enumerationByProductPromoApplEnumId()
    {
        return $this->belongsTo('Joinbiz\Data\Models\Product\Enumeration', 'product_promo_appl_enum_id', 'enum_id');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function product()
    {
        return $this->belongsTo('Joinbiz\Data\Models\Product\Product', 'product_id', 'product_id');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function productPromo()
    {
        return $this->belongsTo('Joinbiz\Data\Models\Product\ProductPromo', 'product_promo_id', 'product_promo_id');
    }
}
