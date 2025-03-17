<?php

namespace App\Models;

use CodeIgniter\Model;

class ReviewModel extends Model
{
    protected $table = 'reviews';
    protected $primaryKey = 'id';
    protected $allowedFields = ['book_id', 'user_id', 'user_name', 'rating', 'review', 'created_at'];

    public function getReviewsWithUsers($book_id)
    {
        return $this->select('reviews.*, users.name AS user_name')
                    ->join('users', 'users.id = reviews.user_id')
                    ->where('book_id', $book_id)
                    ->findAll();
    }
}
