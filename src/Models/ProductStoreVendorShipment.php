<?php

namespace Joinbiz\Data\Models\Product;

use Illuminate\Database\Eloquent\Model;

/**
 * @property string $product_store_id
 * @property string $vendor_party_id
 * @property string $shipment_method_type_id
 * @property string $carrier_party_id
 * @property string $last_updated_stamp
 * @property string $last_updated_tx_stamp
 * @property string $created_stamp
 * @property string $created_tx_stamp
 * @property Party $partyByCarrierPartyId
 * @property ProductStore $productStore
 * @property ShipmentMethodType $shipmentMethodType
 * @property Party $partyByVendorPartyId
 */
class ProductStoreVendorShipment extends Model
{
    const CREATED_AT = 'created_stamp';
    const UPDATED_AT = 'last_updated_stamp';

    /**
     * The table associated with the model.
     *
     * @var string
     */
    protected $table = 'product_store_vendor_shipment';

    /**
     * @var array
     */
    protected $fillable = ['last_updated_stamp', 'last_updated_tx_stamp', 'created_stamp', 'created_tx_stamp'];

    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function partyByCarrierPartyId()
    {
        return $this->belongsTo('Joinbiz\Data\Models\Product\Party', 'carrier_party_id', 'party_id');
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
    public function shipmentMethodType()
    {
        return $this->belongsTo('Joinbiz\Data\Models\Product\ShipmentMethodType', 'shipment_method_type_id', 'shipment_method_type_id');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function partyByVendorPartyId()
    {
        return $this->belongsTo('Joinbiz\Data\Models\Product\Party', 'vendor_party_id', 'party_id');
    }
}
