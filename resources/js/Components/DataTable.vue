<template>
    <div class="bg-white rounded">
        <table class="w-full">
            <thead class="border-b h-20">
                <tr class="p-6">
                    <th class="">Device Image</th>
                    <th class="">Description</th>
                    <th class="">Price</th>
                    <th class="">Checkout</th>
                </tr>
            </thead>
            <tbody>
                <tr v-for="(item, index) in items" :key="index" class="h-20 border-b">
                    <td class="flex space-x-4 justify-center"><input type="checkbox">
                        <img :src="item.image" alt="Device Image"
                            class="w-16 h-16 object-cover border rounded-full bg-slate-300">
                    </td>
                    <td class="">{{ item.description }}</td>
                    <td class="">{{ item.price }}</td>
                    <td class="">
                        <button class="">Checkout</button>
                    </td>
                </tr>
            </tbody>
        </table>
    </div>
</template>

<script>
export default {
    data() {
        return {
            items: [
                { image: 'logo.png', description: 'Bulb', price: 500 },
                { image: 'logo.png', description: 'Bamber', price: 500 },
                { image: 'logo.png', description: 'Light', price: 500 },
            ]
        }
    }
}
</script>

<style scoped>
/* Add any additional styling here */
</style>