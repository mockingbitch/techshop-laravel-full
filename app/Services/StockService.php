<?php

namespace App\Services;

use App\Repositories\Contracts\RepositoryInterface\StockRepositoryInterface;
use http\Env\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\Stock;
use Illuminate\Support\Facades\Hash;


class StockService
{
    protected $stockRepo;
    public function __construct(StockRepositoryInterface $stockRepository){
        $this->stockRepo = $stockRepository;
    }
    public function subtractOrder($id,$quantity)
    {
        $product = Stock::where('productId',$id)->get();
        $result = $product[0]['quantity'] - $quantity;
        if ($result >=0){
            $product[0]->update(['quantity'=>$result]);
            return true;
        }
        else{
            return false;
        }
    }
    public function update($id,$request){
        $product = $this->stockRepo->find($id);
        $quantity = $product->quantity;
        if (isset($request['import']) || isset($request['export'])){
            $newQuantity = $quantity + $request['import'] - $request['export'];
            $this->stockRepo->update($id,['quantity'=>$newQuantity]);
        }
    }
}
