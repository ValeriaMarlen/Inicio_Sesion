<?php
namespace App\Models;
use CodeIgniter\Model;
class mInicio extends Model{
  protected $table = 'empleados';
  protected $primarykey ='dato';

  protected $useAutoIncremet=true;

  protected $returnType ='array';
  protected $useSoftDeletes = true;

  protected $allowedFields = ['correo','password'];

  protected $useTimestamps = false;
  protected $createdField  = 'created_at';
  protected $updatedField  = 'updated_at';
  protected $deletedField  = 'deleted_at';

  protected $validationRules = [];
  protected $validationMessages = [];
  protected $skipValidation = false;  
  } 
?>