<?php

namespace Joinbiz\Data\Models\Product;

use Illuminate\Database\Eloquent\Model;

/**
 * @property string $product_feature_id
 * @property string $product_feature_type_id
 * @property string $product_feature_category_id
 * @property string $uom_id
 * @property string $description
 * @property float $number_specified
 * @property float $default_amount
 * @property float $default_sequence_num
 * @property string $abbrev
 * @property string $id_code
 * @property string $last_updated_stamp
 * @property string $last_updated_tx_stamp
 * @property string $created_stamp
 * @property string $created_tx_stamp
 * @property ProductManufacturingRule[] $productManufacturingRulesByProductFeature
 * @property QuoteItem[] $quoteItems
 * @property ProductFeatureIactn[] $productFeatureIactnsByProductFeatureIdTo
 * @property ProductFeatureIactn[] $productFeatureIactns
 * @property ShipmentItemFeature[] $shipmentItemFeatures
 * @property ProductFeatureGroupAppl[] $productFeatureGroupAppls
 * @property ProductFeatureDataResource[] $productFeatureDataResources
 * @property ProductFeatureApplAttr[] $productFeatureApplAttrs
 * @property ProductFeatureAppl[] $productFeatureAppls
 * @property ProductFeatureCategory $productFeatureCategory
 * @property ProductFeatureType $productFeatureType
 * @property Uom $uom
 * @property DesiredFeature[] $desiredFeatures
 * @property CostComponent[] $costComponents
 * @property InvoiceItem[] $invoiceItems
 * @property SupplierProductFeature[] $supplierProductFeatures
 */
class ProductFeature extends Model
{
    const CREATED_AT = 'created_stamp';
    const UPDATED_AT = 'last_updated_stamp';

    /**
     * The table associated with the model.
     *
     * @var string
     */
    protected $table = 'product_feature';

    /**
     * The primary key for the model.
     *
     * @var string
     */
    protected $primaryKey = 'product_feature_id';

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
    protected $fillable = ['product_feature_type_id', 'product_feature_category_id', 'uom_id', 'description', 'number_specified', 'default_amount', 'default_sequence_num', 'abbrev', 'id_code', 'last_updated_stamp', 'last_updated_tx_stamp', 'created_stamp', 'created_tx_stamp'];

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function productManufacturingRulesByProductFeature()
    {
        return $this->hasMany('Joinbiz\Data\Models\Product\ProductManufacturingRule', 'product_feature', 'product_feature_id');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function quoteItems()
    {
        return $this->hasMany('Joinbiz\Data\Models\Product\QuoteItem', 'product_feature_id', 'product_feature_id');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function productFeatureIactnsByProductFeatureIdTo()
    {
        return $this->hasMany('Joinbiz\Data\Models\Product\ProductFeatureIactn', 'product_feature_id_to', 'product_feature_id');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function productFeatureIactns()
    {
        return $this->hasMany('Joinbiz\Data\Models\Product\ProductFeatureIactn', 'product_feature_id', 'product_feature_id');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function shipmentItemFeatures()
    {
        return $this->hasMany('Joinbiz\Data\Models\Product\ShipmentItemFeature', 'product_feature_id', 'product_feature_id');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function productFeatureGroupAppls()
    {
        return $this->hasMany('Joinbiz\Data\Models\Product\ProductFeatureGroupAppl', 'product_feature_id', 'product_feature_id');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function productFeatureDataResources()
    {
        return $this->hasMany('Joinbiz\Data\Models\Product\ProductFeatureDataResource', 'product_feature_id', 'product_feature_id');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function productFeatureApplAttrs()
    {
        return $this->hasMany('Joinbiz\Data\Models\Product\ProductFeatureApplAttr', 'product_feature_id', 'product_feature_id');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function productFeatureAppls()
    {
        return $this->hasMany('Joinbiz\Data\Models\Product\ProductFeatureAppl', 'product_feature_id', 'product_feature_id');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function productFeatureCategory()
    {
        return $this->belongsTo('Joinbiz\Data\Models\Product\ProductFeatureCategory', 'product_feature_category_id', 'product_feature_category_id');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function productFeatureType()
    {
        return $this->belongsTo('Joinbiz\Data\Models\Product\ProductFeatureType', 'product_feature_type_id', 'product_feature_type_id');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function uom()
    {
        return $this->belongsTo('Joinbiz\Data\Models\Product\Uom', 'uom_id', 'uom_id');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function desiredFeatures()
    {
        return $this->hasMany('Joinbiz\Data\Models\Product\DesiredFeature', 'product_feature_id', 'product_feature_id');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function costComponents()
    {
        return $this->hasMany('Joinbiz\Data\Models\Product\CostComponent', 'product_feature_id', 'product_feature_id');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function invoiceItems()
    {
        return $this->hasMany('Joinbiz\Data\Models\Product\InvoiceItem', 'product_feature_id', 'product_feature_id');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function supplierProductFeatures()
    {
        return $this->hasMany('Joinbiz\Data\Models\Product\SupplierProductFeature', 'product_feature_id', 'product_feature_id');
    }
}
