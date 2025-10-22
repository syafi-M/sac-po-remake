<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}" data-theme="light">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=figtree:400,500,600,700,900&display=swap" rel="stylesheet" />
    <!-- Scripts -->
    @vite(['resources/css/app.css', 'resources/js/app.js'])
    <link rel="stylesheet" href="https://unpkg.com/leaflet/dist/leaflet.css" />
    <script src="https://unpkg.com/leaflet/dist/leaflet.js"></script>
    <script src="{{ asset('js/jquery.min.js') }}"></script>
    <title>Klien Kami - PT. Surya Amanah Cendekia</title>
    <style>
        .leaflet-container {
            background: transparent;
        }

        /* Custom grid styles for responsive client display */
        .client-grid-mobile {
            display: grid;
            gap: 1rem;
            justify-items: center;
            justify-content: center;
        }

        .client-grid-mobile-3 {
            grid-template-columns: repeat(3, minmax(0, 1fr));
        }

        .client-grid-mobile-2 {
            grid-template-columns: repeat(2, minmax(0, 1fr));
        }

        .client-grid-desktop {
            display: none;
            gap: 1rem;
            justify-items: center;
            justify-content: center;
        }

        .client-grid-desktop-5 {
            grid-template-columns: repeat(5, minmax(0, 1fr));
        }

        @media (min-width: 768px) {
            .client-grid-mobile {
                display: none;
            }

            .client-grid-desktop {
                display: grid;
            }
        }
    </style>
</head>

