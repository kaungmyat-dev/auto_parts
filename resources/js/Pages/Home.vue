<template>
    <Layout>

        <DataTable />
    </Layout>
</template>

<script>
import DataTable from '../Components/DataTable.vue';
import Layout from '../Shared/Layout.vue';

export default {
    components: { Layout, DataTable }
}
</script>