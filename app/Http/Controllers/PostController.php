<?php


    namespace App\Http\Controllers;
    use Illuminate\Support\Carbon;
    use Illuminate\Support\Facades\DB;

    use Illuminate\Support\Collection;
    use Illuminate\Support\Facades\Log;
    use Illuminate\Support\Str;

    class PostController
    {
        public function show($id)
        {
            Log::info('Showing the user profile for user: '.$id);
            Log::error('Showing the user profile for user: '.$id);

            return view('post.show', compact('id'));

        }
        public function all()
        {
            return 'hello world ALL';
        }
    }