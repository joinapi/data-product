<?php

namespace Joinbiz\Data\Models\Product;

use Illuminate\Database\Eloquent\Model;

/**
 * @property string $product_feature_category_id
 * @property string $parent_category_id
 * @property string $description
 * @property string $last_updated_stamp
 * @property string $last_updated_tx_stamp
 * @property string $created_stamp
 * @property string $created_tx_stamp
 * @property ProductFeatureCategoryAppl[] $productFeatureCategoryAppls
 * @property ProductFeatureCategory $productFeatureCategoryByParentCategoryId
 * @property ProductFeature[] $productFeatures
 */
class ProductFeatureCategory extends Model
{
    const CREATED_AT = 'created_stamp';
    const UPDATED_AT = 'last_updated_stamp';

    /**
     * The table associated with the model.
     *
     * @var string
     */
    protected $table = 'product_feature_category';

    /**
     * The primary key for the model.
     *
     * @var string
     */
    protected $primaryKey = 'product_feature_category_id';

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
    protected $fillable = ['parent_category_id', 'description', 'last_updated_stamp', 'last_updated_tx_stamp', 'created_stamp', 'created_tx_stamp'];

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function productFeatureCategoryAppls()
    {
        return $this->hasMany('Joinbiz\Data\Models\Product\ProductFeatureCategoryAppl', 'product_feature_category_id', 'product_feature_category_id');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function productFeatureCategoryByParentCategoryId()
    {
        return $this->belongsTo('Joinbiz\Data\Models\Product\ProductFeatureCategory', 'parent_category_id', 'product_feature_category_id');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function productFeatures()
    {
        return $this->hasMany('Joinbiz\Data\Models\Product\ProductFeature', 'product_feature_category_id', 'product_feature_category_id');
    }
}
