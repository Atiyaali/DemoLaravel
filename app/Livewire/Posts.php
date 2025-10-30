<?php

namespace App\Livewire;

use App\Models\Post;
use Livewire\Component;
use Illuminate\Support\Facades\Log;
class Posts extends Component
{
    public $post = [
        'title' => '',
        'content' => '',
    ];

    protected $rules = [
        'post.title' => 'required|string|min:6',
        'post.content' => 'required|string|max:500',
    ];

  public function save()
{
    $this->validate();
   Post::create($this->post);
    session()->flash('message', 'Post saved!');
    $this->reset('post');
}


    public function render()
    {
        return view('livewire.posts');
    }
}
