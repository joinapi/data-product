<?php

namespace Joinbiz\Data\Models\Product;

use Illuminate\Database\Eloquent\Model;

/**
 * @property string $product_search_result_id
 * @property string $constraint_seq_id
 * @property string $constraint_name
 * @property string $info_string
 * @property string $include_sub_categories
 * @property string $is_and
 * @property string $any_prefix
 * @property string $any_suffix
 * @property string $remove_stems
 * @property string $low_value
 * @property string $high_value
 * @property string $last_updated_stamp
 * @property string $last_updated_tx_stamp
 * @property string $created_stamp
 * @property string $created_tx_stamp
 * @property ProductSearchResult $productSearchResult
 */
class ProductSearchConstraint extends Model
{
    const CREATED_AT = 'created_stamp';
    const UPDATED_AT = 'last_updated_stamp';

    /**
     * The table associated with the model.
     * 
     * @var string
     */
    protected $table = 'product_search_constraint';

    /**
     * @var array
     */
    protected $fillable = ['constraint_name', 'info_string', 'include_sub_categories', 'is_and', 'any_prefix', 'any_suffix', 'remove_stems', 'low_value', 'high_value', 'last_updated_stamp', 'last_updated_tx_stamp', 'created_stamp', 'created_tx_stamp'];

    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function productSearchResult()
    {
        return $this->belongsTo('Joinbiz\Data\Models\Product\ProductSearchResult', 'product_search_result_id', 'product_search_result_id');
    }
}
