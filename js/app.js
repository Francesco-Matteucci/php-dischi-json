const { createApp } = Vue

createApp({
  data() {
    return {
        // Lista dei dischi che verrà popolata tramite la chiamata API
      albums: [],
      selectedAlbum: {},
      showForm: false
    };
  },
  methods: {
    showAlbumDetails(album) {
      this.selectedAlbum = album;
    },
    // Mostro o nascondo il form per l'aggiunta di nuovi album
    toggleForm() {
      this.showForm = !this.showForm;
    }
  },
  mounted() {

    // Effettuo la chiamata API per ottenere gli album
    axios.get('./functions/albums.php')
      .then(response => {
        
        console.log(response.data)

        this.albums = response.data;
      })
      .catch(error => {
        console.error("Errore nel caricamento dei dischi: ", error);
      });
  }
}).mount('#app');