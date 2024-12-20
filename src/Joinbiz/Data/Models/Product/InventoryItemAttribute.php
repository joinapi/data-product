<?php

namespace Joinbiz\Data\Models\Product;

use Illuminate\Database\Eloquent\Model;

/**
 * @property string $inventory_item_id
 * @property string $attr_name
 * @property string $attr_value
 * @property string $attr_description
 * @property string $last_updated_stamp
 * @property string $last_updated_tx_stamp
 * @property string $created_stamp
 * @property string $created_tx_stamp
 * @property InventoryItem $inventoryItem
 */
class InventoryItemAttribute extends Model
{
    const CREATED_AT = 'created_stamp';
    const UPDATED_AT = 'last_updated_stamp';

    /**
     * The table associated with the model.
     * 
     * @var string
     */
    protected $table = 'inventory_item_attribute';

    /**
     * @var array
     */
    protected $fillable = ['attr_value', 'attr_description', 'last_updated_stamp', 'last_updated_tx_stamp', 'created_stamp', 'created_tx_stamp'];

    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function inventoryItem()
    {
        return $this->belongsTo('Joinbiz\Data\Models\Product\InventoryItem', 'inventory_item_id', 'inventory_item_id');
    }
}
