<?php
namespace App\Test\Fixture;

use Cake\TestSuite\Fixture\TestFixture;

/**
 * OrderFixture
 *
 */
class OrderFixture extends TestFixture
{

    /**
     * Table name
     *
     * @var string
     */
    public $table = 'order';

    /**
     * Fields
     *
     * @var array
     */
    // @codingStandardsIgnoreStart
    public $fields = [
        'oid' => ['type' => 'integer', 'length' => 99, 'unsigned' => false, 'null' => false, 'default' => null, 'comment' => '', 'autoIncrement' => true, 'precision' => null],
        'payid' => ['type' => 'integer', 'length' => 99, 'unsigned' => false, 'null' => false, 'default' => null, 'comment' => '', 'precision' => null, 'autoIncrement' => null],
        'pid' => ['type' => 'integer', 'length' => 99, 'unsigned' => false, 'null' => false, 'default' => null, 'comment' => '', 'precision' => null, 'autoIncrement' => null],
        'uid' => ['type' => 'integer', 'length' => 99, 'unsigned' => false, 'null' => false, 'default' => null, 'comment' => '', 'precision' => null, 'autoIncrement' => null],
        'odate' => ['type' => 'date', 'length' => null, 'null' => false, 'default' => null, 'comment' => '', 'precision' => null],
        'otime' => ['type' => 'time', 'length' => null, 'null' => false, 'default' => null, 'comment' => '', 'precision' => null],
        'oprice' => ['type' => 'integer', 'length' => 99, 'unsigned' => false, 'null' => false, 'default' => null, 'comment' => '', 'precision' => null, 'autoIncrement' => null],
        '_indexes' => [
            'payfk' => ['type' => 'index', 'columns' => ['payid'], 'length' => []],
            'pfk' => ['type' => 'index', 'columns' => ['pid'], 'length' => []],
            'ufk' => ['type' => 'index', 'columns' => ['uid'], 'length' => []],
        ],
        '_constraints' => [
            'primary' => ['type' => 'primary', 'columns' => ['oid'], 'length' => []],
            'payfk' => ['type' => 'foreign', 'columns' => ['payid'], 'references' => ['payment', 'payid'], 'update' => 'restrict', 'delete' => 'restrict', 'length' => []],
            'pfk' => ['type' => 'foreign', 'columns' => ['pid'], 'references' => ['product', 'pid'], 'update' => 'restrict', 'delete' => 'restrict', 'length' => []],
            'ufk' => ['type' => 'foreign', 'columns' => ['uid'], 'references' => ['user', 'uid'], 'update' => 'restrict', 'delete' => 'restrict', 'length' => []],
        ],
        '_options' => [
            'engine' => 'InnoDB',
            'collation' => 'utf8mb4_general_ci'
        ],
    ];
    // @codingStandardsIgnoreEnd

    /**
     * Init method
     *
     * @return void
     */
    public function init()
    {
        $this->records = [
            [
                'oid' => 1,
                'payid' => 1,
                'pid' => 1,
                'uid' => 1,
                'odate' => '2018-10-07',
                'otime' => '16:19:06',
                'oprice' => 1
            ],
        ];
        parent::init();
    }
}
