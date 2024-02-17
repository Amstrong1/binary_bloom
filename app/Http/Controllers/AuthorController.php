<?php

namespace App\Http\Controllers;

use App\Models\Author;
use RealRashid\SweetAlert\Facades\Alert;
use App\Http\Requests\StoreAuthorRequest;
use App\Http\Requests\UpdateAuthorRequest;

class AuthorController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('admin.author.index', [
            'authors' => Author::all(),
            'my_actions' => $this->author_actions(),
            'my_attributes' => $this->author_columns(),
        ]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('admin.author.create', [
            'my_fields' => $this->author_fields()
        ]);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreAuthorRequest $request)
    {
        $author = new Author();

        $fileName = time() . '.' . $request->photo->extension();
        $path = $request->file('photo')->storeAs('images/photo', $fileName, 'public');

        $author->name = $request->name;
        $author->email = $request->email;
        $author->profile = $request->profile;
        $author->instagram = $request->instagram;
        $author->linkedin = $request->linkedin;
        $author->facebook = $request->facebook;
        $author->x = $request->x;
        $author->photo = $path;

        if ($author->save()) {
            Alert::toast("Opération éffectué avec succès", 'success');
            return redirect('author');
        } else {
            Alert::toast("Une erreur est survenue", 'error');
            return redirect()->back()->withInput($request->input());
        }
    }

    /**
     * Display the specified resource.
     */
    public function show(Author $author)
    {
        return view('admin.author.edit', [
            'author' => $author,
            'my_fields' => $this->author_fields(),
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Author $author)
    {
        return view('admin.author.edit', [
            'author' => $author,
            'my_fields' => $this->author_fields(),
        ]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateAuthorRequest $request, Author $author)
    {
        if ($request->file !== null) {
            $fileName = time() . '.' . $request->photo->extension();
            $path = $request->file('photo')->storeAs('images/photo', $fileName, 'public');
        }

        $author->name = $request->name;
        $author->email = $request->email;
        $author->profile = $request->profile;
        $author->instagram = $request->instagram;
        $author->linkedin = $request->linkedin;
        $author->facebook = $request->facebook;
        $author->x = $request->x;
        if (isset($path)) {
            $author->photo = $path;
        }

        if ($author->save()) {
            Alert::toast("Modification succès", 'success');
            return redirect('author');
        };
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Author $author)
    {
        try {
            $author = $author->delete();
            Alert::success("Succès", "Suppression éffetuée avec succès");
            return redirect('author');
        } catch (\Exception $e) {
            Alert::error("Oops", "Une erreur est survenue",);
            return redirect()->back();
        }
    }

    private function author_columns()
    {
        $columns = (object) [
            'photo' => '',
            'name' => 'name',
            'email' => 'email',
            // 'profile' => 'profile',
            // 'instagram' => 'instagram',
            // 'linkedin' => 'linkedin',
            // 'facebook' => 'facebook',
            // 'x' => 'x',
        ];
        return $columns;
    }

    private function author_actions()
    {
        $actions = (object) array(
            'show' => 'Voir',
            'edit' => 'Modifier',
            'delete' => "Supprimer",
        );
        return $actions;
    }

    private function author_fields()
    {
        $fields = [
            'name' => [
                'title' => 'Nom',
                'field' => 'text'
            ],
            'email' => [
                'title' => 'Email',
                'field' => 'email'
            ],
            'profile' => [
                'title' => 'Profil',
                'field' => 'text'
            ],
            'instagram' => [
                'title' => 'Instagram',
                'field' => 'text'
            ],
            'linkedin' => [
                'title' => 'Linkedin',
                'field' => 'text'
            ],
            'facebook' => [
                'title' => 'Facebook',
                'field' => 'text'
            ],
            'x' => [
                'title' => 'X',
                'field' => 'text'
            ],
            'photo' => [
                'title' => 'Photo',
                'field' => 'file'
            ],
        ];
        return $fields;
    }
}
