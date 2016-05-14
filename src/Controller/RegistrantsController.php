<?php
namespace App\Controller;

use App\Controller\AppController;
use Cake\ORM\TableRegistry;
use Cake\ORM\Query;

/**
 * Registrants Controller
 *
 * @property \App\Model\Table\RegistrantsTable $Registrants
 */
class RegistrantsController extends AppController
{

    public function beforeFilter(\Cake\Event\Event $event){
      $this->Auth->allow();
    }
    /**
     * Index method
     *
     * @return \Cake\Network\Response|null
     */
    public function index()
    {
        $this->paginate = [
            'contain' => ['Courses']
        ];
        $registrants = $this->paginate($this->Registrants);

        $this->set(compact('registrants'));
        $this->set('_serialize', ['registrants']);
    }

    /**
     * View method
     *
     * @param string|null $id Registrant id.
     * @return \Cake\Network\Response|null
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $registrant = $this->Registrants->get($id, [
            'contain' => ['Courses']
        ]);

        $this->set('registrant', $registrant);
        $this->set('_serialize', ['registrant']);
    }

    /**
     * Add method
     *
     * @return \Cake\Network\Response|void Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $registrant = $this->Registrants->newEntity();
        if ($this->request->is('post')) {
            $registrant = $this->Registrants->patchEntity($registrant, $this->request->data);
            $value = $registrant->course_id;
            $courses = TableRegistry::get('courses');
            $course = $courses
                   ->find()
                   ->where(['id' => $value])
                   ->first();
            $seats = $course->remaining_seats;
            $c = $courses->query();
            $c->update()
             ->set(['remaining_seats' => $seats-1 ])
             ->where(['id' => $value])
             ->execute();
            if ($this->Registrants->save($registrant)) {
                $this->Flash->success(__('The registrant has been saved.'));
                return $this->redirect(['action' => 'index']);
            } else {
                $this->Flash->error(__('The registrant could not be saved. Please, try again.'));
            }
        }
        $courses = $this->Registrants->Courses->find('list', ['limit' => 200]);
        $this->set(compact('registrant', 'courses'));
        $this->set('_serialize', ['registrant']);
    }

    /**
     * Edit method
     *
     * @param string|null $id Registrant id.
     * @return \Cake\Network\Response|void Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Network\Exception\NotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $registrant = $this->Registrants->get($id, [
            'contain' => []
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $registrant = $this->Registrants->patchEntity($registrant, $this->request->data);
            if ($this->Registrants->save($registrant)) {
                $this->Flash->success(__('The registrant has been saved.'));
                return $this->redirect(['action' => 'index']);
            } else {
                $this->Flash->error(__('The registrant could not be saved. Please, try again.'));
            }
        }
        $courses = $this->Registrants->Courses->find('list', ['limit' => 200]);
        $this->set(compact('registrant', 'courses'));
        $this->set('_serialize', ['registrant']);
    }

    /**
     * Delete method
     *
     * @param string|null $id Registrant id.
     * @return \Cake\Network\Response|null Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $registrant = $this->Registrants->get($id);
        $value = $registrant->course_id;
        $courses = TableRegistry::get('courses');
        $course = $courses
               ->find()
               ->where(['id' => $value])
               ->first();
        $seats = $course->remaining_seats;
        $c = $courses->query();
        $c->update()
         ->set(['remaining_seats' => $seats+1 ])
         ->where(['id' => $value])
         ->execute();
        if ($this->Registrants->delete($registrant)) {
            $this->Flash->success(__('The registrant has been deleted.'));
        } else {
            $this->Flash->error(__('The registrant could not be deleted. Please, try again.'));
        }
        return $this->redirect(['action' => 'index']);
    }
}
