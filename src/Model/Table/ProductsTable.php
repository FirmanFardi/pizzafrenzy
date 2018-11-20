<?php
namespace App\Model\Table;

use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * Products Model
 *
 * @method \App\Model\Entity\Product get($primaryKey, $options = [])
 * @method \App\Model\Entity\Product newEntity($data = null, array $options = [])
 * @method \App\Model\Entity\Product[] newEntities(array $data, array $options = [])
 * @method \App\Model\Entity\Product|bool save(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\Product|bool saveOrFail(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\Product patchEntity(\Cake\Datasource\EntityInterface $entity, array $data, array $options = [])
 * @method \App\Model\Entity\Product[] patchEntities($entities, array $data, array $options = [])
 * @method \App\Model\Entity\Product findOrCreate($search, callable $callback = null, $options = [])
 */
class ProductsTable extends Table
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

        $this->setTable('products');
        $this->setDisplayField('pid');
        $this->setPrimaryKey('pid');
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
            ->integer('pid')
            ->allowEmpty('pid', 'create');

        $validator
            ->scalar('pname')
            ->maxLength('pname', 255)
            ->requirePresence('pname', 'create')
            ->notEmpty('pname');

        $validator
            ->integer('pquantity')
            ->requirePresence('pquantity', 'create')
            ->notEmpty('pquantity');

        $validator
            ->scalar('ptopping')
            ->maxLength('ptopping', 255)
            ->requirePresence('ptopping', 'create')
            ->notEmpty('ptopping');

        $validator
            ->scalar('pcategory')
            ->maxLength('pcategory', 255)
            ->requirePresence('pcategory', 'create')
            ->notEmpty('pcategory');

        return $validator;
    }
}
