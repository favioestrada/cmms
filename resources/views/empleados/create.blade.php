Sección para crear empleados
<form action="{{url('/empleados')}}" method="post" enctype="multipart/form-data">
    {{csrf_field()}}
    <label for "Nombre"> {{'Nombre'}}</label>   
    <input type="text" name="Nombre" id="Nombre" value="">
    <br>
    <label for "ApellidoPaterno"> {{'Apellido Paterno'}}</label>   
    <input type="text" name="ApellidoPaterno" id="ApellidoPaterno" value="">
    <br>
    <label for "ApellidoMaterno"> {{'Apellido Materno'}}</label>   
    <input type="text" name="ApellidoMaterno" id="ApellidoMaterno" value="">
    <br>
    <label for "Correo"> {{'Correo'}}</label>   
    <input type="email" name="Correo" id="Correo" value="">
    <br>
    <label for "Foto"> {{'Foto'}}</label>   
    <input type="File" name="Foto" id="Foto" value="">
    <br>
    <input type="submit" value="Agregar">
</form>
