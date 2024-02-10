<?php

namespace App\Livewire;

use Livewire\Component;
use Livewire\WithFileUploads;

class UploadImage extends Component
{
    use WithFileUploads;
    public $uploadImage;
    protected $rules = [
        "uploadImage" => 'image'
    ];
    public function updatedUploadImage() {
        // $this->validate([
        //     'uploadImage' => 'image|max:1024', // Validasi gambar (opsional)
        // ]);
    }
    public function render()
    {
        return view('livewire.upload-image');
    }
}
