<?php

namespace Joinbiz\Data\Models\Product;

use Illuminate\Database\Eloquent\Model;

/**
 * @property string $product_id
 * @property string $product_meter_type_id
 * @property string $meter_uom_id
 * @property string $meter_name
 * @property string $last_updated_stamp
 * @property string $last_updated_tx_stamp
 * @property string $created_stamp
 * @property string $created_tx_stamp
 * @property ProductMeterType $productMeterType
 * @property Uom $uomByMeterUomId
 * @property Product $product
 */
class ProductMeter extends Model
{
    const CREATED_AT = 'created_stamp';
    const UPDATED_AT = 'last_updated_stamp';

    /**
     * The table associated with the model.
     * 
     * @var string
     */
    protected $table = 'product_meter';

    /**
     * @var array
     */
    protected $fillable = ['meter_uom_id', 'meter_name', 'last_updated_stamp', 'last_updated_tx_stamp', 'created_stamp', 'created_tx_stamp'];

    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function productMeterType()
    {
        return $this->belongsTo('Joinbiz\Data\Models\Product\ProductMeterType', 'product_meter_type_id', 'product_meter_type_id');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function uomByMeterUomId()
    {
        return $this->belongsTo('Joinbiz\Data\Models\Common\Uom', 'meter_uom_id', 'uom_id');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function product()
    {
        return $this->belongsTo('Joinbiz\Data\Models\Product\Product', 'product_id', 'product_id');
    }
}
