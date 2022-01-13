<template>
<div>
     <div class="form-group row">
        <label class="control-label col-md-3">Région
            <span class="required"> * </span>
        </label>
        <div class="col-md-5">
            <select class="form-select input-height" name="selectType">
                <option value="">Select...</option>
                <option v-for="(region) in villes.admin_name" :key="region.admin_name" :value="region.admin_name">{{region.admin_name}}</option>
            </select>
        </div>
    </div>
    <div class="form-group row">
        <label class="control-label col-md-3">Ville
            <span class="required"> * </span>
        </label>
        <div class="col-md-5">
            <select class="form-select input-height" name="selectType">
                <option value="">Select...</option>
                <option v-for="ville in villes" :key="ville.ville" :value="ville.ville">{{ville.ville}}</option>
            </select>
        </div>
    </div>
</div>
</template>

<script>
    export default {
        mounted() {
            //this.regions = this.villes.admin_name;
        },
        data(){
            return {
            villes:[],
            }
        },
        created(){
            this.getvilles();
        },
        methods:{
            getvilles() {
                axios
                .get('/en/admin/villes')
                .then(resp => this.villes=resp.data)
            }
        }
    }
</script>
