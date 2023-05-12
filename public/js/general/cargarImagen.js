/******************************* IMAGEN *****************************/
const input = document.getElementById('codigo_imagen');
const preview = document.getElementById('vista_previa');

input.addEventListener('change', updateImageDisplay);

function updateImageDisplay() {

    while( preview.firstChild) {

        preview.removeChild(preview.firstChild);
    }


    const imgActual= input.files;
    if (imgActual.length === 0) {
      const para = document.createElement('p');
      para.textContent = 'No hay imagen seleccionada para cargar';
      preview.appendChild(para);
    } else {

        const para = document.createElement('p');
        preview.appendChild(para);



        if (validFileType(imgActual[0])) {
             para.textContent = `Nombre de archivo: ${imgActual[0].name}`;
            const image = document.createElement('img');
            image.src = URL.createObjectURL(imgActual[0]);

            preview.appendChild(para);
            preview.appendChild(image);
        } else {
            para.textContent = `Nombre de archivo ${imgActual[0].name}: No es un tipo de archivo válido. Actualice su selección.`;
            preview.appendChild(para);
        }
    }
  }

  function validFileType(file) {
    return fileTypes.includes(file.type);
  }

  const fileTypes = [
    "image/apng",
    "image/bmp",
    "image/gif",
    "image/jpeg",
    "image/pjpeg",
    "image/png",
    "image/svg+xml",
    "image/tiff",
    "image/webp",
    "image/x-icon"
  ];
