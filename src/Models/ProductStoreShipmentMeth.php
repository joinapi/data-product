<?php

namespace Joinbiz\Data\Models\Product;

use Illuminate\Database\Eloquent\Model;

/**
 * @property string $product_store_ship_meth_id
 * @property string $shipment_method_type_id
 * @property string $shipment_custom_method_id
 * @property string $shipment_gateway_config_id
 * @property string $product_store_id
 * @property string $party_id
 * @property string $role_type_id
 * @property string $company_party_id
 * @property float $min_weight
 * @property float $max_weight
 * @property float $min_size
 * @property float $max_size
 * @property float $min_total
 * @property float $max_total
 * @property string $allow_usps_addr
 * @property string $require_usps_addr
 * @property string $allow_company_addr
 * @property string $require_company_addr
 * @property string $include_no_charge_items
 * @property string $include_feature_group
 * @property string $exclude_feature_group
 * @property string $include_geo_id
 * @property string $exclude_geo_id
 * @property string $service_name
 * @property string $config_props
 * @property float $sequence_number
 * @property float $allowance_percent
 * @property float $minimum_price
 * @property string $last_updated_stamp
 * @property string $last_updated_tx_stamp
 * @property string $created_stamp
 * @property string $created_tx_stamp
 * @property ShipmentCostEstimate[] $shipmentCostEstimates
 * @property CustomMethod $customMethodByShipmentCustomMethodId
 * @property ShipmentGatewayConfig $shipmentGatewayConfig
 * @property ShipmentMethodType $shipmentMethodType
 */
class ProductStoreShipmentMeth extends Model
{
    const CREATED_AT = 'created_stamp';
    const UPDATED_AT = 'last_updated_stamp';

    /**
     * The table associated with the model.
     *
     * @var string
     */
    protected $table = 'product_store_shipment_meth';

    /**
     * The primary key for the model.
     *
     * @var string
     */
    protected $primaryKey = 'product_store_ship_meth_id';

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
    protected $fillable = ['shipment_method_type_id', 'shipment_custom_method_id', 'shipment_gateway_config_id', 'product_store_id', 'party_id', 'role_type_id', 'company_party_id', 'min_weight', 'max_weight', 'min_size', 'max_size', 'min_total', 'max_total', 'allow_usps_addr', 'require_usps_addr', 'allow_company_addr', 'require_company_addr', 'include_no_charge_items', 'include_feature_group', 'exclude_feature_group', 'include_geo_id', 'exclude_geo_id', 'service_name', 'config_props', 'sequence_number', 'allowance_percent', 'minimum_price', 'last_updated_stamp', 'last_updated_tx_stamp', 'created_stamp', 'created_tx_stamp'];

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function shipmentCostEstimates()
    {
        return $this->hasMany('Joinbiz\Data\Models\Product\ShipmentCostEstimate', 'product_store_ship_meth_id', 'product_store_ship_meth_id');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function customMethodByShipmentCustomMethodId()
    {
        return $this->belongsTo('Joinbiz\Data\Models\Product\CustomMethod', 'shipment_custom_method_id', 'custom_method_id');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function shipmentGatewayConfig()
    {
        return $this->belongsTo('Joinbiz\Data\Models\Product\ShipmentGatewayConfig', 'shipment_gateway_config_id', 'shipment_gateway_config_id');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function shipmentMethodType()
    {
        return $this->belongsTo('Joinbiz\Data\Models\Product\ShipmentMethodType', 'shipment_method_type_id', 'shipment_method_type_id');
    }
}
