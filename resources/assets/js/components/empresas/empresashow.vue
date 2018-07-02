<template>
    <div>
        <button type="button" class="btn btn-sm  btn-outline-primary btm-sm float-right"
                data-toggle="modal" data-target="#myModal" @click="openModal('ciudad','create',ciudad)">
            <i class="fa fa-plus"></i> Agregar nueva Ciudad</button>
        <div v-if="!ciudades.length">
            No hay ciudades
        </div>
        <!--tabla-->

        <!--paginate-->

        <!--ventana modal-->
        <div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
            <div class="modal-dialog" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <h3 class="text-center">{{titleModal}}</h3>
                    </div>
                    <div class="modal-body">
                        <label><p class="lead">{{messageModal}}</p></label>
                        <div class="alert alert-danger" v-if="errors.length > 0">
                            <li v-for="error in errors">{{ error }}</li>
                        </div>

                        <div v-if="modalCiudad" class="form-group">
                            {{}}
                        </div>
                        <div class="form-group">
                            <input type="text" class="form-control" placeholder="Codigo max. 5 Car." v-model="codigoCiudad"
                                   :readonly="modalCiudad==3">
                        </div>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-default" data-dismiss="modal" @click="closeModal()">Cancelar</button>
                        <button type="button" class="btn btn-success" @click="createciudad()" v-if="modalCiudad==1">Aceptar</button>
                        <button type="button" class="btn btn-success" @click="updateciudad()" v-if="modalCiudad==2">Aceptar</button>
                        <button type="button" class="btn btn-danger" @click="destroyciudad()" v-if="modalCiudad==3">Eliminar</button>

                    </div>
                </div>
            </div>
        </div>
    </div>
 </template>

 <script>
     export default {
         mounted: function () {
             this.modalGeneral = 1;
             this.titleModal = 'Creación de Empresas';
             this.messageModal = 'Ingrese el nombre de la ssss';
             this.modalCiudad = 1;
             this.titleCiudad = '';
             this.codigoCiudad = '';
             this.errorTitleCiudad = 0;
             $('#myModal').modal('show');

         },
         data() {
             return {
                 modalGeneral: 0,
                 titleModal: '',
                 messageModal: '',
                 /***** Ciudades *****/
                 modalCiudad: 0,  // Nuevo=1,editar=2 y eliminar=3
                 ciudad: '',
                 titleCiudad: '',
                 codigoCiudad: '',
                 // errorTitleCiudad: 0,
                 ciudades: [],
                 errors: [],
                 // errorMessageCiudad: [],  // Mensaje del request
                 pagination: {
                     'total': 0,
                     'current_page': 0,
                     'per_page': 0,
                     'last_page': 0,
                     'from': 0,
                     'to': 0
                 },
                 offset: 2,
             }
         },
         methods: {
             openModal(type, action, data=[]) {
                 switch (type) {
                     case "ciudad": {
                         switch (action) {
                             case 'create': {
                                 this.modalGeneral = 1;
                                 this.titleModal = 'Creación de Ciudades';
                                 this.messageModal = 'Ingrese el nombre de la Ciudad';
                                 this.modalCiudad = 1;
                                 this.titleCiudad = '';
                                 this.codigoCiudad = '';
                                 this.errorTitleCiudad = 0;
                                 $('#myModal').modal('show');
                                 break;
                             }
                             case 'update': {
                                 this.modalGeneral = 1;
                                 this.titleModal = 'Modificación de la ciudad';
                                 this.messageModal = 'Modifique el nombre de la ciudad';
                                 this.modalCiudad = 2;
                                 this.titleCiudad = data['name'];
                                 this.codigoCiudad = data['codigo'];
                                 this.idCiudad = data['id'];
                                 this.errorTitleCiudad = 0;
                                 $('#myModal').modal('show');

                                 break;
                             }
                             case 'delete': {
                                 this.modalGeneral = 1;
                                 this.titleModal = 'Eliminación de ciudades';
                                 this.messageModal = 'Nombre de la ciudad';
                                 this.modalCiudad = 3;
                                 this.titleCiudad =  data['name'];
                                 this.idCiudad = data['id'];
                                 this.errorTitleCiudad = 0;
                                 $('#myModal').modal('show');
                                 break;
                             }
                         }
                         break;
                     }
                 }
             },
         }
     }
 </script>

 <style scoped>

 </style>

