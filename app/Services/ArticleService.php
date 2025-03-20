<?php

namespace App\Services;

use App\Repositories\ArticleRepositoryInterface;

class ArticleService {
    protected $articleRepository;

    public function __construct(ArticleRepositoryInterface $articleRepository) {
        $this->articleRepository = $articleRepository;
    }

    public function getAllArticles() {
        return $this->articleRepository->getAllArticles();
    }

    public function getArticle($id) {
        return $this->articleRepository->getArticle($id);
    }

    public function create(array $data) {
        if (strlen($data['title']) < 5) {
            throw new \Exception("Le titre doit contenir au moins 5 caractères.");
        }
        return $this->articleRepository->create($data);
    }

    public function update($id, array $data) {
        return $this->articleRepository->update($id, $data);
    }

    public function delete($id) {
        return $this->articleRepository->delete($id);
    }
}
