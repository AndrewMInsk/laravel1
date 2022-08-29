<?php

    namespace App\Http\Controllers;

    use Illuminate\Support\Facades\Log;

    class PatternsController
    {
        private $availablePatterns = ['first', 'second'];
        public function show($alias)
        {
            if(!in_array($alias, $this->availablePatterns)){
                Log::error('Pattern not found: ' . $alias);
                return view('not_found', compact('alias'));
            }
            Log::info('Showing pattern: ' . $alias);
            return view('patterns.view', compact('alias'));
        }
    }