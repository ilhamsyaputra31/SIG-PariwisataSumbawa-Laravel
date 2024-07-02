@extends('layouts.frontend')

@push('style-alt')
    <link rel="stylesheet" href="https://unpkg.com/leaflet@1.9.4/dist/leaflet.css"
        integrity="sha256-p4NxAoJBhIIN+hmNHrzRCf9tD/miZyoHS5obTRR9BMY=" crossorigin="" />

    <style>
        #map {
            height: 1000px;
        }
    </style>
@endpush

@section('content')
    <!--==================== HOME ====================-->
    <section class="blog section" id="LokasiWisata">
        <div class="blog__container container">
            <div class="blog__content">
                <section class="islands swiper-slide">
                    <div id="map"></div>
                </section>
            </div>
        </div>
    </section>
@endsection


@push('script-alt')
    <script src="https://unpkg.com/leaflet@1.9.4/dist/leaflet.js"
        integrity="sha256-20nQCchB9co0qIjJZRGuk2/Z9VM+kNiyxNV1lvTlZBo=" crossorigin=""></script>
    <script>
        //jhdsijf

        const map = L.map('map').setView([-8.6161847, 116.9259758], 9);

        const tiles = L.tileLayer('https://tile.openstreetmap.org/{z}/{x}/{y}.png', {
            maxZoom: 19,
            attribution: '&copy; <a href="http://www.openstreetmap.org/copyright">OpenStreetMap</a>'
        }).addTo(map);




        // Data popup yang ingin ditampilkan
        const popups = [{
                position: [-8.6161847, 116.9259758],
                text: 'Popup 1'

            },
            {
                position: [-8.7633601, 116.6122562, 10.7],
                text: 'Popup 2'
            },
            {
                position: [-8.4112949, 116.447049, 15],
                text: 'Popup 3'
            }
        ];

        // Loop melalui array popups untuk menambahkan marker dan popup
        popups.forEach(popup => {
            const marker = L.marker(popup.position).addTo(map)
                .bindPopup(popup.text);
        });
    </script>
@endpush
