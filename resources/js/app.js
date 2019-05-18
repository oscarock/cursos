new Vue({
    el: '#app',
    created: function(){
        this.getAllCourses()
    },
    data: {
        courses: [],
    },

    methods: {
        getAllCourses: function(page){
            var urlCourses = "courses"
            axios.get(urlCourses).then(response => {
                this.courses = response.data
            })
        }
    }
})