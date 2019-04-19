export default {
    data() {
        return {
            loaded: false,
            data: {}
        }
    },
    methods: {
        getRouteApiData() {
            var url = this.getRouteApiPath();
            axios.get(url)
            .then( response => {
                this.data = response.data;
                this.loaded = true;
            })
            .catch(error => {
                console.log('Error: ' + error);
            });
        },
        getRouteApiPath() {
            return '/api' + this.$route.path;
        }
    },
    mounted() {
        this.getRouteApiData();
    }
}
