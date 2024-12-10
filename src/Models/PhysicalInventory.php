<?php

namespace Joinbiz\Data\Models\Product;

use Illuminate\Database\Eloquent\Model;

/**
 * @property string $physical_inventory_id
 * @property string $physical_inventory_date
 * @property string $party_id
 * @property string $general_comments
 * @property string $last_updated_stamp
 * @property string $last_updated_tx_stamp
 * @property string $created_stamp
 * @property string $created_tx_stamp
 * @property InventoryItemVariance[] $inventoryItemVariances
 * @property InventoryItemDetail[] $inventoryItemDetails
 * @property AcctgTrans[] $acctgTrans
 */
class PhysicalInventory extends Model
{
    const CREATED_AT = 'created_stamp';
    const UPDATED_AT = 'last_updated_stamp';

    /**
     * The table associated with the model.
     *
     * @var string
     */
    protected $table = 'physical_inventory';

    /**
     * The primary key for the model.
     *
     * @var string
     */
    protected $primaryKey = 'physical_inventory_id';

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
    protected $fillable = ['physical_inventory_date', 'party_id', 'general_comments', 'last_updated_stamp', 'last_updated_tx_stamp', 'created_stamp', 'created_tx_stamp'];

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function inventoryItemVariances()
    {
        return $this->hasMany('Joinbiz\Data\Models\Product\InventoryItemVariance', 'physical_inventory_id', 'physical_inventory_id');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function inventoryItemDetails()
    {
        return $this->hasMany('Joinbiz\Data\Models\Product\InventoryItemDetail', 'physical_inventory_id', 'physical_inventory_id');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function acctgTrans()
    {
        return $this->hasMany('Joinbiz\Data\Models\Product\AcctgTrans', 'physical_inventory_id', 'physical_inventory_id');
    }
}
