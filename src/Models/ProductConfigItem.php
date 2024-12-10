<?php

namespace Joinbiz\Data\Models\Product;

use Illuminate\Database\Eloquent\Model;

/**
 * @property string $config_item_id
 * @property string $config_item_type_id
 * @property string $config_item_name
 * @property string $description
 * @property string $long_description
 * @property string $image_url
 * @property string $last_updated_stamp
 * @property string $last_updated_tx_stamp
 * @property string $created_stamp
 * @property string $created_tx_stamp
 * @property ProdConfItemContent[] $prodConfItemContents
 * @property ProductConfig[] $productConfigs
 * @property ProductConfigOptionIactn[] $productConfigOptionIactns
 * @property ProductConfigOptionIactn[] $productConfigOptionIactnsByConfigItemIdTo
 * @property ProductConfigProduct[] $productConfigProducts
 * @property ProductConfigConfig[] $productConfigConfigs
 * @property ProductConfigOption[] $productConfigOptions
 */
class ProductConfigItem extends Model
{
    const CREATED_AT = 'created_stamp';
    const UPDATED_AT = 'last_updated_stamp';

    /**
     * The table associated with the model.
     *
     * @var string
     */
    protected $table = 'product_config_item';

    /**
     * The primary key for the model.
     *
     * @var string
     */
    protected $primaryKey = 'config_item_id';

    /**
     * The "type" of the auto-incrementing ID.
     *
     * @var string
     */
    protected $keyType = 'string';

    /**
     * Indicates if the IDs are auto-incrementing.
     *
     * @var bool
     */
    public $incrementing = false;

    /**
     * @var array
     */
    protected $fillable = ['config_item_type_id', 'config_item_name', 'description', 'long_description', 'image_url', 'last_updated_stamp', 'last_updated_tx_stamp', 'created_stamp', 'created_tx_stamp'];

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function prodConfItemContents()
    {
        return $this->hasMany('Joinbiz\Data\Models\Product\ProdConfItemContent', 'config_item_id', 'config_item_id');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function productConfigs()
    {
        return $this->hasMany('Joinbiz\Data\Models\Product\ProductConfig', 'config_item_id', 'config_item_id');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function productConfigOptionIactns()
    {
        return $this->hasMany('Joinbiz\Data\Models\Product\ProductConfigOptionIactn', 'config_item_id', 'config_item_id');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function productConfigOptionIactnsByConfigItemIdTo()
    {
        return $this->hasMany('Joinbiz\Data\Models\Product\ProductConfigOptionIactn', 'config_item_id_to', 'config_item_id');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function productConfigProducts()
    {
        return $this->hasMany('Joinbiz\Data\Models\Product\ProductConfigProduct', 'config_item_id', 'config_item_id');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function productConfigConfigs()
    {
        return $this->hasMany('Joinbiz\Data\Models\Product\ProductConfigConfig', 'config_item_id', 'config_item_id');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function productConfigOptions()
    {
        return $this->hasMany('Joinbiz\Data\Models\Product\ProductConfigOption', 'config_item_id', 'config_item_id');
    }
}
