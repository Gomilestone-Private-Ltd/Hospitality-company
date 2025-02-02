<?php 
namespace App\Helper;

use File;
use Illuminate\Support\Facades\Storage;
use App\Helper\CreateAppLog;
use App\Helper\Masked;
use App\Helper\Slug;

class Picture{
    
    /**
     * @method Upload picture
     * @param Request 
     * @return  response
     */ 
    public Static function uploadPicture($path,$picture)
    {
        try {
            $fileName = Slug::smallSlug(). '.' . $picture->extension();
            $Newpath = $path.''.$fileName;
            $picture->move($path,$fileName);
            CreateAppLog::getInfoLog('Upload File Request By '.Masked::getUserName().'');
            return $Newpath;
        } catch (\Exception $e) {
            CreateAppLog::getErrorLog('Upload File Catch Block Request By '.Masked::getUserName().'');
        }

    }
    
    /**
     * @method Get Picture Detail
     * @param Request  Picture
     * @return response
     */ 
    public static function getPictureDetails($picture)
    {  
        try { 
            CreateAppLog::getInfoLog('Get File Detail Request By '.Masked::getUserName().'');
            return substr($picture->getClientOriginalName(), 0, strpos($picture->getClientOriginalName(), "."));
        } catch (\Exception $e) {
            CreateAppLog::getErrorLog('Get File Detail Catch Block Request By '.Masked::getUserName().'');
        }
        
    }
    
    /**
     * @method Remove file
     * @param file path
     * @return response
     */
    public static function removeFile($path)
    {
        return File::delete($path);
    }
    
    /**
     * @method Get file Size
     * @param file path
     * @return response
     */
    public static function getFileSize($path)
    {
        return $path->getSize();
    }

    /**
     * @method Get file Extention
     * @param file path
     * @return response
     */
    public static function getFileExtention($path)
    {
        return $path->getClientOriginalExtension();
    }

    /**
     * @method Uplaod file to s3 bucket
     * @param File
     * @return File path
     */
    public static function uploadToS3($path,$picture)
    {
        $path = Storage::disk('s3')->put($path, $picture);
        $path = Storage::disk('s3')->url($path);
        return $path;
    }

    /**
     * @method Remove file From s3 bucket
     * @param file path
     * @return response
     */
    public static function removeFileFromS3($path)
    {
        //Truncate path https://opines3.s3.ap-south-1.amazonaws.com from image path length 43;
        return Storage::disk('s3')->delete(substr($path,43));
    }
    
}

?>