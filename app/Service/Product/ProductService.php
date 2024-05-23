<?php
namespace App\Service\Product;

use App\Repositories\Product\ProductRepositoryInterface;
use App\Service\BaseService;

class ProductService extends BaseService implements ProductServiceInterface {
    public $repository;

    public function __construct(ProductRepositoryInterface $productRepository){
        $this->repository =$productRepository;
    }
    public function find( $id)
    {
        // sử lí phần đánh giá dựa vào comment
        // Implement logic để tìm một bản ghi theo ID
        $product = $this->repository->find($id);
        $avgRating=0;
        $sumRating = array_sum(array_column($product->productComments->toArray(),'rating'));
        $countRating = count($product->productComments);
        if($countRating !=0){
            $avgRating =$sumRating/$countRating;
        }
        $product->avgRating =$avgRating;
        return $product;
    }
    public function all()
{
    $products = $this->repository->all(); // Assuming this gets all products

    foreach ($products as $product) {
        $sumRating = array_sum(array_column($product->productComments->toArray(), 'rating'));
        $countRating = count($product->productComments);
        $avgRating = $countRating ? $sumRating / $countRating : 0;
        $product->avgRating = $avgRating;
    }

    return $products;
}
    
    public function getRelatedProducts($product ,$limit = 4){
      return  $this ->repository ->getRelatedProducts($product,$limit);
    }
    public function getFeaturedProducts(){
        return[
            "men"=> $this ->repository->getFeaturedProductsByCategory(1),
            "women"=> $this ->repository->getFeaturedProductsByCategory(2),
            
        ];
    }
    public function getPagination($request){
        return $this ->repository->getPagination($request);
    }
    public function getProductsByCategory($categoryName,$request){
    return $this->repository->getProductsByCategory($categoryName,$request);
    }
}