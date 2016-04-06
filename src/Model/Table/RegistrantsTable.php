<?php
namespace App\Model\Table;

use App\Model\Entity\Registrant;
use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * Registrants Model
 *
 * @property \Cake\ORM\Association\BelongsTo $Courses
 */
class RegistrantsTable extends Table
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

        $this->table('registrants');
        $this->displayField('No');
        $this->primaryKey('No');

        $this->belongsTo('Courses', [
            'foreignKey' => 'course_id'
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
            ->integer('No')
            ->allowEmpty('No', 'create');

        $validator
            ->requirePresence('Name', 'create')
            ->notEmpty('Name');

        $validator
            ->requirePresence('Mobile_Number', 'create')
            ->notEmpty('Mobile_Number');

        $validator
            ->requirePresence('Email', 'create')
            ->notEmpty('Email');

        $validator
            ->requirePresence('Department', 'create')
            ->notEmpty('Department');

        $validator
            ->requirePresence('Academic_Year', 'create')
            ->notEmpty('Academic_Year');

        $validator
            ->requirePresence('membership_status', 'create')
            ->notEmpty('membership_status');

        $validator
            ->integer('fees')
            ->requirePresence('fees', 'create')
            ->notEmpty('fees');

        $validator
            ->integer('Ticket_Number')
            ->requirePresence('Ticket_Number', 'create')
            ->notEmpty('Ticket_Number');

        $validator
            ->requirePresence('Registrer', 'create')
            ->notEmpty('Registrer');

        $validator
            ->allowEmpty('Notes');

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
        $rules->add($rules->existsIn(['course_id'], 'Courses'));
        return $rules;
    }
}
