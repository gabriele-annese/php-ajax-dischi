
const app = new Vue ({
    el: '#app',
    data: {
        albums: null,
    },
    created(){
       this.getApiAlbums();
    },
    methods:{
        getApiAlbums(){
            axios
                .get("http://localhost/php-ajax-dischi/ex-ajax/data/api-dischi.php")
                .then( response =>{
                    console.log(response.data);
                    this.albums = response.data;
                })
                .catch(err =>{
                    console.log(err)
                })
        }
    },
})