<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Cart extends Model
{
    public $item=null;
    public $totalQty=0;
    public $totalPrice=0;
    public function __contruct($oldCart){
        if ($oldCart){
            $this->items=$oldCart->items;
            $this->totalQty=$oldCart->totalQty;
            $this->totalPrice=$oldCart->totalPrice;
        }
    }
    //them phan tu vao gio hang
    public function add($item,$id,$qty=1){
        if ($item->promotion_price==0){
            $giohang=['qty=>0','price'=>$item->unit_price,'item'=>$item];
            if ($this->items){
                if (array_key_exists($id,$this->items)){
                    $giohang=$this->items($id);
                }
            }
            $giohang['qty']=$giohang['qty']+$qty;
            $giohang['price']=$item->unit_price*$giohang['qty'];
            $this->item[$id]=$giohang;
            $this->totalQty=$this->totalQty+$qty;
            $this->totalPrice+=$item->unit_price*$giohang['qty'];

        }
        else{
            $giohang=['qty'=>0,'price'=>$item->promotion_price,'item'=>$item];
            if ($this->items){
                if(array_key_exists($id,$this->items)){
                    $giohang=$this->items[$id];
                }
            }
            $giohang['qty']=$giohang['qty']+$qty;
        }
    }
}
