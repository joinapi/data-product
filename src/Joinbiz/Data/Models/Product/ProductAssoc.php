<?php

namespace Joinbiz\Data\Models\Product;

use Illuminate\Database\Eloquent\Model;

/**
 * @property string $product_id
 * @property string $product_id_to
 * @property string $product_assoc_type_id
 * @property string $from_date
 * @property string $routing_work_effort_id
 * @property string $estimate_calc_method
 * @property string $recurrence_info_id
 * @property string $thru_date
 * @property float $sequence_num
 * @property string $reason
 * @property float $quantity
 * @property float $scrap_factor
 * @property string $instruction
 * @property string $last_updated_stamp
 * @property string $last_updated_tx_stamp
 * @property string $created_stamp
 * @property string $created_tx_stamp
 * @property Product $productByProductIdTo
 * @property CustomMethod $customMethodByEstimateCalcMethod
 * @property Product $product
 * @property RecurrenceInfo $recurrenceInfo
 * @property WorkEffort $workEffortByRoutingWorkEffortId
 * @property ProductAssocType $productAssocType
 */
class ProductAssoc extends Model
{
    const CREATED_AT = 'created_stamp';
    const UPDATED_AT = 'last_updated_stamp';

    /**
     * The table associated with the model.
     * 
     * @var string
     */
    protected $table = 'product_assoc';

    /**
     * @var array
     */
    protected $fillable = ['routing_work_effort_id', 'estimate_calc_method', 'recurrence_info_id', 'thru_date', 'sequence_num', 'reason', 'quantity', 'scrap_factor', 'instruction', 'last_updated_stamp', 'last_updated_tx_stamp', 'created_stamp', 'created_tx_stamp'];

    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function productByProductIdTo()
    {
        return $this->belongsTo('Joinbiz\Data\Models\Product\Product', 'product_id_to', 'product_id');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function customMethodByEstimateCalcMethod()
    {
        return $this->belongsTo('Joinbiz\Data\Models\Common\CustomMethod', 'estimate_calc_method', 'custom_method_id');
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
    public function recurrenceInfo()
    {
        return $this->belongsTo('Joinbiz\Data\Models\Service\RecurrenceInfo', 'recurrence_info_id', 'recurrence_info_id');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function workEffortByRoutingWorkEffortId()
    {
        return $this->belongsTo('Joinbiz\Data\Models\Workeffort\WorkEffort', 'routing_work_effort_id', 'work_effort_id');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function productAssocType()
    {
        return $this->belongsTo('Joinbiz\Data\Models\Product\ProductAssocType', 'product_assoc_type_id', 'product_assoc_type_id');
    }
}
