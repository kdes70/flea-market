<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Intervention\Image\Facades\Image;
use Symfony\Component\HttpFoundation\File\UploadedFile;

/**
 * @property string $path
 * @property string $name
 * @property mixed $thumbnail_path
 * @property int $model_id
 */
class Photo extends Model
{
    protected $table = "photos";

    protected $fillable = ['name', 'path', 'thumbnail_path', 'model_id'];

    protected $base_dir = 'uploads/ads';

    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function model()
    {
        return $this->belongsTo(Ad::class);
    }

    /**
     * @param string $name
     * @param int $model
     * @return mixed
     */
    public static function named(string $name, int $model)
    {
        return (new static)->saveAs($name, $model);
    }

    /**
     * @param array $data
     * @return mixed
     */
    public static function savePhoto(array $data)
    {
        return (new static)->saveInDB($data);
    }

    /**
     * @param string $name
     * @param int $model
     * @return $this
     * @internal param int $model
     */
    public function saveAs(string $name, int $model)
    {
        $this->name = $name;
        $this->model_id = $model;
        $this->path = sprintf('%s/%s/%s', $this->base_dir, $this->model_id, $this->name);
        $this->thumbnail_path = sprintf('%s/%s/thumb-%s', $this->base_dir, $this->model_id, $this->name);

        return $this;
    }

    /**
     * @param UploadedFile $file
     * @return $this
     */
    public function move(UploadedFile $file)
    {
        $file->move($this->base_dir . "/" . $this->model_id, $this->name);

        $this->resizePhoto(900);
        $this->makeThumbnail(200);

        return $this;
    }

    /**
     * @param array $photos
     * @return array|null
     * @throws \Exception
     */
    public function saveInDB(array $photos): ?array
    {
        if (!$photos) {
            throw new \Exception('Photo not make');
        }

        $res = null;

        foreach ($photos as $photo) {
            $data = [
                'name'           => $photo->name,
                'path'           => $photo->path,
                'thumbnail_path' => $photo->thumbnail_path,
                'model_id'       => $photo->model_id,
            ];

            $res[] = $this->create($data);
        }

        return $res;
    }


    /**
     * @param int $size
     */
    protected function resizePhoto(int $size)
    {
        \Image::make($this->path)
            ->fit($size)
            ->save($this->path);
    }

    /**
     * @param int $size
     */
    protected function makeThumbnail(int $size)
    {
        if (file_exists($this->path)) {
            \Image::make($this->path)
                ->fit($size)
                ->save($this->thumbnail_path);
        }

    }


}
