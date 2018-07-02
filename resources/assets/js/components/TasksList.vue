<template>
    <div class="card card">
                <div class="card-header">
                   <div class="clearfix">

                                <h3 class="Display4 float-left">&nbsp;Tareas&nbsp; </h3>
                               <button type="button" class="btn  btn-outline-primary btm-sm float-right"
                                       data-toggle="modal" data-target="#taskModal"><i class="fa fa-plus"></i> Agregar nueva Tare</button>

                   </div>
                </div>
                  <table class="table is-hoverable is-fullwidth is-striped" v-if="tasks.length">
                    <thead>
                        <tr>
                            <th></th>
                            <th style="width: 180px;">Fecha</th>
                            <th style="width: 280px;">Titulo</th>
                            <th >Descripcion</th>
                            <th  style="width: 150px;"></th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr v-for="(task, index) in tasks">
                            <td>{{ index + 1 }}</td>
                            <td>{{ task.created_at }}</td>
                            <td>{{ task.title }}</td>
                            <td>{{ task.description }}</td>
                            <td>
                                <button @click="initUpdate(index)" type="button" class="btn btn-success btn-sm" data-toggle="modal" data-target="#edittaskModal"> Editar</button>
                                <button @click="initDeleteTask(index)" type="button" class="btn btn-danger btn-sm" data-toggle="modal" data-target="#deletetaskModal"> Borrar</button>
                            </td>
                        </tr>
                    </tbody>
                </table>

        <!-- /addTaskModal -->
        <div class="modal fade" id="taskModal" tabindex="-1" role="dialog" aria-labelledby="taskModal" aria-hidden="true">
            <div class="modal-dialog" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="taskModalLabel">Agregar nueva tarea</h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span></button>
                    </div>
                    <div class="modal-body">
                          <div class="alert alert-danger" v-if="errors.length > 0">
                                <li v-for="error in errors">{{ error }}</li>
                         </div>
                        <div class="form-group">
                            <label class="control-label">Titulo</label>
                            <input type="text" name="title" id="title"  class="form-control" v-model="task.title" required>
                            <label class="control-label">Descripcion</label>
                            <textarea class="form-control" name="description" id="description" placeholder="Descripcion de la tarea" v-model="task.description"></textarea>
                        </div>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-dismiss="modal" @click="cierramodal">Cerrar</button>
                        <button type="button " class="btn btn-success" @click="createTask">Enviar</button>
                    </div>
                </div>
            </div>
        </div>

        <!-- /updateTaskModal -->
        <div class="modal fade" id="edittaskModal" tabindex="-1" role="dialog" aria-labelledby="edittaskModal" aria-hidden="true">
            <div class="modal-dialog" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="edittaskModal">Actualizar Tarea</h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span></button>
                    </div>
                    <div class="modal-body">
                        <div class="alert alert-danger" v-if="errors.length > 0">
                             <li v-for="error in errors">{{ error }}</li>
                        </div>
                        <div class="form-group">
                            <label class="control-label">Titulo</label>
                            <input type="text" name="title" id="title" class="form-control" v-model="update_task.title" required>
                        </div>
                        <div class="form-group">
                            <label class="control-label">Descripcion</label>
                            <textarea class="form-control" name="description" id="description" placeholder="Descripcion de la tarea" v-model="update_task.description"></textarea>
                        </div>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-dismiss="modal" @click="cierramodal">Cerrar</button>
                        <button type="button" class="btn btn-success" @click="updateTask()">Enviar</button>
                    </div>
                </div>
            </div>
        </div>

        <!-- /DeleteTaskModal -->
        <div class="modal fade" id="deletetaskModal" tabindex="-1" role="dialog" aria-labelledby="deletetaskModalLabel" aria-hidden="true">
            <div class="modal-dialog" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="deletetaskModalLabel">Realmente desea borrar la tarea?</h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span></button>
                    </div>
                    <div class="modal-body">
                        <div class="message is-danger" v-if="errors.length > 0">
                            <div class="message-body">
                                <ul>
                                    <li v-for="error in errors">{{ error }}</li>
                                </ul>
                            </div>
                        </div>
                        <div class="field">
                            <label class="label">{{ delete_task.title }}</label>
                            <p>{{ delete_task.description }}</p>
                        </div>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-dismiss="modal" @click="cierramodal">Cerrar</button>
                        <button type="button " class="btn btn-danger" @click="deleteTask()">Borrar</button>
                    </div>
                </div>
            </div>
        </div>
    </div>
</template>
<script>
    export default {
        data() {
            return {
                delete_task: {},
                delete_task_index: null,
                errors: [],
                task: {
                    title: '',
                    description: '',
                    created_at:''
                },
                tasks: [],
                update_task: {}
            }
        },

        mounted() {
            this.readTasks();
        },

        methods: {
            titleModal() {
                $('#taskModal').modal('hide');
                $('#edittaskModal').modal('hide');
                $('#deletetaskModal').modal('hide');
                this.reset();
            },
            initDeleteTask(index) {
                this.delete_task = this.tasks[index];
                this.delete_task_index = index;
            },

            initUpdate(index) {
                this.errors = [];
                 this.update_task = this.tasks[index];
            },
            readTasks() {
                axios.get('/task')
                    .then(response => {
                        this.tasks = response.data.tasks;
                    });
            },
            cierramodal(){
                alert('closemodal');
                this.errors = [];
                this.closeModal();

            },
            reset() {
                this.task.title = '';
                this.task.description = '';
                this.task.created_at= '';
            },
            createTask() {
                axios.post('/task', {
                    title: this.task.title,
                    description: this.task.description,
                }, {
                    headers: { Authorization: '123 456' }
                })
                    .then(response => {
                        this.reset();
                        this.tasks.push(response.data.task);
                        this.cierramodal();
                    })
                    .catch(error => {
                        this.errors = [];
                        if (error.response.data.errors.title) {
                            this.errors.push(error.response.data.errors.title[0]);
                        }
                        if (error.response.data.errors.description) {
                            this.errors.push(error.response.data.errors.description[0]);
                        }
                    });
            },

            deleteTask() {
                axios.delete('/task/' + this.tasks[this.delete_task_index].id)
                    .then(response => {
                        this.tasks.splice(this.delete_task_index, 1);
                     })
                       .then(response => {
                          this.cierramodal();
                    })
                    .catch(error => {
                    });
            },
            updateTask() {
                axios.patch('/task/' + this.update_task.id, {
                    title: this.update_task.title,
                    description: this.update_task.description,
                })
                    .then(response => {
                        this.reset();
                        this.closeModal();
                    })
                    .catch(error => {
                        this.errors = [];
                        if (error.response.data.errors.title) {
                            this.errors.push(error.response.data.errors.title[0]);
                        }

                        if (error.response.data.errors.description) {
                            this.errors.push(error.response.data.errors.description[0]);
                        }
                    });
            },
        }
    }
</script>