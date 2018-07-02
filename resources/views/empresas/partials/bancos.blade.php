<div class="card">
    <a class="btn btn-outline-secondary btn-sm btn-block" data-toggle="collapse" data-target="#collapseThree" aria-expanded="true" aria-controls="collapseOne">
        <strong> Informacion sobre Bancos</strong>
    </a>
    <div id="collapseThree" class="collapse" aria-labelledby="headingTwo" data-parent="#accordion">
        <!-- Primera Linea del acordeon Two-->
        <div class="form-row">
            <div class="col-sm-12">
                <table class="table table-sm table-bordered table-striped" id="dataTable" width="100%" style="font-size: 12px">
                    <thead>
                    <tr>
                        {{--<th>#</th>--}}
                        <th>Nombre del Banco</th>
                        <th>Cuenta Corriente</th>
                        <th>Apoderados Firma</th>
                        <th>Linea Credito</th>
                        <th>#</th>
                    </tr>
                    </thead>
                    <tbody>

                    </tbody>
                </table>
            </div>
        </div>
        <!-- segunda Linea del acordeon Two-->

        <div class="form-row">

            <div class="col-3">

                <input class="form-control" type="text" id="name" placeholder="Nombre del Banco" />

            </div>
            <div class="col-sm-3">

                <input class="form-control" type="text" id="ctacte" placeholder="Nro. Cta. Cte" />

            </div>

            <div class="col-sm-3">

                <input class="form-control" type="text" id="firman" placeholder="Personas que Firman" />

            </div>
            <div class="col-sm-3">

                <input class="form-control" type="text" id="montolinea" placeholder="Monto linea Cr." >


            </div>
            <button onclick="additem(event)" class="btn btn-outline-success btn-sm"><i class="fa fa-save"></i> Agrega</button>
        </div>
    </div> {{-- fin de colapse two--}}
</div>