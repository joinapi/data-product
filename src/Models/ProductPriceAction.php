<?php

namespace Joinbiz\Data\Models\Product;

use Illuminate\Database\Eloquent\Model;

/**
 * @property string $product_price_rule_id
 * @property string $product_price_action_seq_id
 * @property string $product_price_action_type_id
 * @property float $amount
 * @property string $rate_code
 * @property string $last_updated_stamp
 * @property string $last_updated_tx_stamp
 * @property string $created_stamp
 * @property string $created_tx_stamp
 * @property ProductPriceRule $productPriceRule
 * @property ProductPriceActionType $productPriceActionType
 */
class ProductPriceAction extends Model
{
    const CREATED_AT = 'created_stamp';
    const UPDATED_AT = 'last_updated_stamp';

    /**
     * The table associated with the model.
     *
     * @var string
     */
    protected $table = 'product_price_action';

    /**
     * @var array
     */
    protected $fillable = ['product_price_action_type_id', 'amount', 'rate_code', 'last_updated_stamp', 'last_updated_tx_stamp', 'created_stamp', 'created_tx_stamp'];

    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function productPriceRule()
    {
        return $this->belongsTo('Joinbiz\Data\Models\Product\ProductPriceRule', 'product_price_rule_id', 'product_price_rule_id');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function productPriceActionType()
    {
        return $this->belongsTo('Joinbiz\Data\Models\Product\ProductPriceActionType', 'product_price_action_type_id', 'product_price_action_type_id');
    }
}
