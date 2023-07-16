<script setup>
import { Head, Link } from '@inertiajs/vue3'
import { useForm } from '@inertiajs/vue3'

defineProps({ 
    success_message: String,
})

const form = useForm({
    org_name: null,
    org_country: null,
    })

</script>


<style scoped>

input[type=text], select {
    width: 100%;
    padding: 12px 20px;
    margin: 8px 0;
    display: inline-block;
    border: 1px solid #ccc;
    border-radius: 4px;
    box-sizing: border-box;
  }
  
  input[type=submit] {
    width: 100%;
    background-color: #4CAF50;
    color: white;
    padding: 14px 20px;
    margin: 8px 0;
    border: none;
    border-radius: 4px;
    cursor: pointer;
  }
  
  input[type=submit]:hover {
    background-color: #45a049;
  }
  
  .form {
    border-radius: 5px;
    background-color: #f2f2f2;
    padding: 20px;
  }

  .section {
    max-width: max-content;
  }

.content {
  font-size: 1.8rem;
}

.error{
  color: red;
}
</style>

<template>
  <Head title="Create" />
  <div class="section">
      <h1 class="header">Create Item</h1>
      <Link href="/orgs">Listing</Link>
      <p class="content">This page provide your form to test registration (POST)!</p>
      <div class="row">{{ $page.props.success_message }}</div>

    
    <form @submit.prevent="form.post('/orgs/save')">
      <div class="row">
      </div>
        <div class="row">
            <label for="org_name">Name:</label>
            <input id="org_name" v-model="form.org_name"  type="text" placeholder="Name..."/>
            <span class="error" v-if="form.errors.org_name">{{ form.errors.org_name }}</span>
        </div>
        <div class="row">
          <label for="org_country">Country:</label>
            <input id="org_country" v-model="form.org_country"  type="text" placeholder="Country..."/>
            <span class="error" v-if="form.errors.org_country">{{ form.errors.org_country }}</span>
        </div>
      <div class="row">
        <button type="submit" :disabled="form.processing">Save</button>
      </div>
    </form>
  </div>
</template>
