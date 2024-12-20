<?php

namespace Joinbiz\Data\Models\Product;

use Illuminate\Database\Eloquent\Model;

/**
 * @property string $good_identification_type_id
 * @property string $product_id
 * @property string $id_value
 * @property string $last_updated_stamp
 * @property string $last_updated_tx_stamp
 * @property string $created_stamp
 * @property string $created_tx_stamp
 * @property Product $product
 * @property GoodIdentificationType $goodIdentificationType
 */
class GoodIdentification extends Model
{
    const CREATED_AT = 'created_stamp';
    const UPDATED_AT = 'last_updated_stamp';

    /**
     * The table associated with the model.
     * 
     * @var string
     */
    protected $table = 'good_identification';

    /**
     * @var array
     */
    protected $fillable = ['id_value', 'last_updated_stamp', 'last_updated_tx_stamp', 'created_stamp', 'created_tx_stamp'];

    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function product()
    {
        return $this->belongsTo('Joinbiz\Data\Models\Product\Product', 'product_id', 'product_id');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function goodIdentificationType()
    {
        return $this->belongsTo('Joinbiz\Data\Models\Product\GoodIdentificationType', 'good_identification_type_id', 'good_identification_type_id');
    }
}
