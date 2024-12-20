<?php

namespace Joinbiz\Data\Models\Product;

use Illuminate\Database\Eloquent\Model;

/**
 * @property string $product_promo_id
 * @property string $product_promo_rule_id
 * @property string $product_promo_action_seq_id
 * @property string $product_promo_cond_seq_id
 * @property string $product_category_id
 * @property string $and_group_id
 * @property string $product_promo_appl_enum_id
 * @property string $include_sub_categories
 * @property string $last_updated_stamp
 * @property string $last_updated_tx_stamp
 * @property string $created_stamp
 * @property string $created_tx_stamp
 * @property Enumeration $enumerationByProductPromoApplEnumId
 * @property ProductCategory $productCategory
 * @property ProductPromo $productPromo
 */
class ProductPromoCategory extends Model
{
    const CREATED_AT = 'created_stamp';
    const UPDATED_AT = 'last_updated_stamp';

    /**
     * The table associated with the model.
     * 
     * @var string
     */
    protected $table = 'product_promo_category';

    /**
     * @var array
     */
    protected $fillable = ['product_promo_appl_enum_id', 'include_sub_categories', 'last_updated_stamp', 'last_updated_tx_stamp', 'created_stamp', 'created_tx_stamp'];

    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function enumerationByProductPromoApplEnumId()
    {
        return $this->belongsTo('Joinbiz\Data\Models\Common\Enumeration', 'product_promo_appl_enum_id', 'enum_id');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function productCategory()
    {
        return $this->belongsTo('Joinbiz\Data\Models\Product\ProductCategory', 'product_category_id', 'product_category_id');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function productPromo()
    {
        return $this->belongsTo('Joinbiz\Data\Models\Product\ProductPromo', 'product_promo_id', 'product_promo_id');
    }
}
