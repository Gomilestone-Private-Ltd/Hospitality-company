    const dt = new DataTransfer(); // Permet de manipuler les fichiers de l'input file
    $("#caseimage").on('change', function(e) {
        for (var i = 0; i < this.files.length; i++) {
            let fileBloc = $('<span/>', {
                    class: 'file-block'
                }),
                fileName = $('<span/>', {
                    class: 'name',
                    text: this.files.item(i).name
                });
            fileBloc.append('<span class="file-delete">X</span>')
                .append(fileName);
            $("#filesList > #files-names").append(fileBloc);
            
 
        };
        // Ajout des fichiers dans l'objet DataTransfer
        for (let file of this.files) {
            dt.items.add(file);
        }
        // Mise à jour des fichiers de l'input file après ajout
        this.files = dt.files;
        
 
        // EventListener pour le bouton de suppression créé
        $('span.file-delete').click(function() {
            let name = $(this).next('span.name').text();
            // Supprimer l'affichage du nom de fichier
            $(this).parent().remove();
            for (let i = 0; i < dt.items.length; i++) {
                // Correspondance du fichier et du nom
                if (name === dt.items[i].getAsFile().name) {
                    // Suppression du fichier dans l'objet DataTransfer
                    dt.items.remove(i);
                    continue;
                }
            }
            // Mise à jour des fichiers de l'input file après suppression
            document.getElementById('caseimage').files = dt.files;
        });
    });


    function fileValidation() {
        var fileInput = document.getElementById('caseimage');
        var fileSize = (fileInput.files[0].size / 1024 / 1024).toFixed(2);
        if (fileSize > 1) {
            // alert("File size must be less than 5 MB.");
            toastr.error("File size must be less than 1 MB.")
            toastr.options = {
                'closeButton': true,
                'progressBar': true,
            }
            fileInput.value = '';
            return false;
        }
    }