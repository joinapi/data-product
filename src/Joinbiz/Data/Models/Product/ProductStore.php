<?php

namespace Joinbiz\Data\Models\Product;

use Illuminate\Database\Eloquent\Model;

/**
 * @property string $product_store_id
 * @property string $primary_store_group_id
 * @property string $pay_to_party_id
 * @property string $inventory_facility_id
 * @property string $reserve_order_enum_id
 * @property string $requirement_method_enum_id
 * @property string $default_currency_uom_id
 * @property string $default_sales_channel_enum_id
 * @property string $header_approved_status
 * @property string $item_approved_status
 * @property string $digital_item_approved_status
 * @property string $header_declined_status
 * @property string $item_declined_status
 * @property string $header_cancel_status
 * @property string $item_cancel_status
 * @property string $store_credit_account_enum_id
 * @property string $vat_tax_auth_geo_id
 * @property string $vat_tax_auth_party_id
 * @property string $store_name
 * @property string $company_name
 * @property string $title
 * @property string $subtitle
 * @property float $days_to_cancel_non_pay
 * @property string $manual_auth_is_capture
 * @property string $prorate_shipping
 * @property string $prorate_taxes
 * @property string $view_cart_on_add
 * @property string $auto_save_cart
 * @property string $auto_approve_reviews
 * @property string $is_demo_store
 * @property string $is_immediately_fulfilled
 * @property string $one_inventory_facility
 * @property string $check_inventory
 * @property string $reserve_inventory
 * @property string $require_inventory
 * @property string $balance_res_on_order_creation
 * @property string $order_number_prefix
 * @property string $default_locale_string
 * @property string $default_time_zone_string
 * @property string $allow_password
 * @property string $default_password
 * @property string $explode_order_items
 * @property string $check_gc_balance
 * @property string $retry_failed_auths
 * @property string $auth_declined_message
 * @property string $auth_fraud_message
 * @property string $auth_error_message
 * @property string $visual_theme_id
 * @property string $use_primary_email_username
 * @property string $require_customer_role
 * @property string $auto_invoice_digital_items
 * @property string $req_ship_addr_for_dig_items
 * @property string $show_checkout_gift_options
 * @property string $select_payment_type_per_item
 * @property string $show_prices_with_vat_tax
 * @property string $show_tax_is_exempt
 * @property string $enable_auto_suggestion_list
 * @property string $enable_dig_prod_upload
 * @property string $prod_search_exclude_variants
 * @property string $dig_prod_upload_category_id
 * @property string $auto_order_cc_try_exp
 * @property string $auto_order_cc_try_other_cards
 * @property string $auto_order_cc_try_later_nsf
 * @property float $auto_order_cc_try_later_max
 * @property float $store_credit_valid_days
 * @property string $auto_approve_invoice
 * @property string $auto_approve_order
 * @property string $ship_if_capture_fails
 * @property string $set_owner_upon_issuance
 * @property string $req_return_inventory_receive
 * @property string $add_to_cart_remove_incompat
 * @property string $add_to_cart_replace_upsell
 * @property string $split_pay_pref_per_shp_grp
 * @property string $managed_by_lot
 * @property string $show_out_of_stock_products
 * @property string $order_decimal_quantity
 * @property string $allow_comment
 * @property string $style_sheet
 * @property string $header_logo
 * @property string $header_middle_background
 * @property string $header_right_background
 * @property string $last_updated_stamp
 * @property string $last_updated_tx_stamp
 * @property string $created_stamp
 * @property string $created_tx_stamp
 * @property SegmentGroup[] $segmentGroups
 * @property ProductStoreGroupMember[] $productStoreGroupMembers
 * @property OrderHeader[] $orderHeaders
 * @property WebSite[] $webSites
 * @property ProductStorePromoAppl[] $productStorePromoAppls
 * @property ProductStoreFinActSetting[] $productStoreFinActSettings
 * @property ProductStoreFacility[] $productStoreFacilities
 * @property ProductStoreEmailSetting[] $productStoreEmailSettings
 * @property CustRequest[] $custRequests
 * @property ProductStoreCatalog[] $productStoreCatalogs
 * @property ProductStorePaymentSetting[] $productStorePaymentSettings
 * @property Quote[] $quotes
 * @property Uom $uomByDefaultCurrencyUomId
 * @property StatusItem $statusItemByDigitalItemApprovedStatus
 * @property Facility $facilityByInventoryFacilityId
 * @property StatusItem $statusItemByHeaderApprovedStatus
 * @property StatusItem $statusItemByHeaderCancelStatus
 * @property StatusItem $statusItemByHeaderDeclinedStatus
 * @property StatusItem $statusItemByItemApprovedStatus
 * @property StatusItem $statusItemByItemCancelStatus
 * @property StatusItem $statusItemByItemDeclinedStatus
 * @property Party $partyByPayToPartyId
 * @property ProductStoreGroup $productStoreGroupByPrimaryStoreGroupId
 * @property Enumeration $enumerationByReserveOrderEnumId
 * @property Enumeration $enumerationByRequirementMethodEnumId
 * @property Enumeration $enumerationByDefaultSalesChannelEnumId
 * @property Enumeration $enumerationByStoreCreditAccountEnumId
 * @property ProductStoreKeywordOvrd[] $productStoreKeywordOvrds
 * @property InventoryItemTempRes[] $inventoryItemTempRes
 * @property PartyProfileDefault[] $partyProfileDefaults
 * @property TaxAuthorityRateProduct[] $taxAuthorityRateProducts
 * @property ProductReview[] $productReviews
 * @property ProductStoreRole[] $productStoreRoles
 * @property ShoppingList[] $shoppingLists
 * @property ProductStoreVendorShipment[] $productStoreVendorShipments
 * @property ProductStoreSurveyAppl[] $productStoreSurveyAppls
 * @property ProductStoreVendorPayment[] $productStoreVendorPayments
 */
