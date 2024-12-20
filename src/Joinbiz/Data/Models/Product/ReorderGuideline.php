<?php

namespace Joinbiz\Data\Models\Product;

use Illuminate\Database\Eloquent\Model;

/**
 * @property string $reorder_guideline_id
 * @property string $product_id
 * @property string $party_id
 * @property string $facility_id
 * @property string $geo_id
 * @property string $role_type_id
 * @property string $from_date
 * @property string $thru_date
 * @property float $reorder_quantity
 * @property float $reorder_level
 * @property string $last_updated_stamp
 * @property string $last_updated_tx_stamp
 * @property string $created_stamp
 * @property string $created_tx_stamp
 * @property Facility $facility
 * @property Geo $geo
 * @property Party $party
 * @property Product $product
 */
class ReorderGuideline extends Model
{
    const CREATED_AT = 'created_stamp';
    const UPDATED_AT = 'last_updated_stamp';

    /**
     * The table associated with the model.
     * 
     * @var string
     */
    protected $table = 'reorder_guideline';

    /**
     * The primary key for the model.
     * 
     * @var string
     */
    protected $primaryKey = 'reorder_guideline_id';

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
    protected $fillable = ['product_id', 'party_id', 'facility_id', 'geo_id', 'role_type_id', 'from_date', 'thru_date', 'reorder_quantity', 'reorder_level', 'last_updated_stamp', 'last_updated_tx_stamp', 'created_stamp', 'created_tx_stamp'];

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
    public function geo()
    {
        return $this->belongsTo('Joinbiz\Data\Models\Common\Geo', 'geo_id', 'geo_id');
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
}
