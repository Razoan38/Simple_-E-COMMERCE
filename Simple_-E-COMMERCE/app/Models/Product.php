<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    use HasFactory;

    private static $product, $image, $imageName, $imageUrl, $directory;

    public static function getImageUrl($request)
    {
        self::$image = $request->file('image');
        self::$imageName = $request->image->getClientOriginalName();
        self::$directory = 'admin/img/product-images/';
        self::$image->move(self::$directory, self::$imageName);
        return self::$directory.self::$imageName;
    }

    public static function createProduct($request)
    {
        self::$product = new Product();
        self::$product->name = $request->name;
        self::$product->category = $request->category;
        self::$product->brand = $request->brand;
        self::$product->price = $request->price;
        self::$product->details = $request->details;
        self::$product->image = self::getImageUrl($request);
        self::$product->save();
    }
    public static function updateProduct($request, $id)
    {
        self::$product = Product::find($id);
        if($request->file('image'))
        {
            if(file_exists(self::$product->image))
            {
                unlink(self::$product->image);
            }
            self::$imageUrl = self::getImageUrl($request);
        }
        else
        {
            self::$imageUrl = self::$product->image;
        }
        self::$product->name = $request->name;
        self::$product->category = $request->category;
        self::$product->brand = $request->brand;
        self::$product->price = $request->price;
        self::$product->details = $request->details;
        self::$product->image = self::$imageUrl;
        self::$product->save();
    }
    public static function deleteProduct($id)
    {
        self::$product = Product::find($id);
        if(file_exists(self::$product->image))
        {
            unlink(self::$product->image);
        }
        self::$product->delete();
    }
}
