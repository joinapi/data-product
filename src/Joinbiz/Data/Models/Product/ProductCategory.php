<?php

namespace Joinbiz\Data\Models\Product;

use Illuminate\Database\Eloquent\Model;

/**
 * @property string $product_category_id
 * @property string $product_category_type_id
 * @property string $primary_parent_category_id
 * @property string $category_name
 * @property string $description
 * @property string $long_description
 * @property string $category_image_url
 * @property string $link_one_image_url
 * @property string $link_two_image_url
 * @property string $detail_screen
 * @property string $show_in_select
 * @property string $last_updated_stamp
 * @property string $last_updated_tx_stamp
 * @property string $created_stamp
 * @property string $created_tx_stamp
 * @property ProductFeatureCategoryAppl[] $productFeatureCategoryAppls
 * @property ProductCategoryRole[] $productCategoryRoles
 * @property ProductPromoCategory[] $productPromoCategories
 * @property SalesForecastDetail[] $salesForecastDetails
 * @property Product[] $productsByPrimaryProductCategoryId
 * @property Subscription[] $subscriptions
 * @property ProdCatalogCategory[] $prodCatalogCategories
 * @property MarketInterest[] $marketInterests
 * @property ProductCategoryRollup[] $productCategoryRollups
 * @property ProductCategoryRollup[] $productCategoryRollupsByParentProductCategoryId
 * @property ProductCategory $productCategoryByPrimaryParentCategoryId
 * @property ProductCategoryType $productCategoryType
 * @property ProductCategoryContent[] $productCategoryContents
 * @property TaxAuthorityRateProduct[] $taxAuthorityRateProducts
 * @property ProductCategoryMember[] $productCategoryMembers
 * @property PartyNeed[] $partyNeeds
 * @property ProductCategoryLink[] $productCategoryLinks
 * @property ProductCategoryGlAccount[] $productCategoryGlAccounts
 * @property ProductCategoryAttribute[] $productCategoryAttributes
 * @property ProductFeatureCatGrpAppl[] $productFeatureCatGrpAppls
 * @property TaxAuthorityCategory[] $taxAuthorityCategories
 */
class ProductCategory extends Model
{
    const CREATED_AT = 'created_stamp';
    const UPDATED_AT = 'last_updated_stamp';

    /**
     * The table associated with the model.
     * 
     * @var string
     */
    protected $table = 'product_category';

    /**
     * The primary key for the model.
     * 
     * @var string
     */
    protected $primaryKey = 'product_category_id';

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
    protected $fillable = ['product_category_type_id', 'primary_parent_category_id', 'category_name', 'description', 'long_description', 'category_image_url', 'link_one_image_url', 'link_two_image_url', 'detail_screen', 'show_in_select', 'last_updated_stamp', 'last_updated_tx_stamp', 'created_stamp', 'created_tx_stamp'];

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function productFeatureCategoryAppls()
    {
        return $this->hasMany('Joinbiz\Data\Models\Product\ProductFeatureCategoryAppl', 'product_category_id', 'product_category_id');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function productCategoryRoles()
    {
        return $this->hasMany('Joinbiz\Data\Models\Product\ProductCategoryRole', 'product_category_id', 'product_category_id');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function productPromoCategories()
    {
        return $this->hasMany('Joinbiz\Data\Models\Product\ProductPromoCategory', 'product_category_id', 'product_category_id');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function salesForecastDetails()
    {
        return $this->hasMany('Joinbiz\Data\Models\Marketing\SalesForecastDetail', 'product_category_id', 'product_category_id');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function productsByPrimaryProductCategoryId()
    {
        return $this->hasMany('Joinbiz\Data\Models\Product\Product', 'primary_product_category_id', 'product_category_id');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function subscriptions()
    {
        return $this->hasMany('Joinbiz\Data\Models\Product\Subscription', 'product_category_id', 'product_category_id');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function prodCatalogCategories()
    {
        return $this->hasMany('Joinbiz\Data\Models\Product\ProdCatalogCategory', 'product_category_id', 'product_category_id');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function marketInterests()
    {
        return $this->hasMany('Joinbiz\Data\Models\Product\MarketInterest', 'product_category_id', 'product_category_id');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function productCategoryRollups()
    {
        return $this->hasMany('Joinbiz\Data\Models\Product\ProductCategoryRollup', 'product_category_id', 'product_category_id');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function productCategoryRollupsByParentProductCategoryId()
    {
        return $this->hasMany('Joinbiz\Data\Models\Product\ProductCategoryRollup', 'parent_product_category_id', 'product_category_id');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function productCategoryByPrimaryParentCategoryId()
    {
        return $this->belongsTo('Joinbiz\Data\Models\Product\ProductCategory', 'primary_parent_category_id', 'product_category_id');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function productCategoryType()
    {
        return $this->belongsTo('Joinbiz\Data\Models\Product\ProductCategoryType', 'product_category_type_id', 'product_category_type_id');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function productCategoryContents()
    {
        return $this->hasMany('Joinbiz\Data\Models\Product\ProductCategoryContent', 'product_category_id', 'product_category_id');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function taxAuthorityRateProducts()
    {
        return $this->hasMany('Joinbiz\Data\Models\Accounting\TaxAuthorityRateProduct', 'product_category_id', 'product_category_id');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function productCategoryMembers()
    {
        return $this->hasMany('Joinbiz\Data\Models\Product\ProductCategoryMember', 'product_category_id', 'product_category_id');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function partyNeeds()
    {
        return $this->hasMany('Joinbiz\Data\Models\Party\PartyNeed', 'product_category_id', 'product_category_id');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function productCategoryLinks()
    {
        return $this->hasMany('Joinbiz\Data\Models\Product\ProductCategoryLink', 'product_category_id', 'product_category_id');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function productCategoryGlAccounts()
    {
        return $this->hasMany('Joinbiz\Data\Models\Product\ProductCategoryGlAccount', 'product_category_id', 'product_category_id');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function productCategoryAttributes()
    {
        return $this->hasMany('Joinbiz\Data\Models\Product\ProductCategoryAttribute', 'product_category_id', 'product_category_id');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function productFeatureCatGrpAppls()
    {
        return $this->hasMany('Joinbiz\Data\Models\Product\ProductFeatureCatGrpAppl', 'product_category_id', 'product_category_id');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function taxAuthorityCategories()
    {
        return $this->hasMany('Joinbiz\Data\Models\Accounting\TaxAuthorityCategory', 'product_category_id', 'product_category_id');
    }
}
