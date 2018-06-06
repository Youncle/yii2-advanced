<?php

namespace backend\models;

use Yii;

/**
 * This is the model class for table "departments".
 *
 * @property int $department_id
 * @property string $department_name
 * @property string $department_created_date
 * @property string $department_status
 * @property string $branches_branch_id
 */
class Departments extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'departments';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['department_created_date'], 'safe'],
            [['department_name', 'department_status'], 'string', 'max' => 45],
            [['branches_branch_id'], 'integer'],
            [['companies_company_id'],'integer'],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'department_id' => 'Department ID',
            'department_name' => 'Department Name',
            'department_created_date' => 'Department Created Date',
            'department_status' => 'Department Status',
            'branches_branch_id' => 'Branch Name',
            'companies_company_id' => 'Company Name',
        ];
    }

    public function getBranchesBranch()
    {
        return   $this->hasOne(Branches::class,['branch_id'=>'branches_branch_id' ]);

    }

    public function getCompaniesCompany()
    {
        return   $this->hasOne(Companies::class,['company_id'=>'companies_company_id' ]);

    }
}
