<?php

namespace Joinbiz\Data\Models\Product;

use Illuminate\Database\Eloquent\Model;

/**
 * @property string $product_id
 * @property string $product_maint_seq_id
 * @property string $product_maint_type_id
 * @property string $maint_template_work_effort_id
 * @property string $interval_uom_id
 * @property string $interval_meter_type_id
 * @property string $maint_name
 * @property float $interval_quantity
 * @property float $repeat_count
 * @property string $last_updated_stamp
 * @property string $last_updated_tx_stamp
 * @property string $created_stamp
 * @property string $created_tx_stamp
 * @property Uom $uomByIntervalUomId
 * @property ProductMaintType $productMaintType
 * @property ProductMeterType $productMeterTypeByIntervalMeterTypeId
 * @property Product $product
 * @property WorkEffort $workEffortByMaintTemplateWorkEffortId
 */
class ProductMaint extends Model
{
    const CREATED_AT = 'created_stamp';
    const UPDATED_AT = 'last_updated_stamp';

    /**
     * The table associated with the model.
     * 
     * @var string
     */
    protected $table = 'product_maint';

    /**
     * @var array
     */
    protected $fillable = ['product_maint_type_id', 'maint_template_work_effort_id', 'interval_uom_id', 'interval_meter_type_id', 'maint_name', 'interval_quantity', 'repeat_count', 'last_updated_stamp', 'last_updated_tx_stamp', 'created_stamp', 'created_tx_stamp'];

    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function uomByIntervalUomId()
    {
        return $this->belongsTo('Joinbiz\Data\Models\Common\Uom', 'interval_uom_id', 'uom_id');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function productMaintType()
    {
        return $this->belongsTo('Joinbiz\Data\Models\Product\ProductMaintType', 'product_maint_type_id', 'product_maint_type_id');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function productMeterTypeByIntervalMeterTypeId()
    {
        return $this->belongsTo('Joinbiz\Data\Models\Product\ProductMeterType', 'interval_meter_type_id', 'product_meter_type_id');
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
    public function workEffortByMaintTemplateWorkEffortId()
    {
        return $this->belongsTo('Joinbiz\Data\Models\Workeffort\WorkEffort', 'maint_template_work_effort_id', 'work_effort_id');
    }
}
