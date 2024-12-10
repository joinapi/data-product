<?php

namespace Joinbiz\Data\Models\Product;

use Illuminate\Database\Eloquent\Model;

/**
 * @property string $config_item_id
 * @property string $content_id
 * @property string $conf_item_content_type_id
 * @property string $from_date
 * @property string $thru_date
 * @property string $last_updated_stamp
 * @property string $last_updated_tx_stamp
 * @property string $created_stamp
 * @property string $created_tx_stamp
 * @property Content $content
 * @property ProductConfigItem $productConfigItem
 * @property ProdConfItemContentType $prodConfItemContentType
 */
class ProdConfItemContent extends Model
{
    const CREATED_AT = 'created_stamp';
    const UPDATED_AT = 'last_updated_stamp';

    /**
     * The table associated with the model.
     *
     * @var string
     */
    protected $table = 'prod_conf_item_content';

    /**
     * @var array
     */
    protected $fillable = ['thru_date', 'last_updated_stamp', 'last_updated_tx_stamp', 'created_stamp', 'created_tx_stamp'];

    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function content()
    {
        return $this->belongsTo('Joinbiz\Data\Models\Product\Content', 'content_id', 'content_id');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function productConfigItem()
    {
        return $this->belongsTo('Joinbiz\Data\Models\Product\ProductConfigItem', 'config_item_id', 'config_item_id');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function prodConfItemContentType()
    {
        return $this->belongsTo('Joinbiz\Data\Models\Product\ProdConfItemContentType', 'conf_item_content_type_id', 'conf_item_content_type_id');
    }
}
