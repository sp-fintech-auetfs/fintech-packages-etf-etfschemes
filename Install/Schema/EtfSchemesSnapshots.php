<?php

namespace Apps\Fintech\Packages\Etf\Schemes\Install\Schema;

use Phalcon\Db\Column;
use Phalcon\Db\Index;

class EtfSchemesSnapshots
{
    public function columns()
    {
        return
        [
           'columns' => [
                new Column(
                    'id',
                    [
                        'type'          => Column::TYPE_INTEGER,
                        'notNull'       => true,
                        'autoIncrement' => true,
                        'primary'       => true,
                    ]
                ),
                new Column(
                    'snapshots',
                    [
                        'type'          => Column::TYPE_JSON,
                        'notNull'       => true,
                    ]
                ),
                new Column(
                    'navs_chunks_ids',
                    [
                        'type'          => Column::TYPE_JSON,
                        'notNull'       => true,
                    ]
                ),
                new Column(
                    'rolling_returns_ids',
                    [
                        'type'          => Column::TYPE_JSON,
                        'notNull'       => true,
                    ]
                )
            ],
            'options' => [
                'TABLE_COLLATION' => 'utf8mb4_general_ci'
            ]
        ];
    }
}
