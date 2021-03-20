<script src="ckeditor.js"></script>

<script>
	ClassicEditor
		.create( document.querySelector( '#editor' ), {
			toolbar: [ 'heading', '|', 'bold', 'italic', /*'link',*/ 'specialCharacters' ]
		} )
		.then( editor => {
			window.editor = editor;
		} )
		.catch( err => {
			console.error( err.stack );
		} );
</script>