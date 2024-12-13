<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Product;
use App\Models\visacategory;

class ApiController extends Controller
{

    public function newProduct(Request $request)
    {
        $Post_Data = $request->all();
        $Product_Title = isset($Post_Data['Title']) ? $Post_Data['Title'] : null;
        $Product_Description = isset($Post_Data['Description']) ? $Post_Data['Description'] : null;
        $Product_Price = isset($Post_Data['Price']) ? $Post_Data['Price'] : null;
        $Product_Category = isset($Post_Data['Category']) ? $Post_Data['Category'] : null;
        $Product_Quantity = isset($Post_Data['Quantity']) ? $Post_Data['Quantity'] : null;
        $Product_Image = isset($Post_Data['Image']) ? $Post_Data['Image'] : null;

        if ($Product_Title == null || $Product_Description == null || $Product_Price == null || $Product_Category == null || $Product_Quantity == null || $Product_Image == null) {
            return response()->json([
                'status' => [
                    'code' => 500,
                    'message' => 'Data Not validate'
                ]
            ]);
        } else {
            $response = $this->createProduct($Product_Title, $Product_Description, $Product_Price, $Product_Category, $Product_Quantity, $Product_Image);
            if ($response instanceof Product) {
                return response()->json([
                    'status' => [
                        'code' => 200,
                        'message' => 'Success'
                    ],
                    'data' => [
                        'response' => $response
                    ]
                ]);
            } else {
                return $response;
            }
        }
    }

    private function createProduct($Title, $Description, $Price, $Category, $Quantity, $Image)
    {
        try {
            $product = new Product();
            $product->Title = $Title;
            $product->Description = $Description;
            $product->Price = $Price;
            $product->Category = $Category;
            $product->Quantity = $Quantity;
            $product->Image = $Image;
            $product->save();
            return $product;
        } catch (Exception $e) {
            return response()->json([
                'status' => [
                    'code' => 500,
                    'message' => $e->getMessage()
                ],
            ]);
        }
    }

    public function updateProduct(Request $request, $id)
    {
        $Post_Data = $request->all();
        $Product_Title = isset($Post_Data['Title']) ? $Post_Data['Title'] : null;
        $Product_Description = isset($Post_Data['Description']) ? $Post_Data['Description'] : null;
        $Product_Price = isset($Post_Data['Price']) ? $Post_Data['Price'] : null;
        $Product_Category = isset($Post_Data['Category']) ? $Post_Data['Category'] : null;
        $Product_Quantity = isset($Post_Data['Quantity']) ? $Post_Data['Quantity'] : null;
        $Product_Image = isset($Post_Data['Image']) ? $Post_Data['Image'] : null;

        if ($Product_Title == null || $Product_Description == null || $Product_Price == null || $Product_Category == null || $Product_Quantity == null || $Product_Image == null) {
            return response()->json([
                'status' => [
                    'code' => 500,
                    'message' => 'Data Not validate'
                ]
            ]);
        } else {
            $product = Product::find($id);
            if ($product == null) {
                return response()->json([
                    'status' => [
                        'code' => 500,
                        'message' => 'Product not found'
                    ]
                ]);
            } else {
                $product->Title = $Product_Title;
                $product->Description = $Product_Description;
                $product->Price = $Product_Price;
                $product->Category = $Product_Category;
                $product->Quantity = $Product_Quantity;
                $product->Image = $Product_Image;
                $product->save();
                return response()->json([
                    'status' => [
                        'code' => 200,
                        'message' => 'Success'
                    ],
                    'data' => [
                        'response' => $product
                    ]
                ]);
            }
        }
    }

    public function getproduct($id)
    {
        $product = Product::find($id);
        if ($product == null) {
            return response()->json([
                'status' => [
                    'code' => 500,
                    'message' => 'Product not found'
                ]
            ]);
        } else {
            return response()->json([
                'status' => [
                    'code' => 200,
                    'message' => 'Success'
                ],
                'data' => [
                    'response' => $product
                ]
            ]);
        }
    }

    public function deleteproduct($id)
{
    $data = Product::find($id);

    if ($data == null) {
        return response()->json([
            'status' => [
                'code' => 500,
                'message' => 'Product not found'
            ]
        ]);
    } else {
        $data->delete();
        return response()->json([
            'status' => [
                'code' => 200,
                'message' => 'Success'
            ]
        ]);
    }

}

public function newvisacategory(Request $request)
{
    $Post_Data = $request->all();
    $Name = isset($Post_Data['Visa_Category_Name']) ? $Post_Data['Visa_Category_Name'] : null;
    $Period = isset($Post_Data['Validity_Period_in_Days']) ? $Post_Data['Validity_Period_in_Days'] : null;
    $Staylength = isset($Post_Data['Max_Length_of_Stay_in_Days']) ? $Post_Data['Max_Length_of_Stay_in_Days'] : null;

    if ($Name == null || $Period == null || $Staylength == null) {
        return response()->json([
            'status' => [
                'code' => 500,
                'message' => 'Data Not validate'
            ]
        ]);
    } else {
        $response = $this->createvisacategory($Name, $Period, $Staylength);
        if ($response instanceof visacategory) {
            return response()->json([
                'status' => [
                    'code' => 200,
                    'message' => 'Success'
                ],
                'data' => [
                    'response' => $response
                ]
            ]);
        } else {
            return $response;
        }
    }
}

private function createvisacategory($Visa_Category_Name, $Validity_Period_in_Days, $Max_Length_of_Stay_in_Days)
{
    try {
        $product = new visacategory();
        $product->Visa_Category_Name = $Visa_Category_Name;
        $product->Validity_Period_in_Days = $Validity_Period_in_Days;
        $product->Max_Length_of_Stay_in_Days = $Max_Length_of_Stay_in_Days;
        $product->save();
        return $product;
    } catch (Exception $e) {
        return response()->json([
            'status' => [
                'code' => 500,
                'message' => $e->getMessage()
            ],
        ]);
    }
}


public function getvisacategory($id)
{
    $product = visacategory::find($id);
    if ($product == null) {
        return response()->json([
            'status' => [
                'code' => 500,
                'message' => 'Product not found'
            ]
        ]);
    } else {
        return response()->json([
            'status' => [
                'code' => 200,
                'message' => 'Success'
            ],
            'data' => [
                'response' => $product
            ]
        ]);
    }
}



public function deletevisacategory($id)
{
    $data = visacategory::find($id);

    if ($data == null) {
        return response()->json([
            'status' => [
                'code' => 500,
                'message' => 'Visa Category not found'
            ]
        ]);
    } else {
        $data->delete();
        return response()->json([
            'status' => [
                'code' => 200,
                'message' => 'Success'
            ]
        ]);
    }

}

}
