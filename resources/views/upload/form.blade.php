<form action="{{ route('upload') }}" method="POST" enctype="multipart/form-data">
@csrf

<input type="file" name="arquivo">

<button type="submit">Enviar Arquivo</button>
</form>
