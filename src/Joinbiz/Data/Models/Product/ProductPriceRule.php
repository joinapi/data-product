<?php

namespace Joinbiz\Data\Models\Product;

use Illuminate\Database\Eloquent\Model;

/**
 * @property string $product_price_rule_id
 * @property string $rule_name
 * @property string $description
 * @property string $is_sale
 * @property string $from_date
 * @property string $thru_date
 * @property string $last_updated_stamp
 * @property string $last_updated_tx_stamp
 * @property string $created_stamp
 * @property string $created_tx_stamp
 * @property ProductPriceAction[] $productPriceActions
 * @property ProductPriceCond[] $productPriceConds
 * @property MarketingCampaignPrice[] $marketingCampaignPrices
 */
class ProductPriceRule extends Model
{
    const CREATED_AT = 'created_stamp';
    const UPDATED_AT = 'last_updated_stamp';

    /**
     * The table associated with the model.
     * 
     * @var string
     */
    protected $table = 'product_price_rule';

    /**
     * The primary key for the model.
     * 
     * @var string
     */
    protected $primaryKey = 'product_price_rule_id';

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
    protected $fillable = ['rule_name', 'description', 'is_sale', 'from_date', 'thru_date', 'last_updated_stamp', 'last_updated_tx_stamp', 'created_stamp', 'created_tx_stamp'];

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function productPriceActions()
    {
        return $this->hasMany('Joinbiz\Data\Models\Product\ProductPriceAction', 'product_price_rule_id', 'product_price_rule_id');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function productPriceConds()
    {
        return $this->hasMany('Joinbiz\Data\Models\Product\ProductPriceCond', 'product_price_rule_id', 'product_price_rule_id');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function marketingCampaignPrices()
    {
        return $this->hasMany('Joinbiz\Data\Models\Marketing\MarketingCampaignPrice', 'product_price_rule_id', 'product_price_rule_id');
    }
}
