<template>
<div class="row">
    <div class="col-md-2">
        <label for="simbahanurl">Enter Simbahan URL</label>
    </div>
    <div class="col-md-4">
        <div class="input-group">
            <div class="input-group-btn">
                <button type="button" class="btn btn-danger">http://</button>
            </div>
            <input v-model="simbahanUrl" id="simbahanurl" type="text" class="form-control" />
        </div>
    </div>
    <div class="col-md-2">
        <button class="btn btn-primary" @click="OnBtnFindChurchClicked">Find Church</button>
    </div>
</div>
</template>

<script>
export default {
    data() {
        return {
            simbahanUrl: ''
        }
    },
    methods: {
        OnBtnFindChurchClicked() {
            let simbahanId = this.simbahanUrl;

            if (this.simbahanUrl.match('=') != null) {
                simbahanId = this.simbahanUrl.split('=')[1];
            } else if (this.simbahanUrl.match('/') != null) {
                simbahanId = this.simbahanUrl.split('/')[this.simbahanUrl.split('/').length - 1];
            }

            axios.get(base_url + '/churches/' + simbahanId)
                    .then(response => {
                        this.$emit('church-found', response.data);
                    });
        }
    }
}
</script>