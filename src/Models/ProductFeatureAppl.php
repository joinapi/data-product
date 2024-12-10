<?php

namespace Joinbiz\Data\Models\Product;

use Illuminate\Database\Eloquent\Model;

/**
 * @property string $product_id
 * @property string $product_feature_id
 * @property string $from_date
 * @property string $product_feature_appl_type_id
 * @property string $thru_date
 * @property float $sequence_num
 * @property float $amount
 * @property float $recurring_amount
 * @property string $last_updated_stamp
 * @property string $last_updated_tx_stamp
 * @property string $created_stamp
 * @property string $created_tx_stamp
 * @property ProductFeature $productFeature
 * @property Product $product
 * @property ProductFeatureApplType $productFeatureApplType
 */
class ProductFeatureAppl extends Model
{
    const CREATED_AT = 'created_stamp';
    const UPDATED_AT = 'last_updated_stamp';

    /**
     * The table associated with the model.
     *
     * @var string
     */
    protected $table = 'product_feature_appl';

    /**
     * @var array
     */
    protected $fillable = ['product_feature_appl_type_id', 'thru_date', 'sequence_num', 'amount', 'recurring_amount', 'last_updated_stamp', 'last_updated_tx_stamp', 'created_stamp', 'created_tx_stamp'];

    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function productFeature()
    {
        return $this->belongsTo('Joinbiz\Data\Models\Product\ProductFeature', 'product_feature_id', 'product_feature_id');
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
    public function productFeatureApplType()
    {
        return $this->belongsTo('Joinbiz\Data\Models\Product\ProductFeatureApplType', 'product_feature_appl_type_id', 'product_feature_appl_type_id');
    }
}
