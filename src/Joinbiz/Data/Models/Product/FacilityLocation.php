<?php

namespace Joinbiz\Data\Models\Product;

use Illuminate\Database\Eloquent\Model;

/**
 * @property string $facility_id
 * @property string $location_seq_id
 * @property string $location_type_enum_id
 * @property string $geo_point_id
 * @property string $area_id
 * @property string $aisle_id
 * @property string $section_id
 * @property string $level_id
 * @property string $position_id
 * @property string $last_updated_stamp
 * @property string $last_updated_tx_stamp
 * @property string $created_stamp
 * @property string $created_tx_stamp
 * @property Facility $facility
 * @property GeoPoint $geoPoint
 * @property Enumeration $enumerationByLocationTypeEnumId
 */
class FacilityLocation extends Model
{
    const CREATED_AT = 'created_stamp';
    const UPDATED_AT = 'last_updated_stamp';

    /**
     * The table associated with the model.
     * 
     * @var string
     */
    protected $table = 'facility_location';

    /**
     * @var array
     */
    protected $fillable = ['location_type_enum_id', 'geo_point_id', 'area_id', 'aisle_id', 'section_id', 'level_id', 'position_id', 'last_updated_stamp', 'last_updated_tx_stamp', 'created_stamp', 'created_tx_stamp'];

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
    public function geoPoint()
    {
        return $this->belongsTo('Joinbiz\Data\Models\Common\GeoPoint', 'geo_point_id', 'geo_point_id');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function enumerationByLocationTypeEnumId()
    {
        return $this->belongsTo('Joinbiz\Data\Models\Common\Enumeration', 'location_type_enum_id', 'enum_id');
    }
}