class ProductStore extends Model
{
    const CREATED_AT = 'created_stamp';
    const UPDATED_AT = 'last_updated_stamp';

    /**
     * The table associated with the model.
     * 
     * @var string
     */
    protected $table = 'product_store';

    /**
     * The primary key for the model.
     * 
     * @var string
     */
    protected $primaryKey = 'product_store_id';

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
    protected $fillable = ['primary_store_group_id', 'pay_to_party_id', 'inventory_facility_id', 'reserve_order_enum_id', 'requirement_method_enum_id', 'default_currency_uom_id', 'default_sales_channel_enum_id', 'header_approved_status', 'item_approved_status', 'digital_item_approved_status', 'header_declined_status', 'item_declined_status', 'header_cancel_status', 'item_cancel_status', 'store_credit_account_enum_id', 'vat_tax_auth_geo_id', 'vat_tax_auth_party_id', 'store_name', 'company_name', 'title', 'subtitle', 'days_to_cancel_non_pay', 'manual_auth_is_capture', 'prorate_shipping', 'prorate_taxes', 'view_cart_on_add', 'auto_save_cart', 'auto_approve_reviews', 'is_demo_store', 'is_immediately_fulfilled', 'one_inventory_facility', 'check_inventory', 'reserve_inventory', 'require_inventory', 'balance_res_on_order_creation', 'order_number_prefix', 'default_locale_string', 'default_time_zone_string', 'allow_password', 'default_password', 'explode_order_items', 'check_gc_balance', 'retry_failed_auths', 'auth_declined_message', 'auth_fraud_message', 'auth_error_message', 'visual_theme_id', 'use_primary_email_username', 'require_customer_role', 'auto_invoice_digital_items', 'req_ship_addr_for_dig_items', 'show_checkout_gift_options', 'select_payment_type_per_item', 'show_prices_with_vat_tax', 'show_tax_is_exempt', 'enable_auto_suggestion_list', 'enable_dig_prod_upload', 'prod_search_exclude_variants', 'dig_prod_upload_category_id', 'auto_order_cc_try_exp', 'auto_order_cc_try_other_cards', 'auto_order_cc_try_later_nsf', 'auto_order_cc_try_later_max', 'store_credit_valid_days', 'auto_approve_invoice', 'auto_approve_order', 'ship_if_capture_fails', 'set_owner_upon_issuance', 'req_return_inventory_receive', 'add_to_cart_remove_incompat', 'add_to_cart_replace_upsell', 'split_pay_pref_per_shp_grp', 'managed_by_lot', 'show_out_of_stock_products', 'order_decimal_quantity', 'allow_comment', 'style_sheet', 'header_logo', 'header_middle_background', 'header_right_background', 'last_updated_stamp', 'last_updated_tx_stamp', 'created_stamp', 'created_tx_stamp'];

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function segmentGroups()
    {
        return $this->hasMany('Joinbiz\Data\Models\Marketing\SegmentGroup', 'product_store_id', 'product_store_id');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function productStoreGroupMembers()
    {
        return $this->hasMany('Joinbiz\Data\Models\Product\ProductStoreGroupMember', 'product_store_id', 'product_store_id');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function orderHeaders()
    {
        return $this->hasMany('Joinbiz\Data\Models\Order\OrderHeader', 'product_store_id', 'product_store_id');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function webSites()
    {
        return $this->hasMany('\WebSite', 'product_store_id', 'product_store_id');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function productStorePromoAppls()
    {
        return $this->hasMany('Joinbiz\Data\Models\Product\ProductStorePromoAppl', 'product_store_id', 'product_store_id');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function productStoreFinActSettings()
    {
        return $this->hasMany('Joinbiz\Data\Models\Product\ProductStoreFinActSetting', 'product_store_id', 'product_store_id');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function productStoreFacilities()
    {
        return $this->hasMany('Joinbiz\Data\Models\Product\ProductStoreFacility', 'product_store_id', 'product_store_id');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function productStoreEmailSettings()
    {
        return $this->hasMany('Joinbiz\Data\Models\Product\ProductStoreEmailSetting', 'product_store_id', 'product_store_id');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function custRequests()
    {
        return $this->hasMany('Joinbiz\Data\Models\Order\CustRequest', 'product_store_id', 'product_store_id');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function productStoreCatalogs()
    {
        return $this->hasMany('Joinbiz\Data\Models\Product\ProductStoreCatalog', 'product_store_id', 'product_store_id');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function productStorePaymentSettings()
    {
        return $this->hasMany('Joinbiz\Data\Models\Product\ProductStorePaymentSetting', 'product_store_id', 'product_store_id');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function quotes()
    {
        return $this->hasMany('Joinbiz\Data\Models\Order\Quote', 'product_store_id', 'product_store_id');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function uomByDefaultCurrencyUomId()
    {
        return $this->belongsTo('Joinbiz\Data\Models\Common\Uom', 'default_currency_uom_id', 'uom_id');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function statusItemByDigitalItemApprovedStatus()
    {
        return $this->belongsTo('Joinbiz\Data\Models\Common\StatusItem', 'digital_item_approved_status', 'status_id');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function facilityByInventoryFacilityId()
    {
        return $this->belongsTo('Joinbiz\Data\Models\Product\Facility', 'inventory_facility_id', 'facility_id');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function statusItemByHeaderApprovedStatus()
    {
        return $this->belongsTo('Joinbiz\Data\Models\Common\StatusItem', 'header_approved_status', 'status_id');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function statusItemByHeaderCancelStatus()
    {
        return $this->belongsTo('Joinbiz\Data\Models\Common\StatusItem', 'header_cancel_status', 'status_id');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function statusItemByHeaderDeclinedStatus()
    {
        return $this->belongsTo('Joinbiz\Data\Models\Common\StatusItem', 'header_declined_status', 'status_id');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function statusItemByItemApprovedStatus()
    {
        return $this->belongsTo('Joinbiz\Data\Models\Common\StatusItem', 'item_approved_status', 'status_id');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function statusItemByItemCancelStatus()
    {
        return $this->belongsTo('Joinbiz\Data\Models\Common\StatusItem', 'item_cancel_status', 'status_id');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function statusItemByItemDeclinedStatus()
    {
        return $this->belongsTo('Joinbiz\Data\Models\Common\StatusItem', 'item_declined_status', 'status_id');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function partyByPayToPartyId()
    {
        return $this->belongsTo('Joinbiz\Data\Models\Party\Party', 'pay_to_party_id', 'party_id');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function productStoreGroupByPrimaryStoreGroupId()
    {
        return $this->belongsTo('Joinbiz\Data\Models\Product\ProductStoreGroup', 'primary_store_group_id', 'product_store_group_id');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function enumerationByReserveOrderEnumId()
    {
        return $this->belongsTo('Joinbiz\Data\Models\Common\Enumeration', 'reserve_order_enum_id', 'enum_id');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function enumerationByRequirementMethodEnumId()
    {
        return $this->belongsTo('Joinbiz\Data\Models\Common\Enumeration', 'requirement_method_enum_id', 'enum_id');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function enumerationByDefaultSalesChannelEnumId()
    {
        return $this->belongsTo('Joinbiz\Data\Models\Common\Enumeration', 'default_sales_channel_enum_id', 'enum_id');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function enumerationByStoreCreditAccountEnumId()
    {
        return $this->belongsTo('Joinbiz\Data\Models\Common\Enumeration', 'store_credit_account_enum_id', 'enum_id');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function productStoreKeywordOvrds()
    {
        return $this->hasMany('Joinbiz\Data\Models\Product\ProductStoreKeywordOvrd', 'product_store_id', 'product_store_id');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function inventoryItemTempRes()
    {
        return $this->hasMany('Joinbiz\Data\Models\Product\InventoryItemTempRes', 'product_store_id', 'product_store_id');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function partyProfileDefaults()
    {
        return $this->hasMany('Joinbiz\Data\Models\Party\PartyProfileDefault', 'product_store_id', 'product_store_id');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function taxAuthorityRateProducts()
    {
        return $this->hasMany('Joinbiz\Data\Models\Accounting\TaxAuthorityRateProduct', 'product_store_id', 'product_store_id');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function productReviews()
    {
        return $this->hasMany('Joinbiz\Data\Models\Product\ProductReview', 'product_store_id', 'product_store_id');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function productStoreRoles()
    {
        return $this->hasMany('Joinbiz\Data\Models\Product\ProductStoreRole', 'product_store_id', 'product_store_id');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function shoppingLists()
    {
        return $this->hasMany('Joinbiz\Data\Models\Order\ShoppingList', 'product_store_id', 'product_store_id');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function productStoreVendorShipments()
    {
        return $this->hasMany('Joinbiz\Data\Models\Product\ProductStoreVendorShipment', 'product_store_id', 'product_store_id');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function productStoreSurveyAppls()
    {
        return $this->hasMany('Joinbiz\Data\Models\Product\ProductStoreSurveyAppl', 'product_store_id', 'product_store_id');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function productStoreVendorPayments()
    {
        return $this->hasMany('Joinbiz\Data\Models\Product\ProductStoreVendorPayment', 'product_store_id', 'product_store_id');
    }
}
