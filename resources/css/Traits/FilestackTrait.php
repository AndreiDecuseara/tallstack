<?php 
namespace App\Traits;
// teamupdivision/filestack-package
trait FilestackTrait
{
    
    public function filestackGetData($file, $field)
    {
        /*
        Possible fields:
        [mimetype] => application/zip
        [uploaded] => 1603307530117.9
        [container] => newinstitute
        [writeable] => 1
        [filename] => Multiple_offers_v7.zip
        [location] => S3
        [key] => zoHSuUDiQXmIrszScerq_Multiple_offers_v7.zip
        [path] => zoHSuUDiQXmIrszScerq_Multiple_offers_v7.zip
        [size] => 21267603
        */
        // Make the call & return the field
        $file = str_replace('https://cdn.filestackcontent.com/', '', $file);
        $url = 'https://www.filepicker.io/api/file/' . $file . '/metadata';
        $result = json_decode(file_get_contents($url),true);
        return (string)$result[$field];
    }
    
    public function filestackMime($file)
    {
        $mime = $this->filestackGetData(str_replace('https://cdn.filestackcontent.com/', '', $file), 'mimetype');
        return $mime;
    }
    
    public function filestackPath($file)
    {
        $path = $this->filestackGetData($file, 'path');
        return config('services.aws.bucket_newinstitute') . '/' . $path;
    }

}
