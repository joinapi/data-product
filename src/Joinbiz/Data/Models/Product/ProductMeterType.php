<?php

namespace Joinbiz\Data\Models\Product;

use Illuminate\Database\Eloquent\Model;

/**
 * @property string $product_meter_type_id
 * @property string $default_uom_id
 * @property string $description
 * @property string $last_updated_stamp
 * @property string $last_updated_tx_stamp
 * @property string $created_stamp
 * @property string $created_tx_stamp
 * @property Uom $uomByDefaultUomId
 * @property FixedAssetMaint[] $fixedAssetMaintsByIntervalMeterTypeId
 * @property ProductMeter[] $productMeters
 * @property FixedAssetMeter[] $fixedAssetMeters
 * @property ProductMaint[] $productMaintsByIntervalMeterTypeId
 */
class ProductMeterType extends Model
{
    const CREATED_AT = 'created_stamp';
    const UPDATED_AT = 'last_updated_stamp';

    /**
     * The table associated with the model.
     * 
     * @var string
     */
    protected $table = 'product_meter_type';

    /**
     * The primary key for the model.
     * 
     * @var string
     */
    protected $primaryKey = 'product_meter_type_id';

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
    protected $fillable = ['default_uom_id', 'description', 'last_updated_stamp', 'last_updated_tx_stamp', 'created_stamp', 'created_tx_stamp'];

    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function uomByDefaultUomId()
    {
        return $this->belongsTo('Joinbiz\Data\Models\Common\Uom', 'default_uom_id', 'uom_id');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function fixedAssetMaintsByIntervalMeterTypeId()
    {
        return $this->hasMany('Joinbiz\Data\Models\Accounting\FixedAssetMaint', 'interval_meter_type_id', 'product_meter_type_id');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function productMeters()
    {
        return $this->hasMany('Joinbiz\Data\Models\Product\ProductMeter', 'product_meter_type_id', 'product_meter_type_id');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function fixedAssetMeters()
    {
        return $this->hasMany('Joinbiz\Data\Models\Accounting\FixedAssetMeter', 'product_meter_type_id', 'product_meter_type_id');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function productMaintsByIntervalMeterTypeId()
    {
        return $this->hasMany('Joinbiz\Data\Models\Product\ProductMaint', 'interval_meter_type_id', 'product_meter_type_id');
    }
}
