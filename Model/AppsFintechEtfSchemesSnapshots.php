<?php

namespace Apps\Fintech\Packages\Etf\Schemes\Model;

use System\Base\BaseModel;

class AppsFintechEtfSchemesSnapshots extends BaseModel
{
    public $id;

    public $snapshots;

    public $navs_chunks_ids;

    public $rolling_returns_ids;
}