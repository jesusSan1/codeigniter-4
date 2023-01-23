<?php
namespace App\Models;

use CodeIgniter\Model;

class Appmodel extends Model{
    
    public function index (){
        $db = db_connect();
    }
}