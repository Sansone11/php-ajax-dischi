console.log('js ok')
const app = new Vue({
    el:'#root',
    data:{
        albums : [],
    },
    methods: {
        fetchAlbum(){
            axios.get('http://localhost/php-ajax-dischi/php-ajax-dischi/seconda_versione/api/api.php')
            .then((res) =>{
                const { response } = res.data;
                this.albums = response;
                console.log(res);
            });
        }
    },
    created() {
        this.fetchAlbum()
    },
    mounted() {
   
    },
})