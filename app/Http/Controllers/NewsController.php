<?php

namespace App\Http\Controllers;

use App\Models\NewsModel;
use Illuminate\Http\Request;
use App\Services\CategoriesService;

class NewsController extends Controller
{
    public function index() {
        $newsModel = new NewsModel;
        $newsCollection = $newsModel->getNewsCollection();
        return view('news/index', [
            'newsCollection' => $newsCollection
        ]);
    }

    public function show(int $id) {
        $newsModel = new NewsModel;
        $news = $newsModel->getNews($id) ?? ['title' => '404 news not found'];
        return view('news/show', ['news' => $news]);
    }

    public function showCategory(int $id) {
        $newsModel = new NewsModel;
        $foundNews = $newsModel->getNewsWithCategoryId($id);
        return view('news/index', [
            'newsCollection' => $foundNews
        ]);
    }
}
