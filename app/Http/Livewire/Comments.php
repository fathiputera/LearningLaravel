<?php

namespace App\Http\Livewire;

use App\Models\Comment;
use Livewire\Component;
use Carbon\Carbon;

class Comments extends Component
{
    public $comments;

    public $newComment;

    public function mount()
    {

        $initialComments = Comment::all();
        //dd($initialComments);
        $this->comments = $initialComments;
    }

    public function addComment()
    {
        if ($this->newComment == '') {
            return;
        }

        array_unshift($this->comments, [
            'body' => $this->newComment,
            'created_at' => Carbon::now()->diffForHumans(),
            'creator' => 'Bitfumes'
        ]);
        $this->newComment = "";

    }
    public function render()
    {
        return view('livewire.comments');
    }
}
