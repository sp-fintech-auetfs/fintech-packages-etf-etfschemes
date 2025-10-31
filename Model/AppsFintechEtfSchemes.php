<?php

namespace Apps\Fintech\Packages\Etf\Schemes\Model;

use Apps\Fintech\Packages\Etf\Amcs\Model\AppsFintechEtfAmcs;
use Apps\Fintech\Packages\Etf\Categories\Model\AppsFintechEtfCategories;
use Apps\Fintech\Packages\Etf\Schemes\Model\AppsFintechEtfSchemesDetails;
use Apps\Fintech\Packages\Etf\Schemes\Model\AppsFintechEtfSchemesNavs;
use Apps\Fintech\Packages\Etf\Schemes\Model\AppsFintechEtfSchemesNavsChunks;
use Apps\Fintech\Packages\Etf\Schemes\Model\AppsFintechEtfSchemesNavsRollingReturns;
use System\Base\BaseModel;

class AppsFintechEtfSchemes extends BaseModel
{
    protected $modelRelations = [];

    public $id;

    public $symbol;

    public $name;

    public $scheme_name;

    public $scheme_type;

    public $expense_ratio_type;

    public $management_type;

    public $plan_type;

    public $dividend_frequency;

    public $category_id;

    public $amc_id;

    public $closed;

    public $closed_date;

    public $minimum_amount;

    public $launch_date;

    public $start_date;

    public $crisil_rating;

    public $scheme_md5;

    public $navs_last_updated;

    public $day_trajectory;

    public $day_cagr;

    public $year_cagr;

    public $two_year_cagr;

    public $three_year_cagr;

    public $five_year_cagr;

    public $seven_year_cagr;

    public $ten_year_cagr;

    public $fifteen_year_cagr;

    public $twenty_year_cagr;

    public $twenty_five_year_cagr;

    public $thirty_year_cagr;

    public $year_rr;

    public $two_year_rr;

    public $three_year_rr;

    public $five_year_rr;

    public $seven_year_rr;

    public $ten_year_rr;

    public $fifteen_year_rr;

    public $twenty_year_rr;

    public $twenty_five_year_rr;

    public $thirty_year_rr;

    public $latest_nav;

    public $nav_multiplier;

    public function initialize()
    {
        // $this->modelRelations['details']['relationObj'] = $this->hasOne(
        //     'id',
        //     AppsFintechEtfSchemesDetails::class,
        //     'id',
        //     [
        //         'alias'         => 'details'
        //     ]
        // );

        $this->modelRelations['navs']['relationObj'] = $this->hasOne(
            'id',
            AppsFintechEtfSchemesNavs::class,
            'id',
            [
                'alias'         => 'navs'
            ]
        );

        $this->modelRelations['navs_chunks']['relationObj'] = $this->hasOne(
            'id',
            AppsFintechEtfSchemesNavsChunks::class,
            'id',
            [
                'alias'         => 'navs_chunks'
            ]
        );

        $this->modelRelations['rolling_returns']['relationObj'] = $this->hasOne(
            'id',
            AppsFintechEtfSchemesNavsRollingReturns::class,
            'id',
            [
                'alias'         => 'rolling_returns'
            ]
        );

        $this->modelRelations['category']['relationObj'] = $this->hasOne(
            'category_id',
            AppsFintechEtfCategories::class,
            'id',
            [
                'alias'         => 'category'
            ]
        );

        $this->modelRelations['amc']['relationObj'] = $this->hasOne(
            'amc_id',
            AppsFintechEtfAmcs::class,
            'id',
            [
                'alias'         => 'amc'
            ]
        );

        parent::initialize();
    }

    public function getModelRelations()
    {
        if (count($this->modelRelations) === 0) {
            $this->initialize();
        }

        return $this->modelRelations;
    }
}