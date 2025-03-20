<?php

namespace App\Repositories;

interface ArticleRepositoryInterface {
    public function getAllArticles();
    public function getArticle($id);
    public function create(array $data);
    public function update($id, array $data);
    public function delete($id);
}
