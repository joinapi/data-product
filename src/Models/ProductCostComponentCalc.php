<?php

namespace Joinbiz\Data\Models\Product;

use Illuminate\Database\Eloquent\Model;

/**
 * @property string $product_id
 * @property string $cost_component_type_id
 * @property string $from_date
 * @property string $cost_component_calc_id
 * @property float $sequence_num
 * @property string $thru_date
 * @property string $last_updated_stamp
 * @property string $last_updated_tx_stamp
 * @property string $created_stamp
 * @property string $created_tx_stamp
 * @property CostComponentCalc $costComponentCalc
 * @property CostComponentType $costComponentType
 * @property Product $product
 */
class ProductCostComponentCalc extends Model
{
    const CREATED_AT = 'created_stamp';
    const UPDATED_AT = 'last_updated_stamp';

    /**
     * The table associated with the model.
     *
     * @var string
     */
    protected $table = 'product_cost_component_calc';

    /**
     * @var array
     */
    protected $fillable = ['cost_component_calc_id', 'sequence_num', 'thru_date', 'last_updated_stamp', 'last_updated_tx_stamp', 'created_stamp', 'created_tx_stamp'];

    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function costComponentCalc()
    {
        return $this->belongsTo('Joinbiz\Data\Models\Product\CostComponentCalc', 'cost_component_calc_id', 'cost_component_calc_id');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function costComponentType()
    {
        return $this->belongsTo('Joinbiz\Data\Models\Product\CostComponentType', 'cost_component_type_id', 'cost_component_type_id');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function product()
    {
        return $this->belongsTo('Joinbiz\Data\Models\Product\Product', 'product_id', 'product_id');
    }
}
