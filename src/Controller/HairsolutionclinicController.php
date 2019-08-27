<?php
namespace App\Controller;

use App\Controller\AppController;

/**
 * Hairsolutionclinic Controller
 *
 *
 * @method \App\Model\Entity\Hairsolutionclinic[]|\Cake\Datasource\ResultSetInterface paginate($object = null, array $settings = [])
 */
class HairsolutionclinicController extends AppController
{
    /**
     * Index method
     *
     * @return \Cake\Http\Response|null
     */
    public function index()
    {
        $hairsolutionclinic = $this->paginate($this->Hairsolutionclinic);

        $this->set(compact('hairsolutionclinic'));
    }

    /**
     * View method
     *
     * @param string|null $id Hairsolutionclinic id.
     * @return \Cake\Http\Response|null
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view()
    {

    }

    /**
     * Add method
     *
     * @return \Cake\Http\Response|null Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $hairsolutionclinic = $this->Hairsolutionclinic->newEntity();
        if ($this->request->is('post')) {
            $hairsolutionclinic = $this->Hairsolutionclinic->patchEntity($hairsolutionclinic, $this->request->getData());
            if ($this->Hairsolutionclinic->save($hairsolutionclinic)) {
                $this->Flash->success(__('The hairsolutionclinic has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The hairsolutionclinic could not be saved. Please, try again.'));
        }
        $this->set(compact('hairsolutionclinic'));
    }

    /**
     * Edit method
     *
     * @param string|null $id Hairsolutionclinic id.
     * @return \Cake\Http\Response|null Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $hairsolutionclinic = $this->Hairsolutionclinic->get($id, [
            'contain' => []
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $hairsolutionclinic = $this->Hairsolutionclinic->patchEntity($hairsolutionclinic, $this->request->getData());
            if ($this->Hairsolutionclinic->save($hairsolutionclinic)) {
                $this->Flash->success(__('The hairsolutionclinic has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The hairsolutionclinic could not be saved. Please, try again.'));
        }
        $this->set(compact('hairsolutionclinic'));
    }

    /**
     * Delete method
     *
     * @param string|null $id Hairsolutionclinic id.
     * @return \Cake\Http\Response|null Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $hairsolutionclinic = $this->Hairsolutionclinic->get($id);
        if ($this->Hairsolutionclinic->delete($hairsolutionclinic)) {
            $this->Flash->success(__('The hairsolutionclinic has been deleted.'));
        } else {
            $this->Flash->error(__('The hairsolutionclinic could not be deleted. Please, try again.'));
        }

        return $this->redirect(['action' => 'index']);
    }
}
