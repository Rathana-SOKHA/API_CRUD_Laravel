<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\Category;
use Illuminate\Http\Request;
use Symfony\Component\HttpKernel\Event\ResponseEvent;

class CategoryController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $categories = Category::all();

        return response()->json(
            [
                'success' => true,
                'message' => 'Categories retrieved successfully',
                'data' => $categories
            ],
            200
        );
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {

        $request->validate(
            [
                'name' => 'required|string|max:255',
                'desc' => 'required|string'
            ],
            [
                'name.required' => 'Category name is required',
                'desc.required' => 'Category description is required'
            ]
        );


        $category = Category::create(
            [
                'name' => $request->name,
                'desc' => $request->desc
            ]
        );

        return response()->json(
            [
                'success' => true,
                'message' => 'Category created successfully',
                'data' => $category
            ],
            201
        );
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $category = Category::find($id);

        if (!$category) {
            return response()->json(
                [
                    'success' => false,
                    'message' => 'Category not found!'
                ],
                404
            );
        }

        return response()->json(
            [
                'success' => true,
                'message' => "Category retrieved successfully",
                'data' => $category
            ],
            200
        );
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $category = Category::find($id);

        if (!$category) {
            return response()->json(
                [
                    'success' => false,
                    'message' => 'Category not found!'
                ],
                404
            );
        }

        $request->validate(
            [
                'name' => 'required|string|max:255',
                'desc' => 'required|string'
            ],
            [
                'name.required' => 'Category name is required',
                'desc.required' => 'Category description is required'
            ]
        );

        $category->update(
            [
                'name' => $request->name,
                'desc' => $request->desc
            ]
        );

        return response()->json(
            [
                'success' => true,
                'message' => 'Category update successfully',
                'data' => $category
            ],
            200
        );
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $category = Category::find($id);

        if (!$category) {
            return response()->json(
                [
                    'success' => false,
                    'message' => 'Category not found!'
                ],
                404
            );
        }

        $category->delete();

        return response()->json(
            [
                'success' => true,
                'message' => 'Category deleted successfully',
            ],
            200
        );
    }
}
