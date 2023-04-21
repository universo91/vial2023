
const distritoSelect = document.getElementById('distrito');

distritoSelect.addEventListener('change' , async (e) => {

    const idDistrito = e.target.value;
    const selectRuta = document.getElementById('ruta');

    let htmlRutas = '<option value="">Seleccione ruta</option>';

    if(!idDistrito) {
        selectRuta.innerHTML = htmlRutas;
        return;
    }

    const respuesta = await fetch(`/distrito/${idDistrito}/rutas`, {
        method: 'GET'
    });

    const rutas = await respuesta.json();
    console.log(rutas);

    await rutas.map((ruta) => {
        htmlRutas += `<option value="${ruta.id}">${ruta.codigo}</option>`;
    });
    console.log(selectRuta);
    selectRuta.innerHTML= htmlRutas;
})


