<?php

namespace Joinbiz\Data\Models\Product;

use Illuminate\Database\Eloquent\Model;

/**
 * @property string $product_id
 * @property string $facility_id
 * @property string $replenish_method_enum_id
 * @property string $requirement_method_enum_id
 * @property float $minimum_stock
 * @property float $reorder_quantity
 * @property float $days_to_ship
 * @property float $last_inventory_count
 * @property string $last_updated_stamp
 * @property string $last_updated_tx_stamp
 * @property string $created_stamp
 * @property string $created_tx_stamp
 * @property Facility $facility
 * @property Product $product
 * @property Enumeration $enumerationByReplenishMethodEnumId
 * @property Enumeration $enumerationByRequirementMethodEnumId
 */
class ProductFacility extends Model
{
    const CREATED_AT = 'created_stamp';
    const UPDATED_AT = 'last_updated_stamp';

    /**
     * The table associated with the model.
     *
     * @var string
     */
    protected $table = 'product_facility';

    /**
     * @var array
     */
    protected $fillable = ['replenish_method_enum_id', 'requirement_method_enum_id', 'minimum_stock', 'reorder_quantity', 'days_to_ship', 'last_inventory_count', 'last_updated_stamp', 'last_updated_tx_stamp', 'created_stamp', 'created_tx_stamp'];

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
    public function product()
    {
        return $this->belongsTo('Joinbiz\Data\Models\Product\Product', 'product_id', 'product_id');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function enumerationByReplenishMethodEnumId()
    {
        return $this->belongsTo('Joinbiz\Data\Models\Product\Enumeration', 'replenish_method_enum_id', 'enum_id');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function enumerationByRequirementMethodEnumId()
    {
        return $this->belongsTo('Joinbiz\Data\Models\Product\Enumeration', 'requirement_method_enum_id', 'enum_id');
    }
}
