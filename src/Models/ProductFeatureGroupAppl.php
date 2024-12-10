<?php

namespace Joinbiz\Data\Models\Product;

use Illuminate\Database\Eloquent\Model;

/**
 * @property string $product_feature_group_id
 * @property string $product_feature_id
 * @property string $from_date
 * @property string $thru_date
 * @property float $sequence_num
 * @property string $last_updated_stamp
 * @property string $last_updated_tx_stamp
 * @property string $created_stamp
 * @property string $created_tx_stamp
 * @property ProductFeature $productFeature
 * @property ProductFeatureGroup $productFeatureGroup
 */
class ProductFeatureGroupAppl extends Model
{
    const CREATED_AT = 'created_stamp';
    const UPDATED_AT = 'last_updated_stamp';

    /**
     * The table associated with the model.
     *
     * @var string
     */
    protected $table = 'product_feature_group_appl';

    /**
     * @var array
     */
    protected $fillable = ['thru_date', 'sequence_num', 'last_updated_stamp', 'last_updated_tx_stamp', 'created_stamp', 'created_tx_stamp'];

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
    public function productFeatureGroup()
    {
        return $this->belongsTo('Joinbiz\Data\Models\Product\ProductFeatureGroup', 'product_feature_group_id', 'product_feature_group_id');
    }
}