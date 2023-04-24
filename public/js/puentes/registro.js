
const selectRuta = document.getElementById('ruta');
const selectTramo = document.getElementById('tramo');
const selectClases = document.getElementById('clases_id');

selectRuta.addEventListener('change', async (e) => {
    idRuta = e.target.value;

    let selectHtml = '<option value="">Seleccione tramo</option>';

    if( !idRuta ) {
        selectTramo.innerHTML = selectHtml;
        return;
    }
    console.log(idRuta);
    const respuesta = await fetch(`/ruta/${idRuta}/tramos`, {
        method: 'GET'
    });

    const tramos = await respuesta.json();

    tramos.map( (tramo) => {
        selectHtml += `<option value="${ tramo.id }">${ tramo.numero_tramo }</option>`
    });

    selectTramo.innerHTML = selectHtml;
});

selectClases.addEventListener('change', async (e) => {

    const selectTipos = document.getElementById('tipos_id');

    let selectHtml = `<option value="">Seleccione tipo</option>`;

    const idClase = e.target.value;

    if( !idClase ) {
        selectTipos.innerHTML = selectHtml;
        return;
    }

    const respuesta = await fetch(`/clase/${idClase}/tipos`, {
        method: 'GET'
    });

    const tipos = await respuesta.json();

    tipos.map( (tipo) => {
        selectHtml += `<option value="${ tipo.id }">${ tipo.nombre }</option>`;
    });

    selectTipos.innerHTML = selectHtml;
});

