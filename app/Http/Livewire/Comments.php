<?php

namespace App\Http\Livewire;

use Livewire\Component;
use Carbon\Carbon;

class Comments extends Component
{
    public $comments = [
        [
            'body'=>'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.',
            'created_at'=>'3 mins ago',
            'creator'=>'Wimpee'
        ]
    ];

    public $latestComment;

    public function addComment()
    {
        if($this->latestComment == ''){
            return;
        }

        array_unshift($this->comments, [
            'body' => $this->latestComment,
            'created_at' => Carbon::now()->diffForHumans(),
            'creator' => 'Riza'
        ]);

        $this->latestComment = "";
    }

    public function render()
    {
        return view('livewire.comments');
    }
}
