<?php

namespace App\Http\Livewire;

use App\Models\Post;
use Illuminate\Support\Facades\Session;
use Livewire\Component;

class PostCard extends Component
{
    public $post;
    public $contentInput;

    public function mount(Post $post)
    {
        $this->post = $post;
        $this->contentInput = $post->content;
    }

    public function update()
    {
        $updated = $this->post->update([
            'content' => $this->contentInput
        ]);
        if ($updated) {
            toastr()
                ->persistent()
                ->closeButton()
                ->addSuccess('Post buatan ' . $this->post->user->name . ' dengan id ' . $this->post->id . ' berhasil di-update.');
        } else {
            toastr()
                ->persistent()
                ->closeButton()
                ->addError('Post buatan ' . $this->post->user->name . ' dengan id ' . $this->post->id . ' gagal di-update.');
        }
    }

    public function render()
    {
        return view('livewire.post-card');
    }
}
