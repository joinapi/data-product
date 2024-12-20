<?php

namespace Joinbiz\Data\Models\Product;

use Illuminate\Database\Eloquent\Model;

/**
 * @property string $inventory_item_id
 * @property string $physical_inventory_id
 * @property string $variance_reason_id
 * @property float $available_to_promise_var
 * @property float $quantity_on_hand_var
 * @property string $comments
 * @property string $last_updated_stamp
 * @property string $last_updated_tx_stamp
 * @property string $created_stamp
 * @property string $created_tx_stamp
 * @property InventoryItem $inventoryItem
 * @property PhysicalInventory $physicalInventory
 * @property VarianceReason $varianceReason
 */
class InventoryItemVariance extends Model
{
    const CREATED_AT = 'created_stamp';
    const UPDATED_AT = 'last_updated_stamp';

    /**
     * The table associated with the model.
     * 
     * @var string
     */
    protected $table = 'inventory_item_variance';

    /**
     * @var array
     */
    protected $fillable = ['variance_reason_id', 'available_to_promise_var', 'quantity_on_hand_var', 'comments', 'last_updated_stamp', 'last_updated_tx_stamp', 'created_stamp', 'created_tx_stamp'];

    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function inventoryItem()
    {
        return $this->belongsTo('Joinbiz\Data\Models\Product\InventoryItem', 'inventory_item_id', 'inventory_item_id');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function physicalInventory()
    {
        return $this->belongsTo('Joinbiz\Data\Models\Product\PhysicalInventory', 'physical_inventory_id', 'physical_inventory_id');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function varianceReason()
    {
        return $this->belongsTo('Joinbiz\Data\Models\Product\VarianceReason', 'variance_reason_id', 'variance_reason_id');
    }
}
