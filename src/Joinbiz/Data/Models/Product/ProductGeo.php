<?php

namespace Joinbiz\Data\Models\Product;

use Illuminate\Database\Eloquent\Model;

/**
 * @property string $product_id
 * @property string $geo_id
 * @property string $product_geo_enum_id
 * @property string $description
 * @property string $last_updated_stamp
 * @property string $last_updated_tx_stamp
 * @property string $created_stamp
 * @property string $created_tx_stamp
 * @property Enumeration $enumerationByProductGeoEnumId
 * @property Geo $geo
 * @property Product $product
 */
class ProductGeo extends Model
{
    const CREATED_AT = 'created_stamp';
    const UPDATED_AT = 'last_updated_stamp';

    /**
     * The table associated with the model.
     * 
     * @var string
     */
    protected $table = 'product_geo';

    /**
     * @var array
     */
    protected $fillable = ['product_geo_enum_id', 'description', 'last_updated_stamp', 'last_updated_tx_stamp', 'created_stamp', 'created_tx_stamp'];

    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function enumerationByProductGeoEnumId()
    {
        return $this->belongsTo('Joinbiz\Data\Models\Common\Enumeration', 'product_geo_enum_id', 'enum_id');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function geo()
    {
        return $this->belongsTo('Joinbiz\Data\Models\Common\Geo', 'geo_id', 'geo_id');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function product()
    {
        return $this->belongsTo('Joinbiz\Data\Models\Product\Product', 'product_id', 'product_id');
    }
}
