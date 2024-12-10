<?php

namespace Joinbiz\Data\Models\Product;

use Illuminate\Database\Eloquent\Model;

/**
 * @property string $inventory_item_id
 * @property string $inventory_item_label_type_id
 * @property string $inventory_item_label_id
 * @property float $sequence_num
 * @property string $last_updated_stamp
 * @property string $last_updated_tx_stamp
 * @property string $created_stamp
 * @property string $created_tx_stamp
 * @property InventoryItem $inventoryItem
 * @property InventoryItemLabel $inventoryItemLabel
 * @property InventoryItemLabelType $inventoryItemLabelType
 */
class InventoryItemLabelAppl extends Model
{
    const CREATED_AT = 'created_stamp';
    const UPDATED_AT = 'last_updated_stamp';

    /**
     * The table associated with the model.
     *
     * @var string
     */
    protected $table = 'inventory_item_label_appl';

    /**
     * @var array
     */
    protected $fillable = ['inventory_item_label_id', 'sequence_num', 'last_updated_stamp', 'last_updated_tx_stamp', 'created_stamp', 'created_tx_stamp'];

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
    public function inventoryItemLabel()
    {
        return $this->belongsTo('Joinbiz\Data\Models\Product\InventoryItemLabel', 'inventory_item_label_id', 'inventory_item_label_id');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function inventoryItemLabelType()
    {
        return $this->belongsTo('Joinbiz\Data\Models\Product\InventoryItemLabelType', 'inventory_item_label_type_id', 'inventory_item_label_type_id');
    }
}
