<template>
    <Link 
        class="font-mono p-4 flex items-center gap-2"
        :class="{ 'font-bold underline': active }"
    >

        <slot />
    </Link>
</template>

<script>
export default {
    props: {
        active: Boolean,
    },
};
</script>