<?php

use App\Models\Category;


/* Global Use in category  */

if (!function_exists('getCategories')) {
    function getCategories() {

         return Category::with('subcategory')->get();
         
    }
}


/** set admin sidebar active */

if (!function_exists('setSidebar')) {
    function setSidebar(array $routes): ?String
    {
        foreach ($routes as $route) {
            if (request()->routeIs($route)) {
                return 'mm-active';
            }
        }
        return null;
    }
}
