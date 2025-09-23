<?php

namespace Apps\Fintech\Packages\Etf\Schemes\Model;

use System\Base\BaseModel;

class AppsFintechEtfSchemesAll extends BaseModel
{
    public $id;

    public $symbol;

    public $name;

    public $scheme_name;

    public $scheme_type;

    public $expense_ratio_type;

    public $management_type;

    public $plan_type;

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

    public $latest_nav;
}