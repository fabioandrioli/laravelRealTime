import Vue from 'vue'

window.Echo.channel('laravelrealtime_database_post-created')
            .listen('.EvenetCreatePost',(e) => {
                Vue.$vToastify.success(`Título do post`, 'Novo Post')
            })
console.log("teste fora do window Echo -");
