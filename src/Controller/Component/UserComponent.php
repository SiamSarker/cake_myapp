<?php
namespace App\Controller\Component;

use Cake\Controller\Component;
use App\Model\Table\UsersTable;



class UserComponent extends Component
{
    protected $Users;

    public function initialize(array $config): void
    {
        parent::initialize($config);
        $this->Users = new UsersTable();
    }

    public function getUsersData()
    {
        return $this->Users->find()->all();
    }

    public function viewUsersData($id  = null)
    {
        return $this->Users->get($id, [
            'contain' => [],
        ]);
    }

    public function addUsersData($request)
    {
        if (!empty($request))
        {
            $user = $this->Users->newEmptyEntity();
            $user = $this->Users->patchEntity($user, $request);
            if ($this->Users->save($user)) return true;
            else return false;
        }
        else return false;
    }

    public function editUsersData($request)
    {

        if (!empty($request))
        {
            $user = $this->Users->newEmptyEntity();
            $user = $this->Users->patchEntity($user, $request);
            if ($this->Users->save($user)) return true;
            else return false;
        }
        else return false;

    }



}
