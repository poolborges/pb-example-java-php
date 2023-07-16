<script setup>
import { Head, Link } from '@inertiajs/vue3'

defineProps({ 
    orgs: Array,
    success_message: String,
    })
</script>


<style scoped>
th, td {
    padding: 15px;
    text-align: left;
    border-bottom: 1px solid #ddd;
  }

  tr:nth-child(even) {background-color: #f2f2f2;}

  
  tr:hover {background-color: coral;}

  th {
    background-color: #04AA6D;
    color: white;
  }


  .section {
    max-width: max-content;
  }

.content {
  font-size: 1.8rem;
}

</style>

<template>
    <Head title="Organizations" />
    <div class="section">
    <h1>Organizations</h1>
    <Link href="/orgs/create">Create new</Link>
    <p class="content">This page provide the listing!
    </p>

    <div>{{ $page.props.success_message }}</div>

    <table>
        <thead>
            <th>#</th>
            <th>Name</th>
            <th>Country</th>
            <th>...</th>
        </thead>
        <tbody>
            <tr  v-for="org in $page.props.orgs" :key="org.id">
                
                <td>{{ org.id }}</td>
                <td>{{ org.name }}</td>
                <td>{{ org.country }}</td>
                <td></td>
            </tr>
        </tbody>
    </table>
</div>
</template>
