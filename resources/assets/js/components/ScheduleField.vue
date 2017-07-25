<template>
<div>
<label v-show="!isEditing">{{ editSchedule }}</label>
<a v-if="isCreating" v-show="!isEditing" href="#" @click.prevent="OnBtnAddClicked">
    <span class="fa fa-plus-circle"></span>
</a>
<a v-else v-show="!isEditing" href="#" @click.prevent="OnBtnEditClicked">
    <span class="fa fa-edit"></span>
</a>
<div v-show="isEditing" class="input-group input-group-sm">
    <input type="text" class="form-control" v-model="editSchedule">
    <span class="input-group-btn">
        <button @click.prevent="OnBtnSaveClicked" type="button" class="btn btn-info btn-flat">Save</button>
    </span>
</div>
</div>
</template>

<script>
export default {
    props: ['schedule'],
    data() {
        return {
            isEditing: false,
            isCreating: this.editSchedule == '',
            editSchedule: ''
        }
    },
    mounted() {
        this.editSchedule = this.schedule;
        this.isCreating = this.editSchedule == '';
    },
    methods: {
        OnBtnAddClicked() {
            this.isEditing = true;
        },
        OnBtnSaveClicked() {
            this.$emit('schedule-updated', this.editSchedule);
            this.isEditing = false;
            this.isCreating = this.editSchedule == '';
        },
        OnBtnEditClicked() {
            this.isEditing = true;
        }
    }
}
</script>