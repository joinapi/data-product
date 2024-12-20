<?php

namespace Joinbiz\Data\Models\Product;

use Illuminate\Database\Eloquent\Model;

/**
 * @property string $product_store_survey_id
 * @property string $product_store_id
 * @property string $survey_appl_type_id
 * @property string $survey_id
 * @property string $group_name
 * @property string $product_id
 * @property string $product_category_id
 * @property string $from_date
 * @property string $thru_date
 * @property string $survey_template
 * @property string $result_template
 * @property float $sequence_num
 * @property string $last_updated_stamp
 * @property string $last_updated_tx_stamp
 * @property string $created_stamp
 * @property string $created_tx_stamp
 * @property ProductStore $productStore
 * @property SurveyApplType $surveyApplType
 * @property Survey $survey
 * @property WorkEffortSurveyAppl[] $workEffortSurveyApplsBySurveyId
 */
class ProductStoreSurveyAppl extends Model
{
    const CREATED_AT = 'created_stamp';
    const UPDATED_AT = 'last_updated_stamp';

    /**
     * The table associated with the model.
     * 
     * @var string
     */
    protected $table = 'product_store_survey_appl';

    /**
     * The primary key for the model.
     * 
     * @var string
     */
    protected $primaryKey = 'product_store_survey_id';

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
    protected $fillable = ['product_store_id', 'survey_appl_type_id', 'survey_id', 'group_name', 'product_id', 'product_category_id', 'from_date', 'thru_date', 'survey_template', 'result_template', 'sequence_num', 'last_updated_stamp', 'last_updated_tx_stamp', 'created_stamp', 'created_tx_stamp'];

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
    public function surveyApplType()
    {
        return $this->belongsTo('\SurveyApplType', 'survey_appl_type_id', 'survey_appl_type_id');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function survey()
    {
        return $this->belongsTo('\Survey', 'survey_id', 'survey_id');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function workEffortSurveyApplsBySurveyId()
    {
        return $this->hasMany('Joinbiz\Data\Models\Workeffort\WorkEffortSurveyAppl', 'survey_id', 'product_store_survey_id');
    }
}
