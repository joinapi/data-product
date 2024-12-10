<?php

namespace Joinbiz\Data\Models\Product;

use Illuminate\Database\Eloquent\Model;

/**
 * @property string $product_store_group_id
 * @property string $product_store_group_type_id
 * @property string $primary_parent_group_id
 * @property string $product_store_group_name
 * @property string $description
 * @property string $last_updated_stamp
 * @property string $last_updated_tx_stamp
 * @property string $created_stamp
 * @property string $created_tx_stamp
 * @property ProductPrice[] $productPrices
 * @property ProductStoreGroup $productStoreGroupByPrimaryParentGroupId
 * @property ProductStoreGroupType $productStoreGroupType
 * @property ProductStore[] $productStoresByPrimaryStoreGroupId
 * @property ProductStoreGroupRollup[] $productStoreGroupRollups
 * @property ProductStoreGroupRollup[] $productStoreGroupRollupsByParentGroupId
 * @property ProductStoreGroupRole[] $productStoreGroupRoles
 * @property ProductStoreGroupMember[] $productStoreGroupMembers
 * @property VendorProduct[] $vendorProducts
 */
class ProductStoreGroup extends Model
{
    const CREATED_AT = 'created_stamp';
    const UPDATED_AT = 'last_updated_stamp';

    /**
     * The table associated with the model.
     *
     * @var string
     */
    protected $table = 'product_store_group';

    /**
     * The primary key for the model.
     *
     * @var string
     */
    protected $primaryKey = 'product_store_group_id';

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
    protected $fillable = ['product_store_group_type_id', 'primary_parent_group_id', 'product_store_group_name', 'description', 'last_updated_stamp', 'last_updated_tx_stamp', 'created_stamp', 'created_tx_stamp'];

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function productPrices()
    {
        return $this->hasMany('Joinbiz\Data\Models\Product\ProductPrice', 'product_store_group_id', 'product_store_group_id');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function productStoreGroupByPrimaryParentGroupId()
    {
        return $this->belongsTo('Joinbiz\Data\Models\Product\ProductStoreGroup', 'primary_parent_group_id', 'product_store_group_id');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function productStoreGroupType()
    {
        return $this->belongsTo('Joinbiz\Data\Models\Product\ProductStoreGroupType', 'product_store_group_type_id', 'product_store_group_type_id');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function productStoresByPrimaryStoreGroupId()
    {
        return $this->hasMany('Joinbiz\Data\Models\Product\ProductStore', 'primary_store_group_id', 'product_store_group_id');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function productStoreGroupRollups()
    {
        return $this->hasMany('Joinbiz\Data\Models\Product\ProductStoreGroupRollup', 'product_store_group_id', 'product_store_group_id');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function productStoreGroupRollupsByParentGroupId()
    {
        return $this->hasMany('Joinbiz\Data\Models\Product\ProductStoreGroupRollup', 'parent_group_id', 'product_store_group_id');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function productStoreGroupRoles()
    {
        return $this->hasMany('Joinbiz\Data\Models\Product\ProductStoreGroupRole', 'product_store_group_id', 'product_store_group_id');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function productStoreGroupMembers()
    {
        return $this->hasMany('Joinbiz\Data\Models\Product\ProductStoreGroupMember', 'product_store_group_id', 'product_store_group_id');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function vendorProducts()
    {
        return $this->hasMany('Joinbiz\Data\Models\Product\VendorProduct', 'product_store_group_id', 'product_store_group_id');
    }
}
