<?php

namespace Joinbiz\Data\Models\Product;

use Illuminate\Database\Eloquent\Model;

/**
 * @property string $container_id
 * @property string $container_type_id
 * @property string $facility_id
 * @property string $description
 * @property string $last_updated_stamp
 * @property string $last_updated_tx_stamp
 * @property string $created_stamp
 * @property string $created_tx_stamp
 * @property ContainerType $containerType
 * @property Facility $facility
 * @property InventoryItem[] $inventoryItems
 * @property ContainerGeoPoint[] $containerGeoPoints
 * @property InventoryTransfer[] $inventoryTransfers
 * @property InventoryTransfer[] $inventoryTransfersByContainerIdTo
 */
class Container extends Model
{
    const CREATED_AT = 'created_stamp';
    const UPDATED_AT = 'last_updated_stamp';

    /**
     * The table associated with the model.
     *
     * @var string
     */
    protected $table = 'container';

    /**
     * The primary key for the model.
     *
     * @var string
     */
    protected $primaryKey = 'container_id';

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
    protected $fillable = ['container_type_id', 'facility_id', 'description', 'last_updated_stamp', 'last_updated_tx_stamp', 'created_stamp', 'created_tx_stamp'];

    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function containerType()
    {
        return $this->belongsTo('Joinbiz\Data\Models\Product\ContainerType', 'container_type_id', 'container_type_id');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function facility()
    {
        return $this->belongsTo('Joinbiz\Data\Models\Product\Facility', 'facility_id', 'facility_id');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function inventoryItems()
    {
        return $this->hasMany('Joinbiz\Data\Models\Product\InventoryItem', 'container_id', 'container_id');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function containerGeoPoints()
    {
        return $this->hasMany('Joinbiz\Data\Models\Product\ContainerGeoPoint', 'container_id', 'container_id');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function inventoryTransfers()
    {
        return $this->hasMany('Joinbiz\Data\Models\Product\InventoryTransfer', 'container_id', 'container_id');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function inventoryTransfersByContainerIdTo()
    {
        return $this->hasMany('Joinbiz\Data\Models\Product\InventoryTransfer', 'container_id_to', 'container_id');
    }
}
