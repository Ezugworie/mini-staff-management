<template>
    <inertia-link :href="href" :class="classes">
        <slot></slot>
    </inertia-link>
</template>

<script>
    export default {
        props: ['href', 'active'],

        computed: {
            classes() {
                return this.active
                            ? 'text-red-800 bg-gray-200 transition duration-150 ease-in-out'
                            : 'text-gray-200 bg-red-800 transition duration-150 ease-in-out'
            }
        }
    }
</script>
