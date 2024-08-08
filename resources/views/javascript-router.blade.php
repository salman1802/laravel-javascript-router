<script>
    var routesArray = [];
        @php
            $routes = Route::getRoutes();
            $routeInfo = [];

            foreach ($routes as $route) {
                $name = $route->getName();
                $uri = $route->uri();
                if ($name && $uri) {
                    $routeInfo[] = ['name' => $name, 'url' => url($uri)];
                }
            }
        @endphp
        var routesArray = @json($routeInfo);

        function getRouteUrl(route_name, params = []) {
            let route = routesArray.find(route => route.name === route_name);
            if (!route) {
                return '';
            }
            let url = route.url;
            let paramIndex = 0;
            url = url.replace(/{([^}]+)}/g, (match, p1) => {
                if (paramIndex < params.length) {
                    return encodeURIComponent(params[paramIndex++]);
                }
                return match;
            });
            return url;
        }
</script>