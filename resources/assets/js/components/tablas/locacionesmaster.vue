<template>
 <div class="row">
      <div class="col-4">
         <div v-if="!regiones.length">No hay Regiones </div>
          <table v-else class="table table-sm table-bordered table-striped" width="100%" style="font-size: 14px">
            <thead>
                <th style= "width: 30px;">#</th>
                <th>Region</th>
                <th style= "width: 30px;">Ver</th>
            </thead>
            <tbody>
            <tr v-for="regione in regiones">
                <td>{{ regione.id }}</td>
                <td>{{ regione.name }}</td>
                <td class="text-center" @click="Query_comuna(regione.id,regione.name)">
                    <i class="fas fa-eye" style=color:#3729fa></i> </td>
            </tr>
            </tbody>
            </table>
        </div>
     <div class="col-1"></div>
    <div class="col-7">
     <div v-if="!comunas.length">No hay Comunas</div>
          <table v-else class="table table-sm table-bordered table-striped" width="100%" style="font-size: 14px">
              <thead>
              <th style= "width: 30px;">#</th>
              <th>Region</th>
              <th>Comunas</th>
              </thead>
              <tbody>
              <tr v-for="comuna in comunas">
                  <td>{{ comuna.id }}</td>
                  <td>{{ comuna.regiones.name }}</td>
                  <td>{{ comuna.name }}</td>
              </tr>
              </tbody>
          </table>
        <!--paginate-->
        <nav>
            <ul class="pagination justify-content-center pagination-sm">
                <li class="page-item" v-if="pagination.current_page > 1">
                    <a  class="page-link" href="#" @click.prevent="changePage(pagination.current_page - 1)">
                        <span>&laquo;</span>
                    </a>
                </li>

                <li class="page-item" v-for="page in pagesNumber" v-bind:class="[ page == isActived ? 'active':'']">
                    <a  class="page-link" href="#" @click.prevent="changePage(page)">
                        {{ page }}
                    </a>
                </li>

                <li class="page-item" v-if="pagination.current_page < pagination.last_page">
                    <a  class="page-link" href="#"  @click.prevent="changePage(pagination.current_page + 1)">
                        <span>&raquo;</span>
                    </a>
                </li>
            </ul>
        </nav>
        <!--ventana modal-->
        <div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
            <div class="modal-dialog" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <h3 class="text-center">{{titleModal}}</h3>
                    </div>
                    <div class="modal-body">
                        <label><p>{{messageModal}}</p></label>

                        <!-- Listado de comunas -->
                        <div v-if="modalLista">
                            <div v-if="!elcomunas.length"><strong>No hay comunas para este tipo</strong></div>
                            <table v-else class="table table-sm table-bordered table-striped" width="100%" style="font-size: 14px">
                                <tbody>
                                <tr v-for="elcomuna in elcomunas">
                                    <td>{{ elcomuna.name }}</td>
                                </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                    <!-- fin body -->
                    <div class="modal-footer">
                        <button type="button" class="btn btn-default" data-dismiss="modal" @click="closeModal()">Cancelar</button>
                    </div>
                </div>
            </div>
        </div>

    </div>
 </div>
</template>

<script>
    export default {
        mounted: function () {
            this.Query_locaciones();
        },
        data() {
            return {
                modalGeneral: 0, //Cuando hay mas tablas q usan el modal
                titleModal: '',
                messageModal: '',
                modalTipo: 0,  // Nuevo=1,editar=2 y eliminar=3
                titleTipo: '',
                errorTitleTipo: 0,
                regiones: [],
                errorEmployee: 0,
                errorMessageTipo: [],  // Mensaje del request

                comunas: [],
                elcomunas: [],
                modalLista: 0,
                pagination: {
                    'total': 0,
                    'current_page': 0,
                    'per_page': 0,
                    'last_page': 0,
                    'from': 0,
                    'to': 0
                },
                total: 1,
                offset: 3,
            }
        },
        watch: {
            modalGeneral: function (value) {
                if (!value) this.Tipo_Query(), this.Atibuto_Query();
            },

        },
        computed: {
            isActived: function () {
                return this.pagination.current_page;
            },
            pagesNumber: function () {
                if (!this.pagination.to) {
                    return [];
                }
                var from = this.pagination.current_page - this.offset;
                if (from < 1) {
                    from = 1;
                }
                var to = from + (this.offset * 2);
                if (to >= this.pagination.last_page) {
                    to = this.pagination.last_page;
                }
                var pagesArray = [];
                while (from <= to) {
                    pagesArray.push(from);
                    from++;
                }
                return pagesArray;
            }
        },

           methods: {
              Query_locaciones(page) {
                   let me = this;
                   var urlkeeps = 'locacionesQuery?page='+page;
                   axios.get(urlkeeps)
                       .then(function (response) {
                           let answer = response.data;
                           me.comunas = answer.comunas.data;
                           me.regiones = answer.regiones;
                           me.pagination = answer.pagination;
                       })
                       .catch(function (error) {
                           console.log(error);
                       });
               },

               Query_comuna(tipo,nombre){
                   let me = this;
                   var urlhay = 'hayComunas?tipo='+tipo;
                   axios.get(urlhay)
                       .then(function (response) {
                           let answer = response.data;
                           me.elcomunas = answer.elcomunas;
                           me.modalGeneral = 1;
                           me.titleModal = 'Region : '+nombre;
                           me.modalLista = 4;
                           $('#myModal').modal('show');
                       })
                       .catch(function (error) {
                           console.log(error);
                       });
               },
               closeModal() {
                   $('#myModal').modal('hide');
                   this.modalGeneral = 0;
                   this.titleModal = '';
                   this.messageModal = '';

                   this.modalTipo = 0;
                   this.modalAtributo = 0;
                   this.modalLista = 0;
               },
               changePage: function (page) {
                   this.pagination.current_page = page;
                   this.Query_locaciones(page);
               }
           },
       }

</script>
