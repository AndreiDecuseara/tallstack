<?php

namespace App\Http\Controllers;

// teamupdivision/filestack-package
// use Filestack\FilestackClient;
// use Filestack\Filelink;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use App\Traits\FilestackTrait;
use App\Jobs\FilestackProcess;
use App\Jobs\VimeoUpload;
use App\Filestack;

class FilestackController extends Controller
{
    use FilestackTrait;
    protected $APIkey;
    //protected $filelink;

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        //$this->middleware('auth');
        //$this->APIkey = config('services.stripe.APIkey');
        //$this->APIkey = config('services.filestack.key');
    }

    public function passThru($handle)
    {

        $file = 'https://cdn.filestackcontent.com/' . str_replace('.zip', '', $handle);
        header("Content-Type: application/zip");
        header("Content-Disposition: attachment; filename=$handle");
        readfile($file);
        exit;
    }

    public function getFile($handle)
    {
       //return $this->filestackDownload($file);
       return response()->json([
          'file' => Filestack::whereHandle($handle)->first()
      ]); 
    }
    
    public function mimetype($file)
    {
         $mime = $this->filestackMime($file);
         return response()->json([
            'mimetype' => $mime
        ]);
    }
    
    public function filestackrecord(Request $request)
    {
        // Grab the data
        $filestack = $request->filestack;
        // Check if video
        //$is_video = (strpos($filestack['mimetype'], 'video') !== false ? 1 : 0);
        $name = pathinfo($filestack['originalPath'], PATHINFO_FILENAME);
        $type = explode('/', $filestack['mimetype']);
        $file = Filestack::firstOrCreate(
            ['url' => $filestack['url']],
            [
                'url' => $filestack['url'], 
                'handle' => $filestack['handle'],
                'uploadid' => $filestack['uploadId'],
                'type' => $type[0],
                'name' => $name,
                'size' => $filestack['size'],
                'fsoutput' => serialize($filestack)
            ]
        );



        \Log::channel('filestack')->info('-----STARTING NEW for : ' . $type[0] . '----');
        if ($type[0] == 'video')
        {
            \Log::channel('filestack')->info('-----Dispatching VimeoUpload for: ' . $file . '----');
            VimeoUpload::dispatchNow($file);
        }

        
    }
   
}
