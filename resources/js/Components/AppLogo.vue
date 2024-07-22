<template>
    <img :src="LogoSrc" alt="CMTS" class="w-20">
</template>

<script>
export default {
    name: 'AppLogo',
    computed: {
        LogoSrc() {
            return '/logo.png';
        }
    }
}
</script>