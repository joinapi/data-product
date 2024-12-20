<?php

namespace Joinbiz\Data\Models\Product;

use Illuminate\Database\Eloquent\Model;

/**
 * @property string $product_id
 * @property string $subscription_resource_id
 * @property string $from_date
 * @property string $max_life_time_uom_id
 * @property string $available_time_uom_id
 * @property string $use_time_uom_id
 * @property string $use_role_type_id
 * @property string $cancl_autm_ext_time_uom_id
 * @property string $grace_period_on_expiry_uom_id
 * @property string $thru_date
 * @property string $purchase_from_date
 * @property string $purchase_thru_date
 * @property float $max_life_time
 * @property float $available_time
 * @property float $use_count_limit
 * @property float $use_time
 * @property string $automatic_extend
 * @property float $cancl_autm_ext_time
 * @property float $grace_period_on_expiry
 * @property string $last_updated_stamp
 * @property string $last_updated_tx_stamp
 * @property string $created_stamp
 * @property string $created_tx_stamp
 * @property Uom $uomByAvailableTimeUomId
 * @property Uom $uomByCanclAutmExtTimeUomId
 * @property Uom $uomByGracePeriodOnExpiryUomId
 * @property Uom $uomByMaxLifeTimeUomId
 * @property Product $product
 * @property SubscriptionResource $subscriptionResource
 * @property RoleType $roleTypeByUseRoleTypeId
 * @property Uom $uomByUseTimeUomId
 */
class ProductSubscriptionResource extends Model
{
    const CREATED_AT = 'created_stamp';
    const UPDATED_AT = 'last_updated_stamp';

    /**
     * The table associated with the model.
     * 
     * @var string
     */
    protected $table = 'product_subscription_resource';

    /**
     * @var array
     */
    protected $fillable = ['max_life_time_uom_id', 'available_time_uom_id', 'use_time_uom_id', 'use_role_type_id', 'cancl_autm_ext_time_uom_id', 'grace_period_on_expiry_uom_id', 'thru_date', 'purchase_from_date', 'purchase_thru_date', 'max_life_time', 'available_time', 'use_count_limit', 'use_time', 'automatic_extend', 'cancl_autm_ext_time', 'grace_period_on_expiry', 'last_updated_stamp', 'last_updated_tx_stamp', 'created_stamp', 'created_tx_stamp'];

    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function uomByAvailableTimeUomId()
    {
        return $this->belongsTo('Joinbiz\Data\Models\Common\Uom', 'available_time_uom_id', 'uom_id');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function uomByCanclAutmExtTimeUomId()
    {
        return $this->belongsTo('Joinbiz\Data\Models\Common\Uom', 'cancl_autm_ext_time_uom_id', 'uom_id');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function uomByGracePeriodOnExpiryUomId()
    {
        return $this->belongsTo('Joinbiz\Data\Models\Common\Uom', 'grace_period_on_expiry_uom_id', 'uom_id');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function uomByMaxLifeTimeUomId()
    {
        return $this->belongsTo('Joinbiz\Data\Models\Common\Uom', 'max_life_time_uom_id', 'uom_id');
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
    public function subscriptionResource()
    {
        return $this->belongsTo('Joinbiz\Data\Models\Product\SubscriptionResource', 'subscription_resource_id', 'subscription_resource_id');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function roleTypeByUseRoleTypeId()
    {
        return $this->belongsTo('Joinbiz\Data\Models\Party\RoleType', 'use_role_type_id', 'role_type_id');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function uomByUseTimeUomId()
    {
        return $this->belongsTo('Joinbiz\Data\Models\Common\Uom', 'use_time_uom_id', 'uom_id');
    }
}
