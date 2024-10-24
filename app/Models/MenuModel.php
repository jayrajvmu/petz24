<?php
namespace App\Models;

use CodeIgniter\Model;

class MenuModel extends Model
{
    protected $table = 'product_category_tbl';  // Base table
    protected $primaryKey = 'pet_id';    // Primary key of the menu table

    // Fetch data from multiple tables
    public function getMenuWithCategoryAndBrand()
    {
        $builder= $this->select('*')
                    ->join('product_type_tbl', 'product_type_tbl.product_type_id = product_category_tbl.product_type_id')  // Join with categories table
                    ->join('pet_tbl', 'pet_tbl.pet_id = product_type_tbl.pet_id')  // Join with brands table
                    ->where([
                        'pet_tbl.flag' => 1,
                        'product_type_tbl.flag' => 1,
                        'product_category_tbl.flag' => 1
                    ]) 
                    ->findAll();  // Fetch all records

// Restructure the array
$restructured = [];


foreach ($builder as $pet) {
    $petId = $pet['pet_id'];
    $type = $pet['type'];
    $category = $pet['category'];

    // Check if pet ID already exists in the restructured array
    if (!isset($restructured[$petId])) {
        $restructured[$petId] = [
            'pet_name' => $pet['pet_name'],
            'pet_id' => $pet['pet_id'],
            'pet_img' => $pet['pet_img'],
            'types' => [] // Create a new types group
        ];
    }

    // Check if type already exists under this pet
    if (!isset($restructured[$petId]['types'][$type])) {
        $restructured[$petId]['types'][$type] = []; // Create a new category group under the type
    }

    // Append the category with all its information under the type
    $restructured[$petId]['types'][$type][] = [
        'product_category_id' => $pet['product_category_id'],
        'product_type_id' => $pet['product_type_id'],
        'category' => $pet['category'],
        'flag' => $pet['flag']
    ];
}

// Output the restructured array
return $restructured;

    }
}
