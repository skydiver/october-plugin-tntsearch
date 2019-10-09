# TNTSearch for OctoberCMS
> Add full text search support to your models


## Installation
1. clone to `martin/tntsearch`


## Usage
1. add Searchable trait to your model
2. build indexes `php artisan scout:import \\Author\\Plugin\\Models\\Post`


## Search models
```
// search on your posts
Post::search('My post title')->get();

// paginate posts query
Post::search('My post title')->paginate(25);
```


## More info
* https://github.com/teamtnt/laravel-scout-tntsearch-driver