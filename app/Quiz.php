<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Quiz extends Model
{

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'title',
        'slug',
        'description',
        'resultTitle',
        'resultDescription',
        'avatarPositionX',
        'avatarPositionY',
        'coverImageUrl',
        'enabled'
    ];

    /**
     * Get all the related images
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function images() {
        return $this->hasMany('App\QuizImage');
    }

    public function getImageCoverPath() {
        return 'quizzes' . DIRECTORY_SEPARATOR . $this->id;
    }

    public function getImageThumbPath() {
        return 'quizzes' . DIRECTORY_SEPARATOR . $this->id . DIRECTORY_SEPARATOR . 'thumb';
    }
}
