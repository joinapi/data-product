<?php

namespace Joinbiz\Data\Models\Product;

use Illuminate\Database\Eloquent\Model;

/**
 * @property string $order_id
 * @property string $promo_sequence_id
 * @property string $product_promo_id
 * @property string $product_promo_code_id
 * @property string $party_id
 * @property float $total_discount_amount
 * @property float $quantity_left_in_actions
 * @property string $last_updated_stamp
 * @property string $last_updated_tx_stamp
 * @property string $created_stamp
 * @property string $created_tx_stamp
 * @property ProductPromoCode $productPromoCode
 * @property OrderHeader $orderHeader
 * @property ProductPromo $productPromo
 * @property Party $party
 */
class ProductPromoUse extends Model
{
    const CREATED_AT = 'created_stamp';
    const UPDATED_AT = 'last_updated_stamp';

    /**
     * The table associated with the model.
     * 
     * @var string
     */
    protected $table = 'product_promo_use';

    /**
     * @var array
     */
    protected $fillable = ['product_promo_id', 'product_promo_code_id', 'party_id', 'total_discount_amount', 'quantity_left_in_actions', 'last_updated_stamp', 'last_updated_tx_stamp', 'created_stamp', 'created_tx_stamp'];

    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function productPromoCode()
    {
        return $this->belongsTo('Joinbiz\Data\Models\Product\ProductPromoCode', 'product_promo_code_id', 'product_promo_code_id');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function orderHeader()
    {
        return $this->belongsTo('Joinbiz\Data\Models\Order\OrderHeader', 'order_id', 'order_id');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function productPromo()
    {
        return $this->belongsTo('Joinbiz\Data\Models\Product\ProductPromo', 'product_promo_id', 'product_promo_id');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function party()
    {
        return $this->belongsTo('Joinbiz\Data\Models\Party\Party', 'party_id', 'party_id');
    }
}
