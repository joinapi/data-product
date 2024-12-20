<?php

namespace Joinbiz\Data\Models\Product;

use Illuminate\Database\Eloquent\Model;

/**
 * @property string $product_promo_id
 * @property string $override_org_party_id
 * @property string $created_by_user_login
 * @property string $last_modified_by_user_login
 * @property string $promo_name
 * @property string $promo_text
 * @property string $user_entered
 * @property string $show_to_customer
 * @property string $require_code
 * @property float $use_limit_per_order
 * @property float $use_limit_per_customer
 * @property float $use_limit_per_promotion
 * @property float $billback_factor
 * @property string $created_date
 * @property string $last_modified_date
 * @property string $last_updated_stamp
 * @property string $last_updated_tx_stamp
 * @property string $created_stamp
 * @property string $created_tx_stamp
 * @property ProductStorePromoAppl[] $productStorePromoAppls
 * @property ProductPromoCategory[] $productPromoCategories
 * @property ProductPromoAction[] $productPromoActions
 * @property OrderAdjustment[] $orderAdjustments
 * @property AgreementPromoAppl[] $agreementPromoAppls
 * @property ProductPromoRule[] $productPromoRules
 * @property MarketingCampaignPromo[] $marketingCampaignPromos
 * @property UserLogin $userLoginByCreatedByUserLogin
 * @property UserLogin $userLoginByLastModifiedByUserLogin
 * @property Party $partyByOverrideOrgPartyId
 * @property ReturnAdjustment[] $returnAdjustments
 * @property ProductPromoCode[] $productPromoCodes
 * @property QuoteAdjustment[] $quoteAdjustments
 * @property ProductPromoUse[] $productPromice
 * @property ProductPromoProduct[] $productPromoProducts
 * @property ProductPromoContent[] $productPromoContents
 * @property ProductPromoCond[] $productPromoConds
 */
class ProductPromo extends Model
{
    const CREATED_AT = 'created_stamp';
    const UPDATED_AT = 'last_updated_stamp';

    /**
     * The table associated with the model.
     * 
     * @var string
     */
    protected $table = 'product_promo';

    /**
     * The primary key for the model.
     * 
     * @var string
     */
    protected $primaryKey = 'product_promo_id';

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
    protected $fillable = ['override_org_party_id', 'created_by_user_login', 'last_modified_by_user_login', 'promo_name', 'promo_text', 'user_entered', 'show_to_customer', 'require_code', 'use_limit_per_order', 'use_limit_per_customer', 'use_limit_per_promotion', 'billback_factor', 'created_date', 'last_modified_date', 'last_updated_stamp', 'last_updated_tx_stamp', 'created_stamp', 'created_tx_stamp'];

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function productStorePromoAppls()
    {
        return $this->hasMany('Joinbiz\Data\Models\Product\ProductStorePromoAppl', 'product_promo_id', 'product_promo_id');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function productPromoCategories()
    {
        return $this->hasMany('Joinbiz\Data\Models\Product\ProductPromoCategory', 'product_promo_id', 'product_promo_id');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function productPromoActions()
    {
        return $this->hasMany('Joinbiz\Data\Models\Product\ProductPromoAction', 'product_promo_id', 'product_promo_id');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function orderAdjustments()
    {
        return $this->hasMany('Joinbiz\Data\Models\Order\OrderAdjustment', 'product_promo_id', 'product_promo_id');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function agreementPromoAppls()
    {
        return $this->hasMany('Joinbiz\Data\Models\Party\AgreementPromoAppl', 'product_promo_id', 'product_promo_id');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function productPromoRules()
    {
        return $this->hasMany('Joinbiz\Data\Models\Product\ProductPromoRule', 'product_promo_id', 'product_promo_id');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function marketingCampaignPromos()
    {
        return $this->hasMany('Joinbiz\Data\Models\Marketing\MarketingCampaignPromo', 'product_promo_id', 'product_promo_id');
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
    public function partyByOverrideOrgPartyId()
    {
        return $this->belongsTo('Joinbiz\Data\Models\Party\Party', 'override_org_party_id', 'party_id');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function returnAdjustments()
    {
        return $this->hasMany('Joinbiz\Data\Models\Order\ReturnAdjustment', 'product_promo_id', 'product_promo_id');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function productPromoCodes()
    {
        return $this->hasMany('Joinbiz\Data\Models\Product\ProductPromoCode', 'product_promo_id', 'product_promo_id');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function quoteAdjustments()
    {
        return $this->hasMany('Joinbiz\Data\Models\Order\QuoteAdjustment', 'product_promo_id', 'product_promo_id');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function productPromice()
    {
        return $this->hasMany('Joinbiz\Data\Models\Product\ProductPromoUse', 'product_promo_id', 'product_promo_id');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function productPromoProducts()
    {
        return $this->hasMany('Joinbiz\Data\Models\Product\ProductPromoProduct', 'product_promo_id', 'product_promo_id');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function productPromoContents()
    {
        return $this->hasMany('Joinbiz\Data\Models\Product\ProductPromoContent', 'product_promo_id', 'product_promo_id');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function productPromoConds()
    {
        return $this->hasMany('Joinbiz\Data\Models\Product\ProductPromoCond', 'product_promo_id', 'product_promo_id');
    }
}
