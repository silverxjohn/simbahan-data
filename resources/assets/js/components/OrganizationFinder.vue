<template>
<div class="row">
    <div class="col-md-2">
        <label for="organizationurl">Enter Organization URL</label>
    </div>
    <div class="col-md-4">
        <div class="input-group">
            <div class="input-group-btn">
                <button type="button" class="btn btn-danger">http://</button>
            </div>
            <input v-model="organizationUrl" id="organizationurl" type="text" class="form-control" />
        </div>
    </div>
    <div class="col-md-2">
        <button class="btn btn-primary" @click="OnBtnFindOrganizationClicked">Find Organization</button>
    </div>
</div>
</template>

<script>
export default {
    data() {
        return {
            organizationUrl: ''
        }
    },
    methods: {
        OnBtnFindOrganizationClicked() {
            let organizationId = this.organizationUrl;

            if (this.organizationUrl.match('=') != null) {
                organizationId = this.organizationUrl.split('=')[1];
            } else if (this.organizationUrl.match('/') != null) {
                organizationId = this.organizationUrl.split('/')[this.organizationUrl.split('/').length - 1];
            }

            axios.get(base_url + '/organizations/' + organizationId)
                    .then(response => {
                        this.$emit('organization-found', response.data);
                    });
        }
    }
}
</script>