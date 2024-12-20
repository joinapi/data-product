<?php

namespace Joinbiz\Data\Models\Product;

use Illuminate\Database\Eloquent\Model;

/**
 * @property string $facility_group_id
 * @property string $parent_facility_group_id
 * @property string $from_date
 * @property string $thru_date
 * @property float $sequence_num
 * @property string $last_updated_stamp
 * @property string $last_updated_tx_stamp
 * @property string $created_stamp
 * @property string $created_tx_stamp
 * @property FacilityGroup $facilityGroup
 * @property FacilityGroup $facilityGroupByParentFacilityGroupId
 */
class FacilityGroupRollup extends Model
{
    const CREATED_AT = 'created_stamp';
    const UPDATED_AT = 'last_updated_stamp';

    /**
     * The table associated with the model.
     * 
     * @var string
     */
    protected $table = 'facility_group_rollup';

    /**
     * @var array
     */
    protected $fillable = ['thru_date', 'sequence_num', 'last_updated_stamp', 'last_updated_tx_stamp', 'created_stamp', 'created_tx_stamp'];

    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function facilityGroup()
    {
        return $this->belongsTo('Joinbiz\Data\Models\Product\FacilityGroup', 'facility_group_id', 'facility_group_id');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function facilityGroupByParentFacilityGroupId()
    {
        return $this->belongsTo('Joinbiz\Data\Models\Product\FacilityGroup', 'parent_facility_group_id', 'facility_group_id');
    }
}
