<?php

namespace Joinbiz\Data\Models\Product;

use Illuminate\Database\Eloquent\Model;

/**
 * @property string $facility_group_id
 * @property string $facility_group_type_id
 * @property string $primary_parent_group_id
 * @property string $facility_group_name
 * @property string $description
 * @property string $last_updated_stamp
 * @property string $last_updated_tx_stamp
 * @property string $created_stamp
 * @property string $created_tx_stamp
 * @property FacilityGroupRole[] $facilityGroupRoles
 * @property Facility[] $facilitiesByPrimaryFacilityGroupId
 * @property FacilityGroup $facilityGroupByPrimaryParentGroupId
 * @property FacilityGroupType $facilityGroupType
 * @property FacilityGroupMember[] $facilityGroupMembers
 * @property FacilityGroupRollup[] $facilityGroupRollups
 * @property FacilityGroupRollup[] $facilityGroupRollupsByParentFacilityGroupId
 */
class FacilityGroup extends Model
{
    const CREATED_AT = 'created_stamp';
    const UPDATED_AT = 'last_updated_stamp';

    /**
     * The table associated with the model.
     * 
     * @var string
     */
    protected $table = 'facility_group';

    /**
     * The primary key for the model.
     * 
     * @var string
     */
    protected $primaryKey = 'facility_group_id';

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
    protected $fillable = ['facility_group_type_id', 'primary_parent_group_id', 'facility_group_name', 'description', 'last_updated_stamp', 'last_updated_tx_stamp', 'created_stamp', 'created_tx_stamp'];

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function facilityGroupRoles()
    {
        return $this->hasMany('Joinbiz\Data\Models\Product\FacilityGroupRole', 'facility_group_id', 'facility_group_id');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function facilitiesByPrimaryFacilityGroupId()
    {
        return $this->hasMany('Joinbiz\Data\Models\Product\Facility', 'primary_facility_group_id', 'facility_group_id');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function facilityGroupByPrimaryParentGroupId()
    {
        return $this->belongsTo('Joinbiz\Data\Models\Product\FacilityGroup', 'primary_parent_group_id', 'facility_group_id');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function facilityGroupType()
    {
        return $this->belongsTo('Joinbiz\Data\Models\Product\FacilityGroupType', 'facility_group_type_id', 'facility_group_type_id');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function facilityGroupMembers()
    {
        return $this->hasMany('Joinbiz\Data\Models\Product\FacilityGroupMember', 'facility_group_id', 'facility_group_id');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function facilityGroupRollups()
    {
        return $this->hasMany('Joinbiz\Data\Models\Product\FacilityGroupRollup', 'facility_group_id', 'facility_group_id');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function facilityGroupRollupsByParentFacilityGroupId()
    {
        return $this->hasMany('Joinbiz\Data\Models\Product\FacilityGroupRollup', 'parent_facility_group_id', 'facility_group_id');
    }
}
