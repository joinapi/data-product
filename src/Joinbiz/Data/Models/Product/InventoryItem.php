<?php

namespace Joinbiz\Data\Models\Product;

use Illuminate\Database\Eloquent\Model;

/**
 * @property string $inventory_item_id
 * @property string $inventory_item_type_id
 * @property string $product_id
 * @property string $party_id
 * @property string $owner_party_id
 * @property string $status_id
 * @property string $facility_id
 * @property string $container_id
 * @property string $lot_id
 * @property string $uom_id
 * @property string $currency_uom_id
 * @property string $fixed_asset_id
 * @property string $datetime_received
 * @property string $datetime_manufactured
 * @property string $expire_date
 * @property string $bin_number
 * @property string $location_seq_id
 * @property string $comments
 * @property float $quantity_on_hand_total
 * @property float $available_to_promise_total
 * @property float $accounting_quantity_total
 * @property float $quantity_on_hand
 * @property float $available_to_promise
 * @property string $serial_number
 * @property string $soft_identifier
 * @property string $activation_number
 * @property string $activation_valid_thru
 * @property float $unit_cost
 * @property string $last_updated_stamp
 * @property string $last_updated_tx_stamp
 * @property string $created_stamp
 * @property string $created_tx_stamp
 * @property AcctgTransEntry[] $acctgTransEntries
 * @property InvoiceItem[] $invoiceItems
 * @property InventoryItemDetail[] $inventoryItemDetails
 * @property Container $container
 * @property Uom $uomByCurrencyUomId
 * @property Facility $facility
 * @property Lot $lot
 * @property Party $partyByOwnerPartyId
 * @property Party $party
 * @property Product $product
 * @property StatusItem $statusItem
 * @property InventoryItemType $inventoryItemType
 * @property Uom $uom
 * @property FixedAsset $fixedAsset
 * @property PicklistItem[] $picklistItems
 * @property ItemIssuance[] $itemIssuances
 * @property OrderItemShipGrpInvRes[] $orderItemShipGrpInvRes
 * @property InventoryItemAttribute[] $inventoryItemAttributes
 * @property Subscription[] $subscriptions
 * @property InventoryTransfer[] $inventoryTransfers
 * @property InventoryItemVariance[] $inventoryItemVariances
 * @property InventoryItemStatus[] $inventoryItemStatuses
 * @property OrderItem[] $orderItemsByFromInventoryItemId
 * @property ShipmentReceipt[] $shipmentReceipts
 * @property InventoryItemLabelAppl[] $inventoryItemLabelAppls
 * @property AcctgTrans[] $acctgTrans
 * @property WorkEffortInventoryAssign[] $workEffortInventoryAssigns
 * @property WorkEffortInventoryProduced[] $workEffortInventoryProduceds
 */
class InventoryItem extends Model
{
    const CREATED_AT = 'created_stamp';
    const UPDATED_AT = 'last_updated_stamp';

    /**
     * The table associated with the model.
     * 
     * @var string
     */
    protected $table = 'inventory_item';

