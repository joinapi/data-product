<?php

namespace Joinbiz\Data\Models\Product;

use Illuminate\Database\Eloquent\Model;

/**
 * @property string $subscription_resource_id
 * @property string $parent_resource_id
 * @property string $content_id
 * @property string $web_site_id
 * @property string $description
 * @property string $service_name_on_expiry
 * @property string $last_updated_stamp
 * @property string $last_updated_tx_stamp
 * @property string $created_stamp
 * @property string $created_tx_stamp
 * @property Subscription[] $subscriptions
 * @property ProductSubscriptionResource[] $productSubscriptionResources
 * @property Content $content
 * @property SubscriptionResource $subscriptionResourceByParentResourceId
 * @property WebSite $webSite
 */
class SubscriptionResource extends Model
{
    const CREATED_AT = 'created_stamp';
    const UPDATED_AT = 'last_updated_stamp';

    /**
     * The table associated with the model.
     *
     * @var string
     */
    protected $table = 'subscription_resource';

    /**
     * The primary key for the model.
     *
     * @var string
     */
    protected $primaryKey = 'subscription_resource_id';

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
    protected $fillable = ['parent_resource_id', 'content_id', 'web_site_id', 'description', 'service_name_on_expiry', 'last_updated_stamp', 'last_updated_tx_stamp', 'created_stamp', 'created_tx_stamp'];

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function subscriptions()
    {
        return $this->hasMany('Joinbiz\Data\Models\Product\Subscription', 'subscription_resource_id', 'subscription_resource_id');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function productSubscriptionResources()
    {
        return $this->hasMany('Joinbiz\Data\Models\Product\ProductSubscriptionResource', 'subscription_resource_id', 'subscription_resource_id');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function content()
    {
        return $this->belongsTo('Joinbiz\Data\Models\Product\Content', 'content_id', 'content_id');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function subscriptionResourceByParentResourceId()
    {
        return $this->belongsTo('Joinbiz\Data\Models\Product\SubscriptionResource', 'parent_resource_id', 'subscription_resource_id');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function webSite()
    {
        return $this->belongsTo('Joinbiz\Data\Models\Product\WebSite', 'web_site_id', 'web_site_id');
    }
}
