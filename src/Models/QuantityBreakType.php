<?php

namespace Joinbiz\Data\Models\Product;

use Illuminate\Database\Eloquent\Model;

/**
 * @property string $quantity_break_type_id
 * @property string $description
 * @property string $last_updated_stamp
 * @property string $last_updated_tx_stamp
 * @property string $created_stamp
 * @property string $created_tx_stamp
 * @property QuantityBreak[] $quantityBreaks
 */
class QuantityBreakType extends Model
{
    const CREATED_AT = 'created_stamp';
    const UPDATED_AT = 'last_updated_stamp';

    /**
     * The table associated with the model.
     *
     * @var string
     */
    protected $table = 'quantity_break_type';

    /**
     * The primary key for the model.
     *
     * @var string
     */
    protected $primaryKey = 'quantity_break_type_id';

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
    protected $fillable = ['description', 'last_updated_stamp', 'last_updated_tx_stamp', 'created_stamp', 'created_tx_stamp'];

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function quantityBreaks()
    {
        return $this->hasMany('Joinbiz\Data\Models\Product\QuantityBreak', 'quantity_break_type_id', 'quantity_break_type_id');
    }
}
