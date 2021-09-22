<?php

namespace App\Http\Controllers;

use App\Model\Like;
use App\Model\Reply;
use Illuminate\Http\Request;

class LikeController extends Controller
{
    public function like(Reply $reply){
        $reply->like()->create(["user_id"=>1]);
    }


    public function unLike(Reply $reply){
        $reply->like()->where(["user_id"=>1])->delete();
    }
}
