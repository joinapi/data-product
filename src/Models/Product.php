<?php

namespace Joinbiz\Data\Models\Product;

use Illuminate\Database\Eloquent\Model;

/**
 * @property string $product_id
 * @property string $product_type_id
 * @property string $primary_product_category_id
 * @property string $facility_id
 * @property string $inventory_item_type_id
 * @property string $quantity_uom_id
 * @property string $amount_uom_type_id
 * @property string $weight_uom_id
 * @property string $height_uom_id
 * @property string $width_uom_id
 * @property string $depth_uom_id
 * @property string $diameter_uom_id
 * @property string $rating_type_enum
 * @property string $virtual_variant_method_enum
 * @property string $origin_geo_id
 * @property string $requirement_method_enum_id
 * @property string $created_by_user_login
 * @property string $last_modified_by_user_login
 * @property string $default_shipment_box_type_id
 * @property string $introduction_date
 * @property string $release_date
 * @property string $support_discontinuation_date
 * @property string $sales_discontinuation_date
 * @property string $sales_disc_when_not_avail
 * @property string $internal_name
 * @property string $brand_name
 * @property string $comments
 * @property string $product_name
 * @property string $description
 * @property string $long_description
 * @property string $price_detail_text
 * @property string $small_image_url
 * @property string $medium_image_url
 * @property string $large_image_url
 * @property string $detail_image_url
 * @property string $original_image_url
 * @property string $detail_screen
 * @property string $inventory_message
 * @property string $require_inventory
 * @property float $quantity_included
 * @property float $pieces_included
 * @property string $require_amount
 * @property float $fixed_amount
 * @property float $shipping_weight
 * @property float $product_weight
 * @property float $product_height
 * @property float $shipping_height
 * @property float $product_width
 * @property float $shipping_width
 * @property float $product_depth
 * @property float $shipping_depth
 * @property float $product_diameter
 * @property float $product_rating
 * @property string $returnable
 * @property string $taxable
 * @property string $charge_shipping
 * @property string $auto_create_keywords
 * @property string $include_in_promotions
 * @property string $is_virtual
 * @property string $is_variant
 * @property float $bill_of_material_level
 * @property float $reserv_max_persons
 * @property float $reserv2nd_p_p_perc
 * @property float $reserv_nth_p_p_perc
 * @property string $config_id
 * @property string $created_date
 * @property string $last_modified_date
 * @property string $in_shipping_box
 * @property string $lot_id_filled_in
 * @property string $order_decimal_quantity
 * @property string $last_updated_stamp
 * @property string $last_updated_tx_stamp
 * @property string $created_stamp
 * @property string $created_tx_stamp
 * @property FixedAssetProduct[] $fixedAssetProducts
 * @property ProductRole[] $productRoles
 * @property ProductReview[] $productReviews
 * @property ProductPromoProduct[] $productPromoProducts
 * @property Subscription[] $subscriptions
 * @property InventoryItem[] $inventoryItems
 * @property ProductPrice[] $productPrices
 * @property ProductPaymentMethodType[] $productPaymentMethodTypes
 * @property FixedAsset[] $fixedAssetsByInstanceOfProductId
 * @property ProductOrderItem[] $productOrderItems
 * @property ProductMeter[] $productMeters
 * @property ProductManufacturingRule[] $productManufacturingRulesByProductIdFor
 * @property ProductManufacturingRule[] $productManufacturingRulesByProductIdIn
 * @property ProductManufacturingRule[] $productManufacturingRules
 * @property ProductManufacturingRule[] $productManufacturingRulesByProductIdInSubst
 * @property ProductMaint[] $productMaints
 * @property OrderItem[] $orderItems
 * @property ProductKeywordNew[] $productKeywordNews
 * @property ProductGlAccount[] $productGlAccounts
 * @property ProductGeo[] $productGeos
 * @property QuoteItem[] $quoteItems
 * @property ProductAssoc[] $productAssocsByProductIdTo
 * @property ProductAssoc[] $productAssocs
 * @property ProductAttribute[] $productAttributes
 * @property ProductAverageCost[] $productAverageCosts
 * @property ProductCalculatedInfo $productCalculatedInfo
 * @property CustRequestItem[] $custRequestItems
 * @property ProductCategoryMember[] $productCategoryMembers
 * @property ProductFeatureApplAttr[] $productFeatureApplAttrs
 * @property ProductConfig[] $productConfigs
 * @property CartAbandonedLine[] $cartAbandonedLines
 * @property ProductFeatureAppl[] $productFeatureAppls
 * @property ProductConfigStats[] $productConfigStats
 * @property ProductContent[] $productContents
 * @property ProductFacilityLocation[] $productFacilityLocations
 * @property ProductCostComponentCalc[] $productCostComponentCalcs
 * @property ProductFacility[] $productFacilities
 * @property ProductFacilityAssoc[] $productFacilityAssocs
 * @property UomType $uomTypeByAmountUomTypeId
 * @property UserLogin $userLoginByCreatedByUserLogin
 * @property Uom $uomByDepthUomId
 * @property Uom $uomByDiameterUomId
 * @property Facility $facility
 * @property Uom $uomByHeightUomId
 * @property InventoryItemType $inventoryItemType
 * @property UserLogin $userLoginByLastModifiedByUserLogin
 * @property Geo $geoByOriginGeoId
 * @property ProductCategory $productCategoryByPrimaryProductCategoryId
 * @property Uom $uomByQuantityUomId
 * @property Enumeration $enumerationByRatingTypeEnum
 * @property Enumeration $enumerationByRequirementMethodEnumId
 * @property ShipmentBoxType $shipmentBoxTypeByDefaultShipmentBoxTypeId
 * @property ProductType $productType
 * @property Enumeration $enumerationByVirtualVariantMethodEnum
 * @property Uom $uomByWeightUomId
 * @property Uom $uomByWidthUomId
 * @property ShipmentPackageContent[] $shipmentPackageContentsBySubProductId
 * @property Requirement[] $requirements
 * @property GoodIdentification[] $goodIdentifications
 * @property ShipmentItem[] $shipmentItems
 * @property CostComponent[] $costComponents
 * @property InventoryItemTempRes[] $inventoryItemTempRes
 * @property InvoiceItem[] $invoiceItems
 * @property SupplierProduct[] $supplierProducts
 * @property AgreementProductAppl[] $agreementProductAppls
 * @property SalesForecastDetail[] $salesForecastDetails
 * @property MrpEvent[] $mrpEvents
 * @property ReorderGuideline[] $reorderGuidelines
 * @property ProductConfigProduct[] $productConfigProducts
 * @property ShoppingListItem[] $shoppingListItems
 * @property ProductGroupOrder[] $productGroupOrders
 * @property ShipmentReceipt[] $shipmentReceipts
 * @property OrderSummaryEntry[] $orderSummaryEntries
 * @property ProductSubscriptionResource[] $productSubscriptionResources
 * @property ReturnItem[] $returnItems
 * @property CommunicationEventProduct[] $communicationEventProducts
 * @property PartyNeed[] $partyNeeds
 * @property Agreement[] $agreements
 * @property WorkEffortGoodStandard[] $workEffortGoodStandards
 * @property VendorProduct[] $vendorProducts
 */
