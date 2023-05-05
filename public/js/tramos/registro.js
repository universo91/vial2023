const  selectDepartamento = document.getElementById("departamento");
const selectProvincia = document.getElementById("provincia");
const selectDistrito = document.getElementById('distrito');
const selectRuta = document.getElementById('ruta');

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
        htmlProvincias += `<option value="${provincia.id}">${provincia.nombre.toUpperCase()}</option>`
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

    const distritos = await respuesta.json();

    distritos.map( (distrito ) => {
        htmlDistritos += `<option value="${ distrito.id }">${ distrito.nombre.toUpperCase() }</option>`;
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
})



