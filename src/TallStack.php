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
        
        $filesystem = new Filesystem();

        $filesystem->copyDirectory(__DIR__ . '/../stubs/default', base_path());
        
    }

    public static function installAuth()
    {
        $filesystem = new Filesystem();

        $filesystem->copyDirectory(__DIR__ . '/../stubs/auth', base_path());
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

}
