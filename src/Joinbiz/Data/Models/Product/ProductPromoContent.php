<?php

namespace Joinbiz\Data\Models\Product;

use Illuminate\Database\Eloquent\Model;

/**
 * @property string $product_promo_id
 * @property string $content_id
 * @property string $product_promo_content_type_id
 * @property string $from_date
 * @property string $thru_date
 * @property string $last_updated_stamp
 * @property string $last_updated_tx_stamp
 * @property string $created_stamp
 * @property string $created_tx_stamp
 * @property Content $content
 * @property ProductPromo $productPromo
 * @property ProductContentType $productContentTypeByProductPromoContentTypeId
 */
class ProductPromoContent extends Model
{
    const CREATED_AT = 'created_stamp';
    const UPDATED_AT = 'last_updated_stamp';

    /**
     * The table associated with the model.
     * 
     * @var string
     */
    protected $table = 'product_promo_content';

    /**
     * @var array
     */
    protected $fillable = ['thru_date', 'last_updated_stamp', 'last_updated_tx_stamp', 'created_stamp', 'created_tx_stamp'];

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
    public function productPromo()
    {
        return $this->belongsTo('Joinbiz\Data\Models\Product\ProductPromo', 'product_promo_id', 'product_promo_id');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function productContentTypeByProductPromoContentTypeId()
    {
        return $this->belongsTo('Joinbiz\Data\Models\Product\ProductContentType', 'product_promo_content_type_id', 'product_content_type_id');
    }
}
