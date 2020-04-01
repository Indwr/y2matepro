<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use YouTube\YouTubeDownloader;
use App\VideoRecord;

class TestController extends Controller
{
    public function index(){
        
        return view('index');
    }

    public function downloadVideo(Request $request){
        $yt = new YouTubeDownloader();
        $links = $yt->getDownloadLinks($request->videolink);
        echo "<pre>";
        print_r($links);
         $saveVideoData  = new VideoRecord();
         $saveVideoData->video_id = '';


         copy('https://my-cdn.com/files/image.jpg', $tempImage);

return response()->download($tempImage, $filename);

    }
}
