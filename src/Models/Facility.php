<?php

namespace Joinbiz\Data\Models\Product;

use Illuminate\Database\Eloquent\Model;

/**
 * @property string $facility_id
 * @property string $facility_type_id
 * @property string $parent_facility_id
 * @property string $owner_party_id
 * @property string $default_inventory_item_type_id
 * @property string $primary_facility_group_id
 * @property string $facility_size_uom_id
 * @property string $default_dimension_uom_id
 * @property string $default_weight_uom_id
 * @property string $geo_point_id
 * @property string $facility_name
 * @property float $square_footage
 * @property float $facility_size
 * @property string $product_store_id
 * @property float $default_days_to_ship
 * @property string $opened_date
 * @property string $closed_date
 * @property string $description
 * @property float $facility_level
 * @property string $last_updated_stamp
 * @property string $last_updated_tx_stamp
 * @property string $created_stamp
 * @property string $created_tx_stamp
 * @property FacilityCarrierShipment[] $facilityCarrierShipments
 * @property OrderHeader[] $orderHeadersByOriginFacilityId
 * @property Container[] $containers
 * @property InventoryItem[] $inventoryItems
 * @property FixedAsset[] $fixedAssetsByLocatedAtFacilityId
 * @property FacilityContactMech[] $facilityContactMeches
 * @property ProdCatalogInvFacility[] $prodCatalogInvFacilities
 * @property ProductAverageCost[] $productAverageCosts
 * @property WorkEffort[] $workEfforts
 * @property FacilityContactMechPurpose[] $facilityContactMechPurposes
 * @property ProductFacility[] $productFacilities
 * @property ProductFacilityAssoc[] $productFacilityAssocs
 * @property ProductFacilityAssoc[] $productFacilityAssocsByFacilityIdTo
 * @property Product[] $products
 * @property FacilityContent[] $facilityContents
 * @property FacilityGroupMember[] $facilityGroupMembers
 * @property Uom $uomByDefaultDimensionUomId
 * @property Uom $uomByDefaultWeightUomId
 * @property InventoryItemType $inventoryItemTypeByDefaultInventoryItemTypeId
 * @property FacilityType $facilityType
 * @property GeoPoint $geoPoint
 * @property Party $partyByOwnerPartyId
 * @property Facility $facilityByParentFacilityId
 * @property FacilityGroup $facilityGroupByPrimaryFacilityGroupId
 * @property Uom $uomByFacilitySizeUomId
 * @property Requirement[] $requirements
 * @property Delivery[] $deliveriesByDestFacilityId
 * @property Delivery[] $deliveriesByOriginFacilityId
 * @property ShipmentRouteSegment[] $shipmentRouteSegmentsByDestFacilityId
 * @property ShipmentRouteSegment[] $shipmentRouteSegmentsByOriginFacilityId
 * @property FacilityAttribute[] $facilityAttributes
 * @property FacilityLocation[] $facilityLocations
 * @property InventoryTransfer[] $inventoryTransfers
 * @property InventoryTransfer[] $inventoryTransfersByFacilityIdTo
 * @property FacilityParty[] $facilityParties
 * @property WorkEffortPartyAssignment[] $workEffortPartyAssignments
 * @property FacilityCalendar[] $facilityCalendars
 * @property AgreementFacilityAppl[] $agreementFacilityAppls
 * @property ProductStore[] $productStoresByInventoryFacilityId
 * @property MrpEvent[] $mrpEvents
 * @property ReorderGuideline[] $reorderGuidelines
 * @property OrderSummaryEntry[] $orderSummaryEntries
 * @property Shipment[] $shipmentsByDestinationFacilityId
 * @property Shipment[] $shipmentsByOriginFacilityId
 * @property ReturnHeader[] $returnHeadersByDestinationFacilityId
 * @property Picklist[] $picklists
 * @property OrderItemShipGroup[] $orderItemShipGroups
 * @property ProductStoreFacility[] $productStoreFacilities
 */
class Facility extends Model
{
    const CREATED_AT = 'created_stamp';
    const UPDATED_AT = 'last_updated_stamp';

    /**
     * The table associated with the model.
     *
     * @var string
     */
    protected $table = 'facility';

