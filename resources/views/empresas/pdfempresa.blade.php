<style>
html {
margin: 0;
}
body {
font-family: "Times New Roman", serif;
margin: 35mm 8mm 2mm 8mm;
}
</style>
<h2>Empresa: {{$empresas->name}}&nbsp;&nbsp;&nbsp; RUT: {{$empresas->rut}}</h2>
<dl>
<dt><u>Datos de la Empresas</u></dt>
    <dd>Nombre Corto:&nbsp; {{$empresas->name_corto}}</dd>
    <dd>Actividad empresarial:&nbsp; {{$empresas->actividad}}</dd>
    <dd>Ciudad:&nbsp;{{$empresas->ciudad}} &nbsp; Domicilio:&nbsp;&nbsp; {{$empresas->direccion}}</dd>
<dt><u>Datos Servicio Impuestos Internos</u></dt>
    <dd>Fecha inicio Actividades:&nbsp; {{$empresas->fe_inicio}}&nbsp;&nbsp;Sistema Tributacion:&nbsp; {{$empresas->tipo_tri}}</dd>
    <dd>Segmento:&nbsp; {{$empresas->segmento}}&nbsp;&nbsp;Giro SII:&nbsp; {{$empresas->giro}}</dd>
<dt><u>Datos Cta. Cte. Bancarias</u></dt>
<dt><u>Datos Constitucion social</u></dt>
    <dd>Notario:&nbsp; {{$empresas->notario}}&nbsp;&nbsp;Fecha escrituta:&nbsp; {{$empresas->fe_notario}}</dd>
    <dd>Repertorio:&nbsp; {{$empresas->repertorio}}&nbsp;&nbsp;Registro Comercio:&nbsp; {{$empresas->reg_comercio}}&nbsp;&nbsp;Fecha D.Oficial:&nbsp; {{$empresas->fe_diario}}</dd>
<dt><u>Datos de Socios</u></dt>
<dt><u>Datos de los Contactos</u></dt>
    @foreach ($contactos as $contacto)
    <dd>Nombre:&nbsp;{{$contacto->name}}&nbsp;Fono:&nbsp;{{$contacto->fono}}Email:&nbsp;{{$contacto->email}}</dd>
    @endforeach
</dl>
