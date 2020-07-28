<template>
    <div class="flex flex-col items-center" v-if="status.user === 'success' && user">


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
            <div class="absolute flex items-center bottom-0 right-0 mb-4 mr-12 z-20">
                <button v-if="friendButtonText && friendButtonText !== 'Accept'"
                        class="py-1 px-3 bg-gray-400 rounded"
                        @click="$store.dispatch('sendFriendRequest', $route.params.userId)">
                    {{ friendButtonText }}
                </button>
                <button v-if="friendButtonText && friendButtonText === 'Accept'"
                        class="mr-2 py-1 px-3 bg-blue-500 rounded"
                        @click="$store.dispatch('acceptFriendRequest', $route.params.userId)">
                    Accept
                </button>
                <button v-if="friendButtonText && friendButtonText === 'Accept'"
                        class="py-1 px-3 bg-gray-400 rounded"
                        @click="$store.dispatch('ignoreFriendRequest', $route.params.userId)">
                    Ignore
                </button>
            </div>

        </div>
        <div v-if="status.posts === 'loading'">Loading posts...</div>

        <div v-else-if="posts.length < 1">No posts found. Get started...</div>

        <Post v-else v-for="post in posts.data" :key="post.data.post_id" :post="post" />

    </div>



</template>

<script>
    import Post from '../../components/Post';
    import { mapGetters } from 'vuex';

    export default {
        name: "Show",
        components: {
            Post,
        },


        mounted() {
            this.$store.dispatch('fetchUser', this.$route.params.userId);
            this.$store.dispatch('fetchUserPosts', this.$route.params.userId);
        },

        computed: {
            ...mapGetters({
                user: 'user',
                posts: 'posts',
                status: 'status',
                friendButtonText: 'friendButtonText',
            }),
        }
    }
</script>

<style scoped>

</style>
