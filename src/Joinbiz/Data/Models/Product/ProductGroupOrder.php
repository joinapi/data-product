<?php

namespace Joinbiz\Data\Models\Product;

use Illuminate\Database\Eloquent\Model;

/**
 * @property string $group_order_id
 * @property string $product_id
 * @property string $status_id
 * @property string $job_id
 * @property string $from_date
 * @property string $thru_date
 * @property float $req_order_qty
 * @property float $sold_order_qty
 * @property string $last_updated_stamp
 * @property string $last_updated_tx_stamp
 * @property string $created_stamp
 * @property string $created_tx_stamp
 * @property OrderItemGroupOrder[] $orderItemGroupOrders
 * @property JobSandbox $jobSandbox
 * @property StatusItem $statusItem
 * @property Product $product
 */
class ProductGroupOrder extends Model
{
    const CREATED_AT = 'created_stamp';
    const UPDATED_AT = 'last_updated_stamp';

    /**
     * The table associated with the model.
     * 
     * @var string
     */
    protected $table = 'product_group_order';

    /**
     * The primary key for the model.
     * 
     * @var string
     */
    protected $primaryKey = 'group_order_id';

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
    protected $fillable = ['product_id', 'status_id', 'job_id', 'from_date', 'thru_date', 'req_order_qty', 'sold_order_qty', 'last_updated_stamp', 'last_updated_tx_stamp', 'created_stamp', 'created_tx_stamp'];

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function orderItemGroupOrders()
    {
        return $this->hasMany('Joinbiz\Data\Models\Order\OrderItemGroupOrder', 'group_order_id', 'group_order_id');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function jobSandbox()
    {
        return $this->belongsTo('Joinbiz\Data\Models\Service\JobSandbox', 'job_id', 'job_id');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function statusItem()
    {
        return $this->belongsTo('Joinbiz\Data\Models\Common\StatusItem', 'status_id', 'status_id');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function product()
    {
        return $this->belongsTo('Joinbiz\Data\Models\Product\Product', 'product_id', 'product_id');
    }
}
