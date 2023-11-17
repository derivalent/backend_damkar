
 //Tampilan Maps
 const map = L.map('map').setView([-8.234256388870639, 114.29139328370496], 10);
 const tiles = L.tileLayer('https://tile.openstreetmap.org/{z}/{x}/{y}.png', {
     attribution: '&copy; <a href="http://www.openstreetmap.org/copyright">OpenStreetMap</a>'
 }).addTo(map);

 //Marker
 //Lokasi 1
 L.marker([-8.21124339808114, 114.37976274943635]).addTo(map).bindPopup("<b>MAKO DAMKAR BANYUWANGI</b><br>Telp: (0333) 422113").openPopup();

 //Lokasi 2
 L.marker([-8.397562413652105, 114.26973405885026]).addTo(map).bindPopup("<b>SEKTOR SRONO</b><br>Srono")

 //Lokasi 3
 L.marker([-8.361345425593777, 114.15939366898164]).addTo(map).bindPopup("<b>SEKTOR GENTENG</b><br>Genteng")
