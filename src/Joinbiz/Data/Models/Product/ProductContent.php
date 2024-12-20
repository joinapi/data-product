<?php

namespace Joinbiz\Data\Models\Product;

use Illuminate\Database\Eloquent\Model;

/**
 * @property string $product_id
 * @property string $content_id
 * @property string $product_content_type_id
 * @property string $from_date
 * @property string $use_time_uom_id
 * @property string $use_role_type_id
 * @property string $thru_date
 * @property string $purchase_from_date
 * @property string $purchase_thru_date
 * @property float $use_count_limit
 * @property float $use_time
 * @property float $sequence_num
 * @property string $last_updated_stamp
 * @property string $last_updated_tx_stamp
 * @property string $created_stamp
 * @property string $created_tx_stamp
 * @property Content $content
 * @property Product $product
 * @property ProductContentType $productContentType
 * @property RoleType $roleTypeByUseRoleTypeId
 * @property Uom $uomByUseTimeUomId
 */
class ProductContent extends Model
{
    const CREATED_AT = 'created_stamp';
    const UPDATED_AT = 'last_updated_stamp';

    /**
     * The table associated with the model.
     * 
     * @var string
     */
    protected $table = 'product_content';

    /**
     * @var array
     */
    protected $fillable = ['use_time_uom_id', 'use_role_type_id', 'thru_date', 'purchase_from_date', 'purchase_thru_date', 'use_count_limit', 'use_time', 'sequence_num', 'last_updated_stamp', 'last_updated_tx_stamp', 'created_stamp', 'created_tx_stamp'];

    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function content()
    {
        return $this->belongsTo('\Content', 'content_id', 'content_id');
    }

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
    public function productContentType()
    {
        return $this->belongsTo('Joinbiz\Data\Models\Product\ProductContentType', 'product_content_type_id', 'product_content_type_id');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function roleTypeByUseRoleTypeId()
    {
        return $this->belongsTo('Joinbiz\Data\Models\Party\RoleType', 'use_role_type_id', 'role_type_id');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function uomByUseTimeUomId()
    {
        return $this->belongsTo('Joinbiz\Data\Models\Common\Uom', 'use_time_uom_id', 'uom_id');
    }
}
