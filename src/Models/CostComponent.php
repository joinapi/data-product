<?php

namespace Joinbiz\Data\Models\Product;

use Illuminate\Database\Eloquent\Model;

/**
 * @property string $cost_component_id
 * @property string $cost_component_type_id
 * @property string $product_id
 * @property string $product_feature_id
 * @property string $party_id
 * @property string $geo_id
 * @property string $work_effort_id
 * @property string $fixed_asset_id
 * @property string $cost_component_calc_id
 * @property string $cost_uom_id
 * @property string $from_date
 * @property string $thru_date
 * @property float $cost
 * @property string $last_updated_stamp
 * @property string $last_updated_tx_stamp
 * @property string $created_stamp
 * @property string $created_tx_stamp
 * @property CostComponentCalc $costComponentCalc
 * @property Uom $uomByCostUomId
 * @property FixedAsset $fixedAsset
 * @property Geo $geo
 * @property Party $party
 * @property ProductFeature $productFeature
 * @property Product $product
 * @property CostComponentType $costComponentType
 * @property WorkEffort $workEffort
 * @property CostComponentAttribute[] $costComponentAttributes
 */
class CostComponent extends Model
{
    const CREATED_AT = 'created_stamp';
    const UPDATED_AT = 'last_updated_stamp';

    /**
     * The table associated with the model.
     *
     * @var string
     */
    protected $table = 'cost_component';

    /**
     * The primary key for the model.
     *
     * @var string
     */
    protected $primaryKey = 'cost_component_id';

    /**
     * The "type" of the auto-incrementing ID.
     *
     * @var string
     */
    protected $keyType = 'string';

    /**
     * Indicates if the IDs are auto-incrementing.
     *
     * @var bool
     */
    public $incrementing = false;

    /**
     * @var array
     */
    protected $fillable = ['cost_component_type_id', 'product_id', 'product_feature_id', 'party_id', 'geo_id', 'work_effort_id', 'fixed_asset_id', 'cost_component_calc_id', 'cost_uom_id', 'from_date', 'thru_date', 'cost', 'last_updated_stamp', 'last_updated_tx_stamp', 'created_stamp', 'created_tx_stamp'];

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
    public function uomByCostUomId()
    {
        return $this->belongsTo('Joinbiz\Data\Models\Product\Uom', 'cost_uom_id', 'uom_id');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function fixedAsset()
    {
        return $this->belongsTo('Joinbiz\Data\Models\Product\FixedAsset', 'fixed_asset_id', 'fixed_asset_id');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function geo()
    {
        return $this->belongsTo('Joinbiz\Data\Models\Product\Geo', 'geo_id', 'geo_id');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function party()
    {
        return $this->belongsTo('Joinbiz\Data\Models\Product\Party', 'party_id', 'party_id');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function productFeature()
    {
        return $this->belongsTo('Joinbiz\Data\Models\Product\ProductFeature', 'product_feature_id', 'product_feature_id');
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
    public function costComponentType()
    {
        return $this->belongsTo('Joinbiz\Data\Models\Product\CostComponentType', 'cost_component_type_id', 'cost_component_type_id');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function workEffort()
    {
        return $this->belongsTo('Joinbiz\Data\Models\Product\WorkEffort', 'work_effort_id', 'work_effort_id');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function costComponentAttributes()
    {
        return $this->hasMany('Joinbiz\Data\Models\Product\CostComponentAttribute', 'cost_component_id', 'cost_component_id');
    }
}
