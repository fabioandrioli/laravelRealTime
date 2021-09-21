window.Echo.channel('laravelrealtime_database_post-created')
            .listen('.EvenetCreatePost',(e) => {
                console.log(e);
                console.log(e.post);
                console.log("ola");
            })
//
