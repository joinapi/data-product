<?php

namespace Joinbiz\Data\Models\Product;

use Illuminate\Database\Eloquent\Model;

/**
 * @property string $product_price_purpose_id
 * @property string $description
 * @property string $last_updated_stamp
 * @property string $last_updated_tx_stamp
 * @property string $created_stamp
 * @property string $created_tx_stamp
 * @property ProductPaymentMethodType[] $productPaymentMethodTypes
 * @property OrderPaymentPreference[] $orderPaymentPreferences
 * @property ProductPrice[] $productPrices
 */
class ProductPricePurpose extends Model
{
    const CREATED_AT = 'created_stamp';
    const UPDATED_AT = 'last_updated_stamp';

    /**
     * The table associated with the model.
     * 
     * @var string
     */
    protected $table = 'product_price_purpose';

    /**
     * The primary key for the model.
     * 
     * @var string
     */
    protected $primaryKey = 'product_price_purpose_id';

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
    protected $fillable = ['description', 'last_updated_stamp', 'last_updated_tx_stamp', 'created_stamp', 'created_tx_stamp'];

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function productPaymentMethodTypes()
    {
        return $this->hasMany('Joinbiz\Data\Models\Product\ProductPaymentMethodType', 'product_price_purpose_id', 'product_price_purpose_id');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function orderPaymentPreferences()
    {
        return $this->hasMany('Joinbiz\Data\Models\Order\OrderPaymentPreference', 'product_price_purpose_id', 'product_price_purpose_id');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function productPrices()
    {
        return $this->hasMany('Joinbiz\Data\Models\Product\ProductPrice', 'product_price_purpose_id', 'product_price_purpose_id');
    }
}
