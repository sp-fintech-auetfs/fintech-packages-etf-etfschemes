<?php

namespace Apps\Fintech\Packages\Etf\Schemes\Install;

use Apps\Fintech\Packages\Etf\Schemes\Install\Schema\EtfSchemes;
use Apps\Fintech\Packages\Etf\Schemes\Install\Schema\EtfSchemesAll;
use Apps\Fintech\Packages\Etf\Schemes\Install\Schema\EtfSchemesCustom;
use Apps\Fintech\Packages\Etf\Schemes\Install\Schema\EtfSchemesCustomNavs;
use Apps\Fintech\Packages\Etf\Schemes\Install\Schema\EtfSchemesCustomNavsChunks;
use Apps\Fintech\Packages\Etf\Schemes\Install\Schema\EtfSchemesCustomNavsRollingReturns;
use Apps\Fintech\Packages\Etf\Schemes\Install\Schema\EtfSchemesNavs;
use Apps\Fintech\Packages\Etf\Schemes\Install\Schema\EtfSchemesNavsChunks;
use Apps\Fintech\Packages\Etf\Schemes\Install\Schema\EtfSchemesNavsRollingReturns;
use Apps\Fintech\Packages\Etf\Schemes\Install\Schema\EtfSchemesSnapshots;
use Apps\Fintech\Packages\Etf\Schemes\Install\Schema\EtfSchemesSnapshotsNavs;
use Apps\Fintech\Packages\Etf\Schemes\Install\Schema\EtfSchemesSnapshotsNavsChunks;
use Apps\Fintech\Packages\Etf\Schemes\Install\Schema\EtfSchemesSnapshotsNavsRollingReturns;
use Apps\Fintech\Packages\Etf\Schemes\Install\Schema\EtfSchemesWatchlists;
use Apps\Fintech\Packages\Etf\Schemes\Model\AppsFintechEtfSchemes;
use Apps\Fintech\Packages\Etf\Schemes\Model\AppsFintechEtfSchemesAll;
use Apps\Fintech\Packages\Etf\Schemes\Model\AppsFintechEtfSchemesCustom;
use Apps\Fintech\Packages\Etf\Schemes\Model\AppsFintechEtfSchemesCustomNavs;
use Apps\Fintech\Packages\Etf\Schemes\Model\AppsFintechEtfSchemesCustomNavsChunks;
use Apps\Fintech\Packages\Etf\Schemes\Model\AppsFintechEtfSchemesCustomNavsRollingReturns;
use Apps\Fintech\Packages\Etf\Schemes\Model\AppsFintechEtfSchemesNavs;
use Apps\Fintech\Packages\Etf\Schemes\Model\AppsFintechEtfSchemesNavsChunks;
use Apps\Fintech\Packages\Etf\Schemes\Model\AppsFintechEtfSchemesNavsRollingReturns;
use Apps\Fintech\Packages\Etf\Schemes\Model\AppsFintechEtfSchemesSnapshots;
use Apps\Fintech\Packages\Etf\Schemes\Model\AppsFintechEtfSchemesSnapshotsNavs;
use Apps\Fintech\Packages\Etf\Schemes\Model\AppsFintechEtfSchemesSnapshotsNavsChunks;
use Apps\Fintech\Packages\Etf\Schemes\Model\AppsFintechEtfSchemesSnapshotsNavsRollingReturns;
use Apps\Fintech\Packages\Etf\Schemes\Model\AppsFintechEtfSchemesWatchlists;
use System\Base\BasePackage;
use System\Base\Providers\ModulesServiceProvider\DbInstaller;

class Install extends BasePackage
{
    protected $databases;

    protected $dbInstaller;