    /**
     * The primary key for the model.
     * 
     * @var string
     */
    protected $primaryKey = 'inventory_item_id';

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
    protected $fillable = ['inventory_item_type_id', 'product_id', 'party_id', 'owner_party_id', 'status_id', 'facility_id', 'container_id', 'lot_id', 'uom_id', 'currency_uom_id', 'fixed_asset_id', 'datetime_received', 'datetime_manufactured', 'expire_date', 'bin_number', 'location_seq_id', 'comments', 'quantity_on_hand_total', 'available_to_promise_total', 'accounting_quantity_total', 'quantity_on_hand', 'available_to_promise', 'serial_number', 'soft_identifier', 'activation_number', 'activation_valid_thru', 'unit_cost', 'last_updated_stamp', 'last_updated_tx_stamp', 'created_stamp', 'created_tx_stamp'];

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function acctgTransEntries()
    {
        return $this->hasMany('Joinbiz\Data\Models\Accounting\AcctgTransEntry', 'inventory_item_id', 'inventory_item_id');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function invoiceItems()
    {
        return $this->hasMany('Joinbiz\Data\Models\Accounting\InvoiceItem', 'inventory_item_id', 'inventory_item_id');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function inventoryItemDetails()
    {
        return $this->hasMany('Joinbiz\Data\Models\Product\InventoryItemDetail', 'inventory_item_id', 'inventory_item_id');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function container()
    {
        return $this->belongsTo('Joinbiz\Data\Models\Product\Container', 'container_id', 'container_id');
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
    public function facility()
    {
        return $this->belongsTo('Joinbiz\Data\Models\Product\Facility', 'facility_id', 'facility_id');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function lot()
    {
        return $this->belongsTo('Joinbiz\Data\Models\Product\Lot', 'lot_id', 'lot_id');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function partyByOwnerPartyId()
    {
        return $this->belongsTo('Joinbiz\Data\Models\Party\Party', 'owner_party_id', 'party_id');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function party()
    {
        return $this->belongsTo('Joinbiz\Data\Models\Party\Party', 'party_id', 'party_id');
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
    public function statusItem()
    {
        return $this->belongsTo('Joinbiz\Data\Models\Common\StatusItem', 'status_id', 'status_id');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function inventoryItemType()
    {
        return $this->belongsTo('Joinbiz\Data\Models\Product\InventoryItemType', 'inventory_item_type_id', 'inventory_item_type_id');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function uom()
    {
        return $this->belongsTo('Joinbiz\Data\Models\Common\Uom', 'uom_id', 'uom_id');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function fixedAsset()
    {
        return $this->belongsTo('Joinbiz\Data\Models\Accounting\FixedAsset', 'fixed_asset_id', 'fixed_asset_id');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function picklistItems()
    {
        return $this->hasMany('Joinbiz\Data\Models\Shipment\PicklistItem', 'inventory_item_id', 'inventory_item_id');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function itemIssuances()
    {
        return $this->hasMany('Joinbiz\Data\Models\Shipment\ItemIssuance', 'inventory_item_id', 'inventory_item_id');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function orderItemShipGrpInvRes()
    {
        return $this->hasMany('Joinbiz\Data\Models\Order\OrderItemShipGrpInvRes', 'inventory_item_id', 'inventory_item_id');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function inventoryItemAttributes()
    {
        return $this->hasMany('Joinbiz\Data\Models\Product\InventoryItemAttribute', 'inventory_item_id', 'inventory_item_id');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function subscriptions()
    {
        return $this->hasMany('Joinbiz\Data\Models\Product\Subscription', 'inventory_item_id', 'inventory_item_id');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function inventoryTransfers()
    {
        return $this->hasMany('Joinbiz\Data\Models\Product\InventoryTransfer', 'inventory_item_id', 'inventory_item_id');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function inventoryItemVariances()
    {
        return $this->hasMany('Joinbiz\Data\Models\Product\InventoryItemVariance', 'inventory_item_id', 'inventory_item_id');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function inventoryItemStatuses()
    {
        return $this->hasMany('Joinbiz\Data\Models\Product\InventoryItemStatus', 'inventory_item_id', 'inventory_item_id');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function orderItemsByFromInventoryItemId()
    {
        return $this->hasMany('Joinbiz\Data\Models\Order\OrderItem', 'from_inventory_item_id', 'inventory_item_id');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function shipmentReceipts()
    {
        return $this->hasMany('Joinbiz\Data\Models\Shipment\ShipmentReceipt', 'inventory_item_id', 'inventory_item_id');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function inventoryItemLabelAppls()
    {
        return $this->hasMany('Joinbiz\Data\Models\Product\InventoryItemLabelAppl', 'inventory_item_id', 'inventory_item_id');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function acctgTrans()
    {
        return $this->hasMany('Joinbiz\Data\Models\Accounting\AcctgTrans', 'inventory_item_id', 'inventory_item_id');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function workEffortInventoryAssigns()
    {
        return $this->hasMany('Joinbiz\Data\Models\Workeffort\WorkEffortInventoryAssign', 'inventory_item_id', 'inventory_item_id');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function workEffortInventoryProduceds()
    {
        return $this->hasMany('Joinbiz\Data\Models\Workeffort\WorkEffortInventoryProduced', 'inventory_item_id', 'inventory_item_id');
    }
}
