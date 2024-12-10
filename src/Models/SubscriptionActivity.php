<?php

namespace Joinbiz\Data\Models\Product;

use Illuminate\Database\Eloquent\Model;

/**
 * @property string $subscription_activity_id
 * @property string $comments
 * @property string $date_sent
 * @property string $last_updated_stamp
 * @property string $last_updated_tx_stamp
 * @property string $created_stamp
 * @property string $created_tx_stamp
 * @property SubscriptionFulfillmentPiece[] $subscriptionFulfillmentPieces
 */
class SubscriptionActivity extends Model
{
    const CREATED_AT = 'created_stamp';
    const UPDATED_AT = 'last_updated_stamp';

    /**
     * The table associated with the model.
     *
     * @var string
     */
    protected $table = 'subscription_activity';

    /**
     * The primary key for the model.
     *
     * @var string
     */
    protected $primaryKey = 'subscription_activity_id';

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
    protected $fillable = ['comments', 'date_sent', 'last_updated_stamp', 'last_updated_tx_stamp', 'created_stamp', 'created_tx_stamp'];

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function subscriptionFulfillmentPieces()
    {
        return $this->hasMany('Joinbiz\Data\Models\Product\SubscriptionFulfillmentPiece', 'subscription_activity_id', 'subscription_activity_id');
    }
}
