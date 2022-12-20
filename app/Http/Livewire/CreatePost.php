<?php

namespace App\Http\Livewire;

use App\Models\Post;
use Illuminate\Support\Facades\Auth;
use Livewire\Component;

class CreatePost extends Component
{
    public $body;

    public function render()
    {
        return view('livewire.create-post');
    }

    public function createPost()
    {
        Post::create([
            'user_id' => Auth::id(),
            'body' => $this->body,
        ]);

        $this->body = '';

        $this->emit('postCreated');
    }
}
