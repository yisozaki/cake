<?php
namespace App\Model\Table;

use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * Dungeons Model
 *
 * @method \App\Model\Entity\Dungeon get($primaryKey, $options = [])
 * @method \App\Model\Entity\Dungeon newEntity($data = null, array $options = [])
 * @method \App\Model\Entity\Dungeon[] newEntities(array $data, array $options = [])
 * @method \App\Model\Entity\Dungeon|bool save(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\Dungeon patchEntity(\Cake\Datasource\EntityInterface $entity, array $data, array $options = [])
 * @method \App\Model\Entity\Dungeon[] patchEntities($entities, array $data, array $options = [])
 * @method \App\Model\Entity\Dungeon findOrCreate($search, callable $callback = null)
 *
 * @mixin \Cake\ORM\Behavior\TimestampBehavior
 */
class DungeonsTable extends Table
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

        $this->table('dungeons');
        $this->displayField('title');
        $this->primaryKey('id');

        $this->addBehavior('Timestamp');
        $this->hasMany('Maps',[
            'foreignKey' => 'dungeion_id',
        ]);
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
            ->integer('id')
            ->allowEmpty('id', 'create');

        $validator
            ->allowEmpty('title');

        $validator
            ->integer('level')
            ->allowEmpty('level');

        return $validator;
    }
}
