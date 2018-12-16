<?php
namespace App\Test\Fixture;

use Cake\TestSuite\Fixture\TestFixture;

/**
 * OrdersFixture
 *
 */
class OrdersFixture extends TestFixture
{

    /**
     * Fields
     *
     * @var array
     */
    // @codingStandardsIgnoreStart
    public $fields = [
        'oid' => ['type' => 'integer', 'length' => 11, 'unsigned' => false, 'null' => false, 'default' => null, 'comment' => '', 'autoIncrement' => true, 'precision' => null],
        'payid' => ['type' => 'integer', 'length' => 11, 'unsigned' => false, 'null' => false, 'default' => null, 'comment' => '', 'precision' => null, 'autoIncrement' => null],
        'pid' => ['type' => 'integer', 'length' => 11, 'unsigned' => false, 'null' => false, 'default' => null, 'comment' => '', 'precision' => null, 'autoIncrement' => null],
        'uid' => ['type' => 'integer', 'length' => 11, 'unsigned' => false, 'null' => false, 'default' => null, 'comment' => '', 'precision' => null, 'autoIncrement' => null],
        'odate' => ['type' => 'datetime', 'length' => null, 'null' => false, 'default' => null, 'comment' => '', 'precision' => null],
        'otime' => ['type' => 'time', 'length' => null, 'null' => false, 'default' => null, 'comment' => '', 'precision' => null],
        'oprice' => ['type' => 'integer', 'length' => 99, 'unsigned' => false, 'null' => false, 'default' => null, 'comment' => '', 'precision' => null, 'autoIncrement' => null],
        'oquantity' => ['type' => 'integer', 'length' => 99, 'unsigned' => false, 'null' => false, 'default' => null, 'comment' => '', 'precision' => null, 'autoIncrement' => null],
        'oaddress' => ['type' => 'string', 'length' => 255, 'null' => false, 'default' => null, 'collate' => 'utf8mb4_general_ci', 'comment' => '', 'precision' => null, 'fixed' => null],
        'ocrust' => ['type' => 'string', 'length' => 255, 'null' => false, 'default' => null, 'collate' => 'utf8mb4_general_ci', 'comment' => '', 'precision' => null, 'fixed' => null],
        '_indexes' => [
            'pfk' => ['type' => 'index', 'columns' => ['pid'], 'length' => []],
            'payfk' => ['type' => 'index', 'columns' => ['payid'], 'length' => []],
            'ufk' => ['type' => 'index', 'columns' => ['uid'], 'length' => []],
        ],
        '_constraints' => [
            'primary' => ['type' => 'primary', 'columns' => ['oid'], 'length' => []],
            'payfk' => ['type' => 'foreign', 'columns' => ['payid'], 'references' => ['payments', 'payid'], 'update' => 'restrict', 'delete' => 'restrict', 'length' => []],
            'pfk' => ['type' => 'foreign', 'columns' => ['pid'], 'references' => ['products', 'pid'], 'update' => 'restrict', 'delete' => 'restrict', 'length' => []],
            'ufk' => ['type' => 'foreign', 'columns' => ['uid'], 'references' => ['users', 'uid'], 'update' => 'restrict', 'delete' => 'restrict', 'length' => []],
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
                'odate' => '2018-12-04 14:41:40',
                'otime' => '14:41:40',
                'oprice' => 1,
                'oquantity' => 1,
                'oaddress' => 'Lorem ipsum dolor sit amet',
                'ocrust' => 'Lorem ipsum dolor sit amet'
            ],
        ];
        parent::init();
    }
}
