<script setup lang="ts">
import AuthenticatedLayout from '@/Layouts/AuthenticatedLayout.vue';
import { Head } from '@inertiajs/vue3';
import { Button, List, ListItem, ListItemMeta } from 'ant-design-vue'
import 'ant-design-vue/dist/antd.css'



</script>

<template>
    <Head title="Inicio" />

    <AuthenticatedLayout>
        <template #header>
            <h2 class="text-xl font-semibold leading-tight text-gray-800 dark:text-gray-200">Inicio</h2>
        </template>

        <div class="py-12">
            <div class="mx-auto max-w-7xl sm:px-6 lg:px-8">
                <div class="px-6 py-6 overflow-hidden bg-white shadow-sm dark:bg-gray-800 sm:rounded-lg">
                    
                    <Button type="primary">Generar nueva tabla</Button>
                    <h3 class="py-3 text-lg font-semibold leading-tight text-gray-800 dark:text-gray-200">
                        Mi tablas de verdad
                    </h3>
                    <List class="dark:bg-gray-800">
                        <ListItem>
                            <ListItemMeta title="Titulo" description="Descripcion" />
                        </ListItem>
                    </List>
                </div>
                
            </div>

         
        </div>
    </AuthenticatedLayout>
</template>
