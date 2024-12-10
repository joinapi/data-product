<?php

namespace Joinbiz\Data\Models\Product;

use Illuminate\Database\Eloquent\Model;

/**
 * @property string $inventory_item_id
 * @property string $status_id
 * @property string $status_datetime
 * @property string $change_by_user_login_id
 * @property string $status_end_datetime
 * @property string $owner_party_id
 * @property string $product_id
 * @property string $last_updated_stamp
 * @property string $last_updated_tx_stamp
 * @property string $created_stamp
 * @property string $created_tx_stamp
 * @property InventoryItem $inventoryItem
 * @property StatusItem $statusItem
 * @property UserLogin $userLoginByChangeByUserLoginId
 */
class InventoryItemStatus extends Model
{
    const CREATED_AT = 'created_stamp';
    const UPDATED_AT = 'last_updated_stamp';

    /**
     * The table associated with the model.
     *
     * @var string
     */
    protected $table = 'inventory_item_status';

    /**
     * @var array
     */
    protected $fillable = ['change_by_user_login_id', 'status_end_datetime', 'owner_party_id', 'product_id', 'last_updated_stamp', 'last_updated_tx_stamp', 'created_stamp', 'created_tx_stamp'];

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
    public function statusItem()
    {
        return $this->belongsTo('Joinbiz\Data\Models\Product\StatusItem', 'status_id', 'status_id');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function userLoginByChangeByUserLoginId()
    {
        return $this->belongsTo('Joinbiz\Data\Models\Product\UserLogin', 'change_by_user_login_id', 'user_login_id');
    }
}
