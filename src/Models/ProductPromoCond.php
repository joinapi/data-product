<?php

namespace Joinbiz\Data\Models\Product;

use Illuminate\Database\Eloquent\Model;

/**
 * @property string $product_promo_id
 * @property string $product_promo_rule_id
 * @property string $product_promo_cond_seq_id
 * @property string $custom_method_id
 * @property string $input_param_enum_id
 * @property string $operator_enum_id
 * @property string $cond_value
 * @property string $other_value
 * @property string $last_updated_stamp
 * @property string $last_updated_tx_stamp
 * @property string $created_stamp
 * @property string $created_tx_stamp
 * @property CustomMethod $customMethod
 * @property Enumeration $enumerationByInputParamEnumId
 * @property Enumeration $enumerationByOperatorEnumId
 * @property ProductPromo $productPromo
 */
class ProductPromoCond extends Model
{
    const CREATED_AT = 'created_stamp';
    const UPDATED_AT = 'last_updated_stamp';

    /**
     * The table associated with the model.
     *
     * @var string
     */
    protected $table = 'product_promo_cond';

    /**
     * @var array
     */
    protected $fillable = ['custom_method_id', 'input_param_enum_id', 'operator_enum_id', 'cond_value', 'other_value', 'last_updated_stamp', 'last_updated_tx_stamp', 'created_stamp', 'created_tx_stamp'];

    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function customMethod()
    {
        return $this->belongsTo('Joinbiz\Data\Models\Product\CustomMethod', 'custom_method_id', 'custom_method_id');
    }

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
    public function productPromo()
    {
        return $this->belongsTo('Joinbiz\Data\Models\Product\ProductPromo', 'product_promo_id', 'product_promo_id');
    }
}
