<?php

namespace Joinbiz\Data\Models\Product;

use Illuminate\Database\Eloquent\Model;

/**
 * @property string $quantity_break_id
 * @property string $quantity_break_type_id
 * @property float $from_quantity
 * @property float $thru_quantity
 * @property string $last_updated_stamp
 * @property string $last_updated_tx_stamp
 * @property string $created_stamp
 * @property string $created_tx_stamp
 * @property QuantityBreakType $quantityBreakType
 * @property ShipmentCostEstimate[] $shipmentCostEstimatesByPriceBreakId
 * @property ShipmentCostEstimate[] $shipmentCostEstimates
 * @property ShipmentCostEstimate[] $shipmentCostEstimatesByWeightBreakId
 */
class QuantityBreak extends Model
{
    const CREATED_AT = 'created_stamp';
    const UPDATED_AT = 'last_updated_stamp';

    /**
     * The table associated with the model.
     *
     * @var string
     */
    protected $table = 'quantity_break';

    /**
     * The primary key for the model.
     *
     * @var string
     */
    protected $primaryKey = 'quantity_break_id';

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
    protected $fillable = ['quantity_break_type_id', 'from_quantity', 'thru_quantity', 'last_updated_stamp', 'last_updated_tx_stamp', 'created_stamp', 'created_tx_stamp'];

    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function quantityBreakType()
    {
        return $this->belongsTo('Joinbiz\Data\Models\Product\QuantityBreakType', 'quantity_break_type_id', 'quantity_break_type_id');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function shipmentCostEstimatesByPriceBreakId()
    {
        return $this->hasMany('Joinbiz\Data\Models\Product\ShipmentCostEstimate', 'price_break_id', 'quantity_break_id');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function shipmentCostEstimates()
    {
        return $this->hasMany('Joinbiz\Data\Models\Product\ShipmentCostEstimate', 'quantity_break_id', 'quantity_break_id');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function shipmentCostEstimatesByWeightBreakId()
    {
        return $this->hasMany('Joinbiz\Data\Models\Product\ShipmentCostEstimate', 'weight_break_id', 'quantity_break_id');
    }
}