class Product extends Model
{
    const CREATED_AT = 'created_stamp';
    const UPDATED_AT = 'last_updated_stamp';

    /**
     * The table associated with the model.
     *
     * @var string
     */
    protected $table = 'product';

    /**
     * The primary key for the model.
     *
     * @var string
     */
    protected $primaryKey = 'product_id';

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
    protected $fillable = ['product_type_id', 'primary_product_category_id', 'facility_id', 'inventory_item_type_id', 'quantity_uom_id', 'amount_uom_type_id', 'weight_uom_id', 'height_uom_id', 'width_uom_id', 'depth_uom_id', 'diameter_uom_id', 'rating_type_enum', 'virtual_variant_method_enum', 'origin_geo_id', 'requirement_method_enum_id', 'created_by_user_login', 'last_modified_by_user_login', 'default_shipment_box_type_id', 'introduction_date', 'release_date', 'support_discontinuation_date', 'sales_discontinuation_date', 'sales_disc_when_not_avail', 'internal_name', 'brand_name', 'comments', 'product_name', 'description', 'long_description', 'price_detail_text', 'small_image_url', 'medium_image_url', 'large_image_url', 'detail_image_url', 'original_image_url', 'detail_screen', 'inventory_message', 'require_inventory', 'quantity_included', 'pieces_included', 'require_amount', 'fixed_amount', 'shipping_weight', 'product_weight', 'product_height', 'shipping_height', 'product_width', 'shipping_width', 'product_depth', 'shipping_depth', 'product_diameter', 'product_rating', 'returnable', 'taxable', 'charge_shipping', 'auto_create_keywords', 'include_in_promotions', 'is_virtual', 'is_variant', 'bill_of_material_level', 'reserv_max_persons', 'reserv2nd_p_p_perc', 'reserv_nth_p_p_perc', 'config_id', 'created_date', 'last_modified_date', 'in_shipping_box', 'lot_id_filled_in', 'order_decimal_quantity', 'last_updated_stamp', 'last_updated_tx_stamp', 'created_stamp', 'created_tx_stamp'];

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function fixedAssetProducts()
    {
        return $this->hasMany('Joinbiz\Data\Models\Product\FixedAssetProduct', 'product_id', 'product_id');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function productRoles()
    {
        return $this->hasMany('Joinbiz\Data\Models\Product\ProductRole', 'product_id', 'product_id');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function productReviews()
    {
        return $this->hasMany('Joinbiz\Data\Models\Product\ProductReview', 'product_id', 'product_id');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function productPromoProducts()
    {
        return $this->hasMany('Joinbiz\Data\Models\Product\ProductPromoProduct', 'product_id', 'product_id');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function subscriptions()
    {
        return $this->hasMany('Joinbiz\Data\Models\Product\Subscription', 'product_id', 'product_id');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function inventoryItems()
    {
        return $this->hasMany('Joinbiz\Data\Models\Product\InventoryItem', 'product_id', 'product_id');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function productPrices()
    {
        return $this->hasMany('Joinbiz\Data\Models\Product\ProductPrice', 'product_id', 'product_id');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function productPaymentMethodTypes()
    {
        return $this->hasMany('Joinbiz\Data\Models\Product\ProductPaymentMethodType', 'product_id', 'product_id');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function fixedAssetsByInstanceOfProductId()
    {
        return $this->hasMany('Joinbiz\Data\Models\Product\FixedAsset', 'instance_of_product_id', 'product_id');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function productOrderItems()
    {
        return $this->hasMany('Joinbiz\Data\Models\Product\ProductOrderItem', 'product_id', 'product_id');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function productMeters()
    {
        return $this->hasMany('Joinbiz\Data\Models\Product\ProductMeter', 'product_id', 'product_id');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function productManufacturingRulesByProductIdFor()
    {
        return $this->hasMany('Joinbiz\Data\Models\Product\ProductManufacturingRule', 'product_id_for', 'product_id');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function productManufacturingRulesByProductIdIn()
    {
        return $this->hasMany('Joinbiz\Data\Models\Product\ProductManufacturingRule', 'product_id_in', 'product_id');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function productManufacturingRules()
    {
        return $this->hasMany('Joinbiz\Data\Models\Product\ProductManufacturingRule', 'product_id', 'product_id');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function productManufacturingRulesByProductIdInSubst()
    {
        return $this->hasMany('Joinbiz\Data\Models\Product\ProductManufacturingRule', 'product_id_in_subst', 'product_id');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function productMaints()
    {
        return $this->hasMany('Joinbiz\Data\Models\Product\ProductMaint', 'product_id', 'product_id');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function orderItems()
    {
        return $this->hasMany('Joinbiz\Data\Models\Product\OrderItem', 'product_id', 'product_id');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function productKeywordNews()
    {
        return $this->hasMany('Joinbiz\Data\Models\Product\ProductKeywordNew', 'product_id', 'product_id');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function productGlAccounts()
    {
        return $this->hasMany('Joinbiz\Data\Models\Product\ProductGlAccount', 'product_id', 'product_id');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function productGeos()
    {
        return $this->hasMany('Joinbiz\Data\Models\Product\ProductGeo', 'product_id', 'product_id');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function quoteItems()
    {
        return $this->hasMany('Joinbiz\Data\Models\Product\QuoteItem', 'product_id', 'product_id');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function productAssocsByProductIdTo()
    {
        return $this->hasMany('Joinbiz\Data\Models\Product\ProductAssoc', 'product_id_to', 'product_id');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function productAssocs()
    {
        return $this->hasMany('Joinbiz\Data\Models\Product\ProductAssoc', 'product_id', 'product_id');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function productAttributes()
    {
        return $this->hasMany('Joinbiz\Data\Models\Product\ProductAttribute', 'product_id', 'product_id');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function productAverageCosts()
    {
        return $this->hasMany('Joinbiz\Data\Models\Product\ProductAverageCost', 'product_id', 'product_id');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasOne
     */
    public function productCalculatedInfo()
    {
        return $this->hasOne('Joinbiz\Data\Models\Product\ProductCalculatedInfo', 'product_id', 'product_id');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function custRequestItems()
    {
        return $this->hasMany('Joinbiz\Data\Models\Product\CustRequestItem', 'product_id', 'product_id');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function productCategoryMembers()
    {
        return $this->hasMany('Joinbiz\Data\Models\Product\ProductCategoryMember', 'product_id', 'product_id');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function productFeatureApplAttrs()
    {
        return $this->hasMany('Joinbiz\Data\Models\Product\ProductFeatureApplAttr', 'product_id', 'product_id');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function productConfigs()
    {
        return $this->hasMany('Joinbiz\Data\Models\Product\ProductConfig', 'product_id', 'product_id');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function cartAbandonedLines()
    {
        return $this->hasMany('Joinbiz\Data\Models\Product\CartAbandonedLine', 'product_id', 'product_id');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function productFeatureAppls()
    {
        return $this->hasMany('Joinbiz\Data\Models\Product\ProductFeatureAppl', 'product_id', 'product_id');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function productConfigStats()
    {
        return $this->hasMany('Joinbiz\Data\Models\Product\ProductConfigStats', 'product_id', 'product_id');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function productContents()
    {
        return $this->hasMany('Joinbiz\Data\Models\Product\ProductContent', 'product_id', 'product_id');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function productFacilityLocations()
    {
        return $this->hasMany('Joinbiz\Data\Models\Product\ProductFacilityLocation', 'product_id', 'product_id');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function productCostComponentCalcs()
    {
        return $this->hasMany('Joinbiz\Data\Models\Product\ProductCostComponentCalc', 'product_id', 'product_id');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function productFacilities()
    {
        return $this->hasMany('Joinbiz\Data\Models\Product\ProductFacility', 'product_id', 'product_id');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function productFacilityAssocs()
    {
        return $this->hasMany('Joinbiz\Data\Models\Product\ProductFacilityAssoc', 'product_id', 'product_id');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function uomTypeByAmountUomTypeId()
    {
        return $this->belongsTo('Joinbiz\Data\Models\Product\UomType', 'amount_uom_type_id', 'uom_type_id');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function userLoginByCreatedByUserLogin()
    {
        return $this->belongsTo('Joinbiz\Data\Models\Product\UserLogin', 'created_by_user_login', 'user_login_id');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function uomByDepthUomId()
    {
        return $this->belongsTo('Joinbiz\Data\Models\Product\Uom', 'depth_uom_id', 'uom_id');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function uomByDiameterUomId()
    {
        return $this->belongsTo('Joinbiz\Data\Models\Product\Uom', 'diameter_uom_id', 'uom_id');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function facility()
    {
        return $this->belongsTo('Joinbiz\Data\Models\Product\Facility', 'facility_id', 'facility_id');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function uomByHeightUomId()
    {
        return $this->belongsTo('Joinbiz\Data\Models\Product\Uom', 'height_uom_id', 'uom_id');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function inventoryItemType()
    {
        return $this->belongsTo('Joinbiz\Data\Models\Product\InventoryItemType', 'inventory_item_type_id', 'inventory_item_type_id');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function userLoginByLastModifiedByUserLogin()
    {
        return $this->belongsTo('Joinbiz\Data\Models\Product\UserLogin', 'last_modified_by_user_login', 'user_login_id');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function geoByOriginGeoId()
    {
        return $this->belongsTo('Joinbiz\Data\Models\Product\Geo', 'origin_geo_id', 'geo_id');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function productCategoryByPrimaryProductCategoryId()
    {
        return $this->belongsTo('Joinbiz\Data\Models\Product\ProductCategory', 'primary_product_category_id', 'product_category_id');
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
    public function enumerationByRatingTypeEnum()
    {
        return $this->belongsTo('Joinbiz\Data\Models\Product\Enumeration', 'rating_type_enum', 'enum_id');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function enumerationByRequirementMethodEnumId()
    {
        return $this->belongsTo('Joinbiz\Data\Models\Product\Enumeration', 'requirement_method_enum_id', 'enum_id');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function shipmentBoxTypeByDefaultShipmentBoxTypeId()
    {
        return $this->belongsTo('Joinbiz\Data\Models\Product\ShipmentBoxType', 'default_shipment_box_type_id', 'shipment_box_type_id');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function productType()
    {
        return $this->belongsTo('Joinbiz\Data\Models\Product\ProductType', 'product_type_id', 'product_type_id');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function enumerationByVirtualVariantMethodEnum()
    {
        return $this->belongsTo('Joinbiz\Data\Models\Product\Enumeration', 'virtual_variant_method_enum', 'enum_id');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function uomByWeightUomId()
    {
        return $this->belongsTo('Joinbiz\Data\Models\Product\Uom', 'weight_uom_id', 'uom_id');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function uomByWidthUomId()
    {
        return $this->belongsTo('Joinbiz\Data\Models\Product\Uom', 'width_uom_id', 'uom_id');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function shipmentPackageContentsBySubProductId()
    {
        return $this->hasMany('Joinbiz\Data\Models\Product\ShipmentPackageContent', 'sub_product_id', 'product_id');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function requirements()
    {
        return $this->hasMany('Joinbiz\Data\Models\Product\Requirement', 'product_id', 'product_id');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function goodIdentifications()
    {
        return $this->hasMany('Joinbiz\Data\Models\Product\GoodIdentification', 'product_id', 'product_id');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function shipmentItems()
    {
        return $this->hasMany('Joinbiz\Data\Models\Product\ShipmentItem', 'product_id', 'product_id');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function costComponents()
    {
        return $this->hasMany('Joinbiz\Data\Models\Product\CostComponent', 'product_id', 'product_id');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function inventoryItemTempRes()
    {
        return $this->hasMany('Joinbiz\Data\Models\Product\InventoryItemTempRes', 'product_id', 'product_id');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function invoiceItems()
    {
        return $this->hasMany('Joinbiz\Data\Models\Product\InvoiceItem', 'product_id', 'product_id');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function supplierProducts()
    {
        return $this->hasMany('Joinbiz\Data\Models\Product\SupplierProduct', 'product_id', 'product_id');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function agreementProductAppls()
    {
        return $this->hasMany('Joinbiz\Data\Models\Product\AgreementProductAppl', 'product_id', 'product_id');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function salesForecastDetails()
    {
        return $this->hasMany('Joinbiz\Data\Models\Product\SalesForecastDetail', 'product_id', 'product_id');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function mrpEvents()
    {
        return $this->hasMany('Joinbiz\Data\Models\Product\MrpEvent', 'product_id', 'product_id');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function reorderGuidelines()
    {
        return $this->hasMany('Joinbiz\Data\Models\Product\ReorderGuideline', 'product_id', 'product_id');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function productConfigProducts()
    {
        return $this->hasMany('Joinbiz\Data\Models\Product\ProductConfigProduct', 'product_id', 'product_id');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function shoppingListItems()
    {
        return $this->hasMany('Joinbiz\Data\Models\Product\ShoppingListItem', 'product_id', 'product_id');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function productGroupOrders()
    {
        return $this->hasMany('Joinbiz\Data\Models\Product\ProductGroupOrder', 'product_id', 'product_id');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function shipmentReceipts()
    {
        return $this->hasMany('Joinbiz\Data\Models\Product\ShipmentReceipt', 'product_id', 'product_id');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function orderSummaryEntries()
    {
        return $this->hasMany('Joinbiz\Data\Models\Product\OrderSummaryEntry', 'product_id', 'product_id');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function productSubscriptionResources()
    {
        return $this->hasMany('Joinbiz\Data\Models\Product\ProductSubscriptionResource', 'product_id', 'product_id');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function returnItems()
    {
        return $this->hasMany('Joinbiz\Data\Models\Product\ReturnItem', 'product_id', 'product_id');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function communicationEventProducts()
    {
        return $this->hasMany('Joinbiz\Data\Models\Product\CommunicationEventProduct', 'product_id', 'product_id');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function partyNeeds()
    {
        return $this->hasMany('Joinbiz\Data\Models\Product\PartyNeed', 'product_id', 'product_id');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function agreements()
    {
        return $this->hasMany('Joinbiz\Data\Models\Product\Agreement', 'product_id', 'product_id');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function workEffortGoodStandards()
    {
        return $this->hasMany('Joinbiz\Data\Models\Product\WorkEffortGoodStandard', 'product_id', 'product_id');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function vendorProducts()
    {
        return $this->hasMany('Joinbiz\Data\Models\Product\VendorProduct', 'product_id', 'product_id');
    }
}
