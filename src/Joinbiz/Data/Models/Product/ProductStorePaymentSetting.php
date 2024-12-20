<?php

namespace Joinbiz\Data\Models\Product;

use Illuminate\Database\Eloquent\Model;

/**
 * @property string $product_store_id
 * @property string $payment_method_type_id
 * @property string $payment_service_type_enum_id
 * @property string $payment_custom_method_id
 * @property string $payment_gateway_config_id
 * @property string $payment_service
 * @property string $payment_properties_path
 * @property string $apply_to_all_products
 * @property string $last_updated_stamp
 * @property string $last_updated_tx_stamp
 * @property string $created_stamp
 * @property string $created_tx_stamp
 * @property CustomMethod $customMethodByPaymentCustomMethodId
 * @property Enumeration $enumerationByPaymentServiceTypeEnumId
 * @property PaymentGatewayConfig $paymentGatewayConfig
 * @property PaymentMethodType $paymentMethodType
 * @property ProductStore $productStore
 */
class ProductStorePaymentSetting extends Model
{
    const CREATED_AT = 'created_stamp';
    const UPDATED_AT = 'last_updated_stamp';

    /**
     * The table associated with the model.
     * 
     * @var string
     */
    protected $table = 'product_store_payment_setting';

    /**
     * @var array
     */
    protected $fillable = ['payment_custom_method_id', 'payment_gateway_config_id', 'payment_service', 'payment_properties_path', 'apply_to_all_products', 'last_updated_stamp', 'last_updated_tx_stamp', 'created_stamp', 'created_tx_stamp'];

    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function customMethodByPaymentCustomMethodId()
    {
        return $this->belongsTo('Joinbiz\Data\Models\Common\CustomMethod', 'payment_custom_method_id', 'custom_method_id');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function enumerationByPaymentServiceTypeEnumId()
    {
        return $this->belongsTo('Joinbiz\Data\Models\Common\Enumeration', 'payment_service_type_enum_id', 'enum_id');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function paymentGatewayConfig()
    {
        return $this->belongsTo('Joinbiz\Data\Models\Accounting\PaymentGatewayConfig', 'payment_gateway_config_id', 'payment_gateway_config_id');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function paymentMethodType()
    {
        return $this->belongsTo('Joinbiz\Data\Models\Accounting\PaymentMethodType', 'payment_method_type_id', 'payment_method_type_id');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function productStore()
    {
        return $this->belongsTo('Joinbiz\Data\Models\Product\ProductStore', 'product_store_id', 'product_store_id');
    }
}
