<?php

namespace Joinbiz\Data\Models\Product;

use Illuminate\Database\Eloquent\Model;

/**
 * @property string $prod_catalog_id
 * @property string $catalog_name
 * @property string $use_quick_add
 * @property string $style_sheet
 * @property string $header_logo
 * @property string $content_path_prefix
 * @property string $template_path_prefix
 * @property string $view_allow_perm_reqd
 * @property string $purchase_allow_perm_reqd
 * @property string $last_updated_stamp
 * @property string $last_updated_tx_stamp
 * @property string $created_stamp
 * @property string $created_tx_stamp
 * @property CartAbandonedLine[] $cartAbandonedLines
 * @property ProductStoreCatalog[] $productStoreCatalogs
 * @property ProdCatalogCategory[] $prodCatalogCategories
 * @property ProdCatalogInvFacility[] $prodCatalogInvFacilities
 * @property ProdCatalogRole[] $prodCatalogRoles
 */
class ProdCatalog extends Model
{
    const CREATED_AT = 'created_stamp';
    const UPDATED_AT = 'last_updated_stamp';

    /**
     * The table associated with the model.
     * 
     * @var string
     */
    protected $table = 'prod_catalog';

    /**
     * The primary key for the model.
     * 
     * @var string
     */
    protected $primaryKey = 'prod_catalog_id';

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
    protected $fillable = ['catalog_name', 'use_quick_add', 'style_sheet', 'header_logo', 'content_path_prefix', 'template_path_prefix', 'view_allow_perm_reqd', 'purchase_allow_perm_reqd', 'last_updated_stamp', 'last_updated_tx_stamp', 'created_stamp', 'created_tx_stamp'];

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function cartAbandonedLines()
    {
        return $this->hasMany('Joinbiz\Data\Models\Order\CartAbandonedLine', 'prod_catalog_id', 'prod_catalog_id');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function productStoreCatalogs()
    {
        return $this->hasMany('Joinbiz\Data\Models\Product\ProductStoreCatalog', 'prod_catalog_id', 'prod_catalog_id');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function prodCatalogCategories()
    {
        return $this->hasMany('Joinbiz\Data\Models\Product\ProdCatalogCategory', 'prod_catalog_id', 'prod_catalog_id');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function prodCatalogInvFacilities()
    {
        return $this->hasMany('Joinbiz\Data\Models\Product\ProdCatalogInvFacility', 'prod_catalog_id', 'prod_catalog_id');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function prodCatalogRoles()
    {
        return $this->hasMany('Joinbiz\Data\Models\Product\ProdCatalogRole', 'prod_catalog_id', 'prod_catalog_id');
    }
}
