<form method="POST" action="{{ route('post.store') }}">
    @csrf

    <label>Contenu</label>
    <textarea id="editor" name="content"></textarea>

    <button type="submit">Enregistrer</button>
</form>

<script src="https://cdn.ckeditor.com/ckeditor5/40.2.0/classic/ckeditor.js"></script>

<script>
ClassicEditor
    .create(document.querySelector('#editor'), {
        toolbar: [
            'bold',
            'italic',
            'underline',        // ← Souligner
            'fontColor',        // ← Couleur du texte
            'highlight',        // ← Surligner
            'link',
            'bulletedList',
            'numberedList',
            'undo',
            'redo',
        ],
        // Configuration du surlignage
        highlight: {
            options: [
                {
                    model: 'yellowMarker',
                    class: 'marker-yellow',
                    title: 'Surligneur jaune',
                    color: 'var(--ck-highlight-marker-yellow)',
                    type: 'marker'
                },
                {
                    model: 'greenMarker',
                    class: 'marker-green',
                    title: 'Surligneur vert',
                    color: 'var(--ck-highlight-marker-green)',
                    type: 'marker'
                },
                {
                    model: 'pinkMarker',
                    class: 'marker-pink',
                    title: 'Surligneur rose',
                    color: 'var(--ck-highlight-marker-pink)',
                    type: 'marker'
                },
                {
                    model: 'blueMarker',
                    class: 'marker-blue',
                    title: 'Surligneur bleu',
                    color: 'var(--ck-highlight-marker-blue)',
                    type: 'marker'
                }
            ]
        },
        // Configuration de la couleur du texte
        fontColor: {
            columns: 5,
            documentColors: 10,
        }
    })
    .catch(error => {
        console.error(error);
    });
</script>

<style>
/* Styles pour le surlignage dans le contenu affiché */
.marker-yellow {
    background-color: #fdfd77;
}

.marker-green {
    background-color: #63f963;
}

.marker-pink {
    background-color: #fc7999;
}

.marker-blue {
    background-color: #72cdfd;
}
</style>