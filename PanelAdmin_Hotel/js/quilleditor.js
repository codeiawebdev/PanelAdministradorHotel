var quill = new Quill('#editor_quill', {
    theme: 'snow',
    placeholder: '...',
    modules: {
        toolbar: [
            [{'header':[]}],
            ['bold', 'italic', 'underline', 'strike'],        // Formato del texto
            ['link', 'image', 'video'],
            [{'color':[]}, {'background':[]}],
            [{ 'list': 'ordered'}, { 'list': 'bullet' }],     // Listas ordenadas y no ordenadas
            [{ 'align': [] }],                                 // Alineación del texto
            ['clean'],                                         // Limpiar formato
            ['formula', 'code-block'],
            [{'indent':'-1'}, {'indent':'+1'}]                                    
        ],

        imageResize: {
            modules: [ 'Resize', 'DisplaySize', 'Toolbar' ]
        }
    }
});
