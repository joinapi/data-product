<?php

namespace Joinbiz\Data\Models\Product;

use Illuminate\Database\Eloquent\Model;

/**
 * @property string $product_maint_type_id
 * @property string $parent_type_id
 * @property string $description
 * @property string $last_updated_stamp
 * @property string $last_updated_tx_stamp
 * @property string $created_stamp
 * @property string $created_tx_stamp
 * @property ProductMaint[] $productMaints
 * @property ProductMaintType $productMaintTypeByParentTypeId
 * @property FixedAssetMaint[] $fixedAssetMaints
 */
class ProductMaintType extends Model
{
    const CREATED_AT = 'created_stamp';
    const UPDATED_AT = 'last_updated_stamp';

    /**
     * The table associated with the model.
     *
     * @var string
     */
    protected $table = 'product_maint_type';

    /**
     * The primary key for the model.
     *
     * @var string
     */
    protected $primaryKey = 'product_maint_type_id';

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
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function productMaints()
    {
        return $this->hasMany('Joinbiz\Data\Models\Product\ProductMaint', 'product_maint_type_id', 'product_maint_type_id');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function productMaintTypeByParentTypeId()
    {
        return $this->belongsTo('Joinbiz\Data\Models\Product\ProductMaintType', 'parent_type_id', 'product_maint_type_id');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function fixedAssetMaints()
    {
        return $this->hasMany('Joinbiz\Data\Models\Product\FixedAssetMaint', 'product_maint_type_id', 'product_maint_type_id');
    }
}
