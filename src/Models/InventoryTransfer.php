<?php

namespace Joinbiz\Data\Models\Product;

use Illuminate\Database\Eloquent\Model;

/**
 * @property string $inventory_transfer_id
 * @property string $status_id
 * @property string $inventory_item_id
 * @property string $facility_id
 * @property string $container_id
 * @property string $facility_id_to
 * @property string $container_id_to
 * @property string $item_issuance_id
 * @property string $location_seq_id
 * @property string $location_seq_id_to
 * @property string $send_date
 * @property string $receive_date
 * @property string $comments
 * @property string $last_updated_stamp
 * @property string $last_updated_tx_stamp
 * @property string $created_stamp
 * @property string $created_tx_stamp
 * @property Container $container
 * @property Facility $facility
 * @property ItemIssuance $itemIssuance
 * @property InventoryItem $inventoryItem
 * @property StatusItem $statusItem
 * @property Container $containerByContainerIdTo
 * @property Facility $facilityByFacilityIdTo
 */
class InventoryTransfer extends Model
{
    const CREATED_AT = 'created_stamp';
    const UPDATED_AT = 'last_updated_stamp';

    /**
     * The table associated with the model.
     *
     * @var string
     */
    protected $table = 'inventory_transfer';

    /**
     * The primary key for the model.
     *
     * @var string
     */
    protected $primaryKey = 'inventory_transfer_id';

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
    protected $fillable = ['status_id', 'inventory_item_id', 'facility_id', 'container_id', 'facility_id_to', 'container_id_to', 'item_issuance_id', 'location_seq_id', 'location_seq_id_to', 'send_date', 'receive_date', 'comments', 'last_updated_stamp', 'last_updated_tx_stamp', 'created_stamp', 'created_tx_stamp'];

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
    public function facility()
    {
        return $this->belongsTo('Joinbiz\Data\Models\Product\Facility', 'facility_id', 'facility_id');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function itemIssuance()
    {
        return $this->belongsTo('Joinbiz\Data\Models\Product\ItemIssuance', 'item_issuance_id', 'item_issuance_id');
    }

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
    public function containerByContainerIdTo()
    {
        return $this->belongsTo('Joinbiz\Data\Models\Product\Container', 'container_id_to', 'container_id');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function facilityByFacilityIdTo()
    {
        return $this->belongsTo('Joinbiz\Data\Models\Product\Facility', 'facility_id_to', 'facility_id');
    }
}
