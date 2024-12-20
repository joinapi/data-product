<?php

namespace Joinbiz\Data\Models\Product;

use Illuminate\Database\Eloquent\Model;

/**
 * @property string $product_category_id
 * @property string $link_seq_id
 * @property string $from_date
 * @property string $link_type_enum_id
 * @property string $thru_date
 * @property string $comments
 * @property float $sequence_num
 * @property string $title_text
 * @property string $detail_text
 * @property string $image_url
 * @property string $image_two_url
 * @property string $link_info
 * @property string $detail_sub_screen
 * @property string $last_updated_stamp
 * @property string $last_updated_tx_stamp
 * @property string $created_stamp
 * @property string $created_tx_stamp
 * @property ProductCategory $productCategory
 * @property Enumeration $enumerationByLinkTypeEnumId
 */
class ProductCategoryLink extends Model
{
    const CREATED_AT = 'created_stamp';
    const UPDATED_AT = 'last_updated_stamp';

    /**
     * The table associated with the model.
     * 
     * @var string
     */
    protected $table = 'product_category_link';

    /**
     * @var array
     */
    protected $fillable = ['link_type_enum_id', 'thru_date', 'comments', 'sequence_num', 'title_text', 'detail_text', 'image_url', 'image_two_url', 'link_info', 'detail_sub_screen', 'last_updated_stamp', 'last_updated_tx_stamp', 'created_stamp', 'created_tx_stamp'];

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
    public function enumerationByLinkTypeEnumId()
    {
        return $this->belongsTo('Joinbiz\Data\Models\Common\Enumeration', 'link_type_enum_id', 'enum_id');
    }
}
