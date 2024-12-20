<?php

namespace Joinbiz\Data\Models\Product;

use Illuminate\Database\Eloquent\Model;

/**
 * @property string $product_store_id
 * @property string $fin_account_type_id
 * @property string $purchase_survey_id
 * @property string $replenish_method_enum_id
 * @property string $require_pin_code
 * @property string $validate_g_c_fin_acct
 * @property float $account_code_length
 * @property float $pin_code_length
 * @property float $account_valid_days
 * @property float $auth_valid_days
 * @property string $purch_survey_send_to
 * @property string $purch_survey_copy_me
 * @property string $allow_auth_to_negative
 * @property float $min_balance
 * @property float $replenish_threshold
 * @property string $last_updated_stamp
 * @property string $last_updated_tx_stamp
 * @property string $created_stamp
 * @property string $created_tx_stamp
 * @property Enumeration $enumerationByReplenishMethodEnumId
 * @property FinAccountType $finAccountType
 * @property ProductStore $productStore
 * @property Survey $surveyByPurchaseSurveyId
 */
class ProductStoreFinActSetting extends Model
{
    const CREATED_AT = 'created_stamp';
    const UPDATED_AT = 'last_updated_stamp';

    /**
     * The table associated with the model.
     * 
     * @var string
     */
    protected $table = 'product_store_fin_act_setting';

    /**
     * @var array
     */
    protected $fillable = ['purchase_survey_id', 'replenish_method_enum_id', 'require_pin_code', 'validate_g_c_fin_acct', 'account_code_length', 'pin_code_length', 'account_valid_days', 'auth_valid_days', 'purch_survey_send_to', 'purch_survey_copy_me', 'allow_auth_to_negative', 'min_balance', 'replenish_threshold', 'last_updated_stamp', 'last_updated_tx_stamp', 'created_stamp', 'created_tx_stamp'];

    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function enumerationByReplenishMethodEnumId()
    {
        return $this->belongsTo('Joinbiz\Data\Models\Common\Enumeration', 'replenish_method_enum_id', 'enum_id');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function finAccountType()
    {
        return $this->belongsTo('Joinbiz\Data\Models\Accounting\FinAccountType', 'fin_account_type_id', 'fin_account_type_id');
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
    public function surveyByPurchaseSurveyId()
    {
        return $this->belongsTo('\Survey', 'purchase_survey_id', 'survey_id');
    }
}
