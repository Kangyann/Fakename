<?php

namespace App\Livewire;

use Illuminate\Support\Facades\Storage;
use Livewire\Component;

class DownloadImage extends Component
{ protected $listeners = ['takeScreenshot'];
    public function download()
    {
        $screenshot = 'data:image/png;base64,' . $this->getScreenshotData();
        // Unduh tangkapan layar sebagai file gambar
        $filename = 'screenshot.png';
        $this->downloadImage($screenshot, $filename);
    }

    protected function getScreenshotData()
    {
        return $this->emit('takeScreenshot');
    }

    protected function downloadImage($data, $filename)
    {
        $data = base64_decode(preg_replace('#^data:image/\w+;base64,#i', '', $data));
        $path = 'public/' . $filename;
        Storage::put($path, $data);

        return response()->download(storage_path('app/' . $path), $filename)->deleteFileAfterSend();
    }

    public function render()
    {
        return view('livewire.download-image');
    }
}
