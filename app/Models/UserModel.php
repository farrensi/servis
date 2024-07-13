<?php 
namespace App\Models;

use CodeIgniter\Model;

class UserModel extends Model
{
    protected $table = 'users';
    protected $primaryKey = 'id';
    protected $allowedFields = ['username', 'password'];

    public function login($username)
    {
        $query = $this->db->table($this->table)
            ->where('username', $username)
            ->get();

        return $query;
    }
}
