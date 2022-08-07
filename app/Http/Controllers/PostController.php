<?php


    namespace App\Http\Controllers;


    use Illuminate\Support\Collection;
    use Illuminate\Support\Str;

    class PostController
    {
        public function show($id)
        {
            $users = [
                'user1' => 'city1',
                'user2' => 'city2',
                'user3' => 'city3',
                'user4' => 'city4',
                'user5' => 'city5',
            ];
            if(!isset($users[$id])){
                return 'Not found';
            }

            $str = '<b>text</b>';
            $employees = [
                [
                    'name' => 'user1',
                    'surname' => 'surname1',
                    'salary' => 1000,
                ],
                [
                    'name' => 'user2',
                    'surname' => 'surname2',
                    'salary' => 2000,
                ],
                [
                    'name' => 'user3',
                    'surname' => 'surname3',
                    'salary' => 3000,
                ],
            ];
            Collection::macro('toUpper', function () {
                return $this->map(function ($value) {
                    return Str::upper($value);
                });
            });
            $collection = collect(['first', 'second']);

            $upper = $collection->toUpper();
            dd($upper);

            $collection = collect(['taylor', 'abigail', null])->map(function ($name) {
                return strtoupper($name);
            })->reject(function ($name) {
                return empty($name);
            });
            return view('post.show', [
                'title' => 'page title',
                'text'  => 'page content',
                'str' => $employees,
                'isAuth' => true
            ]);

        }
        public function all()
        {
            return 'hello world ALL';
        }
    }