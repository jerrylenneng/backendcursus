<?php

class UserOuterLayer {

    public function createNewUser ($data) {
      
        $user = new self();
        $user->setName($data['name']);
        $user->setUserName($data['username']);
        $user->setPassword($data['password']);
        $user->setRole($data['role']);

       if ($user->save()) { 
            $role = new UserRole(); 
            $role->setUserId($user->getId()); 
            $role->setRole($user->getRole());
            $role->save();
       }    
    }
}
?>