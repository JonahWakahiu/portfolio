<?php

namespace App\Http\Controllers\Portfolio;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class DownloadCv extends Controller
{
    /**
     * Handle the incoming request.
     */
    public function __invoke(Request $request)
    {
        if (Storage::disk('public')->exists('files/jonahcv.pdf')) {
            return Storage::disk('public')->download('files/jonahcv.pdf');
        }
        abort(404);
    }
}
