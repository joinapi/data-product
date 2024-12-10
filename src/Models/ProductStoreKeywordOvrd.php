<?php

namespace Joinbiz\Data\Models\Product;

use Illuminate\Database\Eloquent\Model;

/**
 * @property string $product_store_id
 * @property string $keyword
 * @property string $from_date
 * @property string $target_type_enum_id
 * @property string $thru_date
 * @property string $target
 * @property string $last_updated_stamp
 * @property string $last_updated_tx_stamp
 * @property string $created_stamp
 * @property string $created_tx_stamp
 * @property Enumeration $enumerationByTargetTypeEnumId
 * @property ProductStore $productStore
 */
class ProductStoreKeywordOvrd extends Model
{
    const CREATED_AT = 'created_stamp';
    const UPDATED_AT = 'last_updated_stamp';

    /**
     * The table associated with the model.
     *
     * @var string
     */
    protected $table = 'product_store_keyword_ovrd';

    /**
     * @var array
     */
    protected $fillable = ['target_type_enum_id', 'thru_date', 'target', 'last_updated_stamp', 'last_updated_tx_stamp', 'created_stamp', 'created_tx_stamp'];

    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function enumerationByTargetTypeEnumId()
    {
        return $this->belongsTo('Joinbiz\Data\Models\Product\Enumeration', 'target_type_enum_id', 'enum_id');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function productStore()
    {
        return $this->belongsTo('Joinbiz\Data\Models\Product\ProductStore', 'product_store_id', 'product_store_id');
    }
}
