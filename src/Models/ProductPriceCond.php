<?php

namespace Joinbiz\Data\Models\Product;

use Illuminate\Database\Eloquent\Model;

/**
 * @property string $product_price_rule_id
 * @property string $product_price_cond_seq_id
 * @property string $input_param_enum_id
 * @property string $operator_enum_id
 * @property string $cond_value
 * @property string $last_updated_stamp
 * @property string $last_updated_tx_stamp
 * @property string $created_stamp
 * @property string $created_tx_stamp
 * @property Enumeration $enumerationByInputParamEnumId
 * @property Enumeration $enumerationByOperatorEnumId
 * @property ProductPriceRule $productPriceRule
 */
class ProductPriceCond extends Model
{
    const CREATED_AT = 'created_stamp';
    const UPDATED_AT = 'last_updated_stamp';

    /**
     * The table associated with the model.
     *
     * @var string
     */
    protected $table = 'product_price_cond';

    /**
     * @var array
     */
    protected $fillable = ['input_param_enum_id', 'operator_enum_id', 'cond_value', 'last_updated_stamp', 'last_updated_tx_stamp', 'created_stamp', 'created_tx_stamp'];

    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function enumerationByInputParamEnumId()
    {
        return $this->belongsTo('Joinbiz\Data\Models\Product\Enumeration', 'input_param_enum_id', 'enum_id');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function enumerationByOperatorEnumId()
    {
        return $this->belongsTo('Joinbiz\Data\Models\Product\Enumeration', 'operator_enum_id', 'enum_id');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function productPriceRule()
    {
        return $this->belongsTo('Joinbiz\Data\Models\Product\ProductPriceRule', 'product_price_rule_id', 'product_price_rule_id');
    }
}
