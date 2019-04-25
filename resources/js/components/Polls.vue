<template>
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">Example Component</div>

                    <div class="card-body" v-for="(poll,key) in polls" :key="key">
                        <h3 class="card-title">Title : <span>{{poll.title}}</span> </h3>
                        <h6 class="card-title">Description: <span>{{poll.description}}</span></h6>
                    </div>
                </div>
            </div>
        </div>
    </div>
</template>

<script>
    export default {
        data() {
            return {
                'polls': [],
            }
        },
        mounted() {
            console.log("i work");
            this.fetchPolls();

            // Echo.channel('notifications')
            //     .listen("SongSavedEvent", (e) => {
            //         this.fetchSongs();
            //     });
        },

        methods: {
            fetchPolls() {
                axios.get('/api/polls')
                    .then(response => {
                        console.log((response.data));
                        this.polls = response.data;
                    })
                    .catch((err) => {
                        console.log(err)
                    })
            },
            deleteItem($id){
                axios.delete('/api/polls/'+$id)
                    .then(response=>{
                        this.polls.splice(this.polls.indexOf(this.polls.id), 1)
                    })
            }
        }
    }
</script>
