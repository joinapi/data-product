<?php

namespace Joinbiz\Data\Models\Product;

use Illuminate\Database\Eloquent\Model;

/**
 * @property string $product_price_change_id
 * @property string $changed_by_user_login
 * @property string $product_id
 * @property string $product_price_type_id
 * @property string $product_price_purpose_id
 * @property string $currency_uom_id
 * @property string $product_store_group_id
 * @property string $from_date
 * @property string $thru_date
 * @property float $price
 * @property float $old_price
 * @property string $changed_date
 * @property string $last_updated_stamp
 * @property string $last_updated_tx_stamp
 * @property string $created_stamp
 * @property string $created_tx_stamp
 * @property UserLogin $userLoginByChangedByUserLogin
 */
class ProductPriceChange extends Model
{
    const CREATED_AT = 'created_stamp';
    const UPDATED_AT = 'last_updated_stamp';

    /**
     * The table associated with the model.
     *
     * @var string
     */
    protected $table = 'product_price_change';

    /**
     * The primary key for the model.
     *
     * @var string
     */
    protected $primaryKey = 'product_price_change_id';

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
    protected $fillable = ['changed_by_user_login', 'product_id', 'product_price_type_id', 'product_price_purpose_id', 'currency_uom_id', 'product_store_group_id', 'from_date', 'thru_date', 'price', 'old_price', 'changed_date', 'last_updated_stamp', 'last_updated_tx_stamp', 'created_stamp', 'created_tx_stamp'];

    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function userLoginByChangedByUserLogin()
    {
        return $this->belongsTo('Joinbiz\Data\Models\Product\UserLogin', 'changed_by_user_login', 'user_login_id');
    }
}
