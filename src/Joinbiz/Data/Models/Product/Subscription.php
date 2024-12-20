<?php

namespace Joinbiz\Data\Models\Product;

use Illuminate\Database\Eloquent\Model;

/**
 * @property string $subscription_id
 * @property string $subscription_resource_id
 * @property string $contact_mech_id
 * @property string $originated_from_party_id
 * @property string $originated_from_role_type_id
 * @property string $party_id
 * @property string $role_type_id
 * @property string $need_type_id
 * @property string $order_id
 * @property string $order_item_seq_id
 * @property string $product_id
 * @property string $product_category_id
 * @property string $inventory_item_id
 * @property string $subscription_type_id
 * @property string $max_life_time_uom_id
 * @property string $available_time_uom_id
 * @property string $use_time_uom_id
 * @property string $cancl_autm_ext_time_uom_id
 * @property string $grace_period_on_expiry_uom_id
 * @property string $description
 * @property string $communication_event_id
 * @property string $party_need_id
 * @property string $external_subscription_id
 * @property string $from_date
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
 * @property string $expiration_completed_date
 * @property string $last_updated_stamp
 * @property string $last_updated_tx_stamp
 * @property string $created_stamp
 * @property string $created_tx_stamp
 * @property Uom $uomByAvailableTimeUomId
 * @property ContactMech $contactMech
 * @property Uom $uomByCanclAutmExtTimeUomId
 * @property Uom $uomByGracePeriodOnExpiryUomId
 * @property InventoryItem $inventoryItem
 * @property Uom $uomByMaxLifeTimeUomId
 * @property NeedType $needType
 * @property Party $partyByOriginatedFromPartyId
 * @property RoleType $roleTypeByOriginatedFromRoleTypeId
 * @property Party $party
 * @property ProductCategory $productCategory
 * @property Product $product
 * @property RoleType $roleType
 * @property SubscriptionResource $subscriptionResource
 * @property SubscriptionType $subscriptionType
 * @property Uom $uomByUseTimeUomId
 * @property SubscriptionCommEvent[] $subscriptionCommEvents
 * @property SubscriptionFulfillmentPiece[] $subscriptionFulfillmentPieces
 * @property SubscriptionAttribute[] $subscriptionAttributes
 */
class Subscription extends Model
{
    const CREATED_AT = 'created_stamp';
    const UPDATED_AT = 'last_updated_stamp';

    /**
     * The table associated with the model.
     * 
     * @var string
     */
    protected $table = 'subscription';

    /**
     * The primary key for the model.
     * 
     * @var string
     */
    protected $primaryKey = 'subscription_id';

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
    protected $fillable = ['subscription_resource_id', 'contact_mech_id', 'originated_from_party_id', 'originated_from_role_type_id', 'party_id', 'role_type_id', 'need_type_id', 'order_id', 'order_item_seq_id', 'product_id', 'product_category_id', 'inventory_item_id', 'subscription_type_id', 'max_life_time_uom_id', 'available_time_uom_id', 'use_time_uom_id', 'cancl_autm_ext_time_uom_id', 'grace_period_on_expiry_uom_id', 'description', 'communication_event_id', 'party_need_id', 'external_subscription_id', 'from_date', 'thru_date', 'purchase_from_date', 'purchase_thru_date', 'max_life_time', 'available_time', 'use_count_limit', 'use_time', 'automatic_extend', 'cancl_autm_ext_time', 'grace_period_on_expiry', 'expiration_completed_date', 'last_updated_stamp', 'last_updated_tx_stamp', 'created_stamp', 'created_tx_stamp'];

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
    public function contactMech()
    {
        return $this->belongsTo('Joinbiz\Data\Models\Party\ContactMech', 'contact_mech_id', 'contact_mech_id');
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
    public function inventoryItem()
    {
        return $this->belongsTo('Joinbiz\Data\Models\Product\InventoryItem', 'inventory_item_id', 'inventory_item_id');
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
    public function needType()
    {
        return $this->belongsTo('Joinbiz\Data\Models\Party\NeedType', 'need_type_id', 'need_type_id');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function partyByOriginatedFromPartyId()
    {
        return $this->belongsTo('Joinbiz\Data\Models\Party\Party', 'originated_from_party_id', 'party_id');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function roleTypeByOriginatedFromRoleTypeId()
    {
        return $this->belongsTo('Joinbiz\Data\Models\Party\RoleType', 'originated_from_role_type_id', 'role_type_id');
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
    public function productCategory()
    {
        return $this->belongsTo('Joinbiz\Data\Models\Product\ProductCategory', 'product_category_id', 'product_category_id');
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
    public function roleType()
    {
        return $this->belongsTo('Joinbiz\Data\Models\Party\RoleType', 'role_type_id', 'role_type_id');
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
    public function subscriptionType()
    {
        return $this->belongsTo('Joinbiz\Data\Models\Product\SubscriptionType', 'subscription_type_id', 'subscription_type_id');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function uomByUseTimeUomId()
    {
        return $this->belongsTo('Joinbiz\Data\Models\Common\Uom', 'use_time_uom_id', 'uom_id');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function subscriptionCommEvents()
    {
        return $this->hasMany('Joinbiz\Data\Models\Product\SubscriptionCommEvent', 'subscription_id', 'subscription_id');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function subscriptionFulfillmentPieces()
    {
        return $this->hasMany('Joinbiz\Data\Models\Product\SubscriptionFulfillmentPiece', 'subscription_id', 'subscription_id');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function subscriptionAttributes()
    {
        return $this->hasMany('Joinbiz\Data\Models\Product\SubscriptionAttribute', 'subscription_id', 'subscription_id');
    }
}
