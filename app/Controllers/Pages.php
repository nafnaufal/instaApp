<?php

namespace App\Controllers;
use App\Models\Post;
use App\Models\Comment;

class Pages extends BaseController
{
    public function timeline()
    {
        $post = new Post();
        $data['post'] = $post->select('post.id, path, username, caption, likes, post.created_at, id_user')->join('users', 'users.id = post.id_user')->orderBy('post.created_at', 'DESC')->findAll();
        // dd($data);
        return view('pages/timeline.php', $data);
    }

    public function postingan($id)
    {
        $post = new Post();
        $getPost = $post->select('post.id, path, username, caption, likes, post.created_at, id_user')->join('users', 'users.id = post.id_user')->where([
            'post.id' => $id,
        ])->find();
        $data['post'] = $getPost[0];
        
        $comment = new Comment();
        $data['comment'] = $comment->select('comment.id, username, comment, comment.created_at, comment.id_user')->join('post', 'post.id = comment.id_post')->where([
            'post.id' => $id,
        ])->join('users', 'users.id = comment.id_user')->orderBy('comment.created_at', 'DESC')->findAll();
        // dd($data);
        return view('pages/postingan.php', $data);
    }

    public function upload()
    {
        return view('pages/upload.php');
    }
    
    public function uploadProccess()
    {
        helper(['form', 'url']);

        $post = new Post();

        $validated = $this->validate([
            'image' => [
                'uploaded[image]',
                'mime_in[image,image/jpg,image/jpeg,image/gif,image/png]',
                'max_size[image,4096]',
            ],
        ]);

        if (!$validated) {
            session()->setFlashdata('error', 'Upload failed');
            return redirect()->back();
        } else {
            $img = $this->request->getFile('image');
            $newName = $img->getRandomName();
            $img->move('public/post/'.user_id(), $newName);

            $data = [
                'path' =>  'public/post/'.user_id().'/'.$img->getName(),
                'id_user' => user_id(),
                'caption' => $this->request->getPost('caption'),
                'likes' => 0,
                'comments' => 0,
            ];
            $post->insert($data);
            // dd($data);            
            return redirect('/');
        }
    }
    public function comment()
    {
        $comment = new Comment();

        $data = [
            'comment' => $this->request->getPost('comment'),
            'id_user' => $this->request->getPost('id_user'),
            'id_post' => $this->request->getPost('id_post'),
        ];
        // dd($data);
        $comment->insert($data);

        return redirect()->back();
    }
}
