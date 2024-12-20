<?php

namespace Joinbiz\Data\Models\Product;

use Illuminate\Database\Eloquent\Model;

/**
 * @property string $product_feature_id
 * @property string $product_feature_id_to
 * @property string $product_feature_iactn_type_id
 * @property string $product_id
 * @property string $last_updated_stamp
 * @property string $last_updated_tx_stamp
 * @property string $created_stamp
 * @property string $created_tx_stamp
 * @property ProductFeature $productFeatureByProductFeatureIdTo
 * @property ProductFeature $productFeature
 * @property ProductFeatureIactnType $productFeatureIactnType
 */
class ProductFeatureIactn extends Model
{
    const CREATED_AT = 'created_stamp';
    const UPDATED_AT = 'last_updated_stamp';

    /**
     * The table associated with the model.
     * 
     * @var string
     */
    protected $table = 'product_feature_iactn';

    /**
     * @var array
     */
    protected $fillable = ['product_feature_iactn_type_id', 'product_id', 'last_updated_stamp', 'last_updated_tx_stamp', 'created_stamp', 'created_tx_stamp'];

    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function productFeatureByProductFeatureIdTo()
    {
        return $this->belongsTo('Joinbiz\Data\Models\Product\ProductFeature', 'product_feature_id_to', 'product_feature_id');
    }

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
    public function productFeatureIactnType()
    {
        return $this->belongsTo('Joinbiz\Data\Models\Product\ProductFeatureIactnType', 'product_feature_iactn_type_id', 'product_feature_iactn_type_id');
    }
}
