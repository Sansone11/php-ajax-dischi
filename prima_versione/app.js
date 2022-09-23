console.log('JS ok')

// https://flynn.boolean.careers/exercises/api/array/music
const app = new Vue({
    el:'#app',
    data:{
        albums : [],
    },
    methods: {
        fetchAlbum(){
            axios.get('https://flynn.boolean.careers/exercises/api/array/music')
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