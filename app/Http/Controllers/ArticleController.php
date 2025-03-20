<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Services\ArticleService;

class ArticleController extends Controller
{
    protected $articleService;

    public function __construct(ArticleService $articleService) {
        $this->articleService = $articleService;
    }

    public function index() {
        return response()->json($this->articleService->getAllArticles());
    }

    public function store(Request $request) {
        try {
            $post = $this->articleService->create($request->all());
            return response()->json($post, 201);
        } catch (\Exception $e) {
            return response()->json(['error' => $e->getMessage()], 400);
        }
    }

    public function show($id) {
        return response()->json($this->articleService->getArticle($id));
    }

    public function update(Request $request, $id) {
        return response()->json($this->articleService->update($id, $request->all()));
    }

    public function destroy($id) {
        return response()->json($this->articleService->delete($id));
    }
}
