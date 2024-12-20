<?php

namespace Joinbiz\Data\Models\Product;

use Illuminate\Database\Eloquent\Model;

/**
 * @property string $prod_catalog_category_type_id
 * @property string $parent_type_id
 * @property string $description
 * @property string $last_updated_stamp
 * @property string $last_updated_tx_stamp
 * @property string $created_stamp
 * @property string $created_tx_stamp
 * @property ProdCatalogCategoryType $prodCatalogCategoryTypeByParentTypeId
 * @property ProdCatalogCategory[] $prodCatalogCategories
 */
class ProdCatalogCategoryType extends Model
{
    const CREATED_AT = 'created_stamp';
    const UPDATED_AT = 'last_updated_stamp';

    /**
     * The table associated with the model.
     * 
     * @var string
     */
    protected $table = 'prod_catalog_category_type';

    /**
     * The primary key for the model.
     * 
     * @var string
     */
    protected $primaryKey = 'prod_catalog_category_type_id';

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
    protected $fillable = ['parent_type_id', 'description', 'last_updated_stamp', 'last_updated_tx_stamp', 'created_stamp', 'created_tx_stamp'];

    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function prodCatalogCategoryTypeByParentTypeId()
    {
        return $this->belongsTo('Joinbiz\Data\Models\Product\ProdCatalogCategoryType', 'parent_type_id', 'prod_catalog_category_type_id');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function prodCatalogCategories()
    {
        return $this->hasMany('Joinbiz\Data\Models\Product\ProdCatalogCategory', 'prod_catalog_category_type_id', 'prod_catalog_category_type_id');
    }
}
