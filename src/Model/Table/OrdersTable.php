<?php
namespace App\Model\Table;

use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * Orders Model
 *
 * @method \App\Model\Entity\Order get($primaryKey, $options = [])
 * @method \App\Model\Entity\Order newEntity($data = null, array $options = [])
 * @method \App\Model\Entity\Order[] newEntities(array $data, array $options = [])
 * @method \App\Model\Entity\Order|bool save(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\Order|bool saveOrFail(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\Order patchEntity(\Cake\Datasource\EntityInterface $entity, array $data, array $options = [])
 * @method \App\Model\Entity\Order[] patchEntities($entities, array $data, array $options = [])
 * @method \App\Model\Entity\Order findOrCreate($search, callable $callback = null, $options = [])
 */
class OrdersTable extends Table
{

    /**
     * Initialize method
     *
     * @param array $config The configuration for the Table.
     * @return void
     */
    public function initialize(array $config)
    {
        parent::initialize($config);

        $this->setTable('orders');
        $this->setDisplayField('oid');
        $this->setPrimaryKey('oid');
    }

    /**
     * Default validation rules.
     *
     * @param \Cake\Validation\Validator $validator Validator instance.
     * @return \Cake\Validation\Validator
     */
    public function validationDefault(Validator $validator)
    {
        $validator
            ->integer('oid')
            ->allowEmpty('oid', 'create');

        $validator
            ->integer('payid')
            ->requirePresence('payid', 'create')
            ->notEmpty('payid');

        $validator
            ->integer('pid')
            ->requirePresence('pid', 'create')
            ->notEmpty('pid');

        $validator
            ->integer('uid')
            ->requirePresence('uid', 'create')
            ->notEmpty('uid');

        $validator
            ->dateTime('odate')
            ->requirePresence('odate', 'create')
            ->notEmpty('odate');

        $validator
            ->time('otime')
            ->requirePresence('otime', 'create')
            ->notEmpty('otime');

        $validator
            ->integer('oprice')
            ->requirePresence('oprice', 'create')
            ->notEmpty('oprice');

        return $validator;
    }
}
