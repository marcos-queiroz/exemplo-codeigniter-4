<?php namespace App\Controllers;
use App\Models\NewsModel;
use CodeIgniter\Controller;

class News extends Controller
{
    public function index()
    {
        $model = new NewsModel();
        
        $data = [
            'news'  => $model->getNews(),
            'title' => 'News archive',
        ];
        
        echo view('templates/header', $data);
        echo view('news/overview', $data);
        echo view('templates/footer');
    }
    
    public function view($slug = null)
    {
        $model = new NewsModel();
        
        $data['news'] = $model->getNews($slug);
        
        if (empty($data['news']))
        {
            throw new \CodeIgniter\Exceptions\PageNotFoundException('Cannot find the news item: '. $slug);
        }
        
        $data['title'] = $data['news']['title'];
        
        echo view('templates/header', $data);
        echo view('news/view', $data);
        echo view('templates/footer');
    }
    
    public function create()
    {
        helper('form');
        $model = new NewsModel();
        
        echo view('templates/header', ['title' => 'Create a news item']);
        if (!$this->validate([
                'title' => 'required|min_length[3]|max_length[255]',
                'body'  => 'required'
            ]))
        {
            echo view('news/create');
        }
        else
        {
            $model->save([
                'title' => $this->request->getVar('title'),
                'slug'  => url_title($this->request->getVar('title')),
                'body'  => $this->request->getVar('body'),
            ]);

            echo view('news/success');
        }
        echo view('templates/footer');
    }
}