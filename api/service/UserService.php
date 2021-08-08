<?php

namespace Api\Service;

use Api\model\UserFind;

class UserService
{
    public function get($id = null)
    {
        
        if($id){
           return UserFind::select($id);
        } else {
            return UserFind::selectAll();
        }
        
    }
    public function post()
    {}
    public function put()
    {}
    public function patch()
    {}
    public function delete()
    {}
}
