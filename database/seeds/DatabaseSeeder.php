<?php

use Illuminate\Database\Seeder;
    use Illuminate\Support\Carbon;
    use Illuminate\Support\Facades\DB;
    use Illuminate\Support\Str;

    class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        $inserts = [];
        for ($i = 0; $i<10; $i++){
            $inserts[] = [
                'title' => Str::random(10),
                'likes'  => rand(0,10),
                'slug'  => Str::random(100),
                'created_at'  => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at'  => Carbon::now()->format('Y-m-d H:i:s')
            ];
        }
        DB::table('posts')->insert($inserts);
    }
}
