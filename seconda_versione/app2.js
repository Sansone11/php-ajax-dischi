console.log('js ok')
const app = new Vue({
    el:'#app',
    data:{
        albums : [],
    },
    methods: {
        fetchAlbum(){
            axios.get('')
            .then((res) =>{
                
                const { response } = res.data
                this.albums = response
                console.log(res.data)
            }) 
        }
    },
    created() {
        this.fetchAlbum()
    },
    mounted() {
   
    },
})