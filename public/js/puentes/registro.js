const selectRuta = document.getElementById('ruta');
const selectClases = document.getElementById('clases_id');
const selectDepartamento = document.getElementById("departamento");
const selectProvincia = document.getElementById("provincia");
const selectDistrito = document.getElementById('distrito');

selectDepartamento.addEventListener('change', async ( e ) => {
    console.log( e.target.value );

    const idDepartamento = e.target.value;

    let htmlProvincias = '<option value="">Seleccione provincia</option>';

    if(!idDepartamento) {
        selectProvincia.innerHTML = htmlProvincias;
        return;
    }

    const respuesta = await fetch(`/departamento/${idDepartamento}/provincias`, {
        method: 'GET'
    });

    const provincias = await respuesta.json();


    await provincias.map((provincia) => {
        htmlProvincias += `<option value="${provincia.id}">${provincia.nombre}</option>`
    })
    console.log( htmlProvincias );

    selectProvincia.innerHTML = htmlProvincias;
});


selectProvincia.addEventListener('change', async (e) => {

    let htmlDistritos = '<option value="">Seleccione distrito</option>';

    const idProvincia = e.target.value;

    if( !idProvincia ) {
        selectDistrito.innerHTML = htmlDistritos;
        return;
    }

    const respuesta = await fetch(`/provincia/${idProvincia}/distritos`, {
        method: 'GET'
    });

    const provincias = await respuesta.json();

    await provincias.map( (provincia) => {
        htmlDistritos += `<option value="${ provincia.id }">${ provincia.nombre }</option>`;

    });

    selectDistrito.innerHTML = htmlDistritos;
});

selectDistrito.addEventListener('change' , async (e) => {

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

