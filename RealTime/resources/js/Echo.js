import Vue from 'vue'

window.Echo.channel('laravel_database_postCreated')
            .listen('EventCreatePost',(e) => {
               Vue.$vToastify.success(`Título do post`, 'Novo Post')
                console.log(e.post)
                console.log("teste")
            })
console.log("Teste fora do window Echo");
