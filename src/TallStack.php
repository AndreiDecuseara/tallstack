<?php

namespace TallStackPackage\TallStack;
// teamupdivision/filestack-package
use Illuminate\Filesystem\Filesystem;
use Laravel\Ui\Presets\Preset;
use Illuminate\Support\Facades\Storage;

class TallStack extends Preset
{
    const STUBSPATH = __DIR__.'/resources/';

    /**
     * Install the preset.
     *
     * @return void
     */
    public static function install()
    {
        static::updatePackages();
        
        static::makePackage();
        
    }

    /**
     * Update the given package array.
     *
     * @param  array  $packages
     * @return array
     */
    protected static function updatePackageArray(array $packages)
    {
        return $packages;
    }

    /**
     * Update the default welcome page file.
     *
     * @return void
     */
    protected static function makePackage()
    {


        // Copy css
        static::copyFile('css/app.css', resource_path('css'), 'app.css');
        static::copyFile('css/custom.css',  resource_path('css'),'custom.css');

        static::copyFile('js/app.js', resource_path('js'), 'app.js');
        static::copyFile('js/custom.js',  resource_path('js'),'custom.js');

        static::copyFile('config/webpack.mix.js', '.' ,'webpack.mix.js');
    }

        /**
     * Delete a resource
     *
     * @param string $resource
     * @return void
     */
    private static function deleteResource($resource)
    {
        (new Filesystem)->delete(resource_path($resource));
    }

        /**
     * Copy a directory
     *
     * @param string $file
     * @param string $destination
     * @return void
     */
    private static function copyFile($file, $dir, $name)
    {
        if(!(new Filesystem)->exists($dir)){
            (new Filesystem)->makeDirectory($dir, 0755, true); 
        }
        $destination = $dir . '/' . $name;
        (new Filesystem)->copy(static::STUBSPATH.$file, $destination);
    }

    /**
     * Copy a directory
     *
     * @param string $directory
     * @param string $destination
     * @return void
     */
    private static function copyDirectory($directory, $destination)
    {
        (new Filesystem)->copyDirectory(static::STUBSPATH.$directory, $destination);
    }
}
