<?php

namespace Joinbiz\Data\Models\Product;

use Illuminate\Database\Eloquent\Model;

/**
 * @property string $product_store_id
 * @property string $vendor_party_id
 * @property string $payment_method_type_id
 * @property string $credit_card_enum_id
 * @property string $last_updated_stamp
 * @property string $last_updated_tx_stamp
 * @property string $created_stamp
 * @property string $created_tx_stamp
 * @property Enumeration $enumerationByCreditCardEnumId
 * @property PaymentMethodType $paymentMethodType
 * @property ProductStore $productStore
 * @property Party $partyByVendorPartyId
 */
class ProductStoreVendorPayment extends Model
{
    const CREATED_AT = 'created_stamp';
    const UPDATED_AT = 'last_updated_stamp';

    /**
     * The table associated with the model.
     * 
     * @var string
     */
    protected $table = 'product_store_vendor_payment';

    /**
     * @var array
     */
    protected $fillable = ['last_updated_stamp', 'last_updated_tx_stamp', 'created_stamp', 'created_tx_stamp'];

    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function enumerationByCreditCardEnumId()
    {
        return $this->belongsTo('Joinbiz\Data\Models\Common\Enumeration', 'credit_card_enum_id', 'enum_id');
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

    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function partyByVendorPartyId()
    {
        return $this->belongsTo('Joinbiz\Data\Models\Party\Party', 'vendor_party_id', 'party_id');
    }
}
