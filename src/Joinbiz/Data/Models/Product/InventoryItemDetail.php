<?php

namespace Joinbiz\Data\Models\Product;

use Illuminate\Database\Eloquent\Model;

/**
 * @property string $inventory_item_id
 * @property string $inventory_item_detail_seq_id
 * @property string $work_effort_id
 * @property string $fixed_asset_id
 * @property string $maint_hist_seq_id
 * @property string $item_issuance_id
 * @property string $receipt_id
 * @property string $physical_inventory_id
 * @property string $reason_enum_id
 * @property string $effective_date
 * @property float $quantity_on_hand_diff
 * @property float $available_to_promise_diff
 * @property float $accounting_quantity_diff
 * @property float $unit_cost
 * @property string $order_id
 * @property string $order_item_seq_id
 * @property string $ship_group_seq_id
 * @property string $shipment_id
 * @property string $shipment_item_seq_id
 * @property string $return_id
 * @property string $return_item_seq_id
 * @property string $description
 * @property string $last_updated_stamp
 * @property string $last_updated_tx_stamp
 * @property string $created_stamp
 * @property string $created_tx_stamp
 * @property InventoryItem $inventoryItem
 * @property ItemIssuance $itemIssuance
 * @property PhysicalInventory $physicalInventory
 * @property Enumeration $enumerationByReasonEnumId
 * @property ShipmentReceipt $shipmentReceipt
 * @property WorkEffort $workEffort
 */
class InventoryItemDetail extends Model
{
    const CREATED_AT = 'created_stamp';
    const UPDATED_AT = 'last_updated_stamp';

    /**
     * The table associated with the model.
     * 
     * @var string
     */
    protected $table = 'inventory_item_detail';

    /**
     * @var array
     */
    protected $fillable = ['work_effort_id', 'fixed_asset_id', 'maint_hist_seq_id', 'item_issuance_id', 'receipt_id', 'physical_inventory_id', 'reason_enum_id', 'effective_date', 'quantity_on_hand_diff', 'available_to_promise_diff', 'accounting_quantity_diff', 'unit_cost', 'order_id', 'order_item_seq_id', 'ship_group_seq_id', 'shipment_id', 'shipment_item_seq_id', 'return_id', 'return_item_seq_id', 'description', 'last_updated_stamp', 'last_updated_tx_stamp', 'created_stamp', 'created_tx_stamp'];

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
    public function itemIssuance()
    {
        return $this->belongsTo('Joinbiz\Data\Models\Shipment\ItemIssuance', 'item_issuance_id', 'item_issuance_id');
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
    public function enumerationByReasonEnumId()
    {
        return $this->belongsTo('Joinbiz\Data\Models\Common\Enumeration', 'reason_enum_id', 'enum_id');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function shipmentReceipt()
    {
        return $this->belongsTo('Joinbiz\Data\Models\Shipment\ShipmentReceipt', 'receipt_id', 'receipt_id');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function workEffort()
    {
        return $this->belongsTo('Joinbiz\Data\Models\Workeffort\WorkEffort', 'work_effort_id', 'work_effort_id');
    }
}
