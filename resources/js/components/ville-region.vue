<template>
<div>
     <div class="form-group row">
        <label class="control-label col-md-3">Région
            <span class="required"> <span class="required"> (* obligatoire) </span> </span>
        </label>
        <div class="col-md-5">
            <select v-model="region" class="form-select input-height" name="selectType">
                <option value="">Select...</option>
                <option v-for="region in regions" :key="region.region" :value="region">{{region.region}}</option>
            </select>
        </div>
    </div>
    <div class="form-group row">
        <label class="control-label col-md-3">Ville
            <span class="required"> <span class="required"> (* obligatoire) </span> </span>
        </label>
        <div class="col-md-5">
            <select class="form-select input-height" name="selectType">
                <option value="">Select...</option>
                <option v-for="ville in villes" v-if="region.id==ville.region" :key="ville.ville" :value="ville.ville">{{ville.ville}}</option>
            </select>
        </div>
    </div>
</div>
</template>

<script>
    export default {
        mounted() {
            //this.regions = this.villes.region;
        },
        data(){
            return {
            regions:[],
            villes:[],
            region:''
            }
        },
        created(){
            this.getvilles();
            this.getregions();
        },
        methods:{
            getvilles() {
                axios
                .get('/en/admin/villes')
                .then(resp => this.villes=resp.data)
            },
            getregions() {
                axios
                .get('/en/admin/regions')
                .then(resp => this.regions=resp.data)
            }
        }
    }
</script>
