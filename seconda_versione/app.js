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
                console.log(res);
                this.albums = response;
               
            });
        }
    },
    created() {
        this.fetchAlbum()
    },
    mounted() {
   
    },
})