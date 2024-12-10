<?php

namespace Joinbiz\Data\Models\Product;

use Illuminate\Database\Eloquent\Model;

/**
 * @property string $product_feature_id
 * @property string $product_price_type_id
 * @property string $currency_uom_id
 * @property string $from_date
 * @property string $created_by_user_login
 * @property string $last_modified_by_user_login
 * @property string $thru_date
 * @property float $price
 * @property string $created_date
 * @property string $last_modified_date
 * @property string $last_updated_stamp
 * @property string $last_updated_tx_stamp
 * @property string $created_stamp
 * @property string $created_tx_stamp
 * @property UserLogin $userLoginByCreatedByUserLogin
 * @property Uom $uomByCurrencyUomId
 * @property UserLogin $userLoginByLastModifiedByUserLogin
 * @property ProductPriceType $productPriceType
 */
class ProductFeaturePrice extends Model
{
    const CREATED_AT = 'created_stamp';
    const UPDATED_AT = 'last_updated_stamp';

    /**
     * The table associated with the model.
     *
     * @var string
     */
    protected $table = 'product_feature_price';

    /**
     * @var array
     */
    protected $fillable = ['created_by_user_login', 'last_modified_by_user_login', 'thru_date', 'price', 'created_date', 'last_modified_date', 'last_updated_stamp', 'last_updated_tx_stamp', 'created_stamp', 'created_tx_stamp'];

    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function userLoginByCreatedByUserLogin()
    {
        return $this->belongsTo('Joinbiz\Data\Models\Product\UserLogin', 'created_by_user_login', 'user_login_id');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function uomByCurrencyUomId()
    {
        return $this->belongsTo('Joinbiz\Data\Models\Product\Uom', 'currency_uom_id', 'uom_id');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function userLoginByLastModifiedByUserLogin()
    {
        return $this->belongsTo('Joinbiz\Data\Models\Product\UserLogin', 'last_modified_by_user_login', 'user_login_id');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function productPriceType()
    {
        return $this->belongsTo('Joinbiz\Data\Models\Product\ProductPriceType', 'product_price_type_id', 'product_price_type_id');
    }
}
