<?php
namespace App\Model\Entity;

use Cake\ORM\Entity;

/**
 * Order Entity
 *
 * @property int $oid
 * @property int $payid
 * @property int $pid
 * @property int $uid
 * @property \Cake\I18n\FrozenTime $odate
 * @property \Cake\I18n\FrozenTime $otime
 * @property int $oprice
 */
class Order extends Entity
{

    /**
     * Fields that can be mass assigned using newEntity() or patchEntity().
     *
     * Note that when '*' is set to true, this allows all unspecified fields to
     * be mass assigned. For security purposes, it is advised to set '*' to false
     * (or remove it), and explicitly make individual fields accessible as needed.
     *
     * @var array
     */
    protected $_accessible = [
        'payid' => true,
        'pid' => true,
        'uid' => true,
        'odate' => true,
        'otime' => true,
        'oprice' => true
    ];
}
