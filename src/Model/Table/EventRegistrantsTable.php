<?php
namespace App\Model\Table;

use App\Model\Entity\EventRegistrant;
use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * EventRegistrants Model
 *
 * @property \Cake\ORM\Association\BelongsTo $Events
 */
class EventRegistrantsTable extends Table
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

        $this->table('event_registrants');
        $this->displayField('name');
        $this->primaryKey('ticket_number');

        $this->addBehavior('Timestamp');

        $this->belongsTo('Events', [
            'foreignKey' => 'event_id',
            'joinType' => 'INNER'
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
            ->integer('ticket_number')
            ->allowEmpty('ticket_number', 'create');

        $validator
            ->requirePresence('name', 'create')
            ->notEmpty('name');

        $validator
            ->email('email')
            ->requirePresence('email', 'create')
            ->notEmpty('email');

        $validator
            ->requirePresence('mobile_number', 'create')
            ->notEmpty('mobile_number');

        $validator
            ->requirePresence('university', 'create')
            ->notEmpty('university');

        $validator
            ->requirePresence('department', 'create')
            ->notEmpty('department');

        $validator
            ->requirePresence('academic_year', 'create')
            ->notEmpty('academic_year');

        $validator
            ->requirePresence('membership', 'create')
            ->notEmpty('membership');

        $validator
            ->integer('fees')
            ->requirePresence('fees', 'create')
            ->notEmpty('fees');

        $validator
            ->requirePresence('registrer', 'create')
            ->notEmpty('registrer');

        $validator
            ->requirePresence('ticket_type', 'create')
            ->notEmpty('ticket_type');

        $validator
            ->requirePresence('lunch', 'create')
            ->notEmpty('lunch');

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
        $rules->add($rules->existsIn(['event_id'], 'Events'));
        return $rules;
    }
}
