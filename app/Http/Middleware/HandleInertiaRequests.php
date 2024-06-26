<?php

namespace App\Http\Middleware;

use Inertia\Middleware;
use App\Models\Category;
use Illuminate\Http\Request;

class HandleInertiaRequests extends Middleware
{
    /**
     * The root template that is loaded on the first page visit.
     *
     * @var string
     */
    protected $rootView = 'app';

    /**
     * Determine the current asset version.
     */
    public function version(Request $request): string|null
    {
        return parent::version($request);
    }

    /**
     * Define the props that are shared by default.
     *
     * @return array<string, mixed>
     */
    public function share(Request $request): array
    {
        return [
            ...parent::share($request),

            'nav' => [
                'main'  => Category::all()->load(['subcategory']),
            ], 
            
            'auth' => [
                'user' => $request->user(),
            ],
        ];
    }
}
