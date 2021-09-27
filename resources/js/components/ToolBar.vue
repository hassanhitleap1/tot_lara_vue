<template>
    <div>
        <v-card class="mx-auto overflow-hidden"  height="400" >
            <v-app-bar color="deep-purple" dark >
                <v-app-bar-nav-icon @click="drawer = true"></v-app-bar-nav-icon>
                <v-toolbar-title>Title</v-toolbar-title>
            </v-app-bar>
            <v-navigation-drawer  v-model="drawer"  absolute temporary >
                <v-list  nav dense >
                    <v-list-item-group  v-model="group"  active-class="deep-purple--text text--accent-4" >
                        <v-list-item>
                            <v-list-item-icon>
                                <v-icon>mdi-home</v-icon>
                            </v-list-item-icon>
                            <router-link :to="{ name: 'home'}"> <v-list-item-title>Home</v-list-item-title></router-link>
                        </v-list-item>

                        <v-list-item>
                            <v-list-item-icon>
                                <v-icon>mdi-account</v-icon>
                            </v-list-item-icon>
                            <router-link :to="{ name: 'login'}"> <v-list-item-title>login</v-list-item-title></router-link>

                        </v-list-item>
                    </v-list-item-group>
                </v-list>
            </v-navigation-drawer>
        </v-card>
    </div>

</template>

<script>

    export default {
        name: "ToolBar",
        data: () => ({
            drawer: false,
            group: null,
        }),
    }
</script>

<style scoped>

</style>
