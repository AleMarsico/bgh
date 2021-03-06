<?php
namespace App\Models;

use Illuminate\Database\Eloquent\Model;
// use Illuminate\Database\Eloquent\SoftDeletes;

class Media extends Profiled
{
    // use SoftDeletes;

    protected $table = 'media';
    protected $softDelete = false;
    protected $dates = ['deleted_at'];

    public function info()
    {
        return $this->hasOne(MediaInfo::class, 'media_id');
    }

    // public function getLink()
    // {
    //     $res = new \stdClass();

    //     // if($this->is_microsite==1){
    //     //     $res->url = $this->microsite;
    //     //     $res->target = '_blank';
    //     // }
    //     // else{
    //         $res->url = route('media', ['id' => $this->id, 'slug' => $this->slug]);;
    //         $res->target = '_self';
    //     // }

    //     return $res;
    // }


    public function getOriginalPath()
    {
        return sprintf('%s/uploads/media/%s', base_path(), $this->name);
    }

}
