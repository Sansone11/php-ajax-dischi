console.log('js ok')
const app = new Vue({
    el:'#root',
    data:{
        albums : [],
        console.log(albums)
    },
    methods: {
        fetchAlbum(){
            axios.get('http://localhost/php-ajax-dischi/php-ajax-dischi/seconda_versione/index.php')
            .then((res) =>{
                const { response } = res.data;
                console.log(res);
                this.albums = response;
                console.log(thisalbums)
               
            });
        }
    },
    created() {
        this.fetchAlbum()
    },
    mounted() {
   
    },

})