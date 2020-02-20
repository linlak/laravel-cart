<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ProductsController extends Controller
{
    //
    public function index()
    {
        $output = [
		  ['$key'=> 'dgytrrsd',
		  		  'productId'=> 2435,
		  		  'productName'=> 'Sleaveless Top',
		  		  'productCategory'=> 'tops',
		  		  'productPrice'=> 10000,
		  		  'productDescription'=> 'This a product detail',
		  		  'productImageUrl'=> 'assets/banner_img/img_4.jpg',
		  		  'productAdded'=> 2456890,
		  		  'productQuatity'=> 100,
		  		  'ratings'=> 5,
		  		  'favourite'=> false,
		  		  'productSeller'=> 'Google'],
		  		  ['$key'=> 'dgytrrsdrti',
		  		  'productId'=> 24355,
		  		  'productName'=> 'Sleaveless Top',
		  		  'productCategory'=> 'tops',
		  		  'productPrice'=> 10000,
		  		  'productDescription'=> 'This a product detail',
		  		  'productImageUrl'=> 'assets/banner_img/img_4.jpg',
		  		  'productAdded'=> 2456890,
		  		  'productQuatity'=> 100,
		  		  'ratings'=> 5,
		  		  'favourite'=> true,
		  		  'productSeller'=> 'Google'],
		  		  ['$key'=> 'dgytrrsdrtd',
		  		  'productId'=> 24355,
		  		  'productName'=> 'Sleaveless Top',
		  		  'productCategory'=> 'tops',
		  		  'productPrice'=> 10000,
		  		  'productDescription'=> 'This a product detail',
		  		  'productImageUrl'=> 'assets/banner_img/img_4.jpg',
		  		  'productAdded'=> 2456890,
		  		  'productQuatity'=> 100,
		  		  'ratings'=> 5,
		  		  'favourite'=> true,
		  		  'productSeller'=> 'Google'],
		  		  ['$key'=> 'dgytrrsdrth',
		  		  'productId'=> 24355,
		  		  'productName'=> 'Sleaveless Top',
		  		  'productCategory'=> 'tops',
		  		  'productPrice'=> 10000,
		  		  'productDescription'=> 'This a product detail',
		  		  'productImageUrl'=> 'assets/banner_img/img_4.jpg',
		  		  'productAdded'=> 2456890,
		  		  'productQuatity'=> 100,
		  		  'ratings'=> 5,
		  		  'favourite'=> true,
		  		  'productSeller'=> 'Google']
        ];
        $this->_setResult('products', $output);
        return $this->_showResult();
    }

    public function product($id)
    {
    	$output = [
    		'$key'=> $id,
  		  'productId'=> 24355,
  		  'productName'=> 'Sleaveless Top',
  		  'productCategory'=> 'tops',
  		  'productPrice'=> 10000,
  		  'productDescription'=> 'This a product detail',
  		  'productImageUrl'=> 'assets/banner_img/img_4.jpg',
  		  'productAdded'=> 2456890,
  		  'productQuatity'=> 100,
  		  'ratings'=> 5,
  		  'favourite'=> false,
  		  'productSeller'=> 'Google'];
  		  $this->_setResult('product', $output);
  		  return $this->_showResult();
    }
}
