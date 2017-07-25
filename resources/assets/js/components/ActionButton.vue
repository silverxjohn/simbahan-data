<template>
<a href="#" data-toggle="tooltip" :data-title="tooltip" :data-id="id" @click.prevent="OnActionClick">
    <i :class="iconClass"></i>
</a>
</template>

<script>
    export default {
        props: ['tooltip', 'icon', 'id'],
        computed: {
            iconClass() {
                return 'fa fa-' + this.icon;
            }
        },
        methods: {
            OnActionClick() {
                this.$emit('action-clicked', this.id);
            }
        }
    }
</script>