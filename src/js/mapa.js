if (document.querySelector('#mapa')) {
    
    var map = L.map('mapa').setView([-31.337485, -64.3015226], 16);

    L.tileLayer('https://tile.openstreetmap.org/{z}/{x}/{y}.png', {
        attribution: '&copy; <a href="https://www.openstreetmap.org/copyright">OpenStreetMap</a> contributors'
    }).addTo(map);

    L.marker([-31.337485, -64.3015226]).addTo(map)
        .bindPopup(`
            <h2 class="mapa__heading">DevWebCamp</h2>
            <p class="mapa__texto">Centro de Convenciones de Argentina</p>
        `)
        .openPopup();
}