<body class="min-w-full min-h-screen ">
    <div>
        <x-navbar />
    </div>
    <div class="mx-5 mt-20 md:mt-28 md:mx-10">
        <div class="flex justify-center mx-5 mt-5 rounded-lg md:mx-10 outline-4 outline-dashed outline-amber-500 drop-shadow-md outline-offset-2">
            <div class="relative w-full p-1 rounded-lg bg-gradient-to-br from-stone-600 to-stone-700">
                <div id="map" class="min-h-[200px] lg:min-h-[400px] bg-transparent"></div>
            </div>
        </div>
        <div class="space-y-10">
            <div class="mx-5 mt-10 md:mx-10 ">
                <p class="text-sm font-semibold text-center md:text-base"><i class="font-semibold ri-subtract-line text-amber-500"></i><i class="font-semibold ri-subtract-line text-amber-500"></i> Klien Kami <i class="font-semibold ri-subtract-line text-amber-500"></i><i class="font-semibold ri-subtract-line text-amber-500"></i></p>
            </div>
            <div class="flex flex-col items-center justify-center gap-2">
                <p class="text-lg font-bold text-center md:text-2xl">Semua Klien Kami</p>

                <!-- Mobile Grid (3, 2 pattern) -->
                <div class="w-full max-w-4xl">
                    @php
                        $mitras = $client->values()->all();
                        $pattern = [3, 2]; // Pola untuk phone: 3 item, lalu 2 item
                        $index = 0;
                        $row = 0;
                    @endphp
                    @while ($index < count($mitras))
                        @php
                            // Determine how many columns for this row based on the pattern
                            $columns = $pattern[$row % count($pattern)];
                            // Get the items for this row
                            $items = collect($mitras)->slice($index, $columns);
                            $gridClass = $columns === 3 ? 'client-grid-mobile-3' : 'client-grid-mobile-2';
                        @endphp
                        <div class="{{ $gridClass }} client-grid-mobile">
                            @forelse ($items as $i => $item)
                                <div class="flex flex-col items-center justify-start w-full">
                                    <img src="{{ asset('storage/images/' . $item->img) }}" class="object-contain w-16 h-16" alt="{{ $item->name }}" srcset="">
                                    <p class="w-24 py-2 text-[8pt] font-semibold text-center">{{ $item->name }}</p>
                                </div>
                            @empty
                            @endforelse
                        </div>
                        @php
                            $index += $columns;
                            $row++;
                        @endphp
                    @endwhile
                </div>

                <!-- Desktop Grid (5, 5 pattern) -->
                <div class="w-full max-w-6xl">
                    @php
                        $index = 0;
                        $row = 0;
                        $desktopPattern = [5, 5]; // Pola untuk PC: 5 item, lalu 5 item
                    @endphp
                    @while ($index < count($mitras))
                        @php
                            // Determine how many columns for this row based on the pattern
                            $columns = $desktopPattern[$row % count($desktopPattern)];
                            // Get the items for this row
                            $items = collect($mitras)->slice($index, $columns);
                            // All desktop rows use the same grid class (5 columns)
                            $gridClass = 'client-grid-desktop-5';
                        @endphp
                        <div class="{{ $gridClass }} client-grid-desktop">
                            @forelse ($items as $i => $item)
                                <div class="flex flex-col items-center justify-start w-full">
                                    <img src="{{ asset('storage/images/' . $item->img) }}" class="object-contain md:w-20 md:h-20" alt="{{ $item->name }}" srcset="">
                                    <p class="w-24 py-2 text-xs font-semibold text-center md:w-28">{{ $item->name }}</p>
                                </div>
                            @empty
                            @endforelse
                        </div>
                        @php
                            $index += $columns;
                            $row++;
                        @endphp
                    @endwhile
                </div>
            </div>
        </div>
    </div>
    <div class="mt-10">
        <x-footer />
    </div>
    <script>
        let centerMap = [-2, 118]; // default Indonesia
        let zoomMap = 5; // default zoom

        // cek jika device mobile atau tablet
        if (window.innerWidth <= 1024) {
            centerMap = [-7.25, 111.75]; // tengah Jawa (kisaran Madiun)
        }
        // Create flat map (no basemap)
        var map = L.map('map', {
            center: centerMap, // Center Indonesia
            zoom: zoomMap,
            preferCanvas: true, // Use canvas rendering for better performance
            zoomControl: false,
            attributionControl: false,
            dragging: true,
            scrollWheelZoom: false, // no scroll zoom
            doubleClickZoom: false, // no double click zoom
            boxZoom: false, // no box zoom
            keyboard: false, // no keyboard controls
            touchZoom: false // no pinch zoom
        });

        console.log(map.getSize());


        // Buat pane khusus untuk polygon (supaya ada di bawah label)
        map.createPane("polygons");
        map.getPane("polygons").style.zIndex = 400; // sama dengan overlayPane tapi kita kontrol sendiri

        // Buat pane khusus untuk label + garis
        map.createPane("labels");
        map.getPane("labels").style.zIndex = 650; // lebih tinggi dari polygon

        // Load GeoJSON (Indonesia provinces)
        fetch("geojson/indonesia-province-simple.json")
            .then(res =>
                res.json()
            )
            .then(data => {
                console.log(data);
                L.geoJSON(data, {
                    style: feature => {
                        // ✅ Check province name
                        let highlighted = ["JAWA BARAT", "JAWA TENGAH", "JAWA TIMUR"];
                        let name = feature.properties.Propinsi.toUpperCase();
                        return {
                            color: "#888",
                            weight: 1,
                            fillColor: highlighted.includes(name) ? "#65A30D" : "#d0c2aa",
                            fillOpacity: 1
                        };
                    }
                }).addTo(map);
            });

        function addCityLabel(city) {
            let cityLatLng = city.coords;
            let cityPoint = map.latLngToLayerPoint(cityLatLng);

            let offsetX = city.offset[0];
            let offsetY = city.offset[1];

            // ukuran label
            let labelWidth = 80;
            let labelHeight = 20;

            // posisi label
            let labelPoint = L.point(cityPoint.x + offsetX, cityPoint.y + offsetY);
            let labelLatLng = map.layerPointToLatLng(labelPoint);

            // ujung garis: tengah atas / bawah / tengah label
            let position = city.linePos || "middle"; // "top" | "bottom" | "middle"
            let endPoint;
            if (position === "top") {
                endPoint = L.point(labelPoint.x + labelWidth / 2, labelPoint.y - 4);
            } else if (position === "bottom") {
                endPoint = L.point(labelPoint.x + labelWidth / 2, labelPoint.y + labelHeight - 9);
            } else {
                // default tengah
                endPoint = L.point(labelPoint.x + labelWidth / 2, labelPoint.y + labelHeight / 2);
            }
            let endLatLng = map.layerPointToLatLng(endPoint);

            // simpan polyline path
            let linePoints = [cityLatLng];

            // jumlah sisi max 3
            let sides = Math.min(city.sides || 3, 3);

            if (sides === 1) {
                // langsung
                linePoints.push(endLatLng);
            } else if (sides === 2) {
                // corner di tengah jarak
                let cornerPoint = L.point(cityPoint.x, (cityPoint.y + endPoint.y) / 2);
                let cornerLatLng = map.layerPointToLatLng(cornerPoint);
                linePoints.push(cornerLatLng, endLatLng);
            } else {
                // 3 sisi → city → corner1 → corner2 → end
                let corner1Point = L.point(cityPoint.x, cityPoint.y + offsetY / 2);
                let corner1LatLng = map.layerPointToLatLng(corner1Point);

                let corner2Point = L.point(endPoint.x, corner1Point.y);
                let corner2LatLng = map.layerPointToLatLng(corner2Point);

                linePoints.push(corner1LatLng, corner2LatLng, endLatLng);
            }

            // buat garis
            L.polyline(linePoints, {
                color: "white",
                weight: 2.5,
                opacity: 1,
                pane: "labels"
            }).addTo(map);

            // titik kecil di kota
            L.circleMarker(cityLatLng, {
                radius: 2,
                color: "white",
                fillColor: "white",
                fillOpacity: 1,
                pane: "labels"
            }).addTo(map);

            // label marker
            L.marker(labelLatLng, {
                icon: L.divIcon({
                    className: "city-label",
                    html: `<div class="label-box" style="width:${labelWidth}px; height:${labelHeight}px; text-align:center;">
                 <span style="
                    font-size:10px;
                    font-weight:bold;
                    color:white;">${city.name}</span>
               </div>`
                }),
                pane: "labels"
            }).addTo(map);
        }

        // ✅ City labels (better placement)
        var cities = [{
                name: "Surabaya",
                coords: [-7.258924, 112.753533],
                offset: [50, -40],
                sides: 3,
                linePos: "bottom"
            },
            {
                name: "Lamongan",
                coords: [-7.117927, 112.413758],
                offset: [-40, -40],
                sides: 1,
                linePos: "bottom"
            },
            {
                name: "Kediri",
                coords: [-7.847516, 112.016525],
                offset: [20, 40],
                sides: 3,
                linePos: "top"
            },
            {
                name: "Madiun",
                coords: [-7.631761, 111.530968],
                offset: [-60, 30],
                sides: 3,
                linePos: "top"
            },
            {
                name: "Ponorogo",
                coords: [-7.866419, 111.466472],
                offset: [-40, 40],
                sides: 1,
                linePos: "top"
            },
            {
                name: "Sidoarjo",
                coords: [-7.452835378661048, 112.70376565138675],
                offset: [40, -10],
                sides: 2,
                linePos: "bottom"
            },
            {
                name: "Nganjuk",
                coords: [-7.604310481417298, 111.89876863507381],
                offset: [-110, 20],
                sides: 3,
                linePos: "top"
            },
            {
                name: "Gresik",
                coords: [-7.164749293098419, 112.65087619920911],
                offset: [90, -20],
                sides: 3,
                linePos: "bottom"
            }
        ];

        cities.forEach(addCityLabel);
    </script>
</body>

</html>
