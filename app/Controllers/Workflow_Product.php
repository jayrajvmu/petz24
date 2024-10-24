<?php

namespace App\Controllers;

use CodeIgniter\RESTful\ResourceController;
use CodeIgniter\HTTP\ResponseInterface;

use App\Models\ProductModel;

class Workflow_Product extends BaseController
{
    protected $db;
    protected $model;

    public function __construct()
    {
        $this->db = db_connect();
        $this->model = new ProductModel;
    }

    public function getProduct(){        
        $builder = $this->db->table('product_tbl')
                   ->select('
                    product_tbl.product_id as id,
                    product_tbl.pet_id as pet_id,
                    product_tbl.product_price as product_price,
                    product_tbl.brand_id as brand_id,
                    product_tbl.breed_id as breed_id,
                    product_tbl.product_type_id as product_type_id,
                    product_tbl.product_category_id as product_category_id,
                    product_tbl.name as name,
                    product_tbl.summery as summery,
                    product_tbl.description as description,
                    product_tbl.instruction as instruction,
                    pet_tbl.pet_name as pet_name,
                    brand_tbl.brand_name as brand_name,
                    breed_tbl.breed_name as breed_name,
                    product_type_tbl.type as type,
                    product_category_tbl.category as category
                    ')
                   ->join('pet_tbl', 'product_tbl.pet_id = pet_tbl.pet_id', 'inner')
                    ->join('product_type_tbl', 'product_tbl.product_type_id = product_type_tbl.product_type_id', 'inner')
                    ->join('product_category_tbl', 'product_tbl.product_category_id = product_category_tbl.product_category_id', 'inner')
                    ->join('brand_tbl', 'product_tbl.brand_id = brand_tbl.brand_id ', 'inner')
                    ->join('breed_tbl', 'product_tbl.breed_id = breed_tbl.breed_id', 'inner')

                    ->where([
                        'pet_tbl.flag' => 1,
                        'product_type_tbl.flag' => 1,
                        'product_category_tbl.flag' => 1,
                        'brand_tbl.flag' => 1,
                        'breed_tbl.flag' => 1

                    ]);

                    $data = $builder->get();
                    $data =$data->getResult();



        if($data){
            echo $this->response_message([
                'code' => 200,
                'data' => json_encode($data)
            ]); return;
        }
        echo $this->response_message(false, false);
    }


    public function getSpecificProduct(){

        $request = \Config\Services::request();
        $data =  $request->getPost();


        $builder = $this->db->table('product_tbl')
        ->select('
         product_tbl.product_id as product_id,
         product_tbl.pet_id as pet_id,
         product_tbl.product_price as product_price,
         product_tbl.brand_id as brand_id,
         product_tbl.breed_id as breed_id,
         product_tbl.product_type_id as product_type_id,
         product_tbl.product_category_id as product_category_id,
         product_tbl.name as name,
         product_tbl.summery as summery,
         product_tbl.description as description,
         product_tbl.instruction as instruction,
         pet_tbl.pet_name as pet_name,
         brand_tbl.brand_name as brand_name,
         breed_tbl.breed_name as breed_name,
         product_type_tbl.type as type,
         product_category_tbl.category as category,
         GROUP_CONCAT(product_img_tbl.url ORDER BY product_img_tbl.product_img_id SEPARATOR ",") as product_img
         ')

         ->join('product_category_tbl', 'product_category_tbl.product_category_id = product_tbl.product_category_id', 'inner')
         ->join('product_type_tbl', 'product_type_tbl.product_type_id = product_tbl.product_type_id', 'inner')
         ->join('pet_tbl', 'pet_tbl.pet_id = product_tbl.pet_id', 'inner')
         ->join('brand_tbl', 'brand_tbl.brand_id = product_tbl.brand_id ', 'inner')
         ->join('breed_tbl', 'breed_tbl.breed_id = product_tbl.breed_id', 'inner')
                  ->join('product_img_tbl', 'product_img_tbl.product_id = product_tbl.product_id', 'inner')


         ->where([
            'pet_tbl.flag' => 1,
            'product_type_tbl.flag' => 1,
            'product_category_tbl.flag' => 1,
            'product_tbl.flag' => 1,
            'brand_tbl.flag' => 1,
            'breed_tbl.flag' => 1,
            'product_img_tbl.flag' => 1,
            'pet_tbl.pet_name' => str_replace('-', ' ', $data['petName']),
            'product_type_tbl.type' => str_replace('-', ' ', $data['typeName']),
            'product_category_tbl.category' => str_replace('-', ' ', $data['categoryName']),
        ]) 

        ->groupBy('product_tbl.product_id')

        ;

         $data = $builder->get();
         $data =$data->getResult();



if($data){
 echo $this->response_message([
     'code' => 200,
     'data' => json_encode($data)
 ]); return;
}
echo $this->response_message(false, false);
    }





    
}