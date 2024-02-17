<?php

namespace App\Http\Controllers;

use App\Models\Category;
use RealRashid\SweetAlert\Facades\Alert;
use App\Http\Requests\StoreCategoryRequest;
use App\Http\Requests\UpdateCategoryRequest;

class CategoryController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('admin.category.index', [
            'categorys' => Category::all(),
            'my_actions' => $this->category_actions(),
            'my_attributes' => $this->category_columns(),
            'my_fields' => $this->category_fields()
        ]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        // 
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreCategoryRequest $request)
    {
        $category = new Category();

        $category->name = $request->name;

        if ($category->save()) {
            Alert::toast("Opération éffectué avec succès", 'success');
            return redirect('category');
        } else {
            Alert::toast("Une erreur est survenue", 'error');
            return redirect()->back()->withInput($request->input());
        }
    }

    /**
     * Display the specified resource.
     */
    public function show(Category $category)
    {
        return view('admin.category.edit', [
            'category' => $category,
            'my_fields' => $this->category_fields(),
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Category $category)
    {
        return view('admin.category.edit', [
            'category' => $category,
            'my_fields' => $this->category_fields(),
        ]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateCategoryRequest $request, Category $category)
    {

        $category->name = $request->name;

        if ($category->save()) {
            Alert::toast("Modification succès", 'success');
            return redirect('category');
        };
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Category $category)
    {
        try {
            $category = $category->delete();
            Alert::success("Suppression", "Succès");
            return redirect('category');
        } catch (\Exception $e) {
            Alert::error("Oops", "Suppression éffetuée avec succès",);
            return redirect()->back();
        }
    }

    private function category_columns()
    {
        $columns = (object) [
            'name' => 'Categorie',
        ];
        return $columns;
    }

    private function category_actions()
    {
        $actions = (object) array(
            'edit' => 'Modifier',
            'delete' => "Supprimer",
        );
        return $actions;
    }

    private function category_fields()
    {
        $fields = [
            'name' => [
                'title' => 'Dénomination',
                'field' => 'text'
            ]
        ];
        return $fields;
    }
}
