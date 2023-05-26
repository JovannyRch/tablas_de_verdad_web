<template>
    <div class="min-h-screen flex flex-col sm:justify-center items-center pt-6 sm:pt-0 bg-gray-100">
      <div class="w-full sm:max-w-md mt-6 px-6 py-4 bg-white shadow-md overflow-hidden sm:rounded-lg">
        <Select
        v-model:value="selected"
        :options="users"
        :field-names="{label:'name', value:'id'}"
        filterOption="true"
        optionFilterProp="name"
        mode="multiple"
        placeholder="Please select"
        showArrow
        @change="onChange"
        class="w-full"
        />
      </div>
      <div class="w-full sm:max-w-md mt-6 px-6 py-4 bg-white shadow-md overflow-hidden sm:rounded-lg">
        Selected items' IDs: {{ selected }}
      </div>
    </div>
  </template>
  <script setup>
  import { ref } from 'vue'
  import { Select } from 'ant-design-vue'
  import 'ant-design-vue/dist/antd.css'
  const selected = ref([])
  const props = defineProps({
      users : Object,
  })
  const onChange = (value) => {console.log("Selected items\' IDs: "+value)}
  </script>