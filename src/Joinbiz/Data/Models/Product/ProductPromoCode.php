<?php

namespace Joinbiz\Data\Models\Product;

use Illuminate\Database\Eloquent\Model;

/**
 * @property string $product_promo_code_id
 * @property string $product_promo_id
 * @property string $created_by_user_login
 * @property string $last_modified_by_user_login
 * @property string $user_entered
 * @property string $require_email_or_party
 * @property float $use_limit_per_code
 * @property float $use_limit_per_customer
 * @property string $from_date
 * @property string $thru_date
 * @property string $created_date
 * @property string $last_modified_date
 * @property string $last_updated_stamp
 * @property string $last_updated_tx_stamp
 * @property string $created_stamp
 * @property string $created_tx_stamp
 * @property ProductPromoCodeParty[] $productPromoCodeParties
 * @property ProductPromoCodeEmail[] $productPromoCodeEmails
 * @property UserLogin $userLoginByCreatedByUserLogin
 * @property UserLogin $userLoginByLastModifiedByUserLogin
 * @property ProductPromo $productPromo
 * @property OrderProductPromoCode[] $orderProductPromoCodes
 * @property ProductPromoUse[] $productPromice
 * @property ShoppingList[] $shoppingLists
 */
class ProductPromoCode extends Model
{
    const CREATED_AT = 'created_stamp';
    const UPDATED_AT = 'last_updated_stamp';

    /**
     * The table associated with the model.
     * 
     * @var string
     */
    protected $table = 'product_promo_code';

    /**
     * The primary key for the model.
     * 
     * @var string
     */
    protected $primaryKey = 'product_promo_code_id';

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
    protected $fillable = ['product_promo_id', 'created_by_user_login', 'last_modified_by_user_login', 'user_entered', 'require_email_or_party', 'use_limit_per_code', 'use_limit_per_customer', 'from_date', 'thru_date', 'created_date', 'last_modified_date', 'last_updated_stamp', 'last_updated_tx_stamp', 'created_stamp', 'created_tx_stamp'];

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function productPromoCodeParties()
    {
        return $this->hasMany('Joinbiz\Data\Models\Product\ProductPromoCodeParty', 'product_promo_code_id', 'product_promo_code_id');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function productPromoCodeEmails()
    {
        return $this->hasMany('Joinbiz\Data\Models\Product\ProductPromoCodeEmail', 'product_promo_code_id', 'product_promo_code_id');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function userLoginByCreatedByUserLogin()
    {
        return $this->belongsTo('Joinbiz\Data\Models\Security\UserLogin', 'created_by_user_login', 'user_login_id');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function userLoginByLastModifiedByUserLogin()
    {
        return $this->belongsTo('Joinbiz\Data\Models\Security\UserLogin', 'last_modified_by_user_login', 'user_login_id');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function productPromo()
    {
        return $this->belongsTo('Joinbiz\Data\Models\Product\ProductPromo', 'product_promo_id', 'product_promo_id');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function orderProductPromoCodes()
    {
        return $this->hasMany('Joinbiz\Data\Models\Order\OrderProductPromoCode', 'product_promo_code_id', 'product_promo_code_id');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function productPromice()
    {
        return $this->hasMany('Joinbiz\Data\Models\Product\ProductPromoUse', 'product_promo_code_id', 'product_promo_code_id');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function shoppingLists()
    {
        return $this->hasMany('Joinbiz\Data\Models\Order\ShoppingList', 'product_promo_code_id', 'product_promo_code_id');
    }
}
