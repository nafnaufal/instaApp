<?php

namespace App\Controllers;
use App\Models\Post;
use App\Models\Comment;
use App\Models\Like;

class Pages extends BaseController
{
    public function timeline()
    {
        $post = new Post();
        $liked = $post->select('post.id, path, username, caption, likes, post.created_at, post.id_user, like.like')->join('users', 'users.id = post.id_user')->join('like', 'users.id = like.id_user AND post.id = like.id_post')->orderBy('post.created_at', 'DESC')->where([
            'like.like' => 1,
        ])->findAll();

        $disliked = $post->select('post.id, path, username, caption, likes, post.created_at, post.id_user, like.like')->join('users', 'users.id = post.id_user')->join('like', 'users.id = like.id_user AND post.id = like.id_post')->orderBy('post.created_at', 'DESC')->where([
            'like.like' => 0,
        ])->findAll();
        
        $nodata = $post->select('post.id, path, username, caption, likes, post.created_at, post.id_user')->join('users', 'users.id = post.id_user')->orderBy('post.created_at', 'DESC')->findAll();

        $id = array();
        $timeline = array();
        foreach ($liked as $d) {
            array_push($id, $d['id']);
            array_push($timeline, $d);
        }
        foreach ($disliked as $d) {
            array_push($id, $d['id']);
            array_push($timeline, $d);
        }
        
        
        foreach($nodata as $d){
            
            if(!in_array($d['id'], $id)){
                array_push($timeline, $d);
            }

        }
        $data['post'] = $timeline;
        return view('pages/timeline.php', $data);
    }

    public function postingan($id)
    {
        $post = new Post();
        $like = new Like();
        $getPost = $post->select('post.id, path, username, caption, likes, post.created_at, id_user')->join('users', 'users.id = post.id_user')->where([
            'post.id' => $id,
        ])->find();

        $getLike = $like->select()->where([
            'id_post' => $id,
            'id_user' => user_id(),
        ])->find();
        $data['like'] = array();
        $data['post'] = array();
        if (array_key_exists(0, $getLike)){
            $data['like'] = $getLike[0];
        }
        
        if (array_key_exists(0, $getPost)){
            $data['post'] = $getPost[0];
        }
        
        $comment = new Comment();
        $data['comment'] = $comment->select('comment.id, username, comment, comment.created_at, comment.id_user')->join('post', 'post.id = comment.id_post')->where([
            'post.id' => $id,
        ])->join('users', 'users.id = comment.id_user')->orderBy('comment.created_at', 'DESC')->findAll();
        // dd($data['like']);
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
    public function like($post_id)
    {
        // $query->num_rows() > 0
        $like = new Like();
        
        $getLike = $like->select()->where([
            'id_user' => user_id(),
            'id_post' => $post_id,
        ])->findAll();

        $in = [
            'like' => 1,
            'id_user' => user_id(),
            'id_post' => $post_id,
        ];

        $liked = [
            'like' => 1,
        ];
        $disliked = [
            'like' => 0,
        ];

        if(count($getLike) > 0){

            if($getLike[0]['like'] == 1){
                $like->update($getLike[0]['id'], $disliked);
            }else{
                $like->update($getLike[0]['id'], $liked);
            }
        }else{
            $like->insert($in);
        }
        // dd($getLike);
        return redirect('/');
    }
}
