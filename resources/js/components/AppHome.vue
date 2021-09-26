<template>
    <div>
        <ToolBar />
        <AppFooter />
    </div>
</template>

<script>
    import AppFooter from "./AppFooter";
    import ToolBar from "./ToolBar";
    export default {
        name: "AppHome",
        components: {ToolBar,AppFooter}
    }
</script>

<style scoped>

</style>
