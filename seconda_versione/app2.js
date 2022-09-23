console.log('js ok')
const app = new Vue({
    el:'#app',
    data:{
        albums : [],
    },
    methods: {
        fetchAlbum(){
            axios.get('http://localhost/php-ajax-dischi/php-ajax-dischi/seconda_versione/api.php')
            .then((res) =>{
                const { response } = res.data
                this.albums = response
                
            }) 
        }
    },
    created() {
        this.fetchAlbum()
    },
    mounted() {
   
    },
})