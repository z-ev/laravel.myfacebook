import Vue from 'vue';
import VueRouter from 'vue-router';
import UserShow from "./views/Users/Show";
import NewsFeed from "./views/NewsFeed";

Vue.use(VueRouter);

export default new VueRouter({
    mode: 'history',

    routes: [
        {
            path: '/', name: 'home', component: NewsFeed,
            meta: { title: 'News Feed' }
          },
        {
            path: '/users/:userId', name: 'user.show', component: UserShow,
            meta: {title: 'Profile'}
        },
     ]
});
