<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Http\UploadedFile;
use Illuminate\Support\Facades\Storage;

class Pict extends Model
{
    protected $table = 'pict';
    protected $guarded = ['id'];
    protected $appends = [
        'url',
    ];

    public static function store($file, $dir = null, $user = null)
    {
        // Modify filename
        $extension = $file->getClientOriginalExtension();
        $filename = uniqid(date('YmdHis') . '_', true);
        $directory = 'public/';

        if ($dir !== null) {
            $directory .= $dir;
        }

        if ($user === null) {
            $user = auth()->user();
        }

        // New instance for database resource
        $instance = new static (
            [
                'id'               => $user->id,
                'file_name'        => $filename,
                'client_file_name' => $file->getClientOriginalName(),
                'extension'        => $extension,
                'size'             => $file->getSize(),
                'mime'             => $file->getMimeType(),
                'upload_by'        => $user->id,
                'dir'              => $dir === null ? '/' : '/' . $dir,
            ]
        );

        // Copy to dir and store to database
        $file->storeAs($directory, $filename . '.' . $extension);

        $instance->save();

        return $instance;
    }

    /**
     * Laravel accessor for Url
     *
     * @todo validate the filename
     * @return string filename with url
     */
    public function getUrlAttribute()
    {
        $path = $this->dir . '/' . $this->file_name . '.' . $this->extension;
        if (Storage::exists('public' . $path)) {
            return Storage::url($path);
        }

        return Storage::url($this->dir . '/' . $this->file_name);
    }

    public function getDownloadPathAttribute()
    {
        return ('public/' . $this->dir . '/' . $this->file_name . '.' . $this->extension);
    }

    /**
     * Delete instance of resource and delete file
     *
     * @todo delete from database
     * @return bool
     * @throws \Exception
     */
    public function delete()
    {
        parent::delete();

        return Storage::delete('public' . $this->dir . '/' . $this->file_name . '.' . $this->extension);
    }

    /**
     * Laravel relation to User
     *
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function uploader()
    {
        return $this->belongsTo(User::class);
    }

    /**
     * @param \App\Models\User $user
     * @return string
     */
    public static function getUploadDir(User $user)
    {

        return "portfolio";
    }

    public function user()
    {
        return $this->belongsTo('App\User');
    }
}
