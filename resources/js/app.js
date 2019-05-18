new Vue({
    el: '#app',
    created: function(){
        this.getAllCourses()
    },
    data: {
        courses: [],
        errors: [],
        name_course: "",
        name_teacher: "",
        capacity: "",
        observations: ""
    },

    methods: {
        getAllCourses: function(page){
            var urlCourses = "courses"
            axios.get(urlCourses).then(response => {
                this.courses = response.data
            })
        },
        createCourse: function(){
            var urlCreate = "courses"
            axios.post(urlCreate, {
                name_course: this.name_course,
                name_teacher: this.name_teacher,
                capacity: this.capacity,
                observations: this.observations
            }).then(response => {
                this.getAllCourses()
                this.name_course = ""
                this.name_teacher = ""
                this.capacity = ""
                this.observations = ""
                this.errors = []
                $("#create").modal("hide")
                toastr.success("Agregado Correctamente.")
            }).catch(error => {
                this.errors = error.response.data.errors
            })
        }
    }
})