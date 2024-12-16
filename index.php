<head>
    <style>
        html,
        

        #map {
            width: 100%;
            height: 100%;
        }
    </style>
</head>


<body>
    <?php include 'header.php'; ?>

        <div id="map"></div>

        <?php include 'footer.php'; ?>
</body>

<script>
    // Inisialisasi peta
    var map = L.map("map").setView([-7.626257573285393, 109.620202677449], 10);

    // Tile Layer Base Map
    var basemap = L.tileLayer("https://{s}.tile.openstreetmap.org/{z}/{x}/{y}.png", {
        attribution: '&copy; <a href="https://www.openstreetmap.org/copyright">OpenStreetMap</a> contributors',
    });

    // Menambahkan basemap ke dalam peta
    basemap.addTo(map);

    // GeoJSON Point Kantor Kecamatan
    var kantor_kecamatan = L.geoJSON(null, {
        // Style
        pointToLayer: function(feature, latlng) {
            return L.marker(latlng, {
                icon: L.icon({
                    iconUrl: "img/pin2.png", // icon marker
                    iconSize: [25, 25], // ukuran icon
                    iconAnchor: [24, 48], // posisi icon terhadap titik (point)
                    popupAnchor: [0, -48], // posisi popup terhadap icon
                    tooltipAnchor: [-16, -30], // posisi tooltip terhadap icon
                }),
            });
        },

        // onEachFeature
        onEachFeature: function(feature, layer) {
            // variable popup content
            var popup_content = "Nama: " + feature.properties.REMARK + "<br>" +
                "Koordinat: " + feature.geometry.coordinates[1] + ", " + feature.geometry.coordinates[0];

            layer.on({
                click: function(e) {
                    // kantor_kecamatan.bindPopup(popup_content);

                    // Menampilkan feature modal
                    $("#featureModalTitle").html("Kantor_Kecamatan");
                    $("#featureModalBody").html(popup_content);
                    $("#featureModal").modal("show");
                },
                mouseover: function(e) {
                    kantor_kecamatan.bindTooltip(feature.properties.REMARK, {
                        direction: "top",
                        sticky: true,
                    });
                },
            });
        },

    });

    $.getJSON("data/kantor_kecamatan.geojson", function(data) {
        kantor_kecamatan.addData(data); // Menambahkan data ke dalam GeoJSON Point Sarana Prasarana
        map.addLayer(kantor_kecamatan); // Menambahkan GeoJSON Point Sarana Prasarana ke dalam peta
    });

    // GeoJSON Polyline Jalan
    map.createPane('panejalan');
    map.getPane("panejalan").style.zIndex = 401;
    var jalan = L.geoJSON(null, {
        pane: 'panejalan',
        // Style
        style: function(feature) {
            return {
                color: "Brown",
                opacity: 5,
                weight: 3,
            };
        },
        // onEachFeature
        onEachFeature: function(feature, layer) {
            // variable popup content
            var popup_content = "Nama Jalan: " + feature.properties.REMARK;

            layer.on({
                click: function(e) {
                    // jalan.bindPopup(popup_content);

                    // Menampilkan feature modal
                    $("#featureModalTitle").html("Jalan");
                    $("#featureModalBody").html(popup_content);
                    $("#featureModal").modal("show");
                },
                mouseover: function(e) {
                    jalan.bindTooltip(feature.properties.REMARK, {
                        direction: "auto",
                        sticky: true,
                    });
                },
            });
        },

    });

    $.getJSON("data/jalan.geojson", function(data) {
        jalan.addData(data); // Menambahkan data ke dalam GeoJSON Polyline Jalan
        map.addLayer(jalan); // Menambahkan GeoJSON Polyline Jalan ke dalam peta
    });

    //var symbologyCategorized = { "Tinggi": "#756bb1", "Sedang": "#bcbddc", "Rendah": "#efedf5" };

    // GeoJSON Polygon Kecamatan
    map.createPane('paneKecamatan');
    map.getPane("paneKecamatan").style.zIndex = 301;

    // Definisikan warna untuk setiap kecamatan
    var kecamatanColors = {
        "Kebumen": "#FAEDCE",
        "Pejagoan": "#CCD5AE",
        "Alian": "#FAEDCE",
        "Kutowinangun": "#CCD5AE",
        "Karanganyar": "#FAEDCE",
        "Karangsambung": "#F7B5CA",
        "Buayan": "#FAEDCE",
        "Puring": "#C8ACD6",
        "Ayah": "#CCD5AE",
        "Petanahan": "#F7B5CA",
        "Kuwarasan": "#F7B5CA",
        "Rowokele": "#F7B5CA",
        "Adimulyo": "#CCD5AE",
        "Gombong": "#FAEDCE",
        "Karangbolong": "#C8ACD6",
        "Prembun": "#F7B5CA",
        "Ambal": "#F7B5CA",
        "Bonorowo": "#FAEDCE",
        "Mirit": "#CCD5AE",
        "Padureso": "#CCD5AE",
        "Sruweng": "#C8ACD6",
        "Klirong": "#C8ACD6",
        "Sempor": "#F7B5CA",
        "Poncowarno": "#C8ACD6",
    };

    // Konfigurasi GeoJSON Kecamatan
    var kecamatan = L.geoJSON(null, {
        pane: 'paneKecamatan',
        // Simbolisasi sesuai nama kecamatan
        style: function(feature) {
            var color = kecamatanColors[feature.properties.WADMKC] || "#cccccc"; // Warna default jika nama kecamatan tidak ditemukan
            return {
                color: "black",
                weight: 1,
                fillOpacity: 5,
                fillColor: color
            };
        },


        // onEachFeature
        onEachFeature: function(feature, layer) {
            // variable popup content
            var popup_content = "Kecamatan: " + feature.properties.WADMKC + "<br>" +
                "Kode Kecamatan: " + feature.properties.KDCPUM;

            layer.on({
                click: function(e) {
                    // Kecamatan.bindPopup(popup_content);

                    // Menampilkan feature modal
                    $("#featureModalTitle").html("Kecamatan");
                    $("#featureModalBody").html(popup_content);
                    $("#featureModal").modal("show");
                },
                mouseover: function(e) {
                    kecamatan.bindTooltip(feature.properties.KEBUMEN, {
                        direction: "auto",
                        sticky: true,
                    });
                },
            });
        },

    });

    $.getJSON("data/kecamatan.geojson", function(data) {
        kecamatan.addData(data); // Menambahkan data ke dalam GeoJSON Polygon Kecamatan
        map.addLayer(kecamatan); // Menambahkan GeoJSON Polygon Kecamatan ke dalam peta
    });

    // Control Layer
    var baseMaps = {
        "Basemap": basemap,
    };

    var overlayMaps = {
        "Kantor Kecamatan": kantor_kecamatan,
        "Jalan": jalan,
        "Kecamatan": kecamatan,
    };

    var controllayer = L.control.layers(baseMaps, overlayMaps);
    controllayer.addTo(map);

    // Back to Default Extent
    L.control.defaultExtent()
        .addTo(map);

    // Search Control
    var searchControl = new L.Control.Search({
        layer: kecamatan,
        propertyName: 'KEBUMEN',
        marker: false,
        moveToLocation: function(latlng, title, map) {
            //map.fitBounds( latlng.layer.getBounds() );
            var zoom = map.getBoundsZoom(latlng.layer.getBounds());
            map.setView(latlng, zoom); // access the zoom
        }
    });

    searchControl.on('search:locationfound', function(e) {

        //console.log('search:locationfound', );

        //map.removeLayer(this._markerSearch)

        e.layer.setStyle({
            fillColor: '#0ff',
            color: 'gray'
        });
        if (e.layer._popup)
            e.layer.openPopup();

    }).on('search:collapsed', function(e) {

        kecamatan.eachLayer(function(layer) { //restore feature color
            kecamatan.resetStyle(layer);
        });
    });

    map.addControl(searchControl); //inizialize search control

    // Logo Watermark
    L.Control.Watermark = L.Control.extend({
        onAdd: function(map) {
            var img = L.DomUtil.create('img');

            img.src = 'icon/logosv.png';
            img.style.width = '150px';

            return img;
        },

        onRemove: function(map) {
            // Nothing to do here
        }
    });

    L.control.watermark = function(opts) {
        return new L.Control.Watermark(opts);
    }

    L.control.watermark({
        position: 'bottomleft'
    }).addTo(map);
</script>
</body>

</html>