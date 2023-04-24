
const distritoSelect = document.getElementById('distrito');
const selectRuta = document.getElementById('ruta');

distritoSelect.addEventListener('change' , async (e) => {

    const idDistrito = e.target.value;


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

const tramosSelect = document.getElementById('tramo');

selectRuta.addEventListener('change', async (e) => {

    const idRuta = e.target.value;

    let selectHtml = '<option value="">Seleccione tramo</option>';

    if( !idRuta )
    {
        tramosSelect.innerHTML = selectHtml;
        return;
    }

    const respuesta = await fetch(`/ruta/${ idRuta }/tramos`, {
        method: 'GET'
    });

    const tramos = await respuesta.json();

    tramos.map( (tramo) => {
        selectHtml += `<option value="${ tramo.id }">${ tramo.numero_tramo }</option>`;
    });

    selectTramo.innerHTML = selectHtml;
});


