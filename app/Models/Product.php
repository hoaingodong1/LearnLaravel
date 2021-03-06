<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    use HasFactory;
    protected $table="products";
    public function product_type(){
        return $this->belongsTo('App\ProductType','id_type','id');

    }
    public function bill_detail(){
        return $this->hasMany('App\BillDetail','id_product','id');
    }
}
//b1: xử lí model, gọi bảng
//b2: Xử lí controller, tạo các truy vấn, return compact .. biến
//b3: đổ dữ liệu ra view for each ... endforeach 

// form nằm trong giao diện

// name, csrf, post, multypart form
// model: khai báo bảng và quan hệ 
// getClientOriddjfh: file 
// Dùng swap thay vì alert

// B1: tạo view add.blade.php
//b2: tạo request
//b3 model, b4: Xử lí controller. 
//b5: Route b6dfshdghfh

// Objetc relationship mapping modelling mô hình quan hệ đối tượng, 
//biến các bảng thành các object, những table thành object, table-model
// eloquent thì khai báo model, tốc độ xử lí chậm hơn so với query builder
// ngắn gọn dễ hiểu 
// một nhiều và thuộc về belong to, hasmany
// trong product chứa function product-type, ... 


// Model chính là các bảng trong database
