<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Category;
use App\Models\Product;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class ProductController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Contracts\View\Factory|\Illuminate\Contracts\View\View
     */
    public function index(Request $request)
    {
        $categories = Category::pluck('title', 'id')->all();
        $products = Product::paginate(10);

        return view('admin.products.index',compact('products','categories'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Contracts\View\Factory|\Illuminate\Contracts\View\View
     */
    public function create()
    {
        $categories = Category::pluck('title', 'id')->all();
        return view('admin.products.create',compact('categories'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\RedirectResponse
     */
    public function store(Request $request)
    {
        $request->validate([
            'title_kz' => 'required',
            'title_ru' => 'required',
            'title_en' => 'required',
            'artist_kz'=> 'required',
            'artist_ru'=> 'required',
            'artist_en'=> 'required',
            'material_kz' => 'required',
            'material_ru' => 'required',
            'material_en' => 'required',
            'size' => 'required',
            'price' => 'required|integer',
            'description_kz' => 'required',
            'description_ru' => 'required',
            'description_en' => 'required',
            'category_id' => 'required|integer',
            'poster' => 'nullable|image',
        ]);

        $productsItem = new Product();
        $productsItem['poster'] = Product::uploadImage($request);
        $productsItem['size'] = $request->size;
        $productsItem['price'] = $request->price;
        $productsItem['category_id'] = $request->category_id;
        $productsItem
            ->setTranslation('title', 'en', $request->title_en)
            ->setTranslation('title', 'kk', $request->title_kz)
            ->setTranslation('title', 'ru', $request->title_ru)
            ->setTranslation('artist', 'en', $request->artist_en)
            ->setTranslation('artist', 'kk', $request->artist_kz)
            ->setTranslation('artist', 'ru', $request->artist_ru)
            ->setTranslation('material', 'en', $request->material_en)
            ->setTranslation('material', 'kk', $request->material_kz)
            ->setTranslation('material', 'ru', $request->material_ru)
            ->setTranslation('description', 'en', $request->description_en)
            ->setTranslation('description', 'kk', $request->description_kz)
            ->setTranslation('description', 'ru', $request->description_ru)
            ->save();
        return redirect()->route('admin.products.index')->with('success', 'Продукт добавлен');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Contracts\View\Factory|\Illuminate\Contracts\View\View
     */
    public function show($id)
    {
        $product = Product::with('categories')->find($id);
        return view('admin.products.show',compact('product'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Contracts\View\Factory|\Illuminate\Contracts\View\View
     */
    public function edit($id)
    {
        $product = Product::find($id);
        $categories = Category::pluck('title', 'id')->all();
        return view('admin.products.edit',compact('product','categories'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\RedirectResponse
     */
    public function update(Request $request, $id)
    {
        $request->validate([
            'title_kz' => 'required',
            'title_ru' => 'required',
            'title_en' => 'required',
            'artist_kz'=> 'required',
            'artist_ru'=> 'required',
            'artist_en'=> 'required',
            'material_kz' => 'required',
            'material_ru' => 'required',
            'material_en' => 'required',
            'size' => 'required',
            'price' => 'required|integer',
            'description_kz' => 'required',
            'description_ru' => 'required',
            'description_en' => 'required',
            'category_id' => 'required|integer',
            'poster' => 'nullable|image',
        ]);

        $productsItem = Product::find($id);
        if ($file = Product::uploadImage($request, $productsItem->poster)) {
            $productsItem['poster'] = $file;
        }
        $productsItem['size'] = $request->size;
        $productsItem['price'] = $request->price;
        $productsItem['category_id'] = $request->category_id;
        $productsItem
            ->setTranslation('title', 'en', $request->title_en)
            ->setTranslation('title', 'kk', $request->title_kz)
            ->setTranslation('title', 'ru', $request->title_ru)
            ->setTranslation('artist', 'en', $request->artist_en)
            ->setTranslation('artist', 'kk', $request->artist_kz)
            ->setTranslation('artist', 'ru', $request->artist_ru)
            ->setTranslation('material', 'en', $request->material_en)
            ->setTranslation('material', 'kk', $request->material_kz)
            ->setTranslation('material', 'ru', $request->material_ru)
            ->setTranslation('description', 'en', $request->description_en)
            ->setTranslation('description', 'kk', $request->description_kz)
            ->setTranslation('description', 'ru', $request->description_ru)
            ->update();

        return redirect()->route('admin.products.index')->with('success', 'Изменения сохранены');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\RedirectResponse
     */
    public function destroy($id)
    {
        $product = Product::find($id);
        $product->delete();
        return redirect()->route('admin.products.index')->with('success', 'Продукт удален');
    }

}
