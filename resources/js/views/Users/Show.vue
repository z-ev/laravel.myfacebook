<template>
    <div class="flex flex-col items-center">


        <div class="relative">
            <div class="w-100 h-64 overflow-hidden z-10">
                <img src="https://ca-times.brightspotcdn.com/dims4/default/6da9bf3/2147483647/strip/true/crop/3000x1999+0+0/resize/840x560!/quality/90/?url=https%3A%2F%2Fcalifornia-times-brightspot.s3.amazonaws.com%2F7d%2F18%2F93bce8ae4efa8625f23ff7f87598%2Fla-photos-1staff-528802-me-macarthur-1-rcg.JPG" alt="user bg" class="object-cover w-full">
            </div>

        <div class="absolute flex items-center bottom-0 left-0 -mb-8 ml-12 z-20">
            <div class="w-32">
                <img src="https://ca-times.brightspotcdn.com/dims4/default/6da9bf3/2147483647/strip/true/crop/3000x1999+0+0/resize/840x560!/quality/90/?url=https%3A%2F%2Fcalifornia-times-brightspot.s3.amazonaws.com%2F7d%2F18%2F93bce8ae4efa8625f23ff7f87598%2Fla-photos-1staff-528802-me-macarthur-1-rcg.JPG" alt="user bg" class="object-cover w-32 h-32 border-4 border-gray-200 rounded-b-full shadow-lg">

            </div>
            <p class="text-2xl text-gray-100 ml-4">{{user.data.attributes.name}}</p>

        </div>
        </div>
        <p v-if="postloading">Loading posts...</p>
        <Post v-else v-for="post in posts.data" :key="post.data.post_id " :post="post" />

        <p v-if="!postloading && posts.data.length < 1">No posts found</p>

    </div>



</template>

<script>
    import Post from '../../components/Post';

    export default {
        name: "Show",
        components: {
            Post,
        },
          data: () => {
            return {
                user:null,
                posts:null,
                userloading: true,
                postloading: true,
            }
        },

        mounted() {
            axios.get('/api/users/' + this.$route.params.userId)
                .then(res => {
                    this.user = res.data;

                })
                .catch(error => {
                    console.log('Unable to fetch user from the server');

                })
            .finally(() =>{
                this.userloading = false;
            });

            axios.get('/api/users/' + this.$route.params.userId + '/posts')
                .then(res => {
                    this.posts = res.data;

                })
                .catch(error => {
                    console.log('Unable to fetch posts');
                })
                .finally(() =>{
                    this.postloading = false;
                });

        }
    }
</script>

<style scoped>

</style>
