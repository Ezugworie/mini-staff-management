<template>
  <app-layout>
        <template #header>
            <h2 class="font-semibold text-xl text-gray-800 leading-tight">
                Employees
            </h2>
        </template>

        <div class="py-12">
            <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
                <button type="button" class="bg-green-400 rounded p-2 hover:shadow-md border mb-3 focus:outline-none">Create new Staff</button>
                <div class="bg-white overflow-hidden shadow-xl sm:rounded-lg">
                    Employees Works
                </div>
            </div>
        </div>
    </app-layout>
</template>

<script>
    import AppLayout from '@/Layouts/AppLayout'
    import Button from '@/Jetstream/Button'

    export default {
        components: {
            AppLayout,
            Button,
        },
    }
</script>