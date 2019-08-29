<?php
namespace App\Controller;

use App\Controller\AppController;

/**
 * Payment Controller
 *
 *
 * @method \App\Model\Entity\Payment[]|\Cake\Datasource\ResultSetInterface paginate($object = null, array $settings = [])
 */
class PaymentController extends AppController
{
    /**
     * Index method
     *
     * @return \Cake\Http\Response|null
     */
    public function index()
    {
        $province = [
            ['value' => '', 'text' => 'เลือกจังหวัด', 'class' => 'non-select'],
            ['value' => 'เชียงราย', 'text' => 'เชียงราย'],
            ['value' => 'เชียงใหม่', 'text' => 'เชียงใหม่'],
            ['value' => 'น่าน', 'text' => 'น่าน'],
            ['value' => 'พะเยา', 'text' => 'พะเยา'],
        ];
        $this->set('province', $province);

        $paymentMethod = [
            ['value' => 'เก็บเงินปลายทาง', 'text' => 'เก็บเงินปลายทาง'],
            ['value' => 'ธนาคาร กกก', 'text' => 'ธนาคาร กกก เลขที่ 123-456-789-0 ชื่อบัญชี ฟฟฟฟฟ หหหหหห'],
            ['value' => 'ธนาคาร ขขข', 'text' => 'ธนาคาร ขขข เลขที่ 123-456-789-0 ชื่อบัญชี ดดดดดด อออออออ']
        ];
        $this->set('paymentMethod', $paymentMethod);
    }

    /**
     * View method
     *
     * @param string|null $id Payment id.
     * @return \Cake\Http\Response|null
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $payment = $this->Payment->get($id, [
            'contain' => []
        ]);

        $this->set('payment', $payment);
    }

    /**
     * Add method
     *
     * @return \Cake\Http\Response|null Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $payment = $this->Payment->newEntity();
        if ($this->request->is('post')) {
            $payment = $this->Payment->patchEntity($payment, $this->request->getData());
            if ($this->Payment->save($payment)) {
                $this->Flash->success(__('The payment has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The payment could not be saved. Please, try again.'));
        }
        $this->set(compact('payment'));
    }

    /**
     * Edit method
     *
     * @param string|null $id Payment id.
     * @return \Cake\Http\Response|null Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $payment = $this->Payment->get($id, [
            'contain' => []
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $payment = $this->Payment->patchEntity($payment, $this->request->getData());
            if ($this->Payment->save($payment)) {
                $this->Flash->success(__('The payment has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The payment could not be saved. Please, try again.'));
        }
        $this->set(compact('payment'));
    }

    /**
     * Delete method
     *
     * @param string|null $id Payment id.
     * @return \Cake\Http\Response|null Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $payment = $this->Payment->get($id);
        if ($this->Payment->delete($payment)) {
            $this->Flash->success(__('The payment has been deleted.'));
        } else {
            $this->Flash->error(__('The payment could not be deleted. Please, try again.'));
        }

        return $this->redirect(['action' => 'index']);
    }
}