    /**
     * The primary key for the model.
     *
     * @var string
     */
    protected $primaryKey = 'facility_id';

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
    protected $fillable = ['facility_type_id', 'parent_facility_id', 'owner_party_id', 'default_inventory_item_type_id', 'primary_facility_group_id', 'facility_size_uom_id', 'default_dimension_uom_id', 'default_weight_uom_id', 'geo_point_id', 'facility_name', 'square_footage', 'facility_size', 'product_store_id', 'default_days_to_ship', 'opened_date', 'closed_date', 'description', 'facility_level', 'last_updated_stamp', 'last_updated_tx_stamp', 'created_stamp', 'created_tx_stamp'];

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function facilityCarrierShipments()
    {
        return $this->hasMany('Joinbiz\Data\Models\Product\FacilityCarrierShipment', 'facility_id', 'facility_id');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function orderHeadersByOriginFacilityId()
    {
        return $this->hasMany('Joinbiz\Data\Models\Product\OrderHeader', 'origin_facility_id', 'facility_id');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function containers()
    {
        return $this->hasMany('Joinbiz\Data\Models\Product\Container', 'facility_id', 'facility_id');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function inventoryItems()
    {
        return $this->hasMany('Joinbiz\Data\Models\Product\InventoryItem', 'facility_id', 'facility_id');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function fixedAssetsByLocatedAtFacilityId()
    {
        return $this->hasMany('Joinbiz\Data\Models\Product\FixedAsset', 'located_at_facility_id', 'facility_id');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function facilityContactMeches()
    {
        return $this->hasMany('Joinbiz\Data\Models\Product\FacilityContactMech', 'facility_id', 'facility_id');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function prodCatalogInvFacilities()
    {
        return $this->hasMany('Joinbiz\Data\Models\Product\ProdCatalogInvFacility', 'facility_id', 'facility_id');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function productAverageCosts()
    {
        return $this->hasMany('Joinbiz\Data\Models\Product\ProductAverageCost', 'facility_id', 'facility_id');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function workEfforts()
    {
        return $this->hasMany('Joinbiz\Data\Models\Product\WorkEffort', 'facility_id', 'facility_id');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function facilityContactMechPurposes()
    {
        return $this->hasMany('Joinbiz\Data\Models\Product\FacilityContactMechPurpose', 'facility_id', 'facility_id');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function productFacilities()
    {
        return $this->hasMany('Joinbiz\Data\Models\Product\ProductFacility', 'facility_id', 'facility_id');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function productFacilityAssocs()
    {
        return $this->hasMany('Joinbiz\Data\Models\Product\ProductFacilityAssoc', 'facility_id', 'facility_id');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function productFacilityAssocsByFacilityIdTo()
    {
        return $this->hasMany('Joinbiz\Data\Models\Product\ProductFacilityAssoc', 'facility_id_to', 'facility_id');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function products()
    {
        return $this->hasMany('Joinbiz\Data\Models\Product\Product', 'facility_id', 'facility_id');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function facilityContents()
    {
        return $this->hasMany('Joinbiz\Data\Models\Product\FacilityContent', 'facility_id', 'facility_id');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function facilityGroupMembers()
    {
        return $this->hasMany('Joinbiz\Data\Models\Product\FacilityGroupMember', 'facility_id', 'facility_id');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function uomByDefaultDimensionUomId()
    {
        return $this->belongsTo('Joinbiz\Data\Models\Product\Uom', 'default_dimension_uom_id', 'uom_id');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function uomByDefaultWeightUomId()
    {
        return $this->belongsTo('Joinbiz\Data\Models\Product\Uom', 'default_weight_uom_id', 'uom_id');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function inventoryItemTypeByDefaultInventoryItemTypeId()
    {
        return $this->belongsTo('Joinbiz\Data\Models\Product\InventoryItemType', 'default_inventory_item_type_id', 'inventory_item_type_id');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function facilityType()
    {
        return $this->belongsTo('Joinbiz\Data\Models\Product\FacilityType', 'facility_type_id', 'facility_type_id');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function geoPoint()
    {
        return $this->belongsTo('Joinbiz\Data\Models\Product\GeoPoint', 'geo_point_id', 'geo_point_id');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function partyByOwnerPartyId()
    {
        return $this->belongsTo('Joinbiz\Data\Models\Product\Party', 'owner_party_id', 'party_id');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function facilityByParentFacilityId()
    {
        return $this->belongsTo('Joinbiz\Data\Models\Product\Facility', 'parent_facility_id', 'facility_id');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function facilityGroupByPrimaryFacilityGroupId()
    {
        return $this->belongsTo('Joinbiz\Data\Models\Product\FacilityGroup', 'primary_facility_group_id', 'facility_group_id');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function uomByFacilitySizeUomId()
    {
        return $this->belongsTo('Joinbiz\Data\Models\Product\Uom', 'facility_size_uom_id', 'uom_id');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function requirements()
    {
        return $this->hasMany('Joinbiz\Data\Models\Product\Requirement', 'facility_id', 'facility_id');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function deliveriesByDestFacilityId()
    {
        return $this->hasMany('Joinbiz\Data\Models\Product\Delivery', 'dest_facility_id', 'facility_id');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function deliveriesByOriginFacilityId()
    {
        return $this->hasMany('Joinbiz\Data\Models\Product\Delivery', 'origin_facility_id', 'facility_id');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function shipmentRouteSegmentsByDestFacilityId()
    {
        return $this->hasMany('Joinbiz\Data\Models\Product\ShipmentRouteSegment', 'dest_facility_id', 'facility_id');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function shipmentRouteSegmentsByOriginFacilityId()
    {
        return $this->hasMany('Joinbiz\Data\Models\Product\ShipmentRouteSegment', 'origin_facility_id', 'facility_id');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function facilityAttributes()
    {
        return $this->hasMany('Joinbiz\Data\Models\Product\FacilityAttribute', 'facility_id', 'facility_id');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function facilityLocations()
    {
        return $this->hasMany('Joinbiz\Data\Models\Product\FacilityLocation', 'facility_id', 'facility_id');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function inventoryTransfers()
    {
        return $this->hasMany('Joinbiz\Data\Models\Product\InventoryTransfer', 'facility_id', 'facility_id');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function inventoryTransfersByFacilityIdTo()
    {
        return $this->hasMany('Joinbiz\Data\Models\Product\InventoryTransfer', 'facility_id_to', 'facility_id');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function facilityParties()
    {
        return $this->hasMany('Joinbiz\Data\Models\Product\FacilityParty', 'facility_id', 'facility_id');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function workEffortPartyAssignments()
    {
        return $this->hasMany('Joinbiz\Data\Models\Product\WorkEffortPartyAssignment', 'facility_id', 'facility_id');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function facilityCalendars()
    {
        return $this->hasMany('Joinbiz\Data\Models\Product\FacilityCalendar', 'facility_id', 'facility_id');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function agreementFacilityAppls()
    {
        return $this->hasMany('Joinbiz\Data\Models\Product\AgreementFacilityAppl', 'facility_id', 'facility_id');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function productStoresByInventoryFacilityId()
    {
        return $this->hasMany('Joinbiz\Data\Models\Product\ProductStore', 'inventory_facility_id', 'facility_id');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function mrpEvents()
    {
        return $this->hasMany('Joinbiz\Data\Models\Product\MrpEvent', 'facility_id', 'facility_id');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function reorderGuidelines()
    {
        return $this->hasMany('Joinbiz\Data\Models\Product\ReorderGuideline', 'facility_id', 'facility_id');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function orderSummaryEntries()
    {
        return $this->hasMany('Joinbiz\Data\Models\Product\OrderSummaryEntry', 'facility_id', 'facility_id');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function shipmentsByDestinationFacilityId()
    {
        return $this->hasMany('Joinbiz\Data\Models\Product\Shipment', 'destination_facility_id', 'facility_id');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function shipmentsByOriginFacilityId()
    {
        return $this->hasMany('Joinbiz\Data\Models\Product\Shipment', 'origin_facility_id', 'facility_id');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function returnHeadersByDestinationFacilityId()
    {
        return $this->hasMany('Joinbiz\Data\Models\Product\ReturnHeader', 'destination_facility_id', 'facility_id');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function picklists()
    {
        return $this->hasMany('Joinbiz\Data\Models\Product\Picklist', 'facility_id', 'facility_id');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function orderItemShipGroups()
    {
        return $this->hasMany('Joinbiz\Data\Models\Product\OrderItemShipGroup', 'facility_id', 'facility_id');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function productStoreFacilities()
    {
        return $this->hasMany('Joinbiz\Data\Models\Product\ProductStoreFacility', 'facility_id', 'facility_id');
    }
}
