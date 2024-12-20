<?php

namespace Joinbiz\Data\Models\Product;

use Illuminate\Database\Eloquent\Model;

/**
 * @property string $prod_catalog_id
 * @property string $product_category_id
 * @property string $prod_catalog_category_type_id
 * @property string $from_date
 * @property string $thru_date
 * @property float $sequence_num
 * @property string $last_updated_stamp
 * @property string $last_updated_tx_stamp
 * @property string $created_stamp
 * @property string $created_tx_stamp
 * @property ProdCatalog $prodCatalog
 * @property ProductCategory $productCategory
 * @property ProdCatalogCategoryType $prodCatalogCategoryType
 */
class ProdCatalogCategory extends Model
{
    const CREATED_AT = 'created_stamp';
    const UPDATED_AT = 'last_updated_stamp';

    /**
     * The table associated with the model.
     * 
     * @var string
     */
    protected $table = 'prod_catalog_category';

    /**
     * @var array
     */
    protected $fillable = ['thru_date', 'sequence_num', 'last_updated_stamp', 'last_updated_tx_stamp', 'created_stamp', 'created_tx_stamp'];

    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function prodCatalog()
    {
        return $this->belongsTo('Joinbiz\Data\Models\Product\ProdCatalog', 'prod_catalog_id', 'prod_catalog_id');
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
    public function prodCatalogCategoryType()
    {
        return $this->belongsTo('Joinbiz\Data\Models\Product\ProdCatalogCategoryType', 'prod_catalog_category_type_id', 'prod_catalog_category_type_id');
    }
}