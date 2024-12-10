<?php

namespace Joinbiz\Data\Models\Product;

use Illuminate\Database\Eloquent\Model;

/**
 * @property string $product_category_id
 * @property string $content_id
 * @property string $prod_cat_content_type_id
 * @property string $from_date
 * @property string $thru_date
 * @property string $purchase_from_date
 * @property string $purchase_thru_date
 * @property float $use_count_limit
 * @property float $use_days_limit
 * @property string $last_updated_stamp
 * @property string $last_updated_tx_stamp
 * @property string $created_stamp
 * @property string $created_tx_stamp
 * @property Content $content
 * @property ProductCategory $productCategory
 * @property ProductCategoryContentType $productCategoryContentType
 */
class ProductCategoryContent extends Model
{
    const CREATED_AT = 'created_stamp';
    const UPDATED_AT = 'last_updated_stamp';

    /**
     * The table associated with the model.
     *
     * @var string
     */
    protected $table = 'product_category_content';

    /**
     * @var array
     */
    protected $fillable = ['thru_date', 'purchase_from_date', 'purchase_thru_date', 'use_count_limit', 'use_days_limit', 'last_updated_stamp', 'last_updated_tx_stamp', 'created_stamp', 'created_tx_stamp'];

    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function content()
    {
        return $this->belongsTo('Joinbiz\Data\Models\Product\Content', 'content_id', 'content_id');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function productCategory()
    {
        return $this->belongsTo('Joinbiz\Data\Models\Product\ProductCategory', 'product_category_id', 'product_category_id');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function productCategoryContentType()
    {
        return $this->belongsTo('Joinbiz\Data\Models\Product\ProductCategoryContentType', 'prod_cat_content_type_id', 'prod_cat_content_type_id');
    }
}
