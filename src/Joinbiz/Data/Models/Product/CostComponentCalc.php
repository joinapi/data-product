<?php

namespace Joinbiz\Data\Models\Product;

use Illuminate\Database\Eloquent\Model;

/**
 * @property string $cost_component_calc_id
 * @property string $cost_gl_account_type_id
 * @property string $offsetting_gl_account_type_id
 * @property string $currency_uom_id
 * @property string $cost_custom_method_id
 * @property string $description
 * @property float $fixed_cost
 * @property float $variable_cost
 * @property float $per_milli_second
 * @property string $last_updated_stamp
 * @property string $last_updated_tx_stamp
 * @property string $created_stamp
 * @property string $created_tx_stamp
 * @property GlAccountType $glAccountTypeByCostGlAccountTypeId
 * @property CustomMethod $customMethodByCostCustomMethodId
 * @property Uom $uomByCurrencyUomId
 * @property GlAccountType $glAccountTypeByOffsettingGlAccountTypeId
 * @property CostComponent[] $costComponents
 * @property ProductCostComponentCalc[] $productCostComponentCalcs
 * @property WorkEffortCostCalc[] $workEffortCostCalcs
 */
class CostComponentCalc extends Model
{
    const CREATED_AT = 'created_stamp';
    const UPDATED_AT = 'last_updated_stamp';

    /**
     * The table associated with the model.
     * 
     * @var string
     */
    protected $table = 'cost_component_calc';

    /**
     * The primary key for the model.
     * 
     * @var string
     */
    protected $primaryKey = 'cost_component_calc_id';

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
    protected $fillable = ['cost_gl_account_type_id', 'offsetting_gl_account_type_id', 'currency_uom_id', 'cost_custom_method_id', 'description', 'fixed_cost', 'variable_cost', 'per_milli_second', 'last_updated_stamp', 'last_updated_tx_stamp', 'created_stamp', 'created_tx_stamp'];

    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function glAccountTypeByCostGlAccountTypeId()
    {
        return $this->belongsTo('Joinbiz\Data\Models\Accounting\GlAccountType', 'cost_gl_account_type_id', 'gl_account_type_id');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function customMethodByCostCustomMethodId()
    {
        return $this->belongsTo('Joinbiz\Data\Models\Common\CustomMethod', 'cost_custom_method_id', 'custom_method_id');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function uomByCurrencyUomId()
    {
        return $this->belongsTo('Joinbiz\Data\Models\Common\Uom', 'currency_uom_id', 'uom_id');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function glAccountTypeByOffsettingGlAccountTypeId()
    {
        return $this->belongsTo('Joinbiz\Data\Models\Accounting\GlAccountType', 'offsetting_gl_account_type_id', 'gl_account_type_id');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function costComponents()
    {
        return $this->hasMany('Joinbiz\Data\Models\Product\CostComponent', 'cost_component_calc_id', 'cost_component_calc_id');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function productCostComponentCalcs()
    {
        return $this->hasMany('Joinbiz\Data\Models\Product\ProductCostComponentCalc', 'cost_component_calc_id', 'cost_component_calc_id');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function workEffortCostCalcs()
    {
        return $this->hasMany('Joinbiz\Data\Models\Workeffort\WorkEffortCostCalc', 'cost_component_calc_id', 'cost_component_calc_id');
    }
}
