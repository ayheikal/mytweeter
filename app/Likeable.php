<?php

namespace App;

trait Likeable { 

    public function likes(){
        return $this->hasMany(Likes::class);
    }
    public function getLikes(){
        return Likes::where("tweet_id",$this->id)->get()->where("liked",1)->count();

    }
    public function getDislikes(){
        return Likes::where("tweet_id",$this->id)->get()->where("liked",0)->count();

    }

    public function like($user=null){
        $this->likes()->updateOrCreate([
            'user_id'=> $user?$user->id:auth()->id],
            [
            'liked'=>true,
        ]);
    }

    public function disLike($user=null){
        $this->likes()->updateOrCreate([
            'user_id'=>$user?$user->id:auth()->id],
            [
            'liked'=>false,
        ]);
    }

    public function isLiked(User $user)
    {
        return (bool) $this->likes()->where("user_id",$user->id)->where("liked",true)->exists();
    }

    public function isDisliked(User $user)
    {
        return (bool) $this->likes()->where("user_id",$user->id)->where("liked",false)->exists();
    }
}