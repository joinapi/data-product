<?php

namespace Joinbiz\Data\Models\Product;

use Illuminate\Database\Eloquent\Model;

/**
 * @property string $product_promo_id
 * @property string $product_promo_rule_id
 * @property string $product_promo_action_seq_id
 * @property string $product_promo_action_enum_id
 * @property string $custom_method_id
 * @property string $order_adjustment_type_id
 * @property string $service_name
 * @property float $quantity
 * @property float $amount
 * @property string $product_id
 * @property string $party_id
 * @property string $use_cart_quantity
 * @property string $last_updated_stamp
 * @property string $last_updated_tx_stamp
 * @property string $created_stamp
 * @property string $created_tx_stamp
 * @property CustomMethod $customMethod
 * @property Enumeration $enumerationByProductPromoActionEnumId
 * @property OrderAdjustmentType $orderAdjustmentType
 * @property ProductPromo $productPromo
 */
class ProductPromoAction extends Model
{
    const CREATED_AT = 'created_stamp';
    const UPDATED_AT = 'last_updated_stamp';

    /**
     * The table associated with the model.
     * 
     * @var string
     */
    protected $table = 'product_promo_action';

    /**
     * @var array
     */
    protected $fillable = ['product_promo_action_enum_id', 'custom_method_id', 'order_adjustment_type_id', 'service_name', 'quantity', 'amount', 'product_id', 'party_id', 'use_cart_quantity', 'last_updated_stamp', 'last_updated_tx_stamp', 'created_stamp', 'created_tx_stamp'];

    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function customMethod()
    {
        return $this->belongsTo('Joinbiz\Data\Models\Common\CustomMethod', 'custom_method_id', 'custom_method_id');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function enumerationByProductPromoActionEnumId()
    {
        return $this->belongsTo('Joinbiz\Data\Models\Common\Enumeration', 'product_promo_action_enum_id', 'enum_id');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function orderAdjustmentType()
    {
        return $this->belongsTo('Joinbiz\Data\Models\Order\OrderAdjustmentType', 'order_adjustment_type_id', 'order_adjustment_type_id');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function productPromo()
    {
        return $this->belongsTo('Joinbiz\Data\Models\Product\ProductPromo', 'product_promo_id', 'product_promo_id');
    }
}
