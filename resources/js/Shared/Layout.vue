<template>
    <section>
        <nav class="bg-white">
            <div class="mx-auto max-w-7xl px-2 sm:px-6 lg:px-8">
                <div class="relative flex h-16 items-center justify-between">
                    <div class="flex flex-1 items-center justify-center sm:items-stretch sm:justify-start">
                        <div class="flex flex-shrink-0 items-center">
                            <AppLogo />
                        </div>
                        <div class="hidden sm:ml-6 sm:block">
                            <div class="flex space-x-4">
                                <Nav />
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </nav>
    </section>

    <section class="mx-auto max-w-7xl px-2 sm:px-6 lg:px-8 mt-6">
        <slot />
    </section>
</template>

<script>
import AppLogo from '../Components/AppLogo.vue';
import Nav from './Nav.vue';

export default {
    components: { Nav, AppLogo }
}
</script>