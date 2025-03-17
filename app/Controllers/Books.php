<?php

namespace App\Controllers;

use CodeIgniter\Controller;
use App\Models\BookModel;
use App\Models\ReviewModel;

class Books extends Controller
{
    public function index()
    {
        $bookModel = new BookModel();
        $data['books'] = $bookModel->findAll();

        return view('books/list', $data);
    }

    public function details($id)
    {
        $bookModel = new BookModel();
        $reviewModel = new ReviewModel();

        $data['book'] = $bookModel->find($id);
        $data['reviews'] = $reviewModel->where('book_id', $id)->findAll();

        if (!$data['book']) {
            return redirect()->to('/books')->with('error', 'Book not found');
        }

        return view('books/details', $data);
    }

    public function submitReview()
    {
        $reviewModel = new ReviewModel();

        $data = [
            'book_id' => $this->request->getPost('book_id'),
            'user_name' => $this->request->getPost('user_name'),
            'rating' => $this->request->getPost('rating'),
            'review' => $this->request->getPost('review'),
        ];

        $reviewModel->insert($data);
        return redirect()->to('/books/details/' . $data['book_id']);
    }
}
