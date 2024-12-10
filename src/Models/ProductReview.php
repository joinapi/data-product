<?php

namespace Joinbiz\Data\Models\Product;

use Illuminate\Database\Eloquent\Model;

/**
 * @property string $product_review_id
 * @property string $product_store_id
 * @property string $product_id
 * @property string $user_login_id
 * @property string $status_id
 * @property string $posted_anonymous
 * @property string $posted_date_time
 * @property float $product_rating
 * @property string $product_review
 * @property string $last_updated_stamp
 * @property string $last_updated_tx_stamp
 * @property string $created_stamp
 * @property string $created_tx_stamp
 * @property ProductStore $productStore
 * @property Product $product
 * @property StatusItem $statusItem
 * @property UserLogin $userLogin
 */
class ProductReview extends Model
{
    const CREATED_AT = 'created_stamp';
    const UPDATED_AT = 'last_updated_stamp';

    /**
     * The table associated with the model.
     *
     * @var string
     */
    protected $table = 'product_review';

    /**
     * The primary key for the model.
     *
     * @var string
     */
    protected $primaryKey = 'product_review_id';

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
    protected $fillable = ['product_store_id', 'product_id', 'user_login_id', 'status_id', 'posted_anonymous', 'posted_date_time', 'product_rating', 'product_review', 'last_updated_stamp', 'last_updated_tx_stamp', 'created_stamp', 'created_tx_stamp'];

    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function productStore()
    {
        return $this->belongsTo('Joinbiz\Data\Models\Product\ProductStore', 'product_store_id', 'product_store_id');
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
    public function statusItem()
    {
        return $this->belongsTo('Joinbiz\Data\Models\Product\StatusItem', 'status_id', 'status_id');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function userLogin()
    {
        return $this->belongsTo('Joinbiz\Data\Models\Product\UserLogin', 'user_login_id', 'user_login_id');
    }
}
