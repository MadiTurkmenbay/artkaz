<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Category;
use Illuminate\Http\Request;

class CategoryController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function index()
    {
        $categories = Category::paginate(5);
        return view('admin.categories.index', compact('categories'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function create()
    {
        return view('admin.categories.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param \Illuminate\Http\Request $request
     * @return \Illuminate\Http\RedirectResponse
     */
    public function store(Request $request)
    {
        $request->validate([
            'title_kz' => 'required',
            'title_en' => 'required',
            'title_ru' => 'required',
            'poster' => 'nullable|image',
        ]);

        $categoriesItem = new Category();
        $categoriesItem['poster'] = Category::uploadImage($request);
        $categoriesItem
            ->setTranslation('title', 'en', $request->title_en)
            ->setTranslation('title', 'kk', $request->title_kz)
            ->setTranslation('title', 'ru', $request->title_ru)
            ->save();

        return redirect()->route('admin.categories.index')->with('success', 'Категория добавлена');
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param int $id
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function edit($id)
    {
        $category = Category::find($id);
        return view('admin.categories.edit', compact('category'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param \Illuminate\Http\Request $request
     * @param int $id
     * @return \Illuminate\Http\RedirectResponse
     */
    public function update(Request $request, $id)
    {
        $request->validate([
            'title_kz' => 'required',
            'title_en' => 'required',
            'title_ru' => 'required',
        ]);
        $category = Category::find($id);

        $categoriesPhoto  = $category->poster;

        if ($request->file('poster')) {
            $categoriesPhoto = Category::uploadImage($request, $category->poster);
        }

        $category->poster = $categoriesPhoto;

        $category
            ->setTranslation('title', 'en', $request->title_en)
            ->setTranslation('title', 'kk', $request->title_kz)
            ->setTranslation('title', 'ru', $request->title_ru)
            ->update();
        return redirect()->route('admin.categories.index')->with('success', 'Изменения сохранены');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param int $id
     * @return \Illuminate\Http\RedirectResponse
     */
    public function destroy($id)
    {
        $category = Category::find($id);

        $category->delete();
        return redirect()->route('admin.categories.index')->with('success', 'Категория удалена');
    }

    public function updateStatus(Request $request)
    {
        $category = Category::find($request->category_id);
        $category->status = $category->status ? 0 : 1;
        $category->save();
        return response()->json(['success' => 'Status change successfully.']);
    }
}
