<?php

namespace Joinbiz\Data\Models\Product;

use Illuminate\Database\Eloquent\Model;

/**
 * @property string $facility_type_id
 * @property string $parent_type_id
 * @property string $has_table
 * @property string $description
 * @property string $last_updated_stamp
 * @property string $last_updated_tx_stamp
 * @property string $created_stamp
 * @property string $created_tx_stamp
 * @property Facility[] $facilities
 * @property FacilityTypeAttr[] $facilityTypeAttrs
 * @property FacilityType $facilityTypeByParentTypeId
 */
class FacilityType extends Model
{
    const CREATED_AT = 'created_stamp';
    const UPDATED_AT = 'last_updated_stamp';

    /**
     * The table associated with the model.
     *
     * @var string
     */
    protected $table = 'facility_type';

    /**
     * The primary key for the model.
     *
     * @var string
     */
    protected $primaryKey = 'facility_type_id';

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
    protected $fillable = ['parent_type_id', 'has_table', 'description', 'last_updated_stamp', 'last_updated_tx_stamp', 'created_stamp', 'created_tx_stamp'];

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function facilities()
    {
        return $this->hasMany('Joinbiz\Data\Models\Product\Facility', 'facility_type_id', 'facility_type_id');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function facilityTypeAttrs()
    {
        return $this->hasMany('Joinbiz\Data\Models\Product\FacilityTypeAttr', 'facility_type_id', 'facility_type_id');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function facilityTypeByParentTypeId()
    {
        return $this->belongsTo('Joinbiz\Data\Models\Product\FacilityType', 'parent_type_id', 'facility_type_id');
    }
}
