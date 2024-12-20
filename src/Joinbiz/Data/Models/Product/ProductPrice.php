<?php

namespace Joinbiz\Data\Models\Product;

use Illuminate\Database\Eloquent\Model;

/**
 * @property string $product_id
 * @property string $product_price_type_id
 * @property string $product_price_purpose_id
 * @property string $currency_uom_id
 * @property string $product_store_group_id
 * @property string $from_date
 * @property string $term_uom_id
 * @property string $custom_price_calc_service
 * @property string $tax_auth_party_id
 * @property string $tax_auth_geo_id
 * @property string $created_by_user_login
 * @property string $last_modified_by_user_login
 * @property string $thru_date
 * @property float $price
 * @property float $price_without_tax
 * @property float $price_with_tax
 * @property float $tax_amount
 * @property float $tax_percentage
 * @property string $tax_in_price
 * @property string $created_date
 * @property string $last_modified_date
 * @property string $last_updated_stamp
 * @property string $last_updated_tx_stamp
 * @property string $created_stamp
 * @property string $created_tx_stamp
 * @property Geo $geoByTaxAuthGeoId
 * @property Party $partyByTaxAuthPartyId
 * @property UserLogin $userLoginByCreatedByUserLogin
 * @property CustomMethod $customMethodByCustomPriceCalcService
 * @property Uom $uomByCurrencyUomId
 * @property UserLogin $userLoginByLastModifiedByUserLogin
 * @property Product $product
 * @property ProductStoreGroup $productStoreGroup
 * @property ProductPricePurpose $productPricePurpose
 * @property Uom $uomByTermUomId
 * @property ProductPriceType $productPriceType
 */
class ProductPrice extends Model
{
    const CREATED_AT = 'created_stamp';
    const UPDATED_AT = 'last_updated_stamp';

    /**
     * The table associated with the model.
     * 
     * @var string
     */
    protected $table = 'product_price';

    /**
     * @var array
     */
    protected $fillable = ['term_uom_id', 'custom_price_calc_service', 'tax_auth_party_id', 'tax_auth_geo_id', 'created_by_user_login', 'last_modified_by_user_login', 'thru_date', 'price', 'price_without_tax', 'price_with_tax', 'tax_amount', 'tax_percentage', 'tax_in_price', 'created_date', 'last_modified_date', 'last_updated_stamp', 'last_updated_tx_stamp', 'created_stamp', 'created_tx_stamp'];

    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function geoByTaxAuthGeoId()
    {
        return $this->belongsTo('Joinbiz\Data\Models\Common\Geo', 'tax_auth_geo_id', 'geo_id');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function partyByTaxAuthPartyId()
    {
        return $this->belongsTo('Joinbiz\Data\Models\Party\Party', 'tax_auth_party_id', 'party_id');
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
    public function customMethodByCustomPriceCalcService()
    {
        return $this->belongsTo('Joinbiz\Data\Models\Common\CustomMethod', 'custom_price_calc_service', 'custom_method_id');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function uomByCurrencyUomId()
    {
        return $this->belongsTo('Joinbiz\Data\Models\Common\Uom', 'currency_uom_id', 'uom_id');
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
    public function product()
    {
        return $this->belongsTo('Joinbiz\Data\Models\Product\Product', 'product_id', 'product_id');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function productStoreGroup()
    {
        return $this->belongsTo('Joinbiz\Data\Models\Product\ProductStoreGroup', 'product_store_group_id', 'product_store_group_id');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function productPricePurpose()
    {
        return $this->belongsTo('Joinbiz\Data\Models\Product\ProductPricePurpose', 'product_price_purpose_id', 'product_price_purpose_id');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function uomByTermUomId()
    {
        return $this->belongsTo('Joinbiz\Data\Models\Common\Uom', 'term_uom_id', 'uom_id');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function productPriceType()
    {
        return $this->belongsTo('Joinbiz\Data\Models\Product\ProductPriceType', 'product_price_type_id', 'product_price_type_id');
    }
}
