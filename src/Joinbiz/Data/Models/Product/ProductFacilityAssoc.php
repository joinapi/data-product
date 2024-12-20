<?php

namespace Joinbiz\Data\Models\Product;

use Illuminate\Database\Eloquent\Model;

/**
 * @property string $product_id
 * @property string $facility_id
 * @property string $facility_id_to
 * @property string $facility_assoc_type_id
 * @property string $from_date
 * @property string $thru_date
 * @property float $sequence_num
 * @property float $transit_time
 * @property string $last_updated_stamp
 * @property string $last_updated_tx_stamp
 * @property string $created_stamp
 * @property string $created_tx_stamp
 * @property Facility $facility
 * @property Facility $facilityByFacilityIdTo
 * @property Product $product
 * @property FacilityAssocType $facilityAssocType
 */
class ProductFacilityAssoc extends Model
{
    const CREATED_AT = 'created_stamp';
    const UPDATED_AT = 'last_updated_stamp';

    /**
     * The table associated with the model.
     * 
     * @var string
     */
    protected $table = 'product_facility_assoc';

    /**
     * @var array
     */
    protected $fillable = ['thru_date', 'sequence_num', 'transit_time', 'last_updated_stamp', 'last_updated_tx_stamp', 'created_stamp', 'created_tx_stamp'];

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
    public function facilityByFacilityIdTo()
    {
        return $this->belongsTo('Joinbiz\Data\Models\Product\Facility', 'facility_id_to', 'facility_id');
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
    public function facilityAssocType()
    {
        return $this->belongsTo('Joinbiz\Data\Models\Product\FacilityAssocType', 'facility_assoc_type_id', 'facility_assoc_type_id');
    }
}
