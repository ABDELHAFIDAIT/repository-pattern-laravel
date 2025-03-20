<?php

namespace App\Repositories;

use App\Models\Article;

class ArticleRepository implements ArticleRepositoryInterface {
    public function getAllArticles() {
        return Article::all();
    }

    public function getArticle($id) {
        return Article::findOrFail($id);
    }

    public function create(array $data) {
        return Article::create($data);
    }

    public function update($id, array $data) {
        $Article = Article::findOrFail($id);
        $Article->update($data);
        return $Article;
    }

    public function delete($id) {
        return Article::destroy($id);
    }
}
