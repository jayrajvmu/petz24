<?php

namespace App\Controllers;
use App\Models\MenuModel;

class BaseAction extends BaseController
{

    public function __construct()
    {
        $this->menuModel = new MenuModel();  // Load the menu model
    }
    
    public function index()
    {
        $data['menuItems'] = $this->menuModel->getMenuWithCategoryAndBrand();
        return view('index', $data);  // Pass the menu items to the view
        // return view('index');
    }

    public function product($pet_name, $type_name, $category_name)
    {

        $data['menuItems'] = $this->menuModel->getMenuWithCategoryAndBrand();
        $params['petName']=$pet_name;
        $params['typeName']=$type_name;
        $params['categoryName']=$category_name;

        $data['parameter'] = $params;

        return view('product', $data);  // Pass the menu items to the view
    }

    public function productDescription()
    {
        return view('product_desc');
    }

    public function profile()
    {
        // if(!$this->session->get('user_data')){
        //     return redirect()->route('/'); 
        // }
        // $data['user_data'] = $this->decryptData($this->session->get('user_data'));
        return view('profile');
    }
    public function cart()
    {
        return view('cart');
    }
    public function wishlist()
    {
        return view('wishlist');
    }
    public function order()
    {
        return view('order');
    }
    public function checkout()
    {
        return view('checkout');
    }
    public function about()
    {
        $data['menuItems'] = $this->menuModel->getMenuWithCategoryAndBrand();

        return view('about', $data);
    }
    public function contact()
    {
        return view('contact');
    }
    public function faq()
    {
        return view('faq');
    }
    public function privacypolicy()
    {
        return view('privacypolicy');
    }
    public function experience()
    {
        return view('experience');
    }
    public function addpet()
    {

        $data['menuItems'] = $this->menuModel->getMenuWithCategoryAndBrand();
        return view('addpet', $data); 
    }
    public function groomingcenter()
    {

        $data['menuItems'] = $this->menuModel->getMenuWithCategoryAndBrand();

        return view('groomingcenter', $data);
    }
    public function consultationcenter()
    {
        return view('consultationcenter');
    }



    public function petgrooming()
    {

        $data['menuItems'] = $this->menuModel->getMenuWithCategoryAndBrand();

        return view('petgrooming', $data);
    }


    
}
