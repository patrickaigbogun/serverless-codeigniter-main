<?php
header('Content-type: application/json; charset=utf-8');
$json = '{"id": 1,"title": "iPhone 9","description": "An apple mobile which is nothing like apple","price": 549,"discountPercentage": 12.96,"rating": 4.69,"stock": 94,"brand": "Apple","category": "smartphones","thumbnail": "https://dummyjson.com/image/i/products/1/thumbnail.jpg","images": ["https://dummyjson.com/image/i/products/1/1.jpg","https://dummyjson.com/image/i/products/1/2.jpg","https://dummyjson.com/image/i/products/1/3.jpg","https://dummyjson.com/image/i/products/1/4.jpg","https://dummyjson.com/image/i/products/1/thumbnail.jpg"]}';
echo $json;
?>