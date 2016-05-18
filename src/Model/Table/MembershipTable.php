<?php
namespace App\Model\Table;

use App\Model\Entity\Membership;
use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * Membership Model
 *
 */
class MembershipTable extends Table
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

        $this->table('membership');
        $this->displayField('name');
        $this->primaryKey('ID');

        $this->addBehavior('Timestamp');
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
            ->integer('ID')
            ->allowEmpty('ID', 'create');

        $validator
            ->requirePresence('name', 'create')
            ->notEmpty('name');

        $validator
            ->requirePresence('mobile_no', 'create')
            ->notEmpty('mobile_no');

        $validator
            ->requirePresence('home_no', 'create')
            ->notEmpty('home_no');

        $validator
            ->email('email')
            ->requirePresence('email', 'create')
            ->notEmpty('email');

        $validator
            ->requirePresence('university', 'create')
            ->notEmpty('university');

        $validator
            ->requirePresence('academic_year', 'create')
            ->notEmpty('academic_year');

        $validator
            ->requirePresence('department', 'create')
            ->notEmpty('department');

        $validator
            ->requirePresence('address', 'create')
            ->notEmpty('address');

        $validator
            ->allowEmpty('socities');

        $validator
            ->requirePresence('fees', 'create')
            ->notEmpty('fees');

        $validator
            ->allowEmpty('mgm');

        $validator
            ->allowEmpty('Recruiter');

        $validator
            ->allowEmpty('RecruiterID');

        $validator
            ->requirePresence('register_name', 'create')
            ->notEmpty('register_name');

        return $validator;
    }

    /**
     * Returns a rules checker object that will be used for validating
     * application integrity.
     *
     * @param \Cake\ORM\RulesChecker $rules The rules object to be modified.
     * @return \Cake\ORM\RulesChecker
     */
    public function buildRules(RulesChecker $rules)
    {
        $rules->add($rules->isUnique(['email']));
        return $rules;
    }
}
