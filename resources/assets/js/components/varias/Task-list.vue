<template>
    <div class="row">
        <div class="col-12">
           <div class="card">
                <img src="img/logo.png" alt="Lista de Notasn" width="112" height="26">
                <h2  class="column text-center"><strong> Notas de:  </strong></h2>
                 <!--<hr>-->
                <!--Ingreso de nueva nota-->
                <div class="card-body">
                     <div class="form-row ">
                        <div class="col-8">
                            <input type="text"  class="form-control" placeholder="Nueva Nota" v-model="task.body">
                        </div>
                         <div class="col-2" id="date_picker">
                         <datepicker input-class="input" :bootstrap-styling="true" ></datepicker>
                         </div>
                        <div class="col-2">
                            &nbsp; <a class="btn btn-primary" @click="createTask()"> Agregar Nota</a>
                        </div>
                      </div>
                    <!--Seleccionar seccion  // class="nav-item"-->

                    <ul id="myUl" class="nav nav-tabs justify-content-center">
                        <li :class="{'active':isActive('current')}">
                            <h3><a class="myLi"  href="#" v-on:click.prevent="fetchTaskList()">
                                    Notas activas  </a></h3>

                        </li>
                        <li :class="{'active':isActive('archive')}">
                            <h3><a class="myLi" href="#" v-on:click.prevent="fetchTaskList(1)">
                                &nbsp;&nbsp;  Notas pasiva </a></h3>
                        </li>
                    </ul>

                </div>
               <div class="card" v-for="task in list">
                    <div class="card-body">
                        <div class="form-row ">
                                <span class="btn btn-sm btn-light">
                                    Tarea: {{ task.id }}
                                </span>&nbsp;&nbsp;
                             <!--una-->
                              <!--  <a href="#" class="card-header-icon" aria-label="more options"
                                    v-on:click.prevent="archiveTask(task.id)">
                                        <i class="far " :class="{'fa-square': !task.archive,
                                                                check: !task.archive,
                                                                'fa-check-square': task.archive,
                                                                done: task.archive}" aria-hidden="true"></i> </a>&nbsp;&nbsp;-->
                            <div v-if="!task.archive">
                                <span href="#" class="btn btn-sm btn-primary"  v-on:click.prevent="archiveTask(task.id)"><i class="fas fa-archive"></i> Archivar</span>
                            </div>
                            <div v-else >
                                 <span href="#" class="btn btn-sm btn-dark"  v-on:click.prevent="archiveTask(task.id)"><i class="fas fa-archive"></i> Activar</span>
                            </div>
                            &nbsp;&nbsp;<span href="#" class="btn btn-sm btn-danger" v-on:click.prevent="deleteTask(task.id)"><i class="fas fa-trash fa-sm"></i> Eliminar</span>

                        </div>
                    </div>
                    <div>
                            <p v-if="task !== editingTask" @dblclick="editTask(task)" v-bind:title="message">
                                {{ task.body }}
                            </p>
                            <input type="text" class="form-control" v-if="task === editingTask" v-autofocus @keyup.enter="endEditing(task)" @blur="endEditing(task)"  placeholder="Nota Editada se eliminara si esta vacia" v-model="task.body">
                    </div>
                 </div>
            </div>
        </div>
    </div>
</template>

<script>
    export default {
        directives: {
            'autofocus': {
                inserted(el) {
                    el.focus();
                }
            }
        },

        data() {
            return {
                message: 'Doble clik para editar.',
                list: [],
                task: {
                    id: '',
                    body: '',
                    archive: ''
                },
                editingTask: {},
                activeItem: 'current'

            }
        },

        created() {
            this.fetchTaskList();
        },

        methods: {
            fetchTaskList(archive = null) {

                if (archive === null) {
                    var url = 'current_tasks';
                    this.setActive('current');
                } else {
                    var url = 'archived_tasks';
                    this.setActive('archive');
                }

                axios.get(url).then(result => {
                    this.list = result.data
                });
            },

            isActive(menuItem) {
                return this.activeItem === menuItem;
            },

            setActive(menuItem) {
                this.activeItem = menuItem;
            },

            createTask() {
                axios.post('create_task', this.task).then(result => {
                    this.task.body = '';
                    this.fetchTaskList();
                }).catch(err => {
                    console.log(err);
                    toastr.success('Agregar contenigo a la Nota');
                });
            },

            editTask(task) {
                this.editingTask = task;
            },

            endEditing(task) {
                this.editingTask = {};
                if (task.body.trim() === '') {
                    this.deleteTask(task.id);
                } else {
                    axios.post('edit_task', task).then(result => {
                        console.log('success!')
                    }).catch(err => {
                        console.log(err);
                    });
                }
            },

            deleteTask(id) {
                axios.post('delete_task/' + id).then(result => {
                    this.fetchTaskList();
                }).catch(err => {
                    console.log(err);
                });
            },

            archiveTask(id) {
                axios.post('archive_task/' + id).then(result => {
                    this.fetchTaskList();
                }).catch(err => {
                    console.log(err);
                });
            }
        }
    }
</script>
