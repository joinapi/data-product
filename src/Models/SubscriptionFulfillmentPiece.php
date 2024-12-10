<?php

namespace Joinbiz\Data\Models\Product;

use Illuminate\Database\Eloquent\Model;

/**
 * @property string $subscription_activity_id
 * @property string $subscription_id
 * @property string $last_updated_stamp
 * @property string $last_updated_tx_stamp
 * @property string $created_stamp
 * @property string $created_tx_stamp
 * @property Subscription $subscription
 * @property SubscriptionActivity $subscriptionActivity
 */
class SubscriptionFulfillmentPiece extends Model
{
    const CREATED_AT = 'created_stamp';
    const UPDATED_AT = 'last_updated_stamp';

    /**
     * The table associated with the model.
     *
     * @var string
     */
    protected $table = 'subscription_fulfillment_piece';

    /**
     * @var array
     */
    protected $fillable = ['last_updated_stamp', 'last_updated_tx_stamp', 'created_stamp', 'created_tx_stamp'];

    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function subscription()
    {
        return $this->belongsTo('Joinbiz\Data\Models\Product\Subscription', 'subscription_id', 'subscription_id');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function subscriptionActivity()
    {
        return $this->belongsTo('Joinbiz\Data\Models\Product\SubscriptionActivity', 'subscription_activity_id', 'subscription_activity_id');
    }
}
