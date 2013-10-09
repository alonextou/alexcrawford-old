<?php

class Article extends Eloquent {

	public function tags()
    {
        return $this->belongsToMany('Tag');
    }
    
}