const app = new Vue({
    el: '#app',
    data: {
        database: [
        ]
    },
    methods: {
        getData(){
            axios.get('../controller/controller.php')
            .then( (response) => {
                this.databasae = response.data.data;
                console.log(this.database);
            })
            .catch( (response) => {
                console.error(error.message);
            })
        },
    },
    created: function() {
        this.getData();
    }
})