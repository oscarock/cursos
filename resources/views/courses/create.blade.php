<!-- The Modal -->
<form method="POST" v-on:submit.prevent="createCourse">
    <div class="modal fade" id="create">
        <div class="modal-dialog">
            <div class="modal-content">
            <!-- Modal Header -->
            <div class="modal-header">
                <h4 class="modal-title">Nuevo Curso</h4>
                <button type="button" class="close" data-dismiss="modal">&times;</button>
            </div>

            <!-- Modal body -->
            <div class="modal-body">
                <div class="row">
                    <div class="col-md-12">
                        <label for="name_course">Nombre del Curso</label> 
                        <span v-if="errors.name_course" :class="['text-danger']">@{{ errors.name_course[0] }}</span>
                        <input type="text" name="name_course" class="form-control" v-model="name_course">
                    </div>
                    <div class="col-md-12">
                        <label for="name_teacher">Nombre del Profesor</label> 
                        <span v-if="errors.name_teacher" :class="['text-danger']">@{{ errors.name_teacher[0] }}</span>
                        <input type="text" name="name_teacher" class="form-control" v-model="name_teacher">
                    </div>
                    <div class="col-md-12">
                        <label for="capacity">Capacidad</label>
                        <span v-if="errors.capacity" :class="['text-danger']">@{{ errors.capacity[0] }}</span>
                        <input type="text" name="capacity" class="form-control" v-model="capacity">
                    </div>
                    <div class="col-md-12">
                        <label for="observations">Observaciones</label>
                        <span v-if="errors.observations" :class="['text-danger']">@{{ errors.observations[0] }}</span>
                        <textarea name="observations" class="form-control" cols="20" rows="5" v-model="observations"></textarea>
                    </div>
                </div>
            </div>
            
            <!-- Modal footer -->
            <div class="modal-footer">
                <input type="submit" class="btn btn-success" value="Guardar">
                <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
            </div>
            </div>
        </div>
    </div>
</form>