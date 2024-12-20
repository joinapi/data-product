<?php

namespace Joinbiz\Data\Models\Product;

use Illuminate\Database\Eloquent\Model;

/**
 * @property string $inventory_item_label_id
 * @property string $inventory_item_label_type_id
 * @property string $description
 * @property string $last_updated_stamp
 * @property string $last_updated_tx_stamp
 * @property string $created_stamp
 * @property string $created_tx_stamp
 * @property InventoryItemLabelAppl[] $inventoryItemLabelAppls
 * @property InventoryItemLabelType $inventoryItemLabelType
 */
class InventoryItemLabel extends Model
{
    const CREATED_AT = 'created_stamp';
    const UPDATED_AT = 'last_updated_stamp';

    /**
     * The table associated with the model.
     * 
     * @var string
     */
    protected $table = 'inventory_item_label';

    /**
     * The primary key for the model.
     * 
     * @var string
     */
    protected $primaryKey = 'inventory_item_label_id';

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
    protected $fillable = ['inventory_item_label_type_id', 'description', 'last_updated_stamp', 'last_updated_tx_stamp', 'created_stamp', 'created_tx_stamp'];

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function inventoryItemLabelAppls()
    {
        return $this->hasMany('Joinbiz\Data\Models\Product\InventoryItemLabelAppl', 'inventory_item_label_id', 'inventory_item_label_id');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function inventoryItemLabelType()
    {
        return $this->belongsTo('Joinbiz\Data\Models\Product\InventoryItemLabelType', 'inventory_item_label_type_id', 'inventory_item_label_type_id');
    }
}
