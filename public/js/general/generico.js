const  selectDepartamento = document.getElementById("departamento");
const selectProvincia = document.getElementById("provincia");
const selectDistrito = document.getElementById('distrito');


let ubigeos = [];

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