    public function init()
    {
        $this->databases =
            [
                'apps_fintech_etf_schemes'  => [
                    'schema'        => new EtfSchemes,
                    'model'         => new AppsFintechEtfSchemes,
                    'configParams'  =>
                        [
                            'min_index_chars' => 6
                        ]
                ],
                'apps_fintech_etf_schemes_all'  => [
                    'schema'        => new EtfSchemesAll,
                    'model'         => new AppsFintechEtfSchemesAll,
                    'configParams'  =>
                        [
                            'min_index_chars' => 6
                        ]
                ],
                'apps_fintech_etf_schemes_custom'  => [
                    'schema'        => new EtfSchemesCustom,
                    'model'         => new AppsFintechEtfSchemesCustom,
                    'configParams'  =>
                        [
                            'min_index_chars' => 6
                        ]
                ],
                'apps_fintech_etf_schemes_navs'  => [
                    'schema'        => new EtfSchemesNavs,
                    'model'         => new AppsFintechEtfSchemesNavs,
                ],
                'apps_fintech_etf_schemes_navs_chunks'  => [
                    'schema'        => new EtfSchemesNavsChunks,
                    'model'         => new AppsFintechEtfSchemesNavsChunks,
                ],
                'apps_fintech_etf_schemes_navs_rolling_returns'  => [
                    'schema'        => new EtfSchemesNavsRollingReturns,
                    'model'         => new AppsFintechEtfSchemesNavsRollingReturns,
                ],
                'apps_fintech_etf_schemes_custom_navs'  => [
                    'schema'        => new EtfSchemesCustomNavs,
                    'model'         => new AppsFintechEtfSchemesCustomNavs,
                ],
                'apps_fintech_etf_schemes_custom_navs_chunks'  => [
                    'schema'        => new EtfSchemesCustomNavsChunks,
                    'model'         => new AppsFintechEtfSchemesCustomNavsChunks,
                ],
                'apps_fintech_etf_schemes_custom_navs_rolling_returns'  => [
                    'schema'        => new EtfSchemesCustomNavsRollingReturns,
                    'model'         => new AppsFintechEtfSchemesCustomNavsRollingReturns,
                ],
                'apps_fintech_etf_schemes_snapshots'  => [
                    'schema'        => new EtfSchemesSnapshots,
                    'model'         => new AppsFintechEtfSchemesSnapshots
                ],
                // 'apps_fintech_etf_schemes_snapshots_navs'  => [
                //     'schema'        => new EtfSchemesSnapshotsNavs,
                //     'model'         => new AppsFintechEtfSchemesSnapshotsNavs,
                // ],
                'apps_fintech_etf_schemes_snapshots_navs_chunks'  => [
                    'schema'        => new EtfSchemesSnapshotsNavsChunks,
                    'model'         => new AppsFintechEtfSchemesSnapshotsNavsChunks,
                ],
                'apps_fintech_etf_schemes_snapshots_navs_rolling_returns'  => [
                    'schema'        => new EtfSchemesSnapshotsNavsRollingReturns,
                    'model'         => new AppsFintechEtfSchemesSnapshotsNavsRollingReturns,
                ],
                // 'apps_fintech_etf_schemes_details'  => [
                //     'schema'        => new EtfSchemesDetails,
                //     'model'         => new AppsFintechEtfSchemesDetails,
                //     'configParams'  =>
                //         [
                //             'min_index_chars' => 3
                //         ]
                // ]
                'apps_fintech_etf_schemes_watchlists'  => [
                    'schema'        => new EtfSchemesWatchlists,
                    'model'         => new AppsFintechEtfSchemesWatchlists,
                ],
            ];

        $this->dbInstaller = new DbInstaller;

        return $this;
    }

    public function install()
    {
        $this->preInstall();

        $this->installDb();

        $this->postInstall();

        return true;
    }

    protected function preInstall()
    {
        return true;
    }

    public function installDb()
    {
        $this->dbInstaller->installDb($this->databases);

        return true;
    }

    public function postInstall()
    {
        //Do anything after installation.
        return true;
    }

    public function truncate()
    {
        $this->dbInstaller->truncate($this->databases);
    }

    public function uninstall($remove = false)
    {
        if ($remove) {
            //Check Relationship
            //Drop Table(s)
            $this->dbInstaller->uninstallDb($this->databases);
        }

        return true;
    }
}