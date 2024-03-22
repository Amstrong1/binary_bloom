<?php

namespace App\Http\Controllers;

use App\Models\Article;
use App\Models\Category;
use RealRashid\SweetAlert\Facades\Alert;
use App\Http\Requests\StoreArticleRequest;
use App\Http\Requests\UpdateArticleRequest;
use App\Models\Author;

class ArticleController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('admin.article.index', [
            'articles' => Article::all(),
            'my_actions' => $this->article_actions(),
            'my_attributes' => $this->article_columns(),
        ]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('admin.article.create', [
            'my_fields' => $this->article_fields()
        ]);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreArticleRequest $request)
    {
        $article = new Article();

        $fileName = time() . '.' . $request->image->extension();
        $path = $request->file('image')->storeAs('images/articles', $fileName, 'public');

        $article->status = $request->status;
        $article->author_id = $request->author;
        $article->category = $request->category;
        $article->title = $request->title;
        $article->content = $request->content;
        $article->image = $path;

        if ($article->save()) {
            Alert::toast("Opération éffectué avec succès", 'success');
            return redirect('article');
        } else {
            Alert::toast("Une erreur est survenue", 'error');
            return redirect()->back()->withInput($request->input());
        }
    }

    /**
     * Display the specified resource.
     */
    public function show(Article $article)
    {
        return view('admin.article.edit', [
            'article' => $article,
            'my_fields' => $this->article_fields(),
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Article $article)
    {
        return view('admin.article.edit', [
            'article' => $article,
            'my_fields' => $this->article_fields(),
        ]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateArticleRequest $request, Article $article)
    {
        $article = Article::find($article->id);

        if ($request->file !== null) {
            $fileName = time() . '.' . $request->image->extension();
            $path = $request->file('image')->storeAs('images/articles', $fileName, 'public');
        }

        $article->author_id = $request->author;
        $article->category = $request->category;
        $article->title = $request->title;
        $article->content = $request->content;
        $article->satus = $request->satus;

        if (isset($path)) {
            $article->image = $path;
        }

        if ($article->save()) {
            Alert::toast("Modification éffectuée succès", 'success');
            return redirect('article');
        };
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Article $article)
    {
        try {
            $article = $article->delete();
            Alert::success("Suppression", "Succès");
            return redirect('article');
        } catch (\Exception $e) {
            Alert::error("Oops", "Une erreur est survenue",);
            return redirect()->back();
        }
    }

    private function article_columns()
    {
        $columns = (object) [
            'image' => '',
            'author' => 'Auteur',
            'category' => 'Categorie',
            'title' => 'Titre',
            'status' => 'Statut',
        ];
        return $columns;
    }

    private function article_actions()
    {
        $actions = (object) array(
            'show' => 'Voir',
            'edit' => 'Modifier',
            'delete' => "Supprimer",
        );
        return $actions;
    }

    private function article_fields()
    {
        $fields = [
            'author' => [
                'title' => 'Auteur',
                'field' => 'model',
                'options' => Author::all(),
            ],
            'category' => [
                'title' => 'Categorie',
                'field' => 'model',
                'options' => Category::all(),
            ],
            'status' => [
                'title' => 'Statut',
                'field' => 'select',
                'options' => [
                    'draft' => 'Brouillon',
                    'published' => 'Publié',
                ],
            ],
            'image' => [
                'title' => 'Image',
                'field' => 'file',
            ],
            'title' => [
                'title' => 'Titre',
                'field' => 'text',
                'colspan' => true
            ],
            'content' => [
                'title' => 'Contenu',
                'field' => 'richtext',
                'colspan' => true
            ]
        ];
        return $fields;
    }
}
