console.log('js ok')
const app = new Vue({
    el:'#root',
    data:{
        albums : [],
    
    },
    methods: {
        fetchAlbum(){
            axios
            .get('http://localhost/php-ajax-dischi/php-ajax-dischi/seconda_versione/index.php')
            .then((res) =>{
                this.albums = res.data;
                
               
            });
        }
    },
    created() {
        this.fetchAlbum()
    },
    mounted() {
   
    },

})