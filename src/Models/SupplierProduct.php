<?php

namespace Joinbiz\Data\Models\Product;

use Illuminate\Database\Eloquent\Model;

/**
 * @property string $product_id
 * @property string $party_id
 * @property string $available_from_date
 * @property float $minimum_order_quantity
 * @property string $currency_uom_id
 * @property string $supplier_pref_order_id
 * @property string $supplier_rating_type_id
 * @property string $quantity_uom_id
 * @property string $agreement_id
 * @property string $agreement_item_seq_id
 * @property string $available_thru_date
 * @property float $standard_lead_time_days
 * @property float $order_qty_increments
 * @property float $units_included
 * @property float $last_price
 * @property float $shipping_price
 * @property string $supplier_product_name
 * @property string $supplier_product_id
 * @property string $can_drop_ship
 * @property string $comments
 * @property string $last_updated_stamp
 * @property string $last_updated_tx_stamp
 * @property string $created_stamp
 * @property string $created_tx_stamp
 * @property Uom $uomByCurrencyUomId
 * @property Party $party
 * @property Product $product
 * @property Uom $uomByQuantityUomId
 * @property SupplierPrefOrder $supplierPrefOrder
 * @property SupplierRatingType $supplierRatingType
 */
class SupplierProduct extends Model
{
    const CREATED_AT = 'created_stamp';
    const UPDATED_AT = 'last_updated_stamp';

    /**
     * The table associated with the model.
     *
     * @var string
     */
    protected $table = 'supplier_product';

    /**
     * @var array
     */
    protected $fillable = ['supplier_pref_order_id', 'supplier_rating_type_id', 'quantity_uom_id', 'agreement_id', 'agreement_item_seq_id', 'available_thru_date', 'standard_lead_time_days', 'order_qty_increments', 'units_included', 'last_price', 'shipping_price', 'supplier_product_name', 'supplier_product_id', 'can_drop_ship', 'comments', 'last_updated_stamp', 'last_updated_tx_stamp', 'created_stamp', 'created_tx_stamp'];

    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function uomByCurrencyUomId()
    {
        return $this->belongsTo('Joinbiz\Data\Models\Product\Uom', 'currency_uom_id', 'uom_id');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function party()
    {
        return $this->belongsTo('Joinbiz\Data\Models\Product\Party', 'party_id', 'party_id');
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
    public function uomByQuantityUomId()
    {
        return $this->belongsTo('Joinbiz\Data\Models\Product\Uom', 'quantity_uom_id', 'uom_id');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function supplierPrefOrder()
    {
        return $this->belongsTo('Joinbiz\Data\Models\Product\SupplierPrefOrder', 'supplier_pref_order_id', 'supplier_pref_order_id');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function supplierRatingType()
    {
        return $this->belongsTo('Joinbiz\Data\Models\Product\SupplierRatingType', 'supplier_rating_type_id', 'supplier_rating_type_id');
    }
}
