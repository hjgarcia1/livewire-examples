<?php

namespace App\Http\Livewire;

use Illuminate\Support\Facades\Mail;
use Livewire\Component;

class ContactForm extends Component
{
    public $name;
    public $email;
    public $comment;
    public $success;
    protected $rules = [
        'name' => 'required',
        'email' => 'required|email',
        'comment' => 'required|min:5',
    ];

    public function render()
    {
        return view('livewire.contact-form');
    }

    public function submit()
    {
        $this->validate();

        Mail::send(
            'emails.contact',
            array(
                'name' => $this->name,
                'email' => $this->email,
                'comment' => $this->comment,
            ),
            function ($message) {
                $message->from('your_email@your_domain.com');
                $message->to('your_email@your_domain.com', 'John Doe')->subject('Contact Form');
            }
        );

        \session()->flash('success', 'Your message was submitted');

        $this->clearFields();
    }

    private function clearFields()
    {
        $this->name = '';
        $this->email = '';
        $this->comment = '';
    }
}